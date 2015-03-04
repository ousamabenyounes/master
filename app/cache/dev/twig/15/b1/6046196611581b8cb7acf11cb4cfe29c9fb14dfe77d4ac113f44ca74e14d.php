<?php

/* UsersUserManageBundle:UserManage:signature_content.html.twig */
class __TwigTemplate_15b16046196611581b8cb7acf11cb4cfe29c9fb14dfe77d4ac113f44ca74e14d extends Twig_Template
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
      <th scope=\"col\">Title</th>
      <th scope=\"col\"  class = \"fix_width\">Action</th>
    </tr>
  </thead> 
  
 <tbody>
   ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["signature"]) ? $context["signature"] : $this->getContext($context, "signature")));
        foreach ($context['_seq'] as $context["_key"] => $context["signatures"]) {
            // line 12
            echo "\t  <tr>\t\t
\t\t<td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["signatures"], "signatureTitle", array()), "html", null, true);
            echo "</td>
\t\t
\t\t<td>
                   
            <a href = \"";
            // line 17
            echo $this->env->getExtension('routing')->getPath("manage_signature");
            echo "/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["signatures"], "id", array()), "html", null, true);
            echo "\"  title='Edit signature'>
              <img src=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/edit-icon-u.png"), "html", null, true);
            echo "\" width=\"25\" height=\"20\"> 
            </a>
              <span class=\"glyphicon glyphicon-remove\"></span>
\t\t\t  ";
            // line 21
            if (($this->getAttribute($context["signatures"], "signatureStatus", array()) == 1)) {
                // line 22
                echo "              <img class=\"inactive_signature\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/delete-icon.png"), "html", null, true);
                echo "\" width=\"25\" height=\"20\" data-toggle=\"modal\" data-target=\"#myModal\" data-signature_id = \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["signatures"], "id", array()), "html", null, true);
                echo "\" title='Inactivate signature'>
\t\t\t\t  ";
            } else {
                // line 24
                echo "\t\t\t<img class=\"active_signature\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/active-icon.png"), "html", null, true);
                echo "\" width=\"25\" height=\"20\" data-toggle=\"modal\" data-target=\"#myModal\" data-signature_id = \"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["signatures"], "id", array()), "html", null, true);
                echo "\" title='Activate signature'>
           ";
            }
            // line 26
            echo "     </td>
\t  </tr>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['signatures'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "  </tbody> 
</table>
<div id=\"myModal\" class=\"modal hide fade\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\"></div>";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:signature_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 29,  75 => 26,  67 => 24,  59 => 22,  57 => 21,  51 => 18,  45 => 17,  38 => 13,  35 => 12,  31 => 11,  19 => 1,);
    }
}
