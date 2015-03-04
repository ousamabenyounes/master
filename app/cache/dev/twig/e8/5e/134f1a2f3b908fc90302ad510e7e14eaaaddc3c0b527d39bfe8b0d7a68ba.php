<?php

/* UsersUserManageBundle::pagination.html.twig */
class __TwigTemplate_e85e134f1a2f3b908fc90302ad510e7e14eaaaddc3c0b527d39bfe8b0d7a68ba extends Twig_Template
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
        if (((isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")) > 1)) {
            // line 2
            echo "<table border='1' width='100%'>
\t<tr>
\t  <td class=\"demo\">\t
\t";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages"))));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 6
                echo "\t\t\t";
                if (($context["page"] == 1)) {
                    // line 7
                    echo "\t\t\t
\t\t\t\t";
                    // line 8
                    if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) > 1)) {
                        // line 9
                        echo "\t\t\t\t\t<a href='javascript:void(0);' class='paging cursor_pointer paging_text' data-page=";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo " title=\"Got to first page\"> &lt;&lt; </a>
\t\t\t\t";
                    } else {
                        // line 11
                        echo "\t\t\t\t\t<span class=\"paging_text_disable paging_text\" title=\"Got to first page\">&lt;&lt;</span>
\t\t\t\t";
                    }
                    // line 13
                    echo "\t\t\t\t
\t\t\t";
                }
                // line 15
                echo "\t\t\t
\t\t\t";
                // line 16
                if (($context["page"] < (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                    // line 17
                    echo "\t\t\t\t";
                    if ((($context["page"] < (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages"))) && ((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) > 1))) {
                        // line 18
                        echo "\t\t\t\t\t<a href='javascript:void(0);' class='paging paging_text' data-page=";
                        echo twig_escape_filter($this->env, ((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) - 1), "html", null, true);
                        echo " title=\"Got to previous page\"> Previous </a>
\t\t\t\t";
                    } else {
                        // line 19
                        echo "\t\t
\t\t\t\t\t<span class=\"paging_text paging_text_disable\" title=\"Got to previous page\">Previous</span>
\t\t\t\t";
                    }
                    // line 21
                    echo "\t
\t\t\t\t\t
\t\t\t";
                }
                // line 24
                echo "\t\t\t
\t\t\t";
                // line 25
                if (($context["page"] == 1)) {
                    echo "\t
\t\t\t\t<select class='paging_select'>
\t\t\t";
                }
                // line 27
                echo "\t\t\t\t\t\t
\t\t\t\t\t<option value=";
                // line 28
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo " ";
                if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) == $context["page"])) {
                    echo " selected='selected' ";
                }
                echo "\t> ";
                echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                echo " </option>
\t\t\t";
                // line 29
                if (($context["page"] == (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                    echo "\t\t\t\t\t\t
\t\t\t\t</select>
\t\t\t";
                }
                // line 32
                echo "\t\t\t
\t\t\t
\t\t\t";
                // line 34
                if (($context["page"] > 1)) {
                    // line 35
                    echo "\t\t\t\t";
                    if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) == (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                        // line 36
                        echo "\t\t\t\t\t<span class=\"paging_text_disable\" title=\"Got to next page\">Next</span>
\t\t\t\t";
                    } else {
                        // line 37
                        echo "\t
\t\t\t\t\t<a href='javascript:void(0);' class='paging paging_text' data-page=";
                        // line 38
                        echo twig_escape_filter($this->env, ((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) + 1), "html", null, true);
                        echo " title=\"Got to next page\"> Next </a>
\t\t\t\t";
                    }
                    // line 40
                    echo "\t\t\t";
                }
                // line 41
                echo "\t\t\t
\t\t\t";
                // line 42
                if (($context["page"] == (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                    // line 43
                    echo "\t\t\t\t";
                    if (((isset($context["current_page"]) ? $context["current_page"] : $this->getContext($context, "current_page")) != (isset($context["pages"]) ? $context["pages"] : $this->getContext($context, "pages")))) {
                        // line 44
                        echo "\t\t\t\t\t<a href='javascript:void(0);' class='paging paging_text' data-page=";
                        echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                        echo " title=\"Got to last page\"> &gt;&gt; </a>
\t\t\t\t";
                    } else {
                        // line 45
                        echo "\t
\t\t\t\t\t<span class=\"paging_text_disable\" title=\"Got to last page\">&gt;&gt;</span>
\t\t\t\t";
                    }
                    // line 48
                    echo "\t\t\t";
                }
                // line 49
                echo "\t\t\t
\t\t\t
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            echo "\t  </td>
\t</tr>
</table>
";
        }
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle::pagination.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 52,  150 => 49,  147 => 48,  142 => 45,  136 => 44,  133 => 43,  131 => 42,  128 => 41,  125 => 40,  120 => 38,  117 => 37,  113 => 36,  110 => 35,  108 => 34,  104 => 32,  98 => 29,  88 => 28,  85 => 27,  79 => 25,  76 => 24,  71 => 21,  66 => 19,  60 => 18,  57 => 17,  55 => 16,  52 => 15,  48 => 13,  44 => 11,  38 => 9,  36 => 8,  33 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
