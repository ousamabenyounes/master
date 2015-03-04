<?php

/* UsersUserManageBundle:UserManage:agentinfo.html.twig */
class __TwigTemplate_300c45b97b852216219f86960ef5227e35faf8c9d6faa737b20e61f9b2390672 extends Twig_Template
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
        echo "  <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/js/agent.js"), "html", null, true);
        echo "\"></script>
   <!--  start Mid-section Code-->
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
        <h1>Add Agent</h1> 
      </div>
      <div class=\"form-box\">
        <div class=\"form-head\">General Details</div>
          <div class=\"col\">
            <div class=\"form-control\">
              <label>Salutation</label>
                <div class=\"ui-ctrl\">
                    ";
        // line 19
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 20
            echo "                      ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salutation", array()), 'widget', array("value" => $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "salutation", array())));
            echo "
                    ";
        } else {
            // line 22
            echo "                      ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "salutation", array()), 'widget');
            echo "
                    ";
        }
        // line 24
        echo "                </div>
                <div class=\"clear\"></div>
            </div>
            <div class=\"form-control\">              
              <label>First Name<span class=\"red\">*</span></label>
              <div class=\"ui-ctrl\">
              ";
        // line 30
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 31
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'widget', array("value" => $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "firstName", array())));
            echo "
                ";
        } else {
            // line 32
            echo "  
                ";
            // line 33
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'widget');
            echo "
              ";
        }
        // line 35
        echo "               <span id='no_li_css'>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "first_name", array()), 'errors');
        echo " </span>
              </div>
              <div class=\"clear\"></div>
            </div>
            
             <div class=\"form-control \">
              <label>Email<span class=\"red\">*</span></label>
              <div class=\"ui-ctrl\">
                ";
        // line 43
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 44
            echo "              ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("value" => $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "email", array())));
            echo "
              ";
        } else {
            // line 45
            echo "  
                ";
            // line 46
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget');
            echo "
              ";
        }
        // line 48
        echo "              </div>
              <div class=\"clear\"></div>
            </div>
            <div class=\"form-control \">
              <label>Primary Phone<span class=\"red\">*</span></label> 
              <div class=\"ui-ctrl\">
                ";
        // line 54
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 55
            echo "              ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "primary_phone", array()), 'widget', array("value" => $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "primaryPhone", array())));
            echo "
              ";
        } else {
            // line 56
            echo "  
                ";
            // line 57
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "primary_phone", array()), 'widget');
            echo "
              ";
        }
        // line 59
        echo "              </br><span class = \"help_text\">Number will display on agent site</span>
              <span id='no_li_css'>";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "primary_phone", array()), 'errors');
        echo " </span>
              </div>
              <div class=\"clear\"></div>
            </div>

             ";
        // line 65
        if ( !(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
            // line 66
            echo "              <div class=\"form-control height_40px\">
                <label>User Name<span class=\"red\">*</span></label>
                <div class=\"ui-ctrl\"> 
                  ";
            // line 69
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
            echo "
               <span id='no_li_css'>";
            // line 70
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
            echo " </span>
                </div>
                <div class=\"clear\"></div>
               </div>   
            \t";
        }
        // line 75
        echo "          </div>
          <div class=\"col\">
            <div class=\"form-control\">
                 ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'label');
        echo "
                 <div class=\"ui-ctrl\">
                  ";
        // line 80
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 81
            echo "                 ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget', array("value" => $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "title", array())));
            echo "
                  ";
        } else {
            // line 82
            echo "  
                ";
            // line 83
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "title", array()), 'widget');
            echo "
              ";
        }
        // line 85
        echo "                 </div>
                  <div class=\"clear\"></div>
            </div>
            <div class=\"form-control \">
              <label>Last Name <span class=\"red\">*</span></label>
              <div class=\"ui-ctrl\">
               ";
        // line 91
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 92
            echo "              ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'widget', array("value" => $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "lastName", array())));
            echo "
               ";
        } else {
            // line 93
            echo "  
                ";
            // line 94
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'widget');
            echo "
              ";
        }
        // line 96
        echo "              <span id='no_li_css'>";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "last_name", array()), 'errors');
        echo " </span>
              </div>
              <div class=\"clear\"></div>
            </div>     
            
            <div class=\"form-control \">
                ";
        // line 102
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email2", array()), 'label');
        echo "
                <div class=\"ui-ctrl\">
                 ";
        // line 104
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 105
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email2", array()), 'widget', array("value" => $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "email2", array())));
            echo " 
                ";
        } else {
            // line 106
            echo "  
                ";
            // line 107
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email2", array()), 'widget');
            echo "
              ";
        }
        // line 109
        echo "                </div>
              <div class=\"clear\"></div>
            </div>
             
              <div class=\"form-control \">
                ";
        // line 114
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone2", array()), 'label');
        echo "
                <div class=\"ui-ctrl\">
                 ";
        // line 116
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            // line 117
            echo "                ";
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone2", array()), 'widget', array("value" => $this->getAttribute((isset($context["agent"]) ? $context["agent"] : $this->getContext($context, "agent")), "phone2", array())));
            echo "
                ";
        } else {
            // line 118
            echo "  
                ";
            // line 119
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "phone2", array()), 'widget');
            echo "
              ";
        }
        // line 121
        echo "                </div>
              <div class=\"clear\"></div>
            </div>
              ";
        // line 124
        if ( !(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))) {
            // line 125
            echo "            <div class=\"form-control \">
                <label>Password<span class=\"red\">*</span></label>
                <div class=\"ui-ctrl\">
                ";
            // line 128
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
            echo " 
                <span id='no_li_css'>";
            // line 129
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
            echo " </span>               
               </div>
              <div class=\"clear\"></div>
            </div>
            ";
        }
        // line 134
        echo "            </div>
          <div class=\"clear\"></div>          
          <div class='col'>&nbsp;</div>
          <div class='col'>
               <div class='agent_submit_button'>
               ";
        // line 139
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "id", array()), 'widget', array("value" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
        echo "
                ";
        // line 140
        if (((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) > 0)) {
            echo "    
                ";
            // line 141
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Edit", array()), 'widget');
            echo "  
                 ";
        } else {
            // line 142
            echo "  
                ";
            // line 143
            echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Save", array()), 'widget');
            echo "
                 ";
        }
        // line 145
        echo "               </div>
              <div class=\"clear\"></div>
          </div>
          <div class=\"clear\"></div>
          </div>       
 
      ";
        // line 151
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>  
  </div>
</div>
<!--  End Mid-section Code-->
</div>
<div class=\"footer\">© 2014 All Rights Reserved</div>
";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:agentinfo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  354 => 151,  346 => 145,  341 => 143,  338 => 142,  333 => 141,  329 => 140,  325 => 139,  318 => 134,  310 => 129,  306 => 128,  301 => 125,  299 => 124,  294 => 121,  289 => 119,  286 => 118,  280 => 117,  278 => 116,  273 => 114,  266 => 109,  261 => 107,  258 => 106,  252 => 105,  250 => 104,  245 => 102,  235 => 96,  230 => 94,  227 => 93,  221 => 92,  219 => 91,  211 => 85,  206 => 83,  203 => 82,  197 => 81,  195 => 80,  190 => 78,  185 => 75,  177 => 70,  173 => 69,  168 => 66,  166 => 65,  158 => 60,  155 => 59,  150 => 57,  147 => 56,  141 => 55,  139 => 54,  131 => 48,  126 => 46,  123 => 45,  117 => 44,  115 => 43,  103 => 35,  98 => 33,  95 => 32,  89 => 31,  87 => 30,  79 => 24,  73 => 22,  67 => 20,  65 => 19,  52 => 9,  49 => 8,  46 => 7,  39 => 3,  36 => 2,  11 => 1,);
    }
}
