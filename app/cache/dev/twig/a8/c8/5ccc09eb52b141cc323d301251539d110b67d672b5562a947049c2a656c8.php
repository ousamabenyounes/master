<?php

/* UsersUserManageBundle:UserManage:accountlist_content.html.twig */
class __TwigTemplate_a8c85ccc09eb52b141cc323d301251539d110b67d672b5562a947049c2a656c8 extends Twig_Template
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
        echo "<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\">
 <thead>
    <tr>   
      <th scope=\"col\">Company</th>
      <th scope=\"col\">Address</th>     
      <th scope=\"col\">Email</th>
       <th scope=\"col\" width=\"11%\">Phone</th>
      <th scope=\"col\" width=\"11%\">Action</th>
    </tr>
  </thead>
  <tbody>
   ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "no_record_message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 13
            echo "        <tr > <td colspan='5' class = 'no_record_message' >";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " </td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "no_record_message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 16
            echo "        <tr > <td colspan='5' class = 'no_record_message' >";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " </td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "   ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "record_insert_message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 19
            echo "        <tr > <td colspan='5' class = 'no_record_message' >";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " </td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "     ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "record_update_message"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "        <tr > <td colspan='5' class = 'no_record_message' >";
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo " </td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    <tr ><td colspan='5' class = 'no_record_message' style= 'display:none'></td></tr>
   ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["accounts"]) ? $context["accounts"] : $this->getContext($context, "accounts")));
        foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
            // line 26
            echo "\t  <tr>\t\t
\t\t<td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "name", array()), "html", null, true);
            echo "</td>
\t\t<td> ";
            // line 28
            echo twig_escape_filter($this->env, (twig_slice($this->env, strip_tags($this->getAttribute($context["account"], "address", array())), 0, 15) . "..."), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "city", array()), "html", null, true);
            echo ",";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["account"], "state_entity", array()), "name", array()), "html", null, true);
            echo "</td>\t\t
\t\t<td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "email", array()), "html", null, true);
            echo "</td>
    <td> ";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "primaryPhone", array()), "html", null, true);
            echo "</td>
\t\t <td><img src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/login-icon.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\"> 
     <a href = \"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_addaccount");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "id", array()), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/edit-icon-u.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\"> </a>
     <img class=\"delete_agent\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/delete-icon.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\" data-toggle=\"modal\" data-target=\"#myModal\" data-agent_id = \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "id", array()), "html", null, true);
            echo "\" title='Inactivate account'></td>
\t  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "  
  </tbody>
</table>
";
        // line 39
        $this->env->loadTemplate("UsersUserManageBundle::pagination.html.twig")->display($context);
        // line 40
        echo "<div id=\"myModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\"></div>";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:accountlist_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 40,  145 => 39,  140 => 36,  129 => 33,  121 => 32,  117 => 31,  113 => 30,  109 => 29,  101 => 28,  97 => 27,  94 => 26,  90 => 25,  87 => 24,  78 => 22,  73 => 21,  64 => 19,  59 => 18,  50 => 16,  45 => 15,  36 => 13,  32 => 12,  19 => 1,);
    }
}
