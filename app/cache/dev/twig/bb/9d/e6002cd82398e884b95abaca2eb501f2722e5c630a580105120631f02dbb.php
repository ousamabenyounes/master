<?php

/* UsersUserManageBundle::admin_sidebar.html.twig */
class __TwigTemplate_bb9de6002cd82398e884b95abaca2eb501f2722e5c630a580105120631f02dbb extends Twig_Template
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
        echo " <ul>
    <li>Reseller</li>
    <li><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("_addaccount");
        echo "\">Add Reseller</a></li>
    <li><a href=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("_resellerlist");
        echo "\">Reseller list</a></li>
 </ul>";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle::admin_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  23 => 3,  19 => 1,);
    }
}
