<?php

namespace Site\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/contact")
 * 
 */
class FicheController extends Controller {

    /**
     * @Route("/fiche", name="fiche_contact")
     * @Template()
     */
    public function indexAction() {
        return $this->render('SiteContactBundle:Fiche:index.html.twig', array());
    }

}
