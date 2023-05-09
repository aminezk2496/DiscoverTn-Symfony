<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\CampingRepository;
use App\Repository\ParticipationRepository;
use App\Entity\Camping;
use App\Entity\Participation;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\SerializerInterface;
        

class SortieMobileController extends AbstractController
{
    #[Route('/ajoutCampingMobile', name:'ajout_Camping_mobile', methods:["GET"])]
    public function ajoutCamping(Request $request,CampingRepository $campingRepository): JsonResponse
    {
        $camping = new Camping();
        //$date = new \DateTime('now');
        $urlimage = $request->query->get("imagec");
        $image = $request->query->get("image");
        $periode = $request->query->get("periode");     
        $prix = $request->query->get("prix");
        $description = $request->query->get("description");
        $place = $request->query->get("nbr_place");
        $lieux = $request->query->get("lieux"); 
        $nom = $request->query->get("nom");


        $camping->setNom($nom);
        $camping->setDateDebut(new \DateTime('now'));
        $camping->setDateFin(new \DateTime('now'));
        $camping->setPrix(floatval($prix));
        $camping->setLieux($lieux);
        $camping->setNbrPlace(intval($place));
        $camping->setImagec($urlimage);
        $camping->setImage($image);
        $camping->setDescription($description);
        $camping->setPeriode(intval($periode));

        $campingRepository->save($camping, true);

        return new JsonResponse("camping a ete ajouter avec succes");
    }

    #[Route('/afficherCampingMobile', name:'afficher_Camping_mobile', methods:["GET"])]
    public function afficherCamping(CampingRepository $campingRepository): JsonResponse
    {
        $campings = $campingRepository->findAll();
        $jsonData = [];
        foreach ($campings as $camping) {
             $jsonData[] = [
                'id_Camping' => $camping->getIdCamping(),
                'dateDebut' => $camping->getDateDebut(),
                'dateFin' => $camping->getDateFin(),
                'periode' => $camping->getPeriode(),
                'prix' => $camping->getPrix(),
                'description' => $camping->getDescription(),
                'imagec' => $camping->getImagec(),
                'nbr_place' => $camping->getNbrPlace(),
                'lieux' => $camping->getLieux(), 
                'Nom' => $camping->getNom(),
                
            ];
        }

        return new JsonResponse($jsonData);
    }

  
    #[Route('/supprimerCampingMobile/{id}', name:'supprimer_Camping_mobile', methods:["GET"])]
    public function supprimerCamping(int $id, CampingRepository $campingRepository): JsonResponse
    {
        $camping = $campingRepository->find($id);

        if (!$camping) {
            return new JsonResponse("id camping invalide", 404);
        }

        $campingRepository->remove($camping,true);


        return new JsonResponse("camping a ete supprimer avec succes");
    }
 
    #[Route('/modifierCampingMobile/{id}/', name:'modifier_Camping_mobile', methods:["GET"])]
    public function modifierCamping($id ,Request $request, CampingRepository $campingRepository): JsonResponse
    {
        $camping = $campingRepository->find($id);

        if (!$camping) {
            return new JsonResponse("id camping invalide", 404);
        }
        
        
        //$dateDebut = $request->query->get("dateDebut");
        //$dateFin = $request->query->get("dateFin");
        $urlimage = $request->query->get("imagec");
        $periode = $request->query->get("periode");
        $prix = $request->query->get("prix");
        $description = $request->query->get("description");
        $place = $request->query->get("nbr_place");
        $lieux = $request->query->get("lieux"); 
        $nom = $request->query->get("nom");

        $camping->setNom($nom);
        //$camping->setDateDebut($dateDebut);
        //$camping->setDateFin($dateFin);
        $camping->setPrix(floatval($prix));
        $camping->setLieux($lieux);
        $camping->setNbrPlace(intval($place));
        $camping->setImagec($urlimage);
        $camping->setDescription($description);
        $camping->setPeriode(intval($periode));

        $campingRepository->save($camping, true);

        return new JsonResponse("camping a ete modifier avec succes");
    }

    /**
     * @Route("/ajoutParticipationMobile/{id}", name="ajout_Participation_mobile", methods={"GET"})
     * @throws ExceptionInterface
     */
    public function ajoutParticipation(int $id,Request $request, CampingRepository $campingRepository, ParticipationRepository $ParticipationRepository): JsonResponse
    {
        $serializer = $this->get('serializer');
        $participation = new Participation();
        $camping = $campingRepository->find($id);
        
        if (!$camping) {
            throw $this->createNotFoundException('La camping n\'existe pas.');
        }
        
        $nombre = intval($participationRepository->count([]));
        $participation->setDateParti(new \DateTime('now'));
        $participation->setNom($camping->getNom());
        $participation->setMontant($camping->getPrix());
        $participation->setEtat("En Attend");
        $participation->setRefp("PUser12023");
        $participation->setIdClient(12);
        $participation->setNombre($nombre);
        $participation->setIdCamp($camping);
        $formatted=$serializer->normalize("camping a été ajouté avec succès");

        return new JsonResponse($formatted);
    }

    /**
     * @Route("/afficherParticipationMobile", name="afficher_participation_mobile", methods={"GET"})
     */
    public function affichageParticipation(ParticipationRepository $participationRepository): JsonResponse
    {
        $participation = $participationRepository->findAll();
        $jsonData = array();
        $prd = array();
        $i = 0;
        foreach ($participation as $p) {
            $prd = array(
                'id' => $p->getIdParti(),
                'refp' => $p->getRefp(),
                'nombre' => $p->getNombre(),
                'montant'=>$p->getMontant(),
                'etat'=>$p->getEtat(),
                'dateParti'=>$p->getDateParti(),
                'nom'=>$p->getNom()
            );
            $jsonData[$i++] = $prd;
        }
        return new JsonResponse($jsonData);
    }

    /**
     * @Route("/supprimerCommentaireMobile/{id}", name="supprimer_commentaire_mobile", methods={"DELETE"})
     */
    public function supprimerCommentaire(int $id, ParticipationRepository $participationRepository): JsonResponse
    {
        $participation=$participationRepository->find($id);
        if($participation!=null){
            $participationRepository->remove($participation,true);
            $formatted = "participation a été supprimé avec succès";
            return new JsonResponse($formatted);
        }
        $formatted = "L'ID du participation est invalide";
        return new JsonResponse($formatted, Response::HTTP_BAD_REQUEST);
    }
    /**
     * @Route("/modifierCommentaireMobile/{id}", name="modifier_commentaire_mobile", methods={"PUT"})
     */
    public function modifierCommentaire(Request $request, int $id, ParticipationRepository $participationRepository): JsonResponse
    {
        $serializer = $this->get('serializer');
        $contenu = $request->request->get("contenu");
        $participation = $participationRepository->find($id);
        if (!$participation) {
            throw $this->createNotFoundException('Le participation n\'existe pas.');
        }
        $participation->setContenu($contenu);
        $participationRepository->save($participation);
        return new JsonResponse("participation a ete modifier avec succes");


    }
}
