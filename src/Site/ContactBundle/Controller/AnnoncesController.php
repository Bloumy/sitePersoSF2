<?php

namespace Site\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/contact")
 */
class AnnoncesController extends Controller
{
    /**
     * @Route("/annonces", name="annonces_contact")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('SiteContactBundle:Annonces:index.html.twig', array());
    }
}
