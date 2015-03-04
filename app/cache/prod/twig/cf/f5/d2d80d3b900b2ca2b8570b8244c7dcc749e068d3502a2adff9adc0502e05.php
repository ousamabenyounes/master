<?php

/* UsersUserManageBundle:UserManage:resellerlist.html.twig */
class __TwigTemplate_cff5d2d80d3b900b2ca2b8570b8244c7dcc749e068d3502a2adff9adc0502e05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("UsersUserManageBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

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

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo " 
  <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/bootstrap.css"), "html", null, true);
        echo "\" />
  <!--link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
  <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/bootstrap-responsive.min.css"), "html", null, true);
        echo "\" /-->
  
<script type=\"text/javascript\" src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
  <div class=\"mid-section\">
  ";
        // line 14
        echo "  ";
        $this->env->loadTemplate("UsersUserManageBundle::sidebar.html.twig")->display($context);
        // line 15
        echo "    <div class=\"right-panel\">       
      <!--div class=\"heading\"><h1>Reseller list</h1> </div-->
      <div class=\"form-box\">
        <div class=\"form-head\">Search</div>
        <div class=\"search-wraper\">
          <select name=\"reseller_search_options\" id='reseller_search_options' >
              <option value='first_name' >First Name</option>
              <option value='last_name' >Last Name</option>
              <option value='email' >Email</option>
          </select>
          <input name=\"reseller_search_value\" type=\"text\" id=\"reseller_search_value\">
          <input name=\"search\" type=\"button\" value=\"Search\" id='reseller_search' >
        </div>
        <div class=\"clear\"></div>
      </div>
      
      <div class=\"form-box\">
      <div  id = 'errors' class='alert alert-success hide'></div>
        <div class=\"form-head add-agents-btn no_left_padding\" >
            <div >
              <ul>          
                <li ><a href=\"#\" data-search_attr='1' class='reseller_tab_search default_tab' >Show Active</a></li>
                <li><a href=\"#\" data-search_attr='0' class='reseller_tab_search' >Show Inactive</a></li>          
                <li><a href=\"#\" data-search_attr='3' class='reseller_tab_search' >Show All</a></li>
              </ul>
            </div> 
            <div class=\"padding_left_741px\">
              <ul>
                <li class=\"add_reseller\"><a href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("resellerinfo");
        echo "\" >Add New Reseller</a></li>            
              </ul>
            </div>          
            <div class=\"clear\"></div>
        </div>        
        
        <div class=\"data-table-wraper\" id = 'reseller_details'></div>
        <div class=\"clear\"></div>
      </div>
    </div>
  </div>
  <!--  End Mid-section Code-->
  <div class=\"footer\">© 2014 All Rights Reserved</div>


   <script language=\"javascript\" type=\"text/javascript\">
\tvar search_option = '';
\tvar search_value = '';
\tvar selected_tab = '1';
\tvar page = '1';
\t\$('.default_tab').addClass('selected_tab');
    \$(document).ready(function(){
      
\t\t  list_resellers( search_option, search_value, selected_tab );
\t\t  \$('#reseller_search').click(function(){
\t\t\tvar search_option = \$('#reseller_search_options').val();
\t\t\tvar search_value = \$.trim(\$('#reseller_search_value').val());
\t\t\tif(!search_value.length){
\t\t\t\treturn false;
\t\t\t}
\t\t\tlist_resellers(search_option,search_value,selected_tab);
\t\t\t
\t\t  });
\t\t  
\t\t  \$(document ).on( \"click\",\".paging\", function(){
          page = \$(this).data('page');
          list_resellers(search_option,search_value,selected_tab);
\t\t  });
      
\t\t  \$(document ).on( \"change\",\".paging_select\", function(){
          page = \$(this).val();
          list_resellers(search_option,search_value,selected_tab);
\t\t  });
      
\t\t  \$('.reseller_tab_search').click(function(){
      
          \$('.reseller_tab_search').removeClass('selected_tab').addClass('reseller_tab_search');\t
          \$(this).addClass('selected_tab');\t\t\t\t\t\t
          selected_tab = \$(this).data('search_attr');\t\t\t
          list_resellers(search_option,search_value,selected_tab);
          
\t\t  });
      \$(document).on( \"click\",\".delete_reseller\", function(){
          var reseller_id = \$(this).data('reseller_id');
          get_model_box(reseller_id);
       });\t\t  
       \$(document).on( \"click\",\"#delete_button\", function(){
          var inactive_id = \$('#inactive_id').val();
          inactive_record(inactive_id);
       });
       
    });
    
   function inactive_record( inactive_id ){
   
   
      var data = { 'id': inactive_id };
      \$.ajax({
          url: '";
        // line 111
        echo $this->env->getExtension('routing')->getPath("_inactive_user");
        echo "',
          type: 'POST',
          data: data,
          dataType: 'json',\t\t 
          beforeSend: function() {
             \$('#reseller_details').html('<div class=\"dvLoading\">&nbsp;</div>');                        
          },
          success: function( data ) {   
             if(data.Success){
               \$('#errors').show().html( data.Message );               
             }
             list_resellers(search_option,search_value,selected_tab);
          },
          error: function() {
              \$('#reseller_details').html('Currently we are unable to process your request');
          },
          complete: function() {
          }
        });
   } 
    
    
  function get_model_box(reseller_id){
    var model_box = \"<div id='myModal' class='modal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'><input type='hidden' name='inactive_id' id='inactive_id' value=\"+reseller_id+\"><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Inactive Reseller</h3></div><div class='modal-body'><p>Are you sure to inactive the record?</p></div><div class='modal-footer'><button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button><button class='btn btn-danger' id='delete_button' data-dismiss='modal'>Delete</button></div></div>\";
    \$(\"#myModal\").html(model_box);
  }  
\tfunction list_resellers(search_option,search_value,selected_tab){\t\t
\t\t var search_params = {'search_option': search_option,
\t\t\t\t\t\t\t  'search_value' : search_value,
\t\t\t\t\t\t\t  'selected_tab' : selected_tab,
\t\t\t\t\t\t\t  'status'       : '1',
\t\t\t\t\t\t\t  'page' \t\t     : page
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t };
\t\t \t\t\t\t\t 
\t\t \$.ajax({
          url: '";
        // line 147
        echo $this->env->getExtension('routing')->getPath("_resellers", array("id" => "2"));
        echo "',
          type: 'POST',
          data: search_params,
          dataType: 'html',\t\t 
          beforeSend: function() {
             \$('#reseller_details').html('<div class=\"dvLoading\">&nbsp;</div>');                        
          },
          success: function( data,status ) {   
             \$('#reseller_details').html(data);
          },
          error: function() {
              \$('#reseller_details').html('Currently we are unable to process your request');
          },
          complete: function() {
          }
        });
\t}
  </script>
";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:resellerlist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 147,  168 => 111,  97 => 43,  67 => 15,  64 => 14,  59 => 11,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  39 => 5,  36 => 4,  11 => 2,);
    }
}
