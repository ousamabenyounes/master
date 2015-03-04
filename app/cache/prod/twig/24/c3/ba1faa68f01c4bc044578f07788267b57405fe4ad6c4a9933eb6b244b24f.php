<?php

/* UsersUserManageBundle:UserManage:change_password.html.twig */
class __TwigTemplate_24c3ba1faa68f01c4bc044578f07788267b57405fe4ad6c4a9933eb6b244b24f extends Twig_Template
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

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<script type= \"text/javascript\">
    \$().ready(function() {
         \$(\"#change_password\").validate({
             rules: {
                 old_passowrd: {
                         required: true,
                 }
             },
             
             message: {
                    old_passowrd: {
                         required: \"Please enter the old password\",
                 }
             },
             
        });
     });
</script>
<!--  start Mid-section Code -->
<div class=\"mid-section\">
 ";
        // line 24
        echo "    ";
        $this->env->loadTemplate("UsersUserManageBundle::sidebar.html.twig")->display($context);
        echo " 
    <div class=\"right-panel\">
        <div class=\"heading\">
               <h1>Forgot Password</h1>
        </div>
            <form action = \"\" method = \"post\" id = \"change_password\" >
              <div class=\"form-box\">
                    <div class=\"form-head\">Password Setting</div>
                    <div class=\"form-control\">
                    <label><span class=\"red\">*</span>Old Password :</label>
                    <div class=\"ui-ctrl\">
                        <input type = \"text\" name = \"old_passowrd\"  value = \"\"></div>
                     <span id='no_li_css'></span>
                     <div class=\"clear\"></div>
                     </div>
                    
                    <div class=\"form-control\">
          <label><span class=\"red\">*</span>New Password :</label>
            <div class=\"ui-ctrl\">
\t\t  <input type = \"text\" name = \"new_passowrd\"  value = \"\">\t
\t    </div>
            <span id='no_li_css'></span>
            <div class=\"clear\"></div>
          </div>
                    
                  <div class=\"form-control\">
          <label><span class=\"red\">*</span>Confirm Password :</label>
            <div class=\"ui-ctrl\">
\t\t  <input type = \"text\" name = \"confirm_passowrd\"  value = \"\">\t
\t    </div>
            <span id='no_li_css'></span>
            <div class=\"clear\"></div>
          </div>  
                <div class=\"clear\"></div>              
            <div align=\"right\" style=\"padding-right:20px;\">
                <input name=\"\" type=\"submit\" class=\"btn\" value=\"Submit\">
            </div>       
                  </div>    
            </form>    
    </div>
</div>        
<!--  End Mid-section Code-->

<div class=\"footer\">© 2014 All Rights Reserved</div>
";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:change_password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 24,  39 => 3,  36 => 2,  11 => 1,);
    }
}
