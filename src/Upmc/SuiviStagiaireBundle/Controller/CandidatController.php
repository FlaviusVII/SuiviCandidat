<?php

namespace Upmc\SuiviStagiaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Upmc\SuiviStagiaireBundle\Entity\Candidat;
use Upmc\SuiviStagiaireBundle\Form\CandidatType;

class CandidatController extends Controller {

    public function listCandidatAction() {
         $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("\Upmc\SuiviStagiaireBundle\Entity\Candidat");

        $listCandidat = $repository->findAll();

        return $this->render('UpmcSuiviStagiaireBundle:candidat:listCandidat.html.twig', array('candidats' => $listCandidat));
    }
    
    public function ajoutCandidatAction() {
        $candidat = new Candidat();
        $form = $this->createForm(new CandidatType(), $candidat);

        $request = $this->getRequest();
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($candidat);
            $em->flush();
            return $this->redirect($this->generateUrl('upmc_suivi_stagiaire_accueil'));
        }

        return $this->render('UpmcSuiviStagiaireBundle:candidat:ajoutCandidat.html.twig', array('form' => $form->createView()));
    }

    public function modifCandidatAction($id) {
        $em = $this->getDoctrine()->getManager();
        $repository = $em->getRepository("\Upmc\SuiviStagiaireBundle\Entity\Candidat");

        $candidat = $repository->find($id);
        
        $form = $this->createForm(new CandidatType(), $candidat);

        $request = $this->getRequest();
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($candidat);
            $em->flush();
            return $this->redirect($this->generateUrl('upmc_suivi_stagiaire_accueil'));
        }

        return $this->render('UpmcSuiviStagiaireBundle:candidat:modifCandidat.html.twig', array('candidat' => $candidat));
    }

}
