<?php

/* UsersUserManageBundle:UserManage:accountlist.html.twig */
class __TwigTemplate_92abdec35e4e96737aa96e6c9f8f7d73b97409a0f56fad9f2354567b7690589d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("UsersUserManageBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UsersUserManageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo " <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/bootstrap.css"), "html", null, true);
        echo "\" />
  <script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<div class=\"mid-section\">
    ";
        // line 8
        echo "   ";
        $this->env->loadTemplate("UsersUserManageBundle::sidebar.html.twig")->display($context);
        // line 9
        echo "   <div class=\"right-panel\">
    <!--div class=\"heading\"><h1>Account list</h1></div-->      
    <div class=\"form-box\">
      <div class=\"form-head\">Search</div>
      <div class=\"search-wraper\">
        <select name=\"account_search_options\" id='account_search_options' >
          <option value='name' >Company Name</option>
          <option value='email' >Email</option>
        </select>
          <input name=\"account_search_value\" type=\"text\" id=\"account_search_value\">
          <input name=\"search\" type=\"button\" value=\"Search\" id='account_search' >
      </div>
        <div class=\"clear\"></div>
    </div>    
    <div class=\"form-box\">
      <div class=\"form-head add-agents-btn no_left_padding\" >
            <div >
              <ul>          
                  <li ><a href=\"#\" data-search_attr='1' class='account_tab_search default_tab' >Show Active</a></li>
                  <li><a href=\"#\" data-search_attr='0' class='account_tab_search' >Show Inactive</a></li>          
                  <li><a href=\"#\" data-search_attr='3' class='account_tab_search' >Show All</a></li>
              </ul>
            </div>                
            <div class=\"clear\"></div>
        </div>
      <!--div class=\"form-head\"> Add New Account</div-->
      <div class=\"data-table-wraper\" id = 'account_details'> </div>
      <div class=\"clear\"></div>
    </div>
   </div>
  </div>
    <!--  End Mid-section Code-->
  <div class=\"footer\">© 2014 All Rights Reserved</div>
  </div>
   <script language=\"javascript\" type=\"text/javascript\">
   var search_option = '';
   var search_value = '';
   var selected_tab = '1';
   var page = '1';
    \$('.default_tab').addClass('selected_tab');
     \$(document).ready(function (){
       list_accounts( search_option, search_value, selected_tab );
        \$('#account_search').click(function(){
        var search_option = \$('#account_search_options').val();
        var search_value = \$.trim(\$('#account_search_value').val());
        if(!search_value.length){
\t\t\t\t  return false;
\t\t\t }
       list_accounts(search_option,search_value,selected_tab);
      });
      \$(document ).on( \"click\",\".paging\", function(){
\t\t\tpage = \$(this).data('page');\t\t\t
\t\t\tlist_accounts(search_option,search_value,selected_tab);
\t\t  });
      \$(document ).on( \"change\",\".paging_select\", function(){
\t\t\tpage = \$(this).val();
\t\t\tlist_accounts(search_option,search_value,selected_tab);
\t\t  });
      \$('.account_tab_search').click(function(){
         \$('.account_tab_search').removeClass('selected_tab').addClass('account_tab_search');\t
         \$(this).addClass('selected_tab');
         selected_tab = \$(this).data('search_attr');\t
         list_accounts(search_option,search_value,selected_tab);
       });
\t   
\t   
\t   \$(document).on( \"click\",\".delete_agent\", function(){
          var agent_id = \$(this).data('agent_id');
          get_model_box(agent_id);
       });
\t   
       \$(document).on( \"click\",\"#delete_button\", function(){
          var inactive_id = \$('#inactive_id').val();
          inactive_record(inactive_id);
       });
       
       
     });
   function inactive_record( inactive_id ) { 
     var param = {'id': inactive_id 
                 };\t 
             \$.ajax({
               url : '";
        // line 91
        echo $this->env->getExtension('routing')->getPath("_inactive_account");
        echo "',
               type: 'POST',
               data: param,           
                dataType: 'json',
                beforeSend: function() {
                     \$('#account_details').html('<div class=\"dvLoading\">&nbsp;</div>');        
                 },
              success: function( data ) {
                  if(data.Success){
                   \$('#errors').show().html( data.Message );               
                }
                list_accounts(search_option,search_value,selected_tab);
              }, 
              
             error: function() {
                  \$('#account_details').html('Currently we are unable to process your request');
              },
            complete: function(data) {
              }          
           });
    
   }

    function get_model_box(account_id){
    var model_box = \"<div id='myModal' class='modal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'><input type='hidden' name='inactive_id' id='inactive_id' value=\"+account_id+\"><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Inactive Account</h3></div><div class='modal-body'><p>Are you sure to inactive the record?</p></div><div class='modal-footer'><button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button><button class='btn btn-danger' id='delete_button' data-dismiss='modal'>Delete</button></div></div>\";
    \$(\"#myModal\").html(model_box);
  } 

  
     function list_accounts( search_option,search_value,selected_tab ) {
          var search_params = {'search_option': search_option,
\t\t\t\t\t\t\t  'search_value' : search_value,
\t\t\t\t\t\t\t  'selected_tab' : selected_tab,
\t\t\t\t\t\t\t  'status'       : '1',
                              'usertype'     : '4',
\t\t\t\t\t\t\t  'page' \t\t     : page
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t };
     
      \$.ajax({
        url : '";
        // line 131
        echo $this->env->getExtension('routing')->getPath("_accounts");
        echo "',
        type: 'POST',
        data: search_params,
        dataType: 'html',
        beforeSend: function() {
             \$('#account_details').html('<div class=\"dvLoading\">&nbsp;</div>');                        
          },
        success: function( data ) {    
              \$('#account_details').html(data);
             
          },
        error: function() {
              \$('#account_details').html('Currently we are unable to process your request');
          },
        complete: function() {
          }
      });
    }
   </script>
";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:accountlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 131,  136 => 91,  52 => 9,  49 => 8,  44 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
