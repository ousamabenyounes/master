<?php

/* UsersUserManageBundle:UserManage:result.html.twig */
class __TwigTemplate_9915bf1868c49d5d9edba5e6ede7ef4b82ae02c42e3a3d2761d8db23e753f950 extends Twig_Template
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salutation", array()), 'widget');
        echo "
                </div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"form-control height_40px\">              
              <label>First Name<span class=\"red\">*</span></label>
              <div class=\"ui-ctrl\">              
              ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'widget');
        echo "
              <span id='no_li_css'>";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'errors');
        echo " </span>
              </div>
              <div class=\"clear\"></div>
            </div>
            <div class=\"form-control height_40px\">
              <label>User Name<span class=\"red\">*</span></label>
              <div class=\"ui-ctrl\">
              ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
              <span id='no_li_css'>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo " </span>
              </div>
              <div class=\"clear\"></div>
            </div>            
          </div>
          <div class=\"col\">
            <div class=\"form-control height_31px\">
              <label></label><div class=\"ui-ctrl\">&nbsp;</div>
              <div class=\"clear\"></div>
            </div>
            <div class=\"form-control height_40px\">
              <label>Last Name <span class=\"red\">*</span></label>
              <div class=\"ui-ctrl\">
              ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'widget');
        echo "
              <span id='no_li_css'>";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'errors');
        echo " </span>
              </div>
              <div class=\"clear\"></div>
            </div>            
            <div class=\"form-control\">
                <label>Password<span class=\"red\">*</span></label>
               <div class=\"ui-ctrl\">
                ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
                <span id='no_li_css'>";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo " </span>
               </div>
              <div class=\"clear\"></div>
            </div>
          </div>       
          <div class=\"clear\"></div>          
          <div >
               <div class='reseller_submit_button'>
               
                ";
        // line 70
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Login", array()), 'widget');
        echo "
               </div>
              <div class=\"clear\"></div>
            </div>
          <div class=\"clear\"></div>
      </div>
      
    ";
        // line 77
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
        return "UsersUserManageBundle:UserManage:result.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 77,  147 => 70,  135 => 61,  131 => 60,  121 => 53,  117 => 52,  101 => 39,  97 => 38,  87 => 31,  83 => 30,  73 => 23,  60 => 13,  57 => 12,  54 => 11,  48 => 7,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
