<?php

/* UsersUserManageBundle:UserManage:addaccount.html.twig */
class __TwigTemplate_84609ef27c470a824041b75e418773d833b640babbd905eb7b4171694fb4626d extends Twig_Template
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
  <!--  start Mid-section Code -->
  <div class=\"mid-section\">
    ";
        // line 7
        echo "    ";
        $this->env->loadTemplate("UsersUserManageBundle::sidebar.html.twig")->display($context);
        // line 8
        echo "    <div class=\"right-panel\">
     ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
      <div class=\"heading\">
        <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</h1> 
      </div>
           <div> ";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["usertype"]) ? $context["usertype"] : $this->getContext($context, "usertype")), "html", null, true);
        echo " </div>
      ";
        // line 14
        if ((((isset($context["usertype"]) ? $context["usertype"] : $this->getContext($context, "usertype")) == 2) &&  !array_key_exists("id", $context))) {
            // line 15
            echo "      <div class=\"form-box\">
        <div class=\"form-head\">State format</div>
          <div class=\"col\" style='border:0px solid #000000;width:87%'>
              <div  style='border:0px solid #000000;width:100%'>
                <div class=\"ui-ctrl\">
                  ";
            // line 20
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state_format", array()), 'widget');
            echo "
                </div>
                <div class=\"clear\"></div>
              </div>
            <div >&nbsp;</div>
            <div>
              <div class=\"ui-ctrl\" > ";
            // line 26
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "kr_was_clients", array()), 'widget');
            echo "</div>
              <div class=\"clear\"></div>
            </div>             
          </div>
        <div class=\"clear\"></div>
      </div>
\t  ";
        }
        // line 33
        echo "      <div class=\"form-box\">
        <div class=\"form-head\">Company Details</div>
        <div class=\"col\">
          <div class=\"form-control\">
            <label><span class=\"red\">*</span>Company Name</label>
\t\t\t <div class=\"ui-ctrl\">
\t\t\t ";
        // line 39
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 40
            echo "\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget', array("value" => $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "name", array())));
            echo "
\t\t\t ";
        } else {
            // line 42
            echo "              ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'widget');
            echo "
\t\t\t ";
        }
        // line 44
        echo "\t\t\t</div>
             <span id='no_li_css'>";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name", array()), 'errors');
        echo " </span>
            <div class=\"clear\"></div>
          </div>
          
          <div class=\"form-control\">
          <label><span class=\"red\">*</span>Address</label>
            <div class=\"ui-ctrl\">
\t\t\t ";
        // line 52
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 53
            echo "\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget', array("value" => $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "address", array())));
            echo "
\t\t\t";
        } else {
            // line 55
            echo "\t\t\t  ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'widget');
            echo "
\t\t\t";
        }
        // line 57
        echo "\t\t\t</div>
            <span id='no_li_css'>";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address", array()), 'errors');
        echo " </span>
            <div class=\"clear\"></div>
          </div>
          
          <div class=\"form-control\">
            ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state_id", array()), 'label');
        echo "
            <div class=\"ui-ctrl\">";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state_id", array()), 'widget');
        echo "</div>
            <span id='no_li_css'>";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "state_id", array()), 'errors');
        echo " </span>
            <div class=\"clear\"></div>
          </div>
          
          <div class=\"form-control\">
            <label><span class=\"red\">*</span>Zip Code</label>
            <div class=\"ui-ctrl\">
\t\t\t ";
        // line 72
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 73
            echo "\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code", array()), 'widget', array("value" => $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "zipCode", array())));
            echo "
\t\t\t";
        } else {
            // line 75
            echo "\t\t\t  ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code", array()), 'widget');
            echo "
\t\t\t";
        }
        // line 77
        echo "\t\t\t</div>
            <span id='no_li_css'>";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "zip_code", array()), 'errors');
        echo " </span>
            <div class=\"clear\"></div>
          </div>

          <div class=\"form-control\">
            <label><span class=\"red\">*</span>Primary Phone</label>
            <div class=\"ui-ctrl\">
\t\t\t ";
        // line 85
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 86
            echo "\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "primary_phone", array()), 'widget', array("value" => $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "primaryPhone", array())));
            echo "
\t\t\t";
        } else {
            // line 88
            echo "\t\t\t  ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "primary_phone", array()), 'widget');
            echo "
\t\t\t";
        }
        // line 90
        echo "\t\t\t</div>
            <span id='no_li_css'>";
        // line 91
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "primary_phone", array()), 'errors');
        echo " </span>
            <div class=\"clear\"></div>
          </div>
\t\t  
\t\t  <div class=\"form-control\">
              ";
        // line 96
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'label');
        echo "
             <div class=\"ui-ctrl\">";
        // line 97
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "file", array()), 'widget');
        echo "</div>
             <div class=\"clear\"></div>
          </div>

        </div>
        <div class=\"col\">
          <div class=\"form-control\">
           ";
        // line 104
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'label');
        echo "
            <div class=\"ui-ctrl\">";
        // line 105
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "status", array()), 'widget');
        echo "</div>
            <div class=\"clear\"></div>
          </div>
          <div class=\"form-control\">
             ";
        // line 109
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address2", array()), 'label');
        echo "
            <div class=\"ui-ctrl\">
\t\t\t ";
        // line 111
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 112
            echo "\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address2", array()), 'widget', array("value" => $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "address2", array())));
            echo "
\t\t\t";
        } else {
            // line 114
            echo "\t\t\t  ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "address2", array()), 'widget');
            echo "
\t\t\t";
        }
        // line 116
        echo "\t\t\t</div>
            <div class=\"clear\"></div>
          </div>
          <div class=\"form-control\">
            <label><span class=\"red\">*</span>City</label>
            <div class=\"ui-ctrl\">
\t\t\t ";
        // line 122
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 123
            echo "\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'widget', array("value" => $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "city", array())));
            echo "
\t\t\t";
        } else {
            // line 125
            echo "\t\t\t  ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'widget');
            echo "
\t\t\t";
        }
        // line 127
        echo "\t\t\t</div>
            <span id='no_li_css'>";
        // line 128
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "city", array()), 'errors');
        echo " </span>
            <div class=\"clear\"></div>
          </div>

          <div class=\"form-control\">
            <label><span class=\"red\">*</span>Email</label>
            <div class=\"ui-ctrl\">
\t\t\t ";
        // line 135
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 136
            echo "\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("value" => $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "email", array())));
            echo "
\t\t\t";
        } else {
            // line 138
            echo "\t\t\t  ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
            echo "
\t\t\t";
        }
        // line 140
        echo "\t\t\t</div>
            <span id='no_li_css'>";
        // line 141
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'errors');
        echo " </span>
            <div class=\"clear\"></div>
          </div>

          <div class=\"form-control\">
           ";
        // line 146
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secondary_phone", array()), 'label');
        echo "
            <div class=\"ui-ctrl\">
\t\t\t ";
        // line 148
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 149
            echo "\t\t\t";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secondary_phone", array()), 'widget', array("value" => $this->getAttribute((isset($context["account"]) ? $context["account"] : $this->getContext($context, "account")), "secondaryPhone", array())));
            echo "
\t\t\t";
        } else {
            // line 151
            echo "\t\t\t  ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "secondary_phone", array()), 'widget');
            echo "
\t\t\t";
        }
        // line 153
        echo "\t\t\t</div>
            <div class=\"clear\"></div>
          </div>
        </div>
         <div class=\"clear\"></div>
          <div >
               <div class='reseller_submit_button'>
\t\t\t    ";
        // line 160
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget', array("value" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        echo "
\t\t\t    ";
        // line 161
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            echo "  
                   ";
            // line 162
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Edit", array()), 'widget');
            echo " 
\t\t\t\t";
        } else {
            // line 164
            echo "                  ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Save", array()), 'widget');
            echo "\t\t\t\t  
\t\t\t\t";
        }
        // line 165
        echo " 
               </div>
              <div class=\"clear\"></div>
            </div>         
        
        <div class=\"clear\"></div>
      </div>

      ";
        // line 173
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "  
    </div>  
  </div>

<!--  End Mid-section Code-->
<div class=\"footer\">© 2014 All Rights Reserved</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:addaccount.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  385 => 173,  375 => 165,  369 => 164,  364 => 162,  360 => 161,  356 => 160,  347 => 153,  341 => 151,  335 => 149,  333 => 148,  328 => 146,  320 => 141,  317 => 140,  311 => 138,  305 => 136,  303 => 135,  293 => 128,  290 => 127,  284 => 125,  278 => 123,  276 => 122,  268 => 116,  262 => 114,  256 => 112,  254 => 111,  249 => 109,  242 => 105,  238 => 104,  228 => 97,  224 => 96,  216 => 91,  213 => 90,  207 => 88,  201 => 86,  199 => 85,  189 => 78,  186 => 77,  180 => 75,  174 => 73,  172 => 72,  162 => 65,  158 => 64,  154 => 63,  146 => 58,  143 => 57,  137 => 55,  131 => 53,  129 => 52,  119 => 45,  116 => 44,  110 => 42,  104 => 40,  102 => 39,  94 => 33,  84 => 26,  75 => 20,  68 => 15,  66 => 14,  62 => 13,  57 => 11,  52 => 9,  49 => 8,  46 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
