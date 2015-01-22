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

        $bundlename = $request->get('_template')->get('bundle');
        $menu = $this->factory->createItem('root');
      
        $menu->addChild('Accueil', array('route' => 'site_home'))->setCurrent($bundlename == 'SiteAccueilBundle');
        $menu->addChild('Contact', array('route' => 'contact'))->setCurrent($bundlename == 'SiteContactBundle');
        $menu->addChild('Projets', array('route' => 'fiche_contact'))->setCurrent($bundlename == 'SiteProjetsBundle');


        return $menu;
    }

}
