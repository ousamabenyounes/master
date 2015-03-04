<?php

/* UsersUserManageBundle:UserManage:signatures.html.twig */
class __TwigTemplate_de641511b6ab5934abdfb332903510637bea97f25720d26020c9fe39f64f3d43 extends Twig_Template
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
        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/bootstrap.css"), "html", null, true);
        echo "\" />
<script type=\"text/javascript\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
<div class=\"mid-section\">
 ";
        // line 8
        echo "  ";
        $this->env->loadTemplate("UsersUserManageBundle::sidebar.html.twig")->display($context);
        // line 9
        echo "   <div class=\"right-panel\">
<div class=\"form-box\">
      <div  id = 'errors' class='alert alert-success hide'></div>
        <div class=\"form-head add-agents-btn no_left_padding\" >
           <div >
             <ul>          
               <li ><a href=\"#\" data-search_attr='1' class='signature_tab_search default_tab' >Show Active</a></li>
               <li><a href=\"#\" data-search_attr='2' class='signature_tab_search' >Show Inactive</a></li>          
               <li><a href=\"#\" data-search_attr='3' class='signature_tab_search' >Show All</a></li>
             </ul>
           </div> 
            <div class=\"padding_left_741px\">
              <ul>
                <li class=\"add_signature\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("manage_signature");
        echo "\" >Add New Signature</a></li>            
              </ul>
            </div>          
            <div class=\"clear\"></div>
        </div>        
        
        <div class=\"data-table-wraper\" id = 'signature_list'></div>
        <div class=\"clear\"></div>
      </div>   
   </div>
</div>

 <!--  End Mid-section Code-->
  <div class=\"footer\">© 2014 All Rights Reserved</div>
    <script language=\"javascript\" type=\"text/javascript\">
     var selected_tab = '1';
        \$(document).ready(function(){
              list_signatures( selected_tab );
              
              \$('.signature_tab_search').click(function(){
          
              \$('.signature_tab_search').removeClass('selected_tab').addClass('signature_tab_search');\t
              \$(this).addClass('selected_tab');\t\t\t\t\t\t
              selected_tab = \$(this).data('search_attr');\t\t\t
              list_signatures(selected_tab);
              
              });
              
              \$(document).on(\"click\",\".inactive_signature\", function() {
                 var signature_id = \$(this).data('signature_id');
                  get_model_box(signature_id);
              });
              
            \$(document).on( \"click\",\"#inactive_button\", function(){
            var inactive_id = \$('#inactive_id').val();
           inactive_signature(inactive_id);
       });
          
       });
       
       
       function inactive_signature(inactive_id) {
         var data = { 'id': inactive_id };
         \$.ajax({
           url: '";
        // line 66
        echo $this->env->getExtension('routing')->getPath("inactive_signature");
        echo "',
           type: 'POST',
           data: data,
           dataType: 'json',
           beforeSend: function() {
                \$('#signature_list').html('<div class=\"dvLoading\">&nbsp;</div>');
           },
           sucess: function(data) {
           },
            error: function() {
              \$('#signature_list').html('Currently we are unable to process your request');
          },
          complete: function() {
          }           
         });
       }
    function get_model_box(signature_id){
    var model_box = \"<div id='myModal' class='modal' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'><input type='hidden' name='inactive_id' id='inactive_id' value=\"+signature_id+\"><div class='modal-header'><button type='button' class='close' data-dismiss='modal' aria-hidden='true'>×</button><h3 id='myModalLabel'>Inactive Signature</h3></div><div class='modal-body'><p>Are you sure to inactive the Signature?</p></div><div class='modal-footer'><button class='btn' data-dismiss='modal' aria-hidden='true'>Cancel</button><button class='btn btn-danger' id='inactive_button' data-dismiss='modal'>Yes</button></div></div>\";
    \$(\"#myModal\").html(model_box);
  }
       
       function list_signatures(selected_tab){\t\t
\t\t var search_params = {
\t\t\t\t\t\t\t  'selected_tab' : selected_tab,
\t\t\t\t\t\t\t  'status'       : '1',
\t\t\t\t\t\t\t  
\t\t\t\t\t\t\t };
\t\t \t\t\t\t\t 
\t\t \$.ajax({
          url: '";
        // line 95
        echo $this->env->getExtension('routing')->getPath("signatures");
        echo "',
          type: 'POST',
          data: search_params,
          dataType: 'html',\t\t 
          beforeSend: function() {
             \$('#signature_list').html('<div class=\"dvLoading\">&nbsp;</div>');                        
          },
          success: function( data,status ) {   
             \$('#signature_list').html(data);
          },
          error: function() {
              \$('#signature_list').html('Currently we are unable to process your request');
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
        return "UsersUserManageBundle:UserManage:signatures.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 95,  114 => 66,  67 => 22,  52 => 9,  49 => 8,  44 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
