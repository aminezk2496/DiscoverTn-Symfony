<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Endroid\QrCode\Color\Color;
use Endroid\QrCode\Encoding\Encoding;
use Endroid\QrCode\ErrorCorrectionLevel\ErrorCorrectionLevelLow;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Label\Label;
use Endroid\QrCode\Logo\Logo;
use Endroid\QrCode\Writer\PngWriter;
use Endroid\QrCode\Label\Font\NotoSans;
use App\Entity\Participation;

 
class QrCodeGeneratorController extends AbstractController
{
    #[Route('/qr-codes/{id}', name: 'app_qr_codes')]
    public function index($id,Participation $participation): Response
    {    
        $ticketRef = $participation->getRefp();
        $ticketName = $participation->getNom();
        $ticketAmount = $participation->getMontant();
        $ticketDate = $participation->getDateParti()->format('Y-m-d');;
        $writer = new PngWriter();
    $qrCode = QrCode::create(sprintf('Reference: %s, Name: %s, Amount: %s, Date: %s',$ticketRef, $ticketName, $ticketAmount, $ticketDate))
        ->setEncoding(new Encoding('UTF-8'))
        ->setErrorCorrectionLevel(new ErrorCorrectionLevelLow())
        ->setSize(120)
        ->setMargin(0)
        ->setForegroundColor(new Color(0, 0, 0))
        ->setBackgroundColor(new Color(255, 255, 255));        
    $label = Label::create('')->setFont(new NotoSans(8));

    $qrCodes = [];
    $qrCodes['simple'] = $writer->write(
                            $qrCode,
                            null,
                            $label->setText('Ticket')
                        )->getDataUri();

    return $this->render('qr_code_generator/index.html.twig', $qrCodes);
    }
}
