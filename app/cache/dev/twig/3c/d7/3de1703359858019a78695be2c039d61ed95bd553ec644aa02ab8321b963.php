<?php

/* UsersUserManageBundle:UserManage:resellerinfo.html.twig */
class __TwigTemplate_3cd73de1703359858019a78695be2c039d61ed95bd553ec644aa02ab8321b963 extends Twig_Template
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
        echo "  <script type=\"text/javascript\">
    var path = '";
        // line 4
        echo $this->env->getExtension('routing')->getPath("checkusername", array("id" => "2"));
        echo "';
   
  </script>
 <script type=\"text/javascript\" src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/reseller.js"), "html", null, true);
        echo "\"></script>
   <!--  start Mid-section Code-->
    <div class=\"mid-section\">
    ";
        // line 11
        echo "    ";
        $this->env->loadTemplate("UsersUserManageBundle::sidebar.html.twig")->display($context);
        // line 12
        echo "    <div class=\"right-panel\">
      ";
        // line 13
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
      <div class=\"heading\">
        <h1>Reseller Information</h1>
      </div>
      <div class=\"form-box\">
        <div class=\"form-head\">General Information</div>
          <div class=\"col\">
            <div class=\"form-control\">
              <label>Salutation</label>
                <div class=\"ui-ctrl\">
                 ";
        // line 23
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 24
            echo "                   ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salutation", array()), 'widget', array("value" => $this->getAttribute((isset($context["reseller"]) ? $context["reseller"] : $this->getContext($context, "reseller")), "salutation", array())));
            echo "
              ";
        } else {
            // line 25
            echo "  
                   ";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salutation", array()), 'widget');
            echo "
                    ";
        }
        // line 28
        echo "                </div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"form-control height_40px\">              
              <label>First Name<span class=\"red\">*</span></label>
              <div class=\"ui-ctrl\">
              ";
        // line 34
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 35
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'widget', array("value" => $this->getAttribute((isset($context["reseller"]) ? $context["reseller"] : $this->getContext($context, "reseller")), "firstName", array())));
            echo "
              ";
        } else {
            // line 36
            echo "  
                ";
            // line 37
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'widget');
            echo "
              ";
        }
        // line 39
        echo "              <span id='no_li_css'>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'errors');
        echo " </span>
              </div>
              <div class=\"clear\"></div>
            </div>
            ";
        // line 43
        if ( !(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
            // line 44
            echo "            <div class=\"form-control height_40px\">
              <label>User Name<span class=\"red\">*</span></label>
              <div class=\"ui-ctrl\">
\t\t\t 
              ";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
            echo "
\t\t\t 
              <span id='no_li_css'>";
            // line 50
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
            echo " </span>
              </div>
              <div class=\"clear\"></div>
            </div>
            
\t\t\t";
        }
        // line 56
        echo "      <div class=\"form-control height_40px\">
              <label>Test Account</label>
              <div class=\"ui-ctrl\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "is_test_account", array()), 'widget');
        echo "
              </div>
              <div class=\"clear\"></div>
            </div> 
\t   <div class=\"form-control height_40px\">
              <label>Email</label>
              <div class=\"ui-ctrl\">
              ";
        // line 66
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 67
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("value" => $this->getAttribute((isset($context["reseller"]) ? $context["reseller"] : $this->getContext($context, "reseller")), "email", array())));
            echo "
              ";
        } else {
            // line 68
            echo "  
                ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
            echo "
              ";
        }
        // line 71
        echo "              <span id='no_li_css'>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo " </span>
              </div>
              <div class=\"clear\"></div>
            </div> 
          </div>
          <div class=\"col\">
            
            <div class=\"form-control\">
                 <label>Account Type</label>
                 <div class=\"ui-ctrl\">
                     ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "account_type", array()), 'widget');
        echo "</div>
                  <div class=\"clear\"></div>
            </div>
            <div class=\"form-control height_40px\">
              <label>Last Name <span class=\"red\">*</span></label>
              <div class=\"ui-ctrl\">
              ";
        // line 87
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 88
            echo "              ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'widget', array("value" => $this->getAttribute((isset($context["reseller"]) ? $context["reseller"] : $this->getContext($context, "reseller")), "lastName", array())));
            echo "
               ";
        } else {
            // line 89
            echo "  
                 ";
            // line 90
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'widget');
            echo "
              ";
        }
        // line 92
        echo "              <span id='no_li_css'>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'errors');
        echo " </span>
              </div>
              <div class=\"clear\"></div>
            </div>     
            ";
        // line 96
        if ( !(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
            // line 97
            echo "            <div class=\"form-control\">
                <label>Password<span class=\"red\">*</span></label>
                <div class=\"ui-ctrl\">                
                ";
            // line 100
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
            echo "                
                <span id='no_li_css'>";
            // line 101
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
            echo " </span>               
               </div>
              <div class=\"clear\"></div>
            </div>
             ";
        }
        // line 106
        echo "             <div class=\"form-control\">
                ";
        // line 107
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'label');
        echo "
                <div class=\"ui-ctrl\">
               
                   ";
        // line 110
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget');
        echo "
                           
               </div>
              <div class=\"clear\"></div>
            </div>
          </div>       
          <div class=\"clear\"></div>
          <div class=\"col\" style='border:0px solid #000000;'>
            <div class=\"form-control\">
              &nbsp;
            </div>
          </div>  
          <div class=\"col\" style='border:0px solid #000000;'>
            <div class=\"form-control\">
              <div>
                   <div class=\"height_40px padding_right_6px\">
                     ";
        // line 126
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget', array("value" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        echo "
                    ";
        // line 127
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Submit", array()), 'widget');
        echo "
                   </div>
                  <div class=\"clear\"></div>
              </div>
            </div>
          </div>  
          <div class=\"clear\"></div>
      </div>
    ";
        // line 135
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "  
</div>
</div>
<!--  End Mid-section Code-->
<div class=\"footer\">© 2014 All Rights Reserved</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:resellerinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  283 => 135,  272 => 127,  268 => 126,  249 => 110,  243 => 107,  240 => 106,  232 => 101,  228 => 100,  223 => 97,  221 => 96,  213 => 92,  208 => 90,  205 => 89,  199 => 88,  197 => 87,  188 => 81,  174 => 71,  169 => 69,  166 => 68,  160 => 67,  158 => 66,  148 => 59,  143 => 56,  134 => 50,  129 => 48,  123 => 44,  121 => 43,  113 => 39,  108 => 37,  105 => 36,  99 => 35,  97 => 34,  89 => 28,  84 => 26,  81 => 25,  75 => 24,  73 => 23,  60 => 13,  57 => 12,  54 => 11,  48 => 7,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
