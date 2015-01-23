<?php

namespace Site\ProjectsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SiteProjectsBundle extends Bundle {

    public static function getRouteCollection($container) {
        /** @var $router \Symfony\Component\Routing\Router */
        $router = $container->get('router');
        /** @var $collection \Symfony\Component\Routing\RouteCollection */
        $collection = $router->getRouteCollection();

        return $collection->all();
    }

}
