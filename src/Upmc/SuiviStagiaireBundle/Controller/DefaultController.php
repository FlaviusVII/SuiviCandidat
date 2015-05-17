<?php

namespace Upmc\SuiviStagiaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UpmcSuiviStagiaireBundle::index.html.twig');
    }
}
