<?php

namespace Upmc\SuiviStagiaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Upmc\SuiviStagiaireBundle\Entity\Candidat;
use Upmc\SuiviStagiaireBundle\Form\CandidatType;

class CandidatController extends Controller
{
    public function ajoutCandidatAction()
    {
        $candidat = new Candidat();
        $form = $this->createForm(new CandidatType(), $candidat);
        
        $request = $this->getRequest();
        $form->handleRequest($request);
        
        if($form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($candidat);
            $em->flush();
        }
        
        return $this->render('UpmcSuiviStagiaireBundle::ajoutCandidat.html.twig',array('form'=> $form->createView()));
    }
}
