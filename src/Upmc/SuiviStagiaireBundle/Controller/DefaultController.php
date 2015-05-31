<?php

namespace Upmc\SuiviStagiaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Upmc\SuiviStagiaireBundle\Entity\Processus;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UpmcSuiviStagiaireBundle::index.html.twig');
    }
    public function ProcessAction($id)
    {
        $em = $this->getDoctrine();
        $process = $em->getRepository('Upmc\SuiviStagiaireBundle\Entity\Processus')->find($id);
        $taches = $process->getTaches();

        return $this->render('UpmcSuiviStagiaireBundle::processDetail.html.twig',array('process'=> $process,'taches'=>$taches));
    }
}
