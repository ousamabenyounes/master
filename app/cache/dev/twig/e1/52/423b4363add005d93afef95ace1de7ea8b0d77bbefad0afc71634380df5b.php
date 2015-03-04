<?php

/* UsersUserManageBundle:UserManage:resellerlogo.html.twig */
class __TwigTemplate_e152423b4363add005d93afef95ace1de7ea8b0d77bbefad0afc71634380df5b extends Twig_Template
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
        echo " <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
 <script src=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"> </script> 
 
  ";
        // line 7
        $this->env->loadTemplate("ComurImageBundle:Form:croppable_image_modal.html.twig")->display(array_merge($context, array("include_jquery" => false, "include_bootstrap" => false)));
        // line 8
        echo "   <!--  End Mid-section Code-->
  <div class=\"footer\">© 2014 All Rights Reserved</div>
";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:resellerlogo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 8,  49 => 7,  44 => 5,  39 => 4,  36 => 3,  11 => 1,);
    }
}
