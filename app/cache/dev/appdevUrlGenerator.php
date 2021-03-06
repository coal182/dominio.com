<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_welcome' => true,
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'Practica1Bundle_homepage' => true,
       'Practica1Bundle_userpage' => true,
       'Practica1Bundle_cursopage' => true,
       'Practica1Bundle_adminpage' => true,
       'Practica1Bundle_deletecurso' => true,
       'Practica1Bundle_editcurso' => true,
       'manage_usuario' => true,
       'manage_usuario_show' => true,
       'manage_usuario_new' => true,
       'manage_usuario_create' => true,
       'manage_usuario_edit' => true,
       'manage_usuario_update' => true,
       'manage_usuario_delete' => true,
       'manage_curso' => true,
       'manage_curso_show' => true,
       'manage_curso_new' => true,
       'manage_curso_create' => true,
       'manage_curso_edit' => true,
       'manage_curso_update' => true,
       'manage_curso_delete' => true,
       'Practica1Bundle_contactopage' => true,
       'Practica1Bundle_enviarmail' => true,
       'Practica1Bundle_nuevaentrada' => true,
       'Practica1Bundle_crearentrada' => true,
       'Practica1Bundle_listarentradas' => true,
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

    private function get_welcomeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getPractica1Bundle_homepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::indexAction',  'name' => 'Cristian',), array (), array (  0 =>   array (    0 => 'text',    1 => '/home',  ),));
    }

    private function getPractica1Bundle_userpageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::userAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/user',  ),));
    }

    private function getPractica1Bundle_cursopageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::cursoAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '-',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/curso',  ),));
    }

    private function getPractica1Bundle_adminpageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::adminAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin',  ),));
    }

    private function getPractica1Bundle_deletecursoRouteInfo()
    {
        return array(array (  0 => 'idcurso',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::deletecursoAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idcurso',  ),  1 =>   array (    0 => 'text',    1 => '/delete',  ),));
    }

    private function getPractica1Bundle_editcursoRouteInfo()
    {
        return array(array (  0 => 'idcurso',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::editcursoAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'idcurso',  ),  1 =>   array (    0 => 'text',    1 => '/edit',  ),));
    }

    private function getmanage_usuarioRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/manage/usuario/',  ),));
    }

    private function getmanage_usuario_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/usuario',  ),));
    }

    private function getmanage_usuario_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/manage/usuario/new',  ),));
    }

    private function getmanage_usuario_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/manage/usuario/create',  ),));
    }

    private function getmanage_usuario_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/usuario',  ),));
    }

    private function getmanage_usuario_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/usuario',  ),));
    }

    private function getmanage_usuario_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/usuario',  ),));
    }

    private function getmanage_cursoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/manage/curso/',  ),));
    }

    private function getmanage_curso_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/curso',  ),));
    }

    private function getmanage_curso_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/manage/curso/new',  ),));
    }

    private function getmanage_curso_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/manage/curso/create',  ),));
    }

    private function getmanage_curso_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/curso',  ),));
    }

    private function getmanage_curso_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/curso',  ),));
    }

    private function getmanage_curso_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manage/curso',  ),));
    }

    private function getPractica1Bundle_contactopageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::contactoAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/contacto',  ),));
    }

    private function getPractica1Bundle_enviarmailRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::enviarmailAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/enviarmail',  ),));
    }

    private function getPractica1Bundle_nuevaentradaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::nuevaentradaAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/nuevaentrada',  ),));
    }

    private function getPractica1Bundle_crearentradaRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::crearentradaAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/crearentrada',  ),));
    }

    private function getPractica1Bundle_listarentradasRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::listarentradasAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/listarentradas',  ),));
    }
}
