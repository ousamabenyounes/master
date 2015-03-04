<?php

/* UsersUserManageBundle::login-layout.html.twig */
class __TwigTemplate_c5111e74f306bdd8218bd6a33cf1622615eea172277833905289f42b10256a08 extends Twig_Template
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
        // line 1
        echo "  ";
        $this->displayBlock('head', $context, $blocks);
        // line 32
        echo "
";
        // line 33
        $this->displayBlock('title', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('body', $context, $blocks);
    }

    // line 1
    public function block_head($context, array $blocks = array())
    {
        // line 2
        echo "    <link rel=\"icon\" sizes=\"16x16\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    ";
        // line 4
        echo "      <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/bootstrap.min.css"), "html", null, true);
        echo "\" />
    ";
        // line 6
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/login-main-style.css"), "html", null, true);
        echo "\" />
    <!--fonts-->
<link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic"), "html", null, true);
        echo "\" />
<!--fonts end-->
<!--Responsive css -->
<link rel=\"stylesheet\" media=\"only all and (max-width: 1024px)\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/style_992.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" media=\"only all and (max-width: 767px)\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/style_768.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" media=\"only all and (max-width: 480px)\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/css/style_480.css"), "html", null, true);
        echo "\" />

<!--Responsive css end -->
<script type=\"text/javascript\" src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/jquery.min.js"), "html", null, true);
        echo "\"></script>   
<script type=\"text/javascript\" src=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script> 
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
<script>
function popups()
{
alert(\"Checking Popup Settings\");
}

function cookies()
{
alert(\"CONGRATS!! Your browser Cookies are enabled.\");
}
</script>

";
    }

    // line 33
    public function block_title($context, array $blocks = array())
    {
        echo "Demo Bundle";
    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "notice"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 37
            echo "        <div class=\"flash-message\">
            <em>Notice</em>: ";
            // line 38
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "
    ";
        // line 42
        $this->displayBlock('content_header', $context, $blocks);
        // line 51
        echo "
    <div class=\"block\">
        ";
        // line 53
        $this->displayBlock('content', $context, $blocks);
        // line 54
        echo "    </div>

    ";
        // line 56
        if (array_key_exists("code", $context)) {
            // line 57
            echo "        <h2>Code behind this page</h2>
        <div class=\"block\">
            <div class=\"symfony-content\">{</div>
        </div>
    ";
        }
    }

    // line 42
    public function block_content_header($context, array $blocks = array())
    {
        // line 43
        echo "        <ul id=\"menu\">
            ";
        // line 44
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 47
        echo "        </ul>

        <div style=\"clear: both\"></div>
    ";
    }

    // line 44
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 45
        echo "   
            ";
    }

    // line 53
    public function block_content($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle::login-layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  180 => 53,  175 => 45,  172 => 44,  165 => 47,  163 => 44,  160 => 43,  157 => 42,  148 => 57,  146 => 56,  142 => 54,  140 => 53,  136 => 51,  134 => 42,  131 => 41,  122 => 38,  119 => 37,  114 => 36,  111 => 35,  105 => 33,  87 => 18,  83 => 17,  79 => 16,  73 => 13,  69 => 12,  65 => 11,  59 => 8,  53 => 6,  48 => 4,  43 => 2,  40 => 1,  36 => 35,  33 => 34,  31 => 33,  28 => 32,  25 => 1,);
    }
}
