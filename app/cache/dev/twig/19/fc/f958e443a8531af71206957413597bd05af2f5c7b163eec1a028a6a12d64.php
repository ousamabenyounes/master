<?php

/* UsersUserManageBundle:UserManage:agentlist.html.twig */
class __TwigTemplate_19fcf958e443a8531af71206957413597bd05af2f5c7b163eec1a028a6a12d64 extends Twig_Template
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
        echo "  <link rel=\"stylesheet\" href=\"";
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
    ";
        // line 13
        echo "     
    <div class=\"form-box\">
      <div class=\"form-head\">Search</div>
      <div class=\"search-wraper\">
        <select name=\"agent_search_options\" id='agent_search_options' >
          <option value='first_name' >First Name</option>
          <option value='last_name' >Last Name</option>
          <option value='email' >Email</option>
        </select>
          <input name=\"agent_search_value\" type=\"text\" id=\"agent_search_value\">
          <input name=\"search\" type=\"button\" value=\"Search\" id='agent_search' >
      </div>
        <div class=\"clear\"></div>
    </div>    
    <div class=\"form-box\">
\t  <div  id = 'errors' class='alert alert-success hide'></div>
\t   <div class=\"form-head add-agents-btn no_left_padding\" >
\t  <div>
      <ul>          
        <li ><a href=\"#\" data-search_attr='1' class='agent_tab_search default_tab' >Show Active</a></li>
        <li><a href=\"#\" data-search_attr='0' class='agent_tab_search' >Show Inactive</a></li>          
        <li><a href=\"#\" data-search_attr='3' class='agent_tab_search' >Show All</a></li>
      </ul>
    </div>
<div class=\"padding_left_741px\">
              <ul>\t
        <li class=\"add_agent\"><a href=\"";
        // line 39
        echo $this->env->getExtension('routing')->getPath("_agentinfo");
        echo "\" >Add New Agent</a></li> 
\t    </ul>
            </div>          
            <div class=\"clear\"></div>
        </div>        
      <div class=\"data-table-wraper\" id = 'agent_details'> </div>
      <div class=\"clear\"></div>
    </div>
   </div>
  </div>
     <!--  End Mid-section Code-->
  <div class=\"footer\">© 2014 All Rights Reserved</div>
  </div>
  
  <script language=\"javascript\" type=\"text/javascript\">
  \tvar search_option = '';
    var search_value = '';
    var selected_tab = '1';
    var page = '1';
    \$('.default_tab').addClass('selected_tab');
    \$(document).ready(function (){
     list_agents( search_option, search_value, selected_tab );
      \$('#agent_search').click(function(){
        var search_option = \$('#agent_search_options').val();
        var search_value = \$.trim(\$('#agent_search_value').val());
        if(!search_value.length){
\t\t\t\t  return false;
\t\t\t }
       list_agents(search_option,search_value,selected_tab);
      });
      
      \$(document ).on( \"click\",\".paging\", function(){
\t\t\tpage = \$(this).data('page');\t\t\t
\t\t\tlist_agents(search_option,search_value,selected_tab);
\t\t  });
\t\t  \$(document ).on( \"change\",\".paging_select\", function(){
\t\t\tpage = \$(this).val();
\t\t\tlist_agents(search_option,search_value,selected_tab);
\t\t  });
      
       \$('.agent_tab_search').click(function(){
         \$('.agent_tab_search').removeClass('selected_tab').addClass('agent_tab_search');\t
         \$(this).addClass('selected_tab');
         selected_tab = \$(this).data('search_attr');\t
         list_agents(search_option,search_value,selected_tab);
       });
      
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
\t   
           
    });  
     
     function inactive_record( inactive_id ) { 
     var param = {'id': inactive_id 
                 };\t 
             \$.ajax({
               url : '";
        // line 104
        echo $this->env->getExtension('routing')->getPath("_inactive_user");
        echo "',
               type: 'POST',
               data: param,           
                dataType: 'json',
                beforeSend: function() {
                     \$('#agent_details').html('<div class=\"dvLoading\">&nbsp;</div>');        
                 },
              success: function( data ) {
                  if(data.Success){
                   \$('#errors').show().html( data.Message );               
                }
                list_agents(search_option,search_value,selected_tab);
              }, 
              
             error: function() {
                  \$('#agent_details').html('Currently we are unable to process your request');
              },
            complete: function(data) {
              }          
           });
    
  } 
  
   function get_model_box(agent_id){
    var model_box = \"<div id='myModal' class='modal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'><input type='hidden' name='inactive_id' id='inactive_id' value=\"+agent_id+\"><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Inactive Agent</h3></div><div class='modal-body'><p>Are you sure to inactive the record?</p></div><div class='modal-footer'><button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button><button class='btn btn-danger' id='delete_button' data-dismiss='modal'>Delete</button></div></div>\";
    \$(\"#myModal\").html(model_box);
  }  
  
     function list_agents( search_option,search_value,selected_tab ) {
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
        // line 143
        echo $this->env->getExtension('routing')->getPath("_agents");
        echo "',
        type: 'POST',
        data: search_params,
        dataType: 'html',
        beforeSend: function() {
             \$('#agent_details').html('<div class=\"dvLoading\">&nbsp;</div>');                        
          },
        success: function( data ) {    
              \$('#agent_details').html(data);
             
          },
        error: function() {
              \$('#agent_details').html('Currently we are unable to process your request');
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
        return "UsersUserManageBundle:UserManage:agentlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 143,  151 => 104,  83 => 39,  55 => 13,  52 => 9,  49 => 8,  44 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
