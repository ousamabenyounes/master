<?php

/* UsersUserManageBundle:UserManage:agentlist_content.html.twig */
class __TwigTemplate_80ee5f8150b3c9e28728acaf574a9bd986686751762b35395270ce455161b9a0 extends Twig_Template
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
      <th scope=\"col\">Last Name</th>
      <th scope=\"col\">First Name</th>
      <th scope=\"col\">Date Added</th>
      <th scope=\"col\">Email</th>
      <th scope=\"col\">Action</th>
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
        echo "   ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "record_insert_message"), "method"));
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
        echo "     ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "record_update_message"), "method"));
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "record_delete_message"), "method"));
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
        $context['_seq'] = twig_ensure_traversable((isset($context["agents"]) ? $context["agents"] : $this->getContext($context, "agents")));
        foreach ($context['_seq'] as $context["_key"] => $context["agent"]) {
            // line 26
            echo "\t  <tr>\t\t
\t\t<td> ";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "lastName", array()), "html", null, true);
            echo "</td>
\t\t<td> ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "firstName", array()), "html", null, true);
            echo "</td>
\t\t<td> ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["agent"], "createdOn", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "email", array()), "html", null, true);
            echo "</td>
\t\t <td><a href = \"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("_loginas");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "id", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/login-icon.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\"></a> 
     <a href = \"";
            // line 32
            echo $this->env->getExtension('routing')->getPath("_agentinfo");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "id", array()), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/edit-icon-u.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\"> </a>
     <img class=\"delete_agent\" src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/delete-icon.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\" data-toggle=\"modal\" data-target=\"#myModal\" data-agent_id = \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "id", array()), "html", null, true);
            echo "\" title='Inactivate agent'>
     <a href = \"";
            // line 34
            echo $this->env->getExtension('routing')->getPath("account_setting");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["agent"], "accountId", array()), "html", null, true);
            echo "\" ><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/edit-icon-u.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\" title =\"Edit account setting\"> </a>
\t </td>
\t  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agent'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "  
  </tbody>
</table>
 ";
        // line 41
        $this->env->loadTemplate("UsersUserManageBundle::pagination.html.twig")->display($context);
        // line 42
        echo "<div id=\"myModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\"></div>";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:agentlist_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 42,  154 => 41,  149 => 38,  135 => 34,  129 => 33,  121 => 32,  113 => 31,  109 => 30,  105 => 29,  101 => 28,  97 => 27,  94 => 26,  90 => 25,  87 => 24,  78 => 22,  73 => 21,  64 => 19,  59 => 18,  50 => 16,  45 => 15,  36 => 13,  32 => 12,  19 => 1,);
    }
}
