<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Dompdf\Dompdf;
use App\Entity\Camping;
use App\Repository\CampingRepository;
use App\Repository\ParticipationRepository;


 
class PdfGeneratorController extends AbstractController
{
    #[Route('/pdf/generator/{id}', name: 'app_pdf_generator')]
public function index($id,CampingRepository $campingRepository,ParticipationRepository $participationRepository): Response
    {
        // return $this->render('pdf_generator/index.html.twig', [
        //     'controller_name' => 'PdfGeneratorController',
        // ]);
        $participation = $participationRepository->find($id);
        $idCamping=$participation->getIdCamp();
        $camping = $campingRepository->find($idCamping);

        $data = [
            'camping' => $camping,
            // ...
        ];
        $html =  $this->renderView('pdf_generator/index.html.twig', $data);
        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->render();
         
        return new Response (
            $dompdf->stream('resume', ["Attachment" => false]),
            Response::HTTP_OK,
            ['Content-Type' => 'application/pdf']
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