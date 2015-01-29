<?php

namespace Site\ProjectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/projets")
 */
class MapController extends Controller {

    /**
     * @Route("/showMap", name="project_map")
     * @Template()
     */
    public function showMapAction() {
        return array(
                // ...
        );
    }

}
