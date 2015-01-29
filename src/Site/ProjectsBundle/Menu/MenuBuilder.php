<?php

namespace Site\ProjectsBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\DependencyInjection\ContainerBuilder;

class MenuBuilder extends \Symfony\Component\DependencyInjection\ContainerAware {

    private $factory;
  
    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory) {
        $this->factory = $factory;
    }

    public function createProjectsMenu(Request $request,  $container ) {
        
        $nomsDeRouteDesProjets = [];
     
        if ($container->hasParameter('app.projects.rootsOfProjects')) {
            $nomsDeRouteDesProjets = $container->getParameter('app.projects.rootsOfProjects');
        }
        
        $menu = $this->factory->createItem('root');
           foreach ($nomsDeRouteDesProjets as $route => $projet) {
                $nomDuProjet = $projet['title'];
                $descriptionDuProjet = $projet['description'];
                
                $menu->addChild($nomDuProjet, array('route' => $route, 'label'=> $nomDuProjet));
                
           }

        return $menu;
    }

}
