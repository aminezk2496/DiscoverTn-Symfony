<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use App\Entity\Camping;
use App\Repository\CampingRepository;
use App\Repository\ParticipationRepository;
use App\Controller\MaillingController;
use Symfony\Component\HttpFoundation\File\File;



 
class PdfGeneratorController extends AbstractController
{
    #[Route('/pdf/generator/{id}', name: 'app_pdf_generator')]
public function index($id,CampingRepository $campingRepository,ParticipationRepository $participationRepository,MaillingController $mailingController): Response
    {
        // return $this->render('pdf_generator/index.html.twig', [
        //     'controller_name' => 'PdfGeneratorController',
        // ]);

        $participation = $participationRepository->find($id);
        $idCamping=$participation->getIdCamp();
        $camping = $campingRepository->find($idCamping);
        
        $campname = $camping->getNom();
        $Date  = $camping->getDateDebut();
        $Prix = $camping->getPrix();
        $lieux = $camping->getLieux();
        
        $participation->setEtat('Confirmer');
            
        $participationRepository->save($participation, true);

        $data = [
            'imageSrc'  => $this->imageToBase64($this->getParameter('kernel.project_dir') . '/public/img/part.png'),
            'camping' => $camping,
        ];
        $html =  $this->renderView('pdf_generator/index.html.twig', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();
        
//$pdfContent = $dompdf->output(); // Get the PDF content
//$pdfFile = new File($pdfContent); // Create a new File object from the content
        /*  $output = $dompdf->output();
if ($output) {
   
    return new Response($output, 200, [
        'Content-Type' => 'application/pdf',
        'Content-Disposition' => 'attachment; filename="resume.pdf"',
       ]);
} else {
    echo "An error occurred while generating the PDF file: ";
    exit(1);
}*/
        return new Response (
            $dompdf->stream('resume', ["Attachment" => false]),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf'],
            $mailingController->sendEmail($campname,$Date,$Prix,$lieux) 
        );
       
    }
 
    private function imageToBase64($path) {
        $path = $path;
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        return $base64;
    }
}