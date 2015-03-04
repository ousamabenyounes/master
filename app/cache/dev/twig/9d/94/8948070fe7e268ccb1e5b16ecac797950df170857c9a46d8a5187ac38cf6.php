<?php

/* UsersUserManageBundle:UserManage:signature.html.twig */
class __TwigTemplate_9d948948070fe7e268ccb1e5b16ecac797950df170857c9a46d8a5187ac38cf6 extends Twig_Template
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
       ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
  <div><input type=\"submit\" value=\"Submit\" /></div>
       ";
        // line 10
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
        return "UsersUserManageBundle:UserManage:signature.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 10,  52 => 8,  48 => 7,  45 => 6,  42 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
