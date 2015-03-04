<?php

/* UsersUserManageBundle:UserManage:resellerlist_content.html.twig */
class __TwigTemplate_d36c457bac5a5b5803367e26dea8e41ad08eca9faf6d19071941ed9f9e3494c7 extends Twig_Template
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
      <th scope=\"col\">Email</th>
\t  <th scope=\"col\" class = \"fix_width\">Date Added</th>
      <th scope=\"col\"  class = \"fix_width\">Action</th>
    </tr>
  </thead>
  
  <tbody>
   ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["resellers"]) ? $context["resellers"] : $this->getContext($context, "resellers")));
        foreach ($context['_seq'] as $context["_key"] => $context["reseller"]) {
            // line 14
            echo "\t  <tr>\t\t
\t\t<td> ";
            // line 15
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["reseller"], "lastName", array())), 0, 20), "html", null, true);
            echo "</td>
\t\t<td> ";
            // line 16
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["reseller"], "firstName", array())), 0, 20), "html", null, true);
            echo "</td>
\t\t<td>";
            // line 17
            echo twig_escape_filter($this->env, twig_slice($this->env, strip_tags($this->getAttribute($context["reseller"], "email", array())), 0, 35), "html", null, true);
            echo "</td>
\t\t<td class = \"text_center\"> ";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reseller"], "createdOn", array()), "m/d/Y"), "html", null, true);
            echo "</td>
\t\t<td>
            <a href = \"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("_loginas");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reseller"], "id", array()), "html", null, true);
            echo "\"><img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/login-icon.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\" title='Login as reseller'></a>            
            <a href = \"";
            // line 21
            echo $this->env->getExtension('routing')->getPath("resellerinfo");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reseller"], "id", array()), "html", null, true);
            echo "\"  title='Edit reseller'>
              <img src=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/edit-icon-u.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\"> 
            </a>
              <span class=\"glyphicon glyphicon-remove\"></span>
              <img class=\"delete_reseller\" src=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/delete-icon.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\" data-toggle=\"modal\" data-target=\"#myModal\" data-reseller_id = \"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reseller"], "id", array()), "html", null, true);
            echo "\" title='Inactivate reseller'>
            <a href = \"";
            // line 26
            echo $this->env->getExtension('routing')->getPath("permission");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["reseller"], "id", array()), "html", null, true);
            echo "\" >
              <img src=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/edit-icon-u.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\"  title='Reseller permissions'>
            </a>
     </td>
\t  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reseller'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "  </tbody>  
</table>
";
        // line 34
        $this->env->loadTemplate("UsersUserManageBundle::pagination.html.twig")->display($context);
        // line 35
        echo "<div id=\"myModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\"></div>";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:resellerlist_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 35,  104 => 34,  100 => 32,  89 => 27,  83 => 26,  77 => 25,  71 => 22,  65 => 21,  57 => 20,  52 => 18,  48 => 17,  44 => 16,  40 => 15,  37 => 14,  33 => 13,  19 => 1,);
    }
}
