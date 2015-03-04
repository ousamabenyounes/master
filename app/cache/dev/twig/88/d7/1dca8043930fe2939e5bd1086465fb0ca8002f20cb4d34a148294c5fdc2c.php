<?php

/* UsersUserManageBundle:UserManage:manage_signature.html.twig */
class __TwigTemplate_88d71dca8043930fe2939e5bd1086465fb0ca8002f20cb4d34a148294c5fdc2c extends Twig_Template
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
        echo " <div class=\"mid-section\">
";
        // line 5
        echo "   ";
        $this->env->loadTemplate("UsersUserManageBundle::sidebar.html.twig")->display($context);
        // line 6
        echo "    <div class=\"right-panel\">
       ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
       <div class=\"heading\">
        <h1>Add Signature</h1> 
      </div>
       <div class=\"form-box\">
         <div class=\"form-head\">Signature Details</div>
           
             
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "signatureTitle", array()), 'label');
        echo "
                <div class=\"ui-ctrl\">
                ";
        // line 17
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 18
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "signatureTitle", array()), 'widget', array("value" => $this->getAttribute((isset($context["signature"]) ? $context["signature"] : $this->getContext($context, "signature")), "signatureTitle", array())));
            echo "
                 ";
        } else {
            // line 20
            echo "                  ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "signatureTitle", array()), 'widget');
            echo "
\t\t\t ";
        }
        // line 22
        echo "              </div>
                <div class=\"clear\"></div>
             
             
            
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "signature", array()), 'label');
        echo "
                <div class=\"ui-ctrl\">
                  ";
        // line 29
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 30
            echo "                    ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "signature", array()), 'widget', array("value" => $this->getAttribute((isset($context["signature"]) ? $context["signature"] : $this->getContext($context, "signature")), "signature", array())));
            echo "
                     ";
        } else {
            // line 32
            echo "                      ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "signature", array()), 'widget');
            echo "
                 ";
        }
        // line 34
        echo "               </div>
                <div class=\"clear\"></div>
                ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "signatureStatus", array()), 'label');
        echo "
                <div class=\"ui-ctrl\">
                     ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "signatureStatus", array()), 'widget');
        echo "
                </div>
                <div class=\"clear\"></div>
             
       <div class=\"clear\"></div>          
           <div class='agent_submit_button'>
           ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget', array("value" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        echo "
            ";
        // line 45
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            echo "    
                ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Edit", array()), 'widget');
            echo "  
                  ";
        } else {
            // line 47
            echo "  
                    ";
            // line 48
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Save", array()), 'widget');
            echo "
            ";
        }
        // line 50
        echo "       
        <div class=\"clear\"></div>
          </div>
   </div>
       ";
        // line 54
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
        return "UsersUserManageBundle:UserManage:manage_signature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 54,  143 => 50,  138 => 48,  135 => 47,  130 => 46,  126 => 45,  122 => 44,  113 => 38,  108 => 36,  104 => 34,  98 => 32,  92 => 30,  90 => 29,  85 => 27,  78 => 22,  72 => 20,  66 => 18,  64 => 17,  59 => 15,  48 => 7,  45 => 6,  42 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
