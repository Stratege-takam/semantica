<?php

namespace Web\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function indexAction()
    {
        return $this->redirect($this->generateUrl('main_homepage'));
        //return $this->render('AppBundle:Default:index.html.twig');
    }
}
