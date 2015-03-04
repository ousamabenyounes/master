<?php

namespace Users\UserManageBundle\Controller;

## common features needed in controllers.
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session;

## Including service
use Users\UserManageBundle\DependencyInjection\UsermanageService;

## Including entities
use Users\UserManageBundle\Entity\users;
use Users\UserManageBundle\Entity\resellerlogo;
use Users\UserManageBundle\Entity\signature;
use Users\UserManageBundle\Entity\account;
use Users\UserManageBundle\Entity\state;

## Including forms
use Users\UserManageBundle\Form\ContactType;
use Users\UserManageBundle\Form\ResellerInfo;
use Users\UserManageBundle\Form\companyInfo;
use Users\UserManageBundle\Form\AgentInfo;
use Users\UserManageBundle\Form\ThemeInfo;
use Users\UserManageBundle\Form\signatureinfo;

##Including "@Route" and "@Template" annotations
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * UsermanageController is the main controller file of  UsermanageBundle
 * 
 */
class UserManageController extends Controller {

    /**
     * @Route("/",  name="_admin")
     * @Template()
     * 
     * * Function indexAction();
     * * Purpose: This will be the first function to login screen to the user
     * * Params 
     * *
     */
    public function indexAction(Request $request) {
        
        #Creating login form
        $form = $this->createForm(new ContactType(), 
                                  new users(), ##Passing user entity object
                                  array('action' => $this->generateUrl('_admin'),
                                        'method' => 'POST',
                                        'attr' => array('id' => 'loginform',)
                                        )
                                );

        ## If user post form then check details 
        if ($request->getMethod() == 'POST') {
            try {
                ## Creating service class object
                $usermanage_service = $this->get('usermanage_service');
                ## Validating user
                if ($usermanage_service->validate_user($request, $form)) {                     
                    ## Redirecting user to the dashboard    
                    return $this->redirect($this->generateUrl('_dashboard'));
                }
            } catch (\Exception $e) {
                ## Creating logger class object    
                $logger = $this->get('logger');
                $logger->info($e->getMessage());
                ## Setting error message to show on front end
                $this->get('session')
                        ->getFlashBag()
                        ->add('error', $e->getMessage());

                ## Redirecting user back to login screen
                return $this->redirect($this->generateUrl('_admin'));
            }
        }
        ##Rendering index
        return $this->render('UsersUserManageBundle:UserManage:index.html.twig', array('form' => $form->createView()
                        )
        );
    }## EOF indexAction();

    /**
     * @Route("/loginas/{id}", defaults={"id" = null} ,name = "_loginas")
     * @Template()
     * 
     */
    public function laginasAction(Request $request, $id = null) {

        $session = $request->getSession();  ##Creating session object

        $this->login_user = $this->get('session')->get('exap'); ##Storing session value in variable
        ##Manage Backward compatibility
        if ($id == 'admin') {
            $id = $this->login_user[0]['userid'];
            unset($this->login_user[1], $this->login_user[2]);
        }
        if ($id == 'reseller') {
            $id = $this->login_user[1]['userid'];
            unset($this->login_user[0], $this->login_user[2]);
        }

        if (is_numeric($id)) {
            $entity_manager = $this->getDoctrine()->getManager(); ## Creating E.M. object

            $user_details = $entity_manager->getRepository('UsersUserManageBundle:users')->user_details($id); ## Fetching user details
            ## Creating array with user details
            $test = array('userid' => $user_details[0]['id'],
                'usertype' => $user_details[0]['userType']
            );
            array_push($this->login_user, $test); ##Adding new details in existing array
            $set_session = $this->get('usermanage_service');

            $set_session->setSession($request, $user_details);
        }
        $session->set('exap', $this->login_user); ## Setting new login user array in database
        return $this->redirect($this->generateUrl('_dashboard')); ## Redirecting user to the dashboard
    }

    /**
     * @Route("/dashboard", name = "_dashboard")
     * @Template()        
     *        
     */
    public function dashboardAction(Request $request) {
        $template_params = $this->set_permissions_params(); ## get user permission from session            
        $template_params['usertype'] = $this->get('session')->get('usertype');
        $template_params['account_id'] = $this->get('session')->get('account_id');
        $template_params['id'] = $this->get('session')->get('userid');
        $template_params['account_logo'] = $this->get('session')->get('account_logo');
        $template_params['bg_color'] = $this->get('session')->get('bg_color');
        $template_params['font_color'] = $this->get('session')->get('font_color');
        $template_params['font_size'] = $this->get('session')->get('font_size');
        $this->login_user = $this->get('session')->get('exap');

        if (isset($this->login_user[0])) {
            $template_params['back_to_admin'] = true;
        }
        if (isset($this->login_user[1])) {
            $template_params['back_to_reseller'] = true;
        }
        echo '<pre>===';
        print_r($template_params);
        echo '</pre>===';
        return $this->render('UsersUserManageBundle:UserManage:dashboard.html.twig', $template_params
        );
    }

## EOF dashboardAction();








    /*
      set_permissions_params() used to get logged in user's permission from database
      @Param: N/A

      @return array()
     */

    public function set_permissions_params() {

        $user_permissions = $this->get('session')->get('user_permissions'); ## Get user permission from database

        if (empty($user_permissions)) { ## If user permission is empty return false
            return false;
        }

        $module_list = $this->get('usermanage_service');
        $modules = $module_list->module_list(); ## Get available module list.
        foreach ($user_permissions as $key => $value) {
            $array_key_value = str_replace("'", '', $key);
            if (in_array($array_key_value, $modules)) {
                $template_params[$array_key_value] = 1;
            }
            foreach ($value as $user_permission_key => $user_permission_value) {
                $key_value = str_replace("'", '', $key . '_' . $user_permission_key);
                $template_params[$key_value] = $user_permission_value;
            }
        }
        return $template_params;
    }

    /**
     * @Route("/manage_reseller/{id}", defaults={"id" = null}, name="resellerinfo")
     * @Template()        
     */
    public function manage_resellerAction(Request $request, $id) {
        $usertype = $this->get('session')->get('usertype');
        $users = new users(); ##Creating user entity object (Users\UsermanageBundle\Entity\users)
        #Creating form
        $form = $this->createForm(new ResellerInfo($id), $users, array('action' => $this->generateUrl('resellerinfo', array('id' => $id)), ## Form Action
            'method' => 'POST',
            'attr' => array('id' => 'resellerinfoForm',)
                )
        );
        $reseller = false;
        $is_test_account = 0;
        $account_type = 1;
        $status = 1;
        if (!empty($id)) { ## If user is updating reseller details, remove username and password details            
            $form->remove('password');
            $form->remove('username');
            $reseller_details = $this->get('usermanage_service');
            $reseller = $reseller_details->reseller_details($id); ## In case of edit			
            $reseller = $reseller[0];
            $is_test_account = $reseller['isTestAccount'];
            $account_type = $reseller['accountType'];
            $status = $reseller['status'];
        }
        $form->get('is_test_account')->setData($is_test_account);
        $form->get('account_type')->setData($account_type);
        $form->get('status')->setData($status);

        try {
            $insert_resller = $this->get('usermanage_service');
            if ($request->getMethod() == 'POST') {

                if ($this->get('request')->get('id')) { ## If user is updating reseller
                    if (!is_nan($id) && !empty($reseller)) {
                        $reseller_update = $this->get('usermanage_service');
                        if ($reseller_update->update_reseller_info($request, $form)) {

                            $this->get('session')->getFlashBag()->add('record_update_message', 'Agent updated');
                        }


                        return $this->redirect($this->generateUrl('_resellerlist'));
                    }
                } elseif ($insert_resller->insert_reseller_info($request, $form)) { ## If user is adding new reseller
                    return $this->redirect($this->generateUrl('_resellerlist'));
                } else {
                    //echo '222';die;
                    ## Need to check below render code
                    return $this->render('UsersUserManageBundle:UserManage:resellerlist.html.twig', array('form' => $form->createView())
                    );
                }
            }
        } catch (\Exception $e) {

            $logger = $this->get('logger');
            $logger->error($e->getMessage());
        }
        $account_logo = $this->get('session')->get('account_logo');
        $bg_color = $this->get('session')->get('bg_color');
        $font_color = $this->get('session')->get('font_color');
        $font_size = $this->get('session')->get('font_size');
        return $this->render('UsersUserManageBundle:UserManage:resellerinfo.html.twig', array('form' => $form->createView(),
                    'reseller' => $reseller,
                    'id' => $id,
                    'usertype' => $usertype,
                    'account_logo' => $account_logo,
                    'bg_color' => $bg_color,
                    'font_color' => $font_color,
                    'font_size' => $font_size
                        )
        );
    }

## EOF manage_resellerAction();

    /**
     * @Route("/resellerlist", name="_resellerlist")
     * @Template()
     *
     */
    public function resellerlistAction() {
        $usertype = $this->get('session')->get('usertype');
        $account_logo = $this->get('session')->get('account_logo');
        $bg_color = $this->get('session')->get('bg_color');
        $font_color = $this->get('session')->get('font_color');
        $font_size = $this->get('session')->get('font_size');
        return $this->render('UsersUserManageBundle:UserManage:resellerlist.html.twig', array('usertype' => $usertype,
                    'account_logo' => $account_logo,
                    'bg_color' => $bg_color,
                    'font_color' => $font_color,
                    'font_size' => $font_size,
                        )
        );
    }

    /**
     * @Route( "/resellers", name = "_resellers" )
     * @Template()
     *
     */
    public function resellersAction() {

        $reseller_params['status'] = ( $this->get('request')->get('status') ) ? $this->get('request')->get('status') : null;
        $reseller_params['search_option'] = ( $this->get('request')->get('search_option') ) ? $this->get('request')->get('search_option') : null;
        $reseller_params['search_value'] = ( $this->get('request')->get('search_value') ) ? $this->get('request')->get('search_value') : null;
        $reseller_params['selected_tab'] = ( $this->get('request')->get('selected_tab') ) ? $this->get('request')->get('selected_tab') : null;
        $page = ( $this->get('request')->get('page') ) ? $this->get('request')->get('page') : 1;

        $reseller_params['limit'] = $this->container->getParameter('records_on_page');

        if ($page == 1) {

            $reseller_params['offset'] = $this->container->getParameter('offset');
        } else {

            $reseller_params['offset'] = ( $reseller_params['limit'] * $page - ($page + 1) );
        }

        $entity_manager = $this->getDoctrine()->getManager();

        $resellers_count = $entity_manager->getRepository('UsersUserManageBundle:users')->resellers($reseller_params, $entity_manager);
        $resellers = $entity_manager->getRepository('UsersUserManageBundle:users')->resellers($reseller_params, $entity_manager, true);
        $total_pages = ceil(sizeof($resellers_count) / $reseller_params['limit']);
        $account_logo = $this->get('session')->get('account_logo');

        return $this->render('UsersUserManageBundle:UserManage:resellerlist_content.html.twig', array('resellers' => $resellers,
                    'total_pages' => $resellers_count,
                    'pages' => $total_pages,
                    'current_page' => $page,
                    'account_logo' => $account_logo,
                        )
        );
    }

## EOF resellersAction();

    /**
     * @Route("/checkusername", name="checkusername")
     * @Template() 
     *        
     */
    public function checkusernameAction() {

        $username = $this->get('request')->get('username');
        $entity_manager = $this->getDoctrine()->getManager();
        $user = $entity_manager->getRepository('UsersUserManageBundle:users')->check_username($username);
        if ($user) {
            $result = array('Success' => false,
                'Message' => 'Please enter other user name.'
            );
        } else {
            $result = array('Success' => true,
                'Message' => ''
            );
        }
        echo json_encode($result);
        exit;
    }

## EOF checkusernameAction( );

    /**
     * @Route("/permission/{id}" , defaults={"id" = null}, name = "permission" )
     * @Template()
     *
     *      
     */
    public function permissionAction(Request $request, $id) {

        ## TODO: Re factor this function
        $user_permission = null;
        $action = null;
        if ($request->getMethod() == 'POST') {
            $action = $this->get('request')->get('action');
            $user_permissions = $this->get('request')->get('check');
            if ($action == 'save') {
                $save_permission = $this->get('usermanage_service');
                $save_permission->save_permissions($user_permissions);
            } else {
                $update_permission = $this->get('usermanage_service');
                $update_permission->update_permissions($user_permissions);
                return $this->redirect($this->generateUrl('_resellerlist'));
            }
            $action = array();
        } else {
            $permission = $this->get('usermanage_service');
            $user_permission = array();
            $action = array();
            $usertype = 2;
            $user_permissions = $permission->get_permissions($id, $usertype);

            if (sizeof($user_permissions)) {
                $user_permissions = unserialize($user_permissions[0]['permission']);
                $action['action'] = 'update';
            } else {
                $action['action'] = 'save';
            }
        }

        $modules = $this->_module_list();
        foreach ($user_permissions as $key => $value) {

            $array_key_value = str_replace("'", '', $key);
            if (in_array($array_key_value, $modules)) {
                $user_permission[$array_key_value] = 1;
            }

            foreach ($value as $user_permission_key => $user_permission_value) {

                $key_value = str_replace("'", '', $key . '_' . $user_permission_key);
                $user_permission[$key_value] = $user_permission_value;
            }
        }
        $action['id'] = $id;
        $action['usertype'] = $this->get('session')->get('usertype');
        $action['bg_color'] = $this->get('session')->get('bg_color');
        $action['font_color'] = $this->get('session')->get('font_color');
        $action['font_size'] = $this->get('session')->get('font_size');
        $action['account_logo'] = $this->get('session')->get('account_logo');
        $user_permission = array_merge($user_permission, $action);

        return $this->render('UsersUserManageBundle:UserManage:permission.html.twig', $user_permission
        );
    }

    /**
     * @Route("/logout", name = "_logout")
     * @Template()
     */
    public function logoutAction() {
        $this->get('request')->getSession()->invalidate();  ## Invalidate the current session
        return $this->redirect($this->generateUrl('_admin'));
        exit;
    }

    /**
     * @Route("/addaccount/{id}", defaults={"id" = null}, name = "_addaccount")
     * @Template()
     *
     *
     * addaccountAction is used to create new account 
     * Params : @$request type object

     * render form for adding account details
     */
    public function addaccountAction(Request $request, $id = null) {
        $entity_manager = $this->getDoctrine()->getManager();
        $template_params = $this->set_permissions_params();
        $template_params['usertype'] = $this->get('session')->get('usertype');
        $state = $entity_manager->getRepository('UsersUserManageBundle:state')->state_list();
        $account = new account(); ##Creating user entity object (Users\UsermanageBundle\Entity\account)
        #Creating form
        $form = $this->createForm(new CompanyInfo($state, $id, $template_params['usertype']), $account, array('action' => $this->generateUrl('_addaccount', array('id' => $id)), ## Form Action
            'method' => 'POST',
            'attr' => array('id' => 'add_company_form',
            )
                )
        );


        ## If reseller post form then check details                          
        if ($request->getMethod() == 'POST') {
            $account_id = $this->get('session')->get('account_id');
            $validate_account = $this->get('usermanage_service');
            if ($this->get('request')->get('id')) { ## If user is updating agent
                $update_account = $this->get('usermanage_service');
                $update_account->update_account_info($request, $form);
                $file = $request->files->get('file');
                if (!empty($file)) {
                    $account->upload($file, $account_id, $template_params['usertype']);
                }
                return $this->redirect($this->generateUrl('_accountlist')); ## Redirecting user to the accountlist
            } elseif ($validate_account->validate_account_info($request, $form)) {
                $account = new account();
                $get_id = $this->get('usermanage_service');
                $get_id->get_id($request); ## Change this and get last added account id form validate_account_info()
                $file = $request->files->get('file');
                if (!empty($file)) {
                    $account->upload($file, $account_id, $template_params['usertype']);
                }
                if ($template_params['usertype'] == 2) {
                    return $this->redirect($this->generateUrl('_agentinfo')); ## Redirecting user to the agentform
                } else {
                    return $this->redirect($this->generateUrl('resellerinfo')); ## Redirecting user to the resellerform		
                }
            }
        }

        $account = false;
        $stateFormat = 0;
        $krWasClients = 0;
        $stateid = 1;
        $template_params['title'] = 'Add Account';
        if (!empty($id)) {   ## If user is updating account details
            $entity_manager = $this->getDoctrine()->getManager();
            $account = $entity_manager->getRepository('UsersUserManageBundle:account')->account_details($id);  ## In case of edit 
            $account = $account[0];
            $stateFormat = $account['stateFormat'];
            $krWasClients = $account['krWasClients'];
            $stateid = $account['stateId'];
            $template_params['title'] = 'Edit Account';
        }
        if ($template_params['usertype'] == 2) {
            $form->get('state_format')->setData($stateFormat);
            $form->get('kr_was_clients')->setData($krWasClients);
        }
        $form->get('state_id')->setData($stateid);
        $account_logo = $this->get('session')->get('account_logo');

        $template_params['form'] = $form->createView();
        $template_params['account'] = $account;
        $template_params['id'] = $id;
        $template_params['account_id'] = $this->get('session')->get('account_id');
        $template_params['account_logo'] = $account_logo;
        $template_params['bg_color'] = $this->get('session')->get('bg_color');
        $template_params['font_color'] = $this->get('session')->get('font_color');
        $template_params['font_size'] = $this->get('session')->get('font_size');

        ##Rendering index
        return $this->render('UsersUserManageBundle:UserManage:addaccount.html.twig', $template_params
        );
    }

## EOF addaccountAction();

    /**
     * @Route( "/manage_agent/{id}", defaults={"id" = null}, name = "_agentinfo" )
     * @Template()
     *
     */
    public function manage_agentAction(Request $request, $id = null) {
        $users = new users(); ##Creating user entity object (Users\UsermanageBundle\Entity\users)
        #Creating form
        $form = $this->createForm(new AgentInfo($id), $users, array('action' => $this->generateUrl('_agentinfo', array('id' => $id)), ## Form Action
            'method' => 'POST',
            'attr' => array('id' => 'add_agent_form',
            )
                )
        );
        $agent = false;
        if (!empty($id)) { ## If user is updating agent details
            $agent_detail = $this->get('usermanage_service');
            $agent = $agent_detail->agent_details($id); ## In case of edit 
            $agent = $agent[0];
        }
        ## If agent post form then check details                          
        if ($request->getMethod() == 'POST') {
            $insert_agent = $this->get('usermanage_service');
            if ($this->get('request')->get('id')) { ## If user is updating agent
                $update_agent = $this->get('usermanage_service');
                $update_agent->update_agent_info($request, $form);
                return $this->redirect($this->generateUrl('_agentlist')); ## Redirecting user to the listing page  
            } elseif ($insert_agent->insert_agent_info($request, $form)) { ## If user is adding new reseller
                return $this->redirect($this->generateUrl('account_setting')); ## Redirecting user to the account setting page  
            }
        }
        $account_logo = $this->get('session')->get('account_logo');
        $bg_color = $this->get('session')->get('bg_color');
        $font_color = $this->get('session')->get('font_color');
        $font_size = $this->get('session')->get('font_size');
        ##Rendering index
        return $this->render('UsersUserManageBundle:UserManage:agentinfo.html.twig', array('form' => $form->createView(),
                    'agent' => $agent,
                    'id' => $id,
                    'account_logo' => $account_logo,
                    'bg_color' => $bg_color,
                    'font_color' => $font_color,
                    'font_size' => $font_size,
                    'account_id' => $this->get('session')->get('account_id')
                        )
        );
    }

## EOF manage_agentAction();

    
    
    /**
     * @Route("/account_setting/{id}", defaults={"id" = null}, name = "account_setting")
     * @Template()
   */
    public function account_settingAction(Request $request, $id = null) {
          $entity_manager = $this->getDoctrine()->getManager();
          $template_params = array();
          $template_params['usertype'] = $this->get('session')->get('usertype');
         if(!empty($id)) {
           $account_details  = $entity_manager->getRepository('UsersUserManageBundle:account')->account_details( $id ); 
            $account_setting_details = unserialize($account_details[0]['accountSetting']);
            $template_params = $account_setting_details;
         }
       
         if ($request->getMethod() == 'POST') {
          
            if( !empty($id) ) {
                 $entity_manager->getRepository('UsersUserManageBundle:account')->account_setting( $request, $id );  
            }else { 
                $entity_manager->getRepository('UsersUserManageBundle:account')->account_setting( $request );    
            }
                if( $template_params['usertype'] == 4 ) {
                 return $this->redirect($this->generateUrl('account_setting')); ## Redirecting user to the listing page 
              }else{
                return $this->redirect($this->generateUrl('_agentlist')); ## Redirecting user to the listing page  
              }
         } 
         $template_params['account_logo'] = $this->get('session')->get('account_logo');
         $template_params['bg_color']     = $this->get('session')->get('bg_color');
         $template_params['font_color']   = $this->get('session')->get('font_color');
         $template_params['font_size']    = $this->get('session')->get('font_size');
         $template_params['account_id']   = $this->get('session')->get('account_id');
         $template_params['id']           = $id;
         echo '<pre>===';
         print_r($template_params);
         echo '</pre>===';
         return $this->render('UsersUserManageBundle:UserManage:account_setting.html.twig', 
                               $template_params);
        
    }
    
    /**
     * @Route("/agentlist", name = "_agentlist")
     * @Template()
     */
    public function agentlistAction() {
        $template_params = $this->set_permissions_params(); ## get user permission from session 
        $template_params['account_logo'] = $this->get('session')->get('account_logo');
        $template_params['usertype'] = $this->get('session')->get('usertype');
        $template_params['bg_color'] = $this->get('session')->get('bg_color');
        $template_params['font_color'] = $this->get('session')->get('font_color');
        $template_params['font_size'] = $this->get('session')->get('font_size');
        $template_params['account_id'] = $this->get('session')->get('account_id');
        return $this->render('UsersUserManageBundle:UserManage:agentlist.html.twig', $template_params);
    }

    /**
     * @Route( "/agents", name = "_agents" )
     * @Template()
     */
    public function agentsAction() {

        ## Getting session values
        $agent_params['reseller_id'] = $this->get('session')->get('userid');

        ## Getting POST values 
        $agent_params['status'] = $this->get('request')->get('status');
        $agent_params['search_option'] = ($this->get('request')->get('search_option')) ? $this->get('request')->get('search_option') : null;
        $agent_params['search_value'] = ($this->get('request')->get('search_value')) ? $this->get('request')->get('search_value') : null;
        $agent_params['selected_tab'] = ($this->get('request')->get('selected_tab')) ? $this->get('request')->get('selected_tab') : 0;
        $page = ($this->get('request')->get('page')) ? $this->get('request')->get('page') : null;

        //$agent_params['limit'] = 10; ## Default records 
        $agent_params['limit'] = $this->container->getParameter('records_on_page');

        ## Calculating page limit
        if ($page == 1) {
            $agent_params['offset'] = 0;
        } else {
            $agent_params['offset'] = ( $agent_params['limit'] * $page - 2 );
        }

        $entity_manager = $this->getDoctrine()->getManager();

        $agents_count = $entity_manager->getRepository('UsersUserManageBundle:users')->agents($agent_params, $entity_manager);
        $agents = $entity_manager->getRepository('UsersUserManageBundle:users')->agents($agent_params, $entity_manager, true);

        $total_pages = ceil(sizeof($agents_count) / $agent_params['limit']);

        if (sizeof($agents_count) <= 0) { ## If agent count is 0, set no record found message
            $this->get('session')->getFlashBag()->add('no_record_message', 'No record found');
        }
        $account_logo = $this->get('session')->get('account_logo');
        ## rendering template and passing required params to template
        return $this->render('UsersUserManageBundle:UserManage:agentlist_content.html.twig', array('agents' => $agents,
                    'total_pages' => $agents_count,
                    'pages' => $total_pages,
                    'current_page' => $page,
                    'account_logo' => $account_logo,
                        )
        );
    }

    /**
     * @Route("/inactive_user", name = "_inactive_user")
     * @Template()
     */
    public function inactive_userAction(Request $request) {

        $id = ($this->get('request')->get('id')) ? $this->get('request')->get('id') : null;

        if (empty($id)) {
            throw new \Exception('Proper arguments are not passed in the:: inactive_userAction() function in UsermanageController');
        }
        $entity_manager = $this->getDoctrine()->getManager();
        try {
            $agent_details = $entity_manager->getRepository('UsersUserManageBundle:users')->user_details($id);
            $agent_details = $agent_details[0];
            $entity_manager->getRepository('UsersUserManageBundle:users')->inactive_user($id);
            $entity_manager->getRepository('UsersUserManageBundle:account')->inactive_account($agent_details['accountId']);
            $result = array('Success' => true,
                'Message' => 'Record has been inactive successfully.'
            );
        } catch (\Exception $e) {

            $logger = $this->get('logger');
            $logger->error($e->getMessage());
            $result = array('Success' => true,
                'Message' => 'Currently we are unable to process your request'
            );
        }

        echo json_encode($result);
        exit;
    }

    /**
     * @Route("/accountlist", name = "_accountlist")
     * @Template()
     */
    public function accountlistAction() {
        $template_params = $this->set_permissions_params();
        $template_params['account_id'] = $this->get('session')->get('account_id');
        $template_params['usertype'] = $this->get('session')->get('usertype');
        $template_params['account_logo'] = $this->get('session')->get('account_logo');
        $template_params['bg_color'] = $this->get('session')->get('bg_color');
        $template_params['font_color'] = $this->get('session')->get('font_color');
        $template_params['font_size'] = $this->get('session')->get('font_size');
        return $this->render('UsersUserManageBundle:UserManage:accountlist.html.twig', $template_params);
    }

    /**
     * @Route( "/accounts", name = "_accounts" )
     * @Template()
     */
    public function accountsAction(Request $request) {

        ## Getting POST values 
        $account_params['status'] = $this->get('request')->get('status');
        $account_params['search_option'] = ($this->get('request')->get('search_option')) ? $this->get('request')->get('search_option') : null;
        $account_params['search_value'] = ($this->get('request')->get('search_value')) ? $this->get('request')->get('search_value') : null;
        $account_params['selected_tab'] = ($this->get('request')->get('selected_tab') == 0 || $this->get('request')->get('selected_tab')) ? $this->get('request')->get('selected_tab') : null;
        $page = ($this->get('request')->get('page')) ? $this->get('request')->get('page') : null;

        $account_params['limit'] = 2; ## Default records 
        ## Calculating page limit
        if ($page == 1) {
            $account_params['offset'] = 0;
        } else {
            $account_params['offset'] = ( $account_params['limit'] * $page - 2 );
        }

        // $entity_manager = $this->getDoctrine()->getManager();
        $accounts = $this->get('usermanage_service');
        $accounts_count = $accounts->accounts($account_params, $request);
        $accounts = $accounts->accounts($account_params, $request, true);

        $total_pages = ceil(sizeof($accounts_count) / $account_params['limit']);

        if (sizeof($accounts_count) == 0) { ## If account count is 0, set no record found message
            $this->get('session')->getFlashBag()->add('no_record_message', 'No record found');
        }
        $account_logo = $this->get('session')->get('account_logo');
        ## rendering template and passing required params to template
        return $this->render('UsersUserManageBundle:UserManage:accountlist_content.html.twig', array('accounts' => $accounts,
                    'total_pages' => $accounts_count,
                    'pages' => $total_pages,
                    'current_page' => $page,
                    'account_logo' => $account_logo,
                        )
        );
    }

    /**
     * @Route("/inactive_account", name = "_inactive_account")
     * @Template()
     */
    public function inactive_accountAction(Request $request) {

        $id = ($this->get('request')->get('id')) ? $this->get('request')->get('id') : null;
        if (empty($id)) {
            throw new \Exception('Proper arguments are not passed in the:: inactive_accountAction() function in UsermanageController');
        }
        $entity_manager = $this->getDoctrine()->getManager();
        try {
            $entity_manager->getRepository('UsersUserManageBundle:account')->inactive_account($id);
            $entity_manager->getRepository('UsersUserManageBundle:users')->inactive_account_agent($id);
            $result = array('Success' => true,
                'Message' => 'Record has been inactive successfully.'
            );
        } catch (\Exception $e) {

            $logger = $this->get('logger');
            $logger->error($e->getMessage());
            $result = array('Success' => true,
                'Message' => 'Currently we are unable to process your request'
            );
        }

        echo json_encode($result);
        exit;
    }

    /**
     * @Route("/theme", name = "_pagetheme")
     * @Template()
     * */
    public function themeAction(Request $request) {
        $account_id = $this->get('session')->get('account_id');
        $template_params = $this->set_permissions_params(); ## get user permission from session 
        $entity_manager = $this->getDoctrine()->getManager();
        if ($request->getMethod() == 'POST') {
            $session = $request->getSession();
            $entity_manager->getRepository('UsersUserManageBundle:account')->update_theme($request, $session);
        }
        $account = $entity_manager->getRepository('UsersUserManageBundle:account')->account_details($account_id);
        $account = $account[0];
        $theme_details = array();
        if (!empty($account['themeSetting'])) {
            $theme_details = json_decode($account['themeSetting'], true);
        }
        $template_params['bg_color'] = !empty($theme_details['bg_color']) ? $theme_details['bg_color'] : $this->container->getParameter('bg_color');
        $template_params['font_color'] = !empty($theme_details['font_color']) ? $theme_details['font_color'] : $this->container->getParameter('font_color');
        $template_params['font_size'] = !empty($theme_details['font_size']) ? $theme_details['font_size'] : $this->container->getParameter('font_size');
        $template_params['account_id'] = $this->get('session')->get('account_id');
        $template_params['account_logo'] = $this->get('session')->get('account_logo');
        $template_params['usertype'] = $this->get('session')->get('usertype');

        return $this->render('UsersUserManageBundle:UserManage:theme_setting.html.twig', $template_params
        );
    }

    /**
     * @Route("/manage_signature/{id}", defaults={"id" = null},  name="manage_signature")
     * @Template()
     * 
     * * Function signatureAction();
     * * Purpose: This will be the first function to login screen to the user
     * * Params 
     * *
     */
    public function manage_signatureAction(Request $request, $id = null) {
        $entity_manager = $this->getDoctrine()->getManager();
        $template_params = $this->set_permissions_params(); ## get user permission from session

        $template_params['bg_color'] = !empty($theme_details['bg_color']) ? $theme_details['bg_color'] : $this->container->getParameter('bg_color');
        $template_params['font_color'] = !empty($theme_details['font_color']) ? $theme_details['font_color'] : $this->container->getParameter('font_color');
        $template_params['font_size'] = !empty($theme_details['font_size']) ? $theme_details['font_size'] : $this->container->getParameter('font_size');
        $template_params['account_id'] = $this->get('session')->get('account_id');
        $template_params['account_logo'] = $this->get('session')->get('account_logo');
        $template_params['id'] = $id;
        $form = $this->createForm(new signatureinfo($id), new signature(), ##Passing user entity object
                array('action' => $this->generateUrl('manage_signature', array('id' => $id)),
            'method' => 'POST',
            'attr' => array('id' => 'signature_form',
            )
                )
        );
        $status = 1;
        if (is_numeric($id) && !empty($id)) {
            $signature_params['id'] = $id;
            $signature_details = $entity_manager->getRepository('UsersUserManageBundle:signature')->signatures($signature_params); ## 
            $template_params['signature'] = $signature_details[0];
            $status = $template_params['signature']['signatureStatus'];
        }
        $form->get('signatureStatus')->setData($status);

        if ($request->getMethod() == 'POST') {

            $signature = new signature(); ##Creating signature entity object ( Users\UsermanageBundle\Entity\signature)
            $form->handleRequest($request);
            if ($form->isValid()) {
                $session = $request->getSession();
                if ($request->get('id')) {    ## If user is updating signature
                    $entity_manager->getRepository('UsersUserManageBundle:signature')->update_signature($request);
                } else {
                    $entity_manager->getRepository('UsersUserManageBundle:signature')->insert_signature($form, $session);
                }
            }
            return $this->redirect($this->generateUrl('signatures')); ## Redirecting signature to the listing page 
        }
        $template_params['form'] = $form->createView();

        return $this->render('UsersUserManageBundle:UserManage:manage_signature.html.twig', $template_params);
    }

    /**
     * @Route("/signatures",  name="signatures")
     * @Template()
     * 
     * * Function signaturesAction();
     * * Purpose: This will be the show the all default signature for the agents
     * * Params 
     * *
     */
    public function signaturesAction(Request $request) {
        if ($request->getMethod() == 'POST') {
            $signature_params['status'] = ( $this->get('request')->get('status') ) ? $this->get('request')->get('status') : null;
            $signature_params['selected_tab'] = ( $this->get('request')->get('selected_tab') ) ? $this->get('request')->get('selected_tab') : null;

            $entity_manager = $this->getDoctrine()->getManager();
            $signatures = $entity_manager->getRepository('UsersUserManageBundle:signature')->signatures($signature_params);
            $account_logo = $this->get('session')->get('account_logo');
            return $this->render('UsersUserManageBundle:UserManage:signature_content.html.twig', array(
                        'signature' => $signatures,
                        'account_logo' => $account_logo,
                            )
            );
        }
        $template_params['bg_color'] = !empty($theme_details['bg_color']) ? $theme_details['bg_color'] : $this->container->getParameter('bg_color');
        $template_params['font_color'] = !empty($theme_details['font_color']) ? $theme_details['font_color'] : $this->container->getParameter('font_color');
        $template_params['font_size'] = !empty($theme_details['font_size']) ? $theme_details['font_size'] : $this->container->getParameter('font_size');
        $template_params['account_id'] = $this->get('session')->get('account_id');
        $template_params['account_logo'] = $this->get('session')->get('account_logo');
        return $this->render('UsersUserManageBundle:UserManage:signatures.html.twig', $template_params);
    }

    /**
     * @Route("/inactive_signature",  name="inactive_signature")
     * @Template()
     * 
     * * Function inactive_signatureAction();
     * * Purpose: This will inactive the signature
     * * Params 
     * *
     */
    public function inactive_signatureAction(Request $request) {
        $id = $request->get('id');
        $entity_manager = $this->getDoctrine()->getManager();
        $result = $entity_manager->getRepository('UsersUserManageBundle:signature')->signature_status($id);
        if ($result) {
            $response = array('Success' => true,
                'Message' => 'Signature has been inactive successfully.'
            );
        } else {
            $response = array('Success' => true,
                'Message' => 'Currently we are unable to process your request'
            );
        }
        echo json_encode($response);
        exit;
    }
    
    
    
    /**
     * @Route("/forgot_password",  name="password")
     * @Template()
     * 
     * * Function forgot_passwordAction();
     * * Purpose: This will generate new password
     * * Params 
     * *
     */
    public function forgot_passwordAction( Request $request ){
         $template_params['account_logo'] = $this->get('session')->get('account_logo');
         $template_params['bg_color']     = $this->get('session')->get('bg_color');
         $template_params['font_color']   = $this->get('session')->get('font_color');
         $template_params['font_size']    = $this->get('session')->get('font_size');
         $template_params['account_id']   = $this->get('session')->get('account_id');
        return $this->render('UsersUserManageBundle:UserManage:change_password.html.twig', $template_params);
    }

}

## End Class
