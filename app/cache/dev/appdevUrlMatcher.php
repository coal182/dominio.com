<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // Practica1Bundle_homepage
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::indexAction',  'name' => 'Cristian',  '_route' => 'Practica1Bundle_homepage',);
        }

        // Practica1Bundle_userpage
        if (0 === strpos($pathinfo, '/user') && preg_match('#^/user/(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::userAction',)), array('_route' => 'Practica1Bundle_userpage'));
        }

        // Practica1Bundle_cursopage
        if (0 === strpos($pathinfo, '/curso') && preg_match('#^/curso\\-(?P<name>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::cursoAction',)), array('_route' => 'Practica1Bundle_cursopage'));
        }

        // Practica1Bundle_adminpage
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::adminAction',  '_route' => 'Practica1Bundle_adminpage',);
        }

        // Practica1Bundle_deletecurso
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<idcurso>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::deletecursoAction',)), array('_route' => 'Practica1Bundle_deletecurso'));
        }

        // Practica1Bundle_editcurso
        if (0 === strpos($pathinfo, '/edit') && preg_match('#^/edit/(?P<idcurso>[^/]+?)$#xs', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::editcursoAction',)), array('_route' => 'Practica1Bundle_editcurso'));
        }

        if (0 === strpos($pathinfo, '/manage/usuario')) {
            // manage_usuario
            if (rtrim($pathinfo, '/') === '/manage/usuario') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'manage_usuario');
                }
                return array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::indexAction',  '_route' => 'manage_usuario',);
            }

            // manage_usuario_show
            if (preg_match('#^/manage/usuario/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::showAction',)), array('_route' => 'manage_usuario_show'));
            }

            // manage_usuario_new
            if ($pathinfo === '/manage/usuario/new') {
                return array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::newAction',  '_route' => 'manage_usuario_new',);
            }

            // manage_usuario_create
            if ($pathinfo === '/manage/usuario/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_manage_usuario_create;
                }
                return array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::createAction',  '_route' => 'manage_usuario_create',);
            }
            not_manage_usuario_create:

            // manage_usuario_edit
            if (preg_match('#^/manage/usuario/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::editAction',)), array('_route' => 'manage_usuario_edit'));
            }

            // manage_usuario_update
            if (preg_match('#^/manage/usuario/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_manage_usuario_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::updateAction',)), array('_route' => 'manage_usuario_update'));
            }
            not_manage_usuario_update:

            // manage_usuario_delete
            if (preg_match('#^/manage/usuario/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_manage_usuario_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\UsuarioController::deleteAction',)), array('_route' => 'manage_usuario_delete'));
            }
            not_manage_usuario_delete:

        }

        if (0 === strpos($pathinfo, '/manage/curso')) {
            // manage_curso
            if (rtrim($pathinfo, '/') === '/manage/curso') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'manage_curso');
                }
                return array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::indexAction',  '_route' => 'manage_curso',);
            }

            // manage_curso_show
            if (preg_match('#^/manage/curso/(?P<id>[^/]+?)/show$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::showAction',)), array('_route' => 'manage_curso_show'));
            }

            // manage_curso_new
            if ($pathinfo === '/manage/curso/new') {
                return array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::newAction',  '_route' => 'manage_curso_new',);
            }

            // manage_curso_create
            if ($pathinfo === '/manage/curso/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_manage_curso_create;
                }
                return array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::createAction',  '_route' => 'manage_curso_create',);
            }
            not_manage_curso_create:

            // manage_curso_edit
            if (preg_match('#^/manage/curso/(?P<id>[^/]+?)/edit$#xs', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::editAction',)), array('_route' => 'manage_curso_edit'));
            }

            // manage_curso_update
            if (preg_match('#^/manage/curso/(?P<id>[^/]+?)/update$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_manage_curso_update;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::updateAction',)), array('_route' => 'manage_curso_update'));
            }
            not_manage_curso_update:

            // manage_curso_delete
            if (preg_match('#^/manage/curso/(?P<id>[^/]+?)/delete$#xs', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_manage_curso_delete;
                }
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\CursoController::deleteAction',)), array('_route' => 'manage_curso_delete'));
            }
            not_manage_curso_delete:

        }

        // Practica1Bundle_contactopage
        if ($pathinfo === '/contacto') {
            return array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::contactoAction',  '_route' => 'Practica1Bundle_contactopage',);
        }

        // Practica1Bundle_enviarmail
        if ($pathinfo === '/enviarmail') {
            return array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::enviarmailAction',  '_route' => 'Practica1Bundle_enviarmail',);
        }

        // Practica1Bundle_nuevaentrada
        if ($pathinfo === '/nuevaentrada') {
            return array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::nuevaentradaAction',  '_route' => 'Practica1Bundle_nuevaentrada',);
        }

        // Practica1Bundle_crearentrada
        if ($pathinfo === '/crearentrada') {
            return array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::crearentradaAction',  '_route' => 'Practica1Bundle_crearentrada',);
        }

        // Practica1Bundle_listarentradas
        if ($pathinfo === '/listarentradas') {
            return array (  '_controller' => 'Practicas\\Bundle\\Practica1Bundle\\Controller\\DefaultController::listarentradasAction',  '_route' => 'Practica1Bundle_listarentradas',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
