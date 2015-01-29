<?php

namespace Site\ProjectsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/projets/jeux")
 */
class GamesController extends Controller {

    /**
     * @Route("/", name="project_games_index")
     * @Template()
     */
    public function indexAction() {

        return $this->render('SiteProjectsBundle:Games:index.html.twig');
    }
    
     /**
     * @Route("/{game_id}/", name="project_games_show")
     * @Template()
     */
    public function showAction($game_id) {
        return $this->render('SiteProjectsBundle:Games:show.html.twig',array('game_id'=>$game_id));
    }

}
