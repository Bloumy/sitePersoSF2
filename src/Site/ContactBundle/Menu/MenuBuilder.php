<?php

namespace Site\ContactBundle\Menu;
use Knp\Menu\MenuItem;
use Knp\Menu\FactoryInterface;
use Symfony\Component\HttpFoundation\Request;

class MenuBuilder extends \Symfony\Component\DependencyInjection\ContainerAware
{
    private $factory;

    /**
     * @param FactoryInterface $factory
     */
    public function __construct(FactoryInterface $factory)
    {
        $this->factory = $factory;
    }

    public function createMainMenu(Request $request)
    {
        $menu = $this->factory->createItem('root');

        $menu->addChild('Fiche', array('route' => 'fiche_contact'));
        $menu->addChild('Carte', array('route' => 'map_contact'));
        $menu->addChild('Annonces', array('route' => 'annonces_contact'));
       

        return $menu;
    }
}
