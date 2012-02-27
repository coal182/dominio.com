<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = urldecode($pathinfo);

        // Practica1Bundle_homepage
        if (0 === strpos($pathinfo, '/static') && preg_match('#^/static/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'Practica1Bundle_homepage'));
        }

        // Practica1Bundle_userpage
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::userAction',)), array('_route' => 'Practica1Bundle_userpage'));
        }

        // Practica1Bundle_cursopage
        if (0 === strpos($pathinfo, '/curso') && preg_match('#^/curso\\-(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::cursoAction',)), array('_route' => 'Practica1Bundle_cursopage'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
