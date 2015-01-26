<?php

namespace Site\ProjectsBundle\Controller;

use Site\ProjectsBundle\SiteProjectsBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/projets")
 */
class DefaultController extends Controller {

    /**
     * @Route("/", name="projects")
     * @Template()
     */
    public function indexAction() {
        //liste les projets
        $routes = Array();
        $routerDebug = SiteProjectsBundle::getRouteCollection($this->container);

        //par default
        $nomsDeRouteDesProjets = [];
        if ($this->container->hasParameter('app.projects.rootsOfProjects')) {
            $nomsDeRouteDesProjets = $this->container->getParameter('app.projects.rootsOfProjects');
        }



        foreach ($routerDebug as $routeName => $routeAttributes) {
            $afficherEnTantQueProjet = false;
            foreach ($nomsDeRouteDesProjets as $routeName2 => $projet) {

                $nomDuProjet = $projet['title'];
                $descriptionDuProjet = $projet['description'];
                $afficherEnTantQueProjet = preg_match('/^' . $routeName2 . '$/', $routeName);
                if ($afficherEnTantQueProjet) {
                    $routes[$routeName] = $routeAttributes;
                    $routeAttributes->title = $nomDuProjet;
                    $routeAttributes->description = $descriptionDuProjet;
                }
            }
        }


        return $this->render('SiteProjectsBundle:Default:index.html.twig', array('routes' => $routes));
    }

}
