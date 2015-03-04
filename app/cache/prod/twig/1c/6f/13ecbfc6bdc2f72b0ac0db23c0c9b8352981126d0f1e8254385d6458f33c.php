<?php

/* UsersUserManageBundle:UserManage:theme_setting.html.twig */
class __TwigTemplate_1c6f13ecbfc6bdc2f72b0ac0db23c0c9b8352981126d0f1e8254385d6458f33c extends Twig_Template
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
        echo "<script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/account.js"), "html", null, true);
        echo "\"></script> 
<script type=\"text/javascript\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/jscolor.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
\$(document).ready(function(){
\t\$('#left_navigation_bg_color, #left_navigation_font_color, #left_navigation_font_size').change(function(){
\t\tset_theme();\t\t
\t});
\t\$('#left_navigation_bg_color, #left_navigation_font_color, #left_navigation_font_size').ready(function(){
\t\tset_theme();\t\t
\t});
\tfunction set_theme(){\t\t
\t\t\$('.left-menu-section, #accordion h3').css( 'background-color', \$( '#left_navigation_bg_color' ).val() );
\t\t\$('.left-menu-section ul li a, .ui-state-default').css('color', \$( '#left_navigation_font_color' ).val());
\t\t\$('.ui-widget-content a, #accordion h3').css('font-size', \$( '#left_navigation_font_size' ).val());
\t}\t
});
</script>
  <!--  start Mid-section Code -->
  <div class=\"mid-section\">
    ";
        // line 23
        echo "    ";
        $this->env->loadTemplate("UsersUserManageBundle::sidebar.html.twig")->display($context);
        // line 24
        echo "    <div class=\"right-panel\">
      <div class=\"heading\">
        <h1>Theme Setting</h1> 
      </div>
     <form action = \"";
        // line 28
        echo $this->env->getExtension('routing')->getPath("_pagetheme");
        echo "\" method = \"post\"  >
      <div class=\"form-box\">
          <div class=\"col\" style='border:0px solid #000000;width:87%'>
              <div class=\"form-control\">
\t\t\t\t  <label>Background Color</label>
\t\t\t\t\t<div class=\"ui-ctrl\">
\t\t\t\t\t\t<input type= \"text\" name = \"bg_color\" class = \"color\" value = \"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["bg_color"]) ? $context["bg_color"] : $this->getContext($context, "bg_color")), "html", null, true);
        echo "\" id=\"left_navigation_bg_color\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
            </div> 
           <div class=\"form-control\">
\t\t\t\t  <label>Font Color</label>
\t\t\t\t\t<div class=\"ui-ctrl\">
\t\t\t\t\t\t<input type= \"text\" name = \"font_color\" class = \"color\" value = \"";
        // line 41
        echo twig_escape_filter($this->env, (isset($context["font_color"]) ? $context["font_color"] : $this->getContext($context, "font_color")), "html", null, true);
        echo "\" id = \"left_navigation_font_color\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
            </div> 
           <div class=\"form-control\">
\t\t\t\t  <label>Font Size</label>
\t\t\t\t\t<div class=\"ui-ctrl\">
\t\t\t\t\t\t<input type= \"text\" name = \"font_size\" value = \"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["font_size"]) ? $context["font_size"] : $this->getContext($context, "font_size")), "html", null, true);
        echo "\" id = \"left_navigation_font_size\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"clear\"></div>
            </div>
      \t\t<div align=\"right\" style=\"padding-right:20px;\"><input name=\"submit\" type=\"submit\" class=\"btn\" value=\"Submit\"></div>\t
          </div>
        <div class=\"clear\"></div>
      </div>
\t  </form>
    </div>  
  </div>

<!--  End Mid-section Code-->
<div class=\"footer\">© 2014 All Rights Reserved</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:theme_setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 48,  93 => 41,  83 => 34,  74 => 28,  68 => 24,  65 => 23,  44 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}
