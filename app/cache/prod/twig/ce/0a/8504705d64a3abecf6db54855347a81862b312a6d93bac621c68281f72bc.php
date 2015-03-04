<?php

/* UsersUserManageBundle:UserManage:dashboard.html.twig */
class __TwigTemplate_ce0a8504705d64a3abecf6db54855347a81862b312a6d93bac621c68281f72bc extends Twig_Template
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
        echo "    <div class=\"mid-section\">
      ";
        // line 5
        echo "      ";
        $this->env->loadTemplate("UsersUserManageBundle::sidebar.html.twig")->display($context);
        echo " 
        <div class=\"right-panel\">
          <div class=\"heading\"></div>
            <div class=\"dashboard-box\">
              <div class=\"dashboard-head\">Dashboard </div>
\t\t\t   ";
        // line 10
        if ((array_key_exists("back_to_admin", $context) &&  !array_key_exists("back_to_reseller", $context))) {
            // line 11
            echo "\t\t\t        <div><a href = \"";
            echo $this->env->getExtension('routing')->getPath("_loginas");
            echo "/admin\" >Admin<a></div>
\t\t\t  ";
        } elseif ((        // line 12
array_key_exists("back_to_admin", $context) && array_key_exists("back_to_reseller", $context))) {
            // line 13
            echo "\t\t\t       <div><a href = \"";
            echo $this->env->getExtension('routing')->getPath("_loginas");
            echo "/admin\" >Admin<a>/<a href = \"";
            echo $this->env->getExtension('routing')->getPath("_loginas");
            echo "/reseller\">Reseller</a></div>
\t\t\t   ";
        }
        // line 14
        echo " 
                ";
        // line 15
        if ((array_key_exists("usertype", $context) && ((isset($context["usertype"]) ? $context["usertype"] : $this->getContext($context, "usertype")) == 1))) {
            // line 16
            echo "                <div class = \"dashboard_message\" >Dashboard for admin </div>
                ";
        } elseif ((        // line 17
(isset($context["usertype"]) ? $context["usertype"] : $this->getContext($context, "usertype")) == 2)) {
            // line 18
            echo "                <div class = \"dashboard_message\" >Dashboard for reseller</div>
                ";
        }
        // line 20
        echo "                <div class=\"clear\"></div>
            </div>
        </div>
    </div>
    <!--  End Mid-section Code-->
    <div class=\"footer\">© 2014 All Rights Reserved</div>
  ";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 20,  78 => 18,  76 => 17,  73 => 16,  71 => 15,  68 => 14,  60 => 13,  58 => 12,  53 => 11,  51 => 10,  42 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}
