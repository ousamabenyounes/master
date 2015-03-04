<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = rawurldecode($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
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
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/hello')) {
            // testing_testing_default_index
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'testing_testing_default_index')), array (  '_controller' => 'testing\\testingBundle\\Controller\\DefaultController::indexAction',));
            }

            // users_usermanage_default_index
            if (preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'users_usermanage_default_index')), array (  '_controller' => 'Users\\UserManageBundle\\Controller\\DefaultController::indexAction',));
            }

        }

        // _admin
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_admin');
            }

            return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::indexAction',  '_route' => '_admin',);
        }

        // _loginas
        if (0 === strpos($pathinfo, '/loginas') && preg_match('#^/loginas(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_loginas')), array (  'id' => NULL,  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::laginasAction',));
        }

        // _dashboard
        if ($pathinfo === '/dashboard') {
            return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::dashboardAction',  '_route' => '_dashboard',);
        }

        // resellerinfo
        if (0 === strpos($pathinfo, '/manage_reseller') && preg_match('#^/manage_reseller(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'resellerinfo')), array (  'id' => NULL,  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::manage_resellerAction',));
        }

        if (0 === strpos($pathinfo, '/reseller')) {
            // _resellerlist
            if ($pathinfo === '/resellerlist') {
                return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::resellerlistAction',  '_route' => '_resellerlist',);
            }

            // _resellers
            if ($pathinfo === '/resellers') {
                return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::resellersAction',  '_route' => '_resellers',);
            }

        }

        // checkusername
        if ($pathinfo === '/checkusername') {
            return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::checkusernameAction',  '_route' => 'checkusername',);
        }

        // permission
        if (0 === strpos($pathinfo, '/permission') && preg_match('#^/permission(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'permission')), array (  'id' => NULL,  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::permissionAction',));
        }

        // _logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::logoutAction',  '_route' => '_logout',);
        }

        // _addaccount
        if (0 === strpos($pathinfo, '/addaccount') && preg_match('#^/addaccount(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_addaccount')), array (  'id' => NULL,  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::addaccountAction',));
        }

        // _agentinfo
        if (0 === strpos($pathinfo, '/manage_agent') && preg_match('#^/manage_agent(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_agentinfo')), array (  'id' => NULL,  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::manage_agentAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            // account_setting
            if (0 === strpos($pathinfo, '/account_setting') && preg_match('#^/account_setting(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_setting')), array (  'id' => NULL,  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::account_settingAction',));
            }

            if (0 === strpos($pathinfo, '/agent')) {
                // _agentlist
                if ($pathinfo === '/agentlist') {
                    return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::agentlistAction',  '_route' => '_agentlist',);
                }

                // _agents
                if ($pathinfo === '/agents') {
                    return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::agentsAction',  '_route' => '_agents',);
                }

            }

        }

        // _inactive_user
        if ($pathinfo === '/inactive_user') {
            return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::inactive_userAction',  '_route' => '_inactive_user',);
        }

        if (0 === strpos($pathinfo, '/account')) {
            // _accountlist
            if ($pathinfo === '/accountlist') {
                return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::accountlistAction',  '_route' => '_accountlist',);
            }

            // _accounts
            if ($pathinfo === '/accounts') {
                return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::accountsAction',  '_route' => '_accounts',);
            }

        }

        // _inactive_account
        if ($pathinfo === '/inactive_account') {
            return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::inactive_accountAction',  '_route' => '_inactive_account',);
        }

        // _pagetheme
        if ($pathinfo === '/theme') {
            return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::themeAction',  '_route' => '_pagetheme',);
        }

        // manage_signature
        if (0 === strpos($pathinfo, '/manage_signature') && preg_match('#^/manage_signature(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'manage_signature')), array (  'id' => NULL,  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::manage_signatureAction',));
        }

        // signatures
        if ($pathinfo === '/signatures') {
            return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::signaturesAction',  '_route' => 'signatures',);
        }

        // inactive_signature
        if ($pathinfo === '/inactive_signature') {
            return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::inactive_signatureAction',  '_route' => 'inactive_signature',);
        }

        // password
        if ($pathinfo === '/forgot_password') {
            return array (  '_controller' => 'Users\\UserManageBundle\\Controller\\UserManageController::forgot_passwordAction',  '_route' => 'password',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
