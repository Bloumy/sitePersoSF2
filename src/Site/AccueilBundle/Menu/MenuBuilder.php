<?php

namespace Site\AccueilBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder extends \Symfony\Component\DependencyInjection\ContainerAware {

    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory) {
        $this->factory = $factory;
    }

    public function createMainMenu(Request $request) {
        
        $routeName = $request->get('_route');


        $menu = $this->factory->createItem('root');
      
        $menu->addChild('Accueil', array('route' => 'site_home'))->setCurrent($routeName == 'site_home');
        $menu->addChild('Contact', array('route' => 'contact'))->setCurrent($routeName == 'contact');
        $menu->addChild('Projets (contact_fiche pour le moment)', array('route' => 'fiche_contact'))->setCurrent($routeName == 'fiche_contact');


        return $menu;
    }

}
