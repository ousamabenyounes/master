<?php

/* UsersUserManageBundle::sidebar.html.twig */
class __TwigTemplate_ce61ac56932be3bc23905d85857d04f7050bb11f0afee1832eca855d711c3160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script type=\"text/javascript\">
\$(document).ready(function(){
     \tvar bg_color = '";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["bg_color"]) ? $context["bg_color"] : $this->getContext($context, "bg_color")), "html", null, true);
        echo "';
\t\tvar font_color = '";
        // line 4
        echo twig_escape_filter($this->env, (isset($context["font_color"]) ? $context["font_color"] : $this->getContext($context, "font_color")), "html", null, true);
        echo "';
\t\tvar font_size = '";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["font_size"]) ? $context["font_size"] : $this->getContext($context, "font_size")), "html", null, true);
        echo "' ;
\t\t\$('.left-menu-section, #accordion h3').css( 'background-color', bg_color );
\t\t\$('.left-menu-section ul li a, .ui-state-default').css( 'color', font_color );
\t\t\$('.ui-widget-content a, #accordion h3').css( 'font-size', font_size );
\t
});
</script>
<div class=\"mobile-tab\">
      <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/mobile-tab.png"), "html", null, true);
        echo "\" width=\"30\" height=\"31\"></div>
      <div class=\"left-menu-section\">
        <div class=\"heading\" ><a href = \"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("_logout");
        echo "\" >Sign Out</a></div>
          ";
        // line 16
        if ((array_key_exists("usertype", $context) && ((isset($context["usertype"]) ? $context["usertype"] : $this->getContext($context, "usertype")) == 1))) {
            // line 17
            echo "             ";
            // line 18
            echo "            ";
            $this->env->loadTemplate("UsersUserManageBundle::admin_sidebar.html.twig")->display($context);
            // line 19
            echo "          ";
        } else {
            // line 20
            echo "             ";
            // line 21
            echo "            ";
            $this->env->loadTemplate("UsersUserManageBundle::reseller_sidebar.html.twig")->display($context);
            // line 22
            echo "        ";
        }
        // line 23
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle::sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  66 => 22,  63 => 21,  61 => 20,  58 => 19,  55 => 18,  53 => 17,  51 => 16,  47 => 15,  42 => 13,  31 => 5,  27 => 4,  23 => 3,  19 => 1,);
    }
}
