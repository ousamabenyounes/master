<?php

/* UsersUserManageBundle:UserManage:account_setting.html.twig */
class __TwigTemplate_45ca780cb8e670927e9a69a07d463fcadcc46e09d4c811c0347b82a3692a6f71 extends Twig_Template
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
        echo "<!--  start Mid-section Code -->
<div class=\"mid-section\">
    ";
        // line 6
        echo "    ";
        $this->env->loadTemplate("UsersUserManageBundle::sidebar.html.twig")->display($context);
        echo "  
      <div class=\"right-panel\">
           <div class=\"heading\">
               <h1>Account Setting</h1> 
           </div> 
         <form action = \"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("account_setting", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\" method = \"post\" >
              <div class=\"form-box\">
                <div class=\"form-head\">Custom School Setting</div>
                  <div class=\"col\" style='border:0px solid #000000;width:87%'>
                      <div  style='border:0px solid #000000;width:100%'>
                        <div class=\"ui-ctrl\">
                           <input type = \"radio\" name = \"custom_school_setting\" value = \"1\" 
    ";
        // line 18
        if ((array_key_exists("custom_school_setting", $context) && ((isset($context["custom_school_setting"]) ? $context["custom_school_setting"] : $this->getContext($context, "custom_school_setting")) == 1))) {
            echo " checked ";
        } elseif ( !array_key_exists("custom_school_setting", $context)) {
            echo "checked";
        }
        echo " >Active
                           <input type = \"radio\" name = \"custom_school_setting\" value = \"0\"
     ";
        // line 20
        if ((array_key_exists("custom_school_setting", $context) && ((isset($context["custom_school_setting"]) ? $context["custom_school_setting"] : $this->getContext($context, "custom_school_setting")) == 0))) {
            echo " checked ";
        }
        echo " >Inactive
                        </div>
                        <div class=\"clear\"></div>
                      </div>
                    <div >&nbsp;</div>
                    <div>
                      <div class=\"ui-ctrl\" > </div>
                      <div class=\"clear\"></div>
                    </div>             
                  </div>
                <div class=\"clear\"></div>
          </div>
          <div class=\"form-box\">
                <div class=\"form-head\">Syndication Feed Setting</div>
                  <div class=\"col\" style='border:0px solid #000000;width:87%'>
                      <div  style='border:0px solid #000000;width:100%'>
                        <div class=\"ui-ctrl\">
                           <input type = \"radio\" name = \"syndication_feed_setting\" value = \"1\" 
";
        // line 38
        if ((array_key_exists("syndication_feed_setting", $context) && ((isset($context["syndication_feed_setting"]) ? $context["syndication_feed_setting"] : $this->getContext($context, "syndication_feed_setting")) == 1))) {
            echo " checked ";
        } elseif ( !array_key_exists("syndication_feed_setting", $context)) {
            echo "checked";
        }
        echo ">Active
                           <input type = \"radio\" name = \"syndication_feed_setting\" value = \"0\"
  ";
        // line 40
        if ((array_key_exists("syndication_feed_setting", $context) && ((isset($context["syndication_feed_setting"]) ? $context["syndication_feed_setting"] : $this->getContext($context, "syndication_feed_setting")) == 0))) {
            echo " checked ";
        }
        echo ">Inactive
                        </div>
                        <div class=\"clear\"></div>
                      </div>
                    <div >&nbsp;</div>
                    <div>
                      <div class=\"ui-ctrl\" > </div>
                      <div class=\"clear\"></div>
                    </div>             
                  </div>
                <div class=\"clear\"></div>
      </div>
      <div class=\"form-box\">
                <div class=\"form-head\">Activate Idx for Sites</div>
                  <div class=\"col\" style='border:0px solid #000000;width:87%'>
                      <div  style='border:0px solid #000000;width:100%'>
                        <div class=\"ui-ctrl\">
                           <input type = \"checkbox\" name = \"site_idx_setting\" value = \"1\">Active
                        </div>
                        <div class=\"clear\"></div>
                      </div>
                    <div >&nbsp;</div>
                    <div>
                      <div class=\"ui-ctrl\" > </div>
                      <div class=\"clear\"></div>
                    </div>             
                  </div>
                <div class=\"clear\"></div>
      </div>
         <div class=\"clear\"></div>              
            <div align=\"right\" style=\"padding-right:20px;\">
                <input name=\"\" type=\"submit\" class=\"btn\" value=\"Submit\">
            </div>           
         </form>   
     </div>
 </div>
<!--  End Mid-section Code-->
<div class=\"footer\">© 2014 All Rights Reserved</div>
";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:account_setting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 40,  94 => 38,  71 => 20,  62 => 18,  52 => 11,  43 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}
