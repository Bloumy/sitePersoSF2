<?php

namespace Site\AccueilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/")
 * 
 */
class AccueilController extends Controller
{
     /**
     * @Route("/", name="site_home")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('SiteAccueilBundle:Accueil:index.html.twig');
    }
}
