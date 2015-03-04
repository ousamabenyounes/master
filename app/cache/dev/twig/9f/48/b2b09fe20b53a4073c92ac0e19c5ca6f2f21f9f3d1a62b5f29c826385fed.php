<?php

/* UsersUserManageBundle::layout.html.twig */
class __TwigTemplate_9f48b2b09fe20b53a4073c92ac0e19c5ca6f2f21f9f3d1a62b5f29c826385fed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content_header' => array($this, 'block_content_header'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('head', $context, $blocks);
        // line 35
        echo "
";
        // line 36
        $this->displayBlock('title', $context, $blocks);
        // line 37
        echo "
  ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "</body>";
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        echo "    

<link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/reset.css"), "html", null, true);
        echo "\" />    
<link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/main-style.css"), "html", null, true);
        echo "\" />    

<link rel=\"stylesheet\" media=\"only all and (min-width: 480px)\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/480.css"), "html", null, true);
        echo "\" />    
<link rel=\"stylesheet\" media=\"only all and (min-width: 768px)\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/768.css"), "html", null, true);
        echo "\" />    
<link rel=\"stylesheet\" media=\"only all and (min-width: 992px)\"href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/992.css"), "html", null, true);
        echo "\" /> 
<link rel=\"stylesheet\" media=\"only all and (min-width: 992px)\"href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/jquery-ui.css"), "html", null, true);
        echo "\" /> 


   
<script type=\"text/javascript\" src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/jquery.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<!--script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/jquery-1.10.2.js"), "html", null, true);
        echo "\"></script-->
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/jquery-ui.js"), "html", null, true);
        echo "\"></script>


<script type=\"text/javascript\"> 
    \$(document).ready(function(){
        \$(\".mobile-tab\").click(function(){
            \$(\".left-menu-section\").toggleClass(\"hide-show\");
            \$(\".mobile-tab\").toggleClass(\"btn-show\");
        });
    });
</script>
 <script>
\$(function() {
\$( \"#accordion\" ).accordion();
});
</script>
";
    }

    // line 36
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
        // line 39
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo "    
      <div class=\"flash-message\">
      <em>Notice</em>: ";
            // line 41
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
      </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "    
    ";
        // line 45
        $this->displayBlock('content_header', $context, $blocks);
        // line 64
        echo "        <div class=\"block\">
        ";
        // line 65
        $this->displayBlock('content', $context, $blocks);
        // line 67
        echo "        </div>
        ";
        // line 68
        if (array_key_exists("code", $context)) {
            // line 69
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">";
            // line 71
            echo (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"));
            echo "</div>
        </div>
        ";
        }
        // line 74
        echo "  ";
    }

    // line 45
    public function block_content_header($context, array $blocks = array())
    {
        echo "        
        
        ";
        // line 47
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 62
        echo "    <div style=\"clear: both\"></div>
    ";
    }

    // line 47
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 48
        echo "          <div class=\"wraper\">
          <!--Start Header Code-->
          <div class=\"header\">
\t\t  <div class=\"logo\">
\t\t  <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("bundles/UsersUserManage/images/" . (isset($context["account_logo"]) ? $context["account_logo"] : $this->getContext($context, "account_logo")))), "html", null, true);
        echo "\" width=\"207\" height=\"38\">
\t\t  </div>              
              <div class=\"masagebox\">
                <span class=\"con1\">Contact Management for </span>
                <span class=\"success\">Successful</span>
                <span class=\"real\">Real Estate Agents and Brokers</span>
              </div>
          </div>
          <!--  End Header Code-->
        ";
    }

    // line 65
    public function block_content($context, array $blocks = array())
    {
        // line 66
        echo "        ";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle::layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  205 => 66,  202 => 65,  188 => 52,  182 => 48,  179 => 47,  174 => 62,  172 => 47,  166 => 45,  162 => 74,  156 => 71,  152 => 69,  150 => 68,  147 => 67,  145 => 65,  142 => 64,  140 => 45,  137 => 44,  128 => 41,  120 => 39,  117 => 38,  111 => 36,  90 => 18,  86 => 17,  82 => 16,  78 => 15,  71 => 11,  67 => 10,  63 => 9,  59 => 8,  54 => 6,  50 => 5,  44 => 3,  40 => 75,  38 => 38,  35 => 37,  33 => 36,  30 => 35,  28 => 3,  25 => 2,);
    }
}
