<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appprodUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       'Practica1Bundle_homepage' => true,
       'Practica1Bundle_userpage' => true,
       'Practica1Bundle_cursopage' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function getPractica1Bundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/static',  ),));
    }

    private function getPractica1Bundle_userpageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::userAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getPractica1Bundle_cursopageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::cursoAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '-',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/curso',  ),));
    }
}
