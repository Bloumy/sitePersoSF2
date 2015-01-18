<?php

namespace Site\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MapController extends Controller
{
    /**
     * @Route("/contact", name="site_contact")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('SiteContactBundle:Map:index.html.twig', array());
    }
}
