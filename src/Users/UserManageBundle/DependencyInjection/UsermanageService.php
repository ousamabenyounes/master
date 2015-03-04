<?php

namespace Users\UserManageBundle\DependencyInjection;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session;
use Users\UserManageBundle\Form\ContactType;
use Users\UserManageBundle\Entity\users;
use Doctrine\ORM\EntityManager;




/*
 * UsermanageService class is used to provide helper function to the 
 * UserManageBundle
 * 
 */
class UsermanageService {
    ## Defining class properties       
    protected $login_user = array();
    protected $entity_manager = null;
    protected $records_on_page = null;
    protected $offset = null;
    protected $reseller_user_type = null;
    protected $bg_color = null;
    protected $font_color = null;
    protected $font_size = null;
    protected $array_index = array( 1 => 0, 2 => 1, 4 => 2 );
    
    /*
     * Class constructor
     * Pass default values in constructor
     * 
     * 
     */
    public function __construct(EntityManager $entity_manager, 
                                              $records_on_page, 
                                              $offset, 
                                              $reseller_user_type, 
                                              $bg_color, 
                                              $font_color, 
                                              $font_size
    ) {
        $this->entity_manager = $entity_manager;
        $this->records_on_page = $records_on_page;
        $this->offset = $offset;
        $this->reseller_user_type = $reseller_user_type;
        $this->bg_color = $bg_color;
        $this->font_color = $font_color;
        $this->font_size = $font_size;
    }

    /*
     * validate_user(); Function used to validate user's input
     * and set the session values accordingly
     * Params : @request type object
     * @form type object
     * 
     * Return boolean
     */

    public function validate_user($request = null, 
                                  $form = null) {
        ## If required parameters are not passed, Throw an exception
        if ($request == null || $form == null) {           
            throw new \Exception('Proper arguments are not passed in the:: 
                                  validate_user() function 
                                  in UsermanageController');
        }       
        
        $form->handleRequest($request); ## Binding the request with the form        
        if (!$form->isValid() || !( $user = $this->verify_login_details($request->get('username'), $request->get('password')))) { 
            ## If invalid user name and password
            throw new \Exception('Invalid Username and Password'); 
        } else {
            ## If valid user set session variables           
            $session = $request->getSession();
            $this->login_user = array($this->array_index[$user[0]['userType']] => array('userid' => $user[0]['id'], 
                                                                                        'usertype' => $user[0]['userType']
                                                                                       )
                                    );
            if (count($session->get('exap')) == 0) {
                $session->set('exap', $this->login_user);
            }
            $this->setSession($request, $user);
            return true;
        }
    }## EOF _validate_user();




    /*
     * Function :: verify_login_details()
     * Use to verify user credentials with database
     * Params:
     * @$userName :: user name passed by user
     * $password  :: password passed by user
     * 
     * return array() for valid users
     * 
     */

    private function verify_login_details($userName = null, $password = null) {
        
        ## Checking for required parameters    
        if ( empty($userName) || empty($password)) { 
            throw new \Exception('Proper arguments are not passed in 
                                  the:: verify_login_details() 
                                  function in UsermanageController'
                                );
        }
        try {
            $userDetails = $this->entity_manager
                        ->getRepository('UsersUserManageBundle:users')
                        ->check_login($userName, $password);
            if(sizeof($userDetails)){
                return $userDetails;
            }
            return false;
        } catch (\Exception $e) {            
            ## Logging error    
            $logger = $this->get('logger');            
            $logger->info($e->getMessage());
            
            throw new \Exception('Error in verifying login details');
        }
        
    }## EOF _verify_login_details();


    ## TODO: Write comments
    ## Pass default parameters
    public function setSession($request, 
                               $user) {
        ## TODO: Remove one session assignment
        $session = $request->getSession();
        $user_permissions = $this->get_permissions($user[0]['id'], 
                                                   $user[0]['userType']
                                                );
        ## TODO: Remove one session assignment
        $session = $request->getSession();
        
        
        if (sizeof($user_permissions)) {
            $session->set('user_permissions', unserialize($user_permissions[0]['permission']));
        }
        
        ## for dynamic logo
        if (sizeof($user)) {
            $session->set('account_id', $user[0]['accountId']);        
            $account = $this->entity_manager
                            ->getRepository('UsersUserManageBundle:account')
                            ->account_details($user[0]['accountId']);
            
            if (sizeof($account)) {
                $folder = ( $user[0]['userType'] == 2 ) ? 'resellers' : 'agents';
                $logo = $folder . '/' . $session->get('account_id') . '/' . $account[0]['logo'];
                $theme_details = json_decode($account[0]['themeSetting'], true);
            }
        }

        ## No need to assign the value to variables, directly set it in session
        $account['bg_color'] = !empty($theme_details['bg_color']) ? $theme_details['bg_color'] : $this->bg_color;
        $account['font_color'] = !empty($theme_details['font_color']) ? $theme_details['font_color'] : $this->font_color;
        $account['font_size'] = !empty($theme_details['font_size']) ? $theme_details['font_size'] : $this->font_size;
        $account[0]['logo'] = !empty($account[0]['logo']) ? $logo : 'logo-agentpanel.png';
        
        $session->set('bg_color', $account['bg_color']);
        $session->set('font_color', $account['font_color']);
        $session->set('font_size', $account['font_size']);
        $session->set('account_logo', $account[0]['logo']);
        $session->set('username', $user[0]['username']);
        $session->set('password', $user[0]['password']);
        $session->set('usertype', $user[0]['userType']);
        $session->set('userid', $user[0]['id']);
    }

    /*
      get_permissions() is used to fetch reseller permissions from database

      @params : @$userid type int
      @$usertype type int
      @return : array()
     * 
     * TODO: Pass default values in function params
     */

    public function get_permissions($userid, $usertype) {
        
        ## TODO: Check default values passed in function
        try {
            return $this->entity_manager
                        ->getRepository('UsersUserManageBundle:permissions')
                        ->get_permissions($userid, $usertype);
        } catch (\Exception $e) {
             ## TODO:
            ## log exception values
        }
    }## EOF get_permissions();
    

    /*
      update_reseller_info() is used to upload user's input with database

      Params : @request type object
      @form type object

      Return : boolean
     * 
     * 
     * TODO: Pass default value in function params
     */

    public function update_reseller_info($request, $form) {

        if (!is_object($request) || !is_object($form)) {

            throw new \Exception('Proper arguments are not passed in the:: 
                                  update_reseller_info() function in 
                                  UsermanageController');
        }        
        try {
            $this->entity_manager
                 ->getRepository('UsersUserManageBundle:users')
                 ->update_reseller($request);
            
            throw new \Exception('Database error in :: update_reseller_info() 
                                  function in UsermanageController');
            return true;
        } catch (\Exception $e) {
            ## TODO:
            ## log exception values
        }
    }## EOF update_reseller_info();    

    /*
      reseller_details() is used to fetch user's input from database

      params : @$id type integer or null

      return : array
     */

    public function reseller_details($id = null) {
        #TODO: Check default values
        try {
            return $this->entity_manager->getRepository('UsersUserManageBundle:users')
                        ->user_details($id);

            throw new \Exception('Database error in :: reseller_details() 
                                  function in UsermanageController');
        } catch (\Exception $e) {
            ## TODO:
            ## log exception values
        }
    }## EOF reseller_details();

    /**
      insert_reseller_info() is used to insert user's input into database
      params : @$request type object
      @$form type object
      return : boolean
      TODO: Pass default value in the function params
     */
    public function insert_reseller_info($request, $form) {
        
        ## TODO:
        ## Check required vvalues passed in the function
        
        $form->handleRequest($request);
        try {
            if ($form->isValid()) {
                $session = $request->getSession();
                $this->entity_manager->getRepository('UsersUserManageBundle:users')
                                     ->insert_reseller($form, $session);
                
                $session->remove('id');
                throw new \Exception('Database error in :: insert_reseller_info() function in UserManageController');
            }
        } catch (\Exception $e) {
            ## TODO:
            ## log exception values
        }
    }## EOF insert_reseller_info(); 





    /*
      save_permissions() is used to set reseller permissions into database

      @params : @$user_permissions type array

      @return boolean
     */

    public function save_permissions($user_permissions = null) {        

        if (!is_array($user_permissions)) {
            throw new \Exception('Proper arguments are not passed in 
                                  the:: save_permissions() function in 
                                  UsermanageController');
        }
        
        $userid = $this->get('request')->get('reseller_id');
        $user_permissions = serialize($user_permissions);
        
        ## TODO: Put this in try catch     
        $this->entity_manager->getRepository('UsersUserManageBundle:permissions')
                             ->save_permissions($user_permissions, $userid);
    }## EOF save_permissions();

    /*
      _update_permissions() is used to edit reseller permissions into database
      @params : @$user_permissions type array
      @return : boolean
     */

    public function update_permissions($user_permissions = null) {        
        
        if (!is_array($user_permissions)) {
            #TODO: Through exception    
            return false;
        }
        
        try {
            $userid = $this->get('request')->get('reseller_id');
            $user_permissions = serialize($user_permissions);            
            $this->entity_manager->getRepository('UsersUserManageBundle:permissions')
                                 ->update_permissions($user_permissions, $userid);
            
        } catch (\Exception $e) {
            ## TODO:
            ## log exception values
        }        
    }## EOF update_permissions();

    
    ## TODO: WRITE FUNCTION COMMENTING
    ## Write default argument
    public function update_account_info($request, $form) {
        ## TODO: CHeck required arguments        
        
        $session = $request->getSession();
        ## TODO: put query in try and catch
        $this->entity_manager->getRepository('UsersUserManageBundle:account')
                             ->update_account($request, $session);
        $session->getFlashBag()
                ->add('record_update_message', 'Account updated');
        return true;
    }## EOF update_account_info();

    /*
      validate_account_info(); Function used to validate account input

      Params : @$request type object
      @$form type object
      Return : boolean
     * TODO: Pass default value to the functions
     */

    public function validate_account_info($request, $form) {
        ##TODO: CHECK REQUIRED VALUES
        $session = $request->getSession();
        $file = $request->files->get('file');
        $logo = null;
        if (!empty($file)) {
            $logo = $request->files->get('file')->getClientOriginalName();
        }
        ## ToDo: Add exception handling
        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->entity_manager->getRepository('UsersUserManageBundle:account')
                                 ->validate_account_info($request, $form, $session, $logo);
            return true;
        }
        return false;
    }

    /*
      get_id() is used get account id

      @params : @$request type object
      @return : set account id in session
     * TODO: PASS DEFAULT VALUES IN FUNCTION PARAMS
     */

    public function get_id($request) {
        ##TODO: CHECK REQUIRED VALUE
        ##TODO: PUT QUERY IN TRY CATCH        
        $id = $this->entity_manager->getRepository('UsersUserManageBundle:account')
                                   ->get_id($request);
        
        if (isset($id[0]['id'])) {
            $request->getSession()->set('id', $id[0]['id']);
        }
        ##TODO: ADD A RETURN AT THE END
    }
    
    /**
         * agent_details() is used to fetch agent details from database
         *       
         * Params : @$id type int or null     
         * Return : array();
         */
    public function agent_details($id = null) {

        ##TODO: PUT QUERY IN TRY CATCH
          return $this->entity_manager->getRepository('UsersUserManageBundle:users')
                                      ->user_details($id);
    }## EOF agent_details();
    /**
         * update_agent_info() is used to update agent details into database
         *       
         * Params : @$request type object
          @$form type object
         * Return : boolean
     * TODO: PASS DEFAULT VALUES IN FUNCTION PARAMS
         */
    public function update_agent_info($request, $form) {
        
        $session = $request->getSession();
        ##TODO: PUT QUERY IN TRY CATCH
        $this->entity_manager->getRepository('UsersUserManageBundle:users')
                             ->update_agent($request, $session);
        $this->get('session')
             ->getFlashBag()
             ->add('record_update_message', 'Agent updated');
        return true;
    }## EOF update_agent_info():
    /**
    * insert_agent_info() is used to insert agent's input into database
    *       
    * Params : @$request type object
     @$form type object
    * Return : boolean
     * TODO: PASS DEFAULT VALUES IN THE FUNCTION
    */
    public function insert_agent_info($request, $form) {

        ##TODO: CHECK DEFAULT ARGUMENTS
        ##Creating user entity object ( Users\UsermanageBundle\Entity\users )
        $users = new users(); 
        $form->handleRequest($request);
        if ($form->isValid()) {
            $session = $request->getSession();
            $this->entity_manager->getRepository('UsersUserManageBundle:users')
                                 ->insert_agent($form, $session);
            //$session->remove('id');
            //$session->getFlashBag()
                   // ->add('record_insert_message', 'Agent Added');
            return true;
        }
        return false;
    }
    ##TODO: WRITE FUNCTION COMMENTING
    public function module_list() {
        return array('agent_list',
            'mortgage_broker_list',
            'site_list',
            'default_agent_settings',
            'follow_up_camp',
            'email_blast',
            'newsletters',
            'statistics',
            'default_surveys',
            'documents',
            'form_templates',
            'idx_setup_items',
            'transfer_process',
            'site_setup_items',
            'admin_settings',
        );
    }

    ##
    ## Function used to get account
    ## $account_params = array()
    ## $entity_manager = object
    ## $apply_limit = boolean
    ## return array() or false
    ##

    public function accounts($account_params = null, $request, $apply_limit = false) {
        $session = $request->getSession();
        if (!is_array($account_params)) { ## Checking required params
            return false;
        }
        $search_params = array();

        ## Query to get agent list
        $query = $this->entity_manager->createQueryBuilder()
                ->select('a, s')
                ->from('UsersUserManageBundle:account', 'a')
                ->innerJoin('a.state_entity', 's')
                ->where('a.resellerId = :reseller_id')
                ->addOrderBy('a.id', 'DESC');
        ;

        ## Setting limit on query 
        if ($apply_limit) {
            $query = $query->setFirstResult($account_params['offset'])
                    ->setMaxResults($account_params['limit']);
        }
        $search_params['reseller_id'] = $session->get('userid');
        if ((!empty($account_params['selected_tab']) && $account_params['selected_tab'] != 3) || $account_params['selected_tab'] == 0) {
            $query = $query->andwhere($query->expr()->eq('a.status', '?1'));
            $search_params['1'] = $account_params['selected_tab'];
        }
        if (!empty($account_params['search_option']) && !empty($account_params['search_value'])) {

            switch ($account_params['search_option']) {
                CASE 'name':
                    $query = $query->andWhere('a.name=:name');
                    break;
                CASE 'email':
                    $query = $query->andWhere('a.email=:email');
                    break;
            }

            $search_params[$account_params['search_option']] = $account_params['search_value'];
        }
        ## Setting search parameters
        $query = $query->setParameters($search_params);
        $query = $query->getQuery();
        $accounts = $query->getArrayResult();

        return $accounts;
    }## EOF accounts()
    
}## EOC
?>