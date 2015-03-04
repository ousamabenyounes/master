<?php

/* UsersUserManageBundle:UserManage:permission.html.twig */
class __TwigTemplate_20f822a081e772c3d10c5c63ae937e6c32b8a43ba3e5e612004a33581678a722 extends Twig_Template
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
        echo "<script language=\"javascript\" type=\"text/javascript\">
  \$(document).ready(function(){
     
   \$('.checkpermission').click(function(){
      var data_attr = \$(this).data('attr');
   if(\$(this).prop('checked') == true){
        \$('.'+data_attr).each(function() {
            \$('.'+data_attr).prop(\"checked\", true);
        });
      }else{          
          \$('.'+data_attr).each(function() {           
              \$('.'+data_attr).prop(\"checked\", false);
          });
      }  
    });
    
  
    
  /*  \$(\"#selectall_agentlist\").click(function () {
          \$('.checkpermission').attr('checked', this.checked);
    });
 
    \$(\".checkpermission\").click(function(){
      alert(\$(\".checkpermission:checked\").length);
        if(\$(\".checkpermission\").length == \$(\".checkpermission:checked\").length) {
            \$(\"#selectall_agentlist\").attr(\"checked\", \"checked\");
        } else {
            \$(\"#selectall_agentlist\").removeAttr(\"checked\");
        }
 
    });

 }); */
   /*
     \$(\"#selectall_admin_settings\").click(function(){
      \$(\".check_admin_settings\").prop(\"checked\",\$(\"#selectall_admin_settings\").prop(\"checked\"))
    }); 
    */
  });
</script>
<div class=\"mid-section\">
    ";
        // line 45
        echo "    ";
        $this->env->loadTemplate("UsersUserManageBundle::sidebar.html.twig")->display($context);
        // line 46
        echo "  <div class=\"right-panel\">
    <div class=\"heading\">
    <h1>Permissions</h1>
    </div>
    <form action = \"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("permission");
        echo "\" method = \"post\"  >
      <div class=\"form-box\">  
            ";
        // line 53
        echo "            <div class=\"form-head\">
              <input name=\"check['agent_list']['main']\" type=\"checkbox\" value=\"1\" id=\"selectall_agentlist\" data-attr=\"agent\" class = \"checkpermission\"  ";
        // line 54
        if ((array_key_exists("agent_list_main", $context) && ((isset($context["agent_list_main"]) ? $context["agent_list_main"] : $this->getContext($context, "agent_list_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;<label for=\"selectall_agentlist\">Agent </label>
            </div>      
            <div class=\"col\">
              <div class=\"form-control\">                 
                 <input name=\"check['agent_list']['add_agent']\" id = \"add_agent\" type=\"checkbox\" value=\"1\" class = \"agent checkpermission\" ";
        // line 58
        if ((array_key_exists("agent_list_add_agent", $context) && ((isset($context["agent_list_add_agent"]) ? $context["agent_list_add_agent"] : $this->getContext($context, "agent_list_add_agent")) == 1))) {
            echo " checked ";
        }
        echo " >
                 <label for = \"add_agent\">Add Agent</label>
                <div class=\"clear\"></div>
              </div>
              <div class=\"form-control\">
                <input name=\"check['agent_list']['show_kr_clients']\" type=\"checkbox\" value=\"1\" class = \"agent checkpermission\" ";
        // line 63
        if ((array_key_exists("agent_list_show_kr_clients", $context) && ((isset($context["agent_list_show_kr_clients"]) ? $context["agent_list_show_kr_clients"] : $this->getContext($context, "agent_list_show_kr_clients")) == 1))) {
            echo " checked ";
        }
        echo ">
                Show KR Clients
                <div class=\"clear\"></div>
              </div>
              <div class=\"form-control\">
                <input name=\"check['agent_list']['show_agent_list']\" type=\"checkbox\" value=\"1\" class = \"agent checkpermission\" ";
        // line 68
        if ((array_key_exists("agent_list_show_agent_list", $context) && ((isset($context["agent_list_show_agent_list"]) ? $context["agent_list_show_agent_list"] : $this->getContext($context, "agent_list_show_agent_list")) == 1))) {
            echo " checked ";
        }
        echo ">
                Show Agent list
                <div class=\"clear\"></div>
              </div>             
            </div>
            <div class=\"col\">
              <div class=\"form-control\">
                <input name=\"check['agent_list']['welcome_letter']\" type=\"checkbox\" value=\"1\" class = \"agent checkpermission\" ";
        // line 75
        if ((array_key_exists("agent_list_welcome_letter", $context) && ((isset($context["agent_list_welcome_letter"]) ? $context["agent_list_welcome_letter"] : $this->getContext($context, "agent_list_welcome_letter")) == 1))) {
            echo " checked ";
        }
        echo ">
                Welcome Letter
                <div class=\"clear\"></div>
              </div>            
           
              <div class=\"form-control\">
                <input name=\"check['agent_list']['show_was_clients']\" type=\"checkbox\" value=\"1\" class = \"agent checkpermission\" ";
        // line 81
        if ((array_key_exists("agent_list_show_was_clients", $context) && ((isset($context["agent_list_show_was_clients"]) ? $context["agent_list_show_was_clients"] : $this->getContext($context, "agent_list_show_was_clients")) == 1))) {
            echo " checked ";
        }
        echo ">
                Show WAS clients
                <div class=\"clear\"></div>
              </div>            
           
              <div class=\"form-control\">
                <input name=\"check['agent_list']['account_list']\" type=\"checkbox\" value=\"1\" class = \"agent checkpermission\" ";
        // line 87
        if ((array_key_exists("agent_list_account_list", $context) && ((isset($context["agent_list_account_list"]) ? $context["agent_list_account_list"] : $this->getContext($context, "agent_list_account_list")) == 1))) {
            echo " checked ";
        }
        echo ">
                Show Account List
                <div class=\"clear\"></div>
              </div>            
            </div>          
            <div class=\"clear\"></div>
            
            <div class=\"form-head\">
              <input name=\"check['mortgage_broker_list']['main']\" type=\"checkbox\" value=\"1\" id = \"selectall_mortgagelist\" data-attr=\"mortgage_broker\" class= \"checkpermission check_mortgage_permission\" ";
        // line 95
        if ((array_key_exists("mortgage_broker_list_main", $context) && ((isset($context["mortgage_broker_list_main"]) ? $context["mortgage_broker_list_main"] : $this->getContext($context, "mortgage_broker_list_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;<label for=\"selectall_mortgagelist\">Mortgage Broker</label>
            </div>
          <div class=\"col\">
            <div class=\"form-control\">
              <input name=\"check['mortgage_broker_list']['add_mortgage_broker']\" type=\"checkbox\" value=\"1\" class= \"mortgage_broker check_mortgage_permission\" ";
        // line 99
        if ((array_key_exists("mortgage_broker_list_add_mortgage_broker", $context) && ((isset($context["mortgage_broker_list_add_mortgage_broker"]) ? $context["mortgage_broker_list_add_mortgage_broker"] : $this->getContext($context, "mortgage_broker_list_add_mortgage_broker")) == 1))) {
            echo " checked ";
        }
        echo ">
              Add Mortgage Broker
              <div class=\"clear\"></div>
            </div>
          </div>
          <div class=\"col\">
            <div class=\"form-control\">
              <input name=\"check['mortgage_broker_list']['show_mortgage_broker_list']\" type=\"checkbox\" value=\"1\" class= \"mortgage_broker check_mortgage_permission\"  ";
        // line 106
        if ((array_key_exists("mortgage_broker_list_show_mortgage_broker_list", $context) && ((isset($context["mortgage_broker_list_show_mortgage_broker_list"]) ? $context["mortgage_broker_list_show_mortgage_broker_list"] : $this->getContext($context, "mortgage_broker_list_show_mortgage_broker_list")) == 1))) {
            echo " checked ";
        }
        echo ">
               Show Mortgage Broker List
              <div class=\"clear\"></div>
            </div>
          </div>
          <div class=\"col\">
            <div class=\"form-control\">
              <input name=\"check['mortgage_broker_list']['welcome_letter']\" type=\"checkbox\" value=\"1\" class= \"mortgage_broker check_mortgage_permission\"  ";
        // line 113
        if ((array_key_exists("mortgage_broker_list_welcome_letter", $context) && ((isset($context["mortgage_broker_list_welcome_letter"]) ? $context["mortgage_broker_list_welcome_letter"] : $this->getContext($context, "mortgage_broker_list_welcome_letter")) == 1))) {
            echo " checked ";
        }
        echo ">
              Welcome Letter
              <div class=\"clear\"></div>
            </div>
          </div>
          <div class=\"clear\"></div>
          <div class=\"form-head\"><input name=\"check['site_list']['main']\" type=\"checkbox\" value=\"1\" id = \"selectall_sitelist\" data-attr= \"site\" class = \"checkpermission check_site_permission\" ";
        // line 119
        if ((array_key_exists("site_list_main", $context) && ((isset($context["site_list_main"]) ? $context["site_list_main"] : $this->getContext($context, "site_list_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;<label for=\"selectall_sitelist\">Site List</label></div>
            <div class=\"col\">
              <div class=\"form-control\">
                <input name=\"check['site_list']['add_site']\" type=\"checkbox\" value=\"1\" class = \"site check_site_permission\" ";
        // line 122
        if ((array_key_exists("site_list_add_site", $context) && ((isset($context["site_list_add_site"]) ? $context["site_list_add_site"] : $this->getContext($context, "site_list_add_site")) == 1))) {
            echo " checked ";
        }
        echo ">
                Add Site
                <div class=\"clear\"></div>
              </div>
              <div class=\"form-control\">
                  <input name=\"check['site_list']['new_custom_template']\" type=\"checkbox\" value=\"1\" class = \"site check_site_permission\" ";
        // line 127
        if ((array_key_exists("site_list_new_custom_template", $context) && ((isset($context["site_list_new_custom_template"]) ? $context["site_list_new_custom_template"] : $this->getContext($context, "site_list_new_custom_template")) == 1))) {
            echo " checked ";
        }
        echo ">
                  New Custom Template
                  <div class=\"clear\"></div>
              </div>
              <div class=\"form-control\">
                <input name=\"check['site_list']['new_property_template']\" type=\"checkbox\" value=\"1\" class = \"site check_site_permission\" ";
        // line 132
        if ((array_key_exists("site_list_new_property_template", $context) && ((isset($context["site_list_new_property_template"]) ? $context["site_list_new_property_template"] : $this->getContext($context, "site_list_new_property_template")) == 1))) {
            echo " checked ";
        }
        echo ">
                  New Property Template
                <div class=\"clear\"></div>
              </div>
              <div class=\"form-control\">
                <input name=\"check['site_list']['add_focus']\" type=\"checkbox\" value=\"1\" class = \"site check_site_permission\" ";
        // line 137
        if ((array_key_exists("site_list_add_focus", $context) && ((isset($context["site_list_add_focus"]) ? $context["site_list_add_focus"] : $this->getContext($context, "site_list_add_focus")) == 1))) {
            echo " checked ";
        }
        echo ">
                    Add Focus Site
                <div class=\"clear\"></div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-control\">
                <input name=\"check['site_list']['add_theme_template']\" type=\"checkbox\" value=\"1\" class = \"site check_site_permission\" ";
        // line 144
        if ((array_key_exists("site_list_add_focus", $context) && ((isset($context["site_list_add_focus"]) ? $context["site_list_add_focus"] : $this->getContext($context, "site_list_add_focus")) == 1))) {
            echo " checked ";
        }
        echo ">
                  Add Theme Template
                <div class=\"clear\"></div>
              </div>
              <div class=\"form-control\">
                <input name=\"check['site_list']['site_visitor_and_form_states']\" type=\"checkbox\" value=\"1\" class = \"site check_site_permission\" ";
        // line 149
        if ((array_key_exists("site_list_site_visitor_and_form_states", $context) && ((isset($context["site_list_site_visitor_and_form_states"]) ? $context["site_list_site_visitor_and_form_states"] : $this->getContext($context, "site_list_site_visitor_and_form_states")) == 1))) {
            echo " checked ";
        }
        echo ">
                Site Visitor & Form Stats
                <div class=\"clear\"></div>
              </div>
              <div class=\"form-control\">
                <input name=\"check['site_list']['list_theme_templates']\" type=\"checkbox\" value=\"1\" class = \"site check_site_permission\" ";
        // line 154
        if ((array_key_exists("site_list_list_theme_templates", $context) && ((isset($context["site_list_list_theme_templates"]) ? $context["site_list_list_theme_templates"] : $this->getContext($context, "site_list_list_theme_templates")) == 1))) {
            echo " checked ";
        }
        echo ">
                  List Theme Templates
                <div class=\"clear\"></div>
              </div>
            </div>
            <div class=\"col\">
              <div class=\"form-control\">
                <input name=\"check['site_list']['list_custom_templates']\" type=\"checkbox\" value=\"1\" class = \"site check_site_permission\" ";
        // line 161
        if ((array_key_exists("site_list_list_custom_templates", $context) && ((isset($context["site_list_list_custom_templates"]) ? $context["site_list_list_custom_templates"] : $this->getContext($context, "site_list_list_custom_templates")) == 1))) {
            echo " checked ";
        }
        echo ">
                List Custom Templates
                <div class=\"clear\"></div>
              </div>
              <div class=\"form-control\">
                <input name=\"check['site_list']['client_custom_focus_site']\" type=\"checkbox\" value=\"1\" class = \"site check_site_permission\" ";
        // line 166
        if ((array_key_exists("site_list_client_custom_focus_site", $context) && ((isset($context["site_list_client_custom_focus_site"]) ? $context["site_list_client_custom_focus_site"] : $this->getContext($context, "site_list_client_custom_focus_site")) == 1))) {
            echo " checked ";
        }
        echo ">
                  Client Custom Focus Site
                <div class=\"clear\"></div>
              </div>
              <div class=\"form-control\">
                <input name=\"check['site_list']['list_focus_sites']\" type=\"checkbox\" value=\"1\" class = \"site check_site_permission\" ";
        // line 171
        if ((array_key_exists("site_list_list_focus_sites", $context) && ((isset($context["site_list_list_focus_sites"]) ? $context["site_list_list_focus_sites"] : $this->getContext($context, "site_list_list_focus_sites")) == 1))) {
            echo " checked ";
        }
        echo ">
                  List Focus Sites
                <div class=\"clear\"></div>
              </div>
            </div>
            <div class=\"clear\"></div>
            <div class=\"form-head\"><input name=\"check['default_agent_settings']['main']\" type=\"checkbox\" value=\"1\" id= \"selectall_default_agent_settings\" data-attr = \"default_agent_settings\" class = \"checkpermission check_default_agent_setting_permission\" ";
        // line 177
        if ((array_key_exists("default_agent_settings_main", $context) && ((isset($context["default_agent_settings_main"]) ? $context["default_agent_settings_main"] : $this->getContext($context, "default_agent_settings_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;<label for = \"selectall_default_agent_settings\">Default Agent Settings</label></div>
              <div class=\"col\">
                <div class=\"form-control\">
                  <input name=\"check['default_agent_settings']['default_html_headers']\" type=\"checkbox\" value=\"1\" class = \"default_agent_settings check_default_agent_setting_permission\"";
        // line 180
        if ((array_key_exists("default_agent_settings_default_html_headers", $context) && ((isset($context["default_agent_settings_default_html_headers"]) ? $context["default_agent_settings_default_html_headers"] : $this->getContext($context, "default_agent_settings_default_html_headers")) == 1))) {
            echo " checked ";
        }
        echo ">
                  Default HTML Headers
                  <div class=\"clear\"></div>
                </div>
                <div class=\"form-control\">
                  <input name=\"check['default_agent_settings']['default_signatures']\" type=\"checkbox\" value=\"1\" class = \"default_agent_settings check_default_agent_setting_permission\" ";
        // line 185
        if ((array_key_exists("default_agent_settings_default_signatures", $context) && ((isset($context["default_agent_settings_default_signatures"]) ? $context["default_agent_settings_default_signatures"] : $this->getContext($context, "default_agent_settings_default_signatures")) == 1))) {
            echo " checked ";
        }
        echo ">
                  Default Signatures
                  <div class=\"clear\"></div>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-control\">
                  <input name=\"check['default_agent_settings']['add_agent_html_hdr']\" type=\"checkbox\" value=\"1\" class = \"default_agent_settings check_default_agent_setting_permission\" ";
        // line 192
        if ((array_key_exists("default_agent_settings_add_agent_html_hdr", $context) && ((isset($context["default_agent_settings_add_agent_html_hdr"]) ? $context["default_agent_settings_add_agent_html_hdr"] : $this->getContext($context, "default_agent_settings_add_agent_html_hdr")) == 1))) {
            echo " checked ";
        }
        echo ">
                    Add Agent HTML Hdr
                  <div class=\"clear\"></div>
                </div>               
              </div>
               <div class=\"col\">
                 <div class=\"form-control\">
                  <input name=\"check['default_agent_settings']['add_agent_signature']\" type=\"checkbox\" value=\"1\" class = \"default_agent_settings check_default_agent_setting_permission\" ";
        // line 199
        if ((array_key_exists("default_agent_settings_add_agent_signature", $context) && ((isset($context["default_agent_settings_add_agent_signature"]) ? $context["default_agent_settings_add_agent_signature"] : $this->getContext($context, "default_agent_settings_add_agent_signature")) == 1))) {
            echo " checked ";
        }
        echo ">
                  Add Agent Signature
                  <div class=\"clear\"></div>
                </div>               
              </div>
              <div class=\"clear\"></div>
              <div class=\"form-head\"><input name=\"check['follow_up_camp']['main']\" type=\"checkbox\" value=\"1\" data-attr= \"follow_up_camp\" class = \"checkpermission check_follow_up_camp\" id= \"selectall_follow_up_camp\" ";
        // line 205
        if ((array_key_exists("follow_up_camp_main", $context) && ((isset($context["follow_up_camp_main"]) ? $context["follow_up_camp_main"] : $this->getContext($context, "follow_up_camp_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;Follow Up Camp.</div>
              <div class=\"col\">
                <div class=\"form-control\">
                  <input name=\"check['follow_up_camp']['add_campaign_email']\" type=\"checkbox\" value=\"1\" class = \"follow_up_camp check_follow_up_camp\" ";
        // line 208
        if ((array_key_exists("follow_up_camp_add_campaign_email", $context) && ((isset($context["follow_up_camp_add_campaign_email"]) ? $context["follow_up_camp_add_campaign_email"] : $this->getContext($context, "follow_up_camp_add_campaign_email")) == 1))) {
            echo " checked ";
        }
        echo ">
                  Add Campaign Email
                  <div class=\"clear\"></div>
                </div>
              </div>
              <div class=\"col\">
                <div class=\"form-control\">
                  <input name=\"check['follow_up_camp']['list_email_templates']\" type=\"checkbox\" value=\"1\" class = \"follow_up_camp check_follow_up_camp\" ";
        // line 215
        if ((array_key_exists("follow_up_camp_list_email_templates", $context) && ((isset($context["follow_up_camp_list_email_templates"]) ? $context["follow_up_camp_list_email_templates"] : $this->getContext($context, "follow_up_camp_list_email_templates")) == 1))) {
            echo " checked ";
        }
        echo ">
                   List Email Templates
                  <div class=\"clear\"></div>
                </div>
              </div>
              <div class=\"clear\"></div>
                <div class=\"form-head\"><input name=\"check['email_blast']['main']\" type=\"checkbox\" value=\"1\" data-attr = \"email_blast\" class= \"checkpermission check_email_blast\" id = \"selectall_email_blast\" ";
        // line 221
        if ((array_key_exists("email_blast_main", $context) && ((isset($context["email_blast_main"]) ? $context["email_blast_main"] : $this->getContext($context, "email_blast_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;Email Blast</div>
                <div class=\"col\">
                  <div class=\"form-control\">
                    <input name=\"check['email_blast']['send_to_all_agents']\" type=\"checkbox\" value=\"1\" class= \"email_blast check_email_blast\" ";
        // line 224
        if ((array_key_exists("email_blast_send_to_all_agents", $context) && ((isset($context["email_blast_send_to_all_agents"]) ? $context["email_blast_send_to_all_agents"] : $this->getContext($context, "email_blast_send_to_all_agents")) == 1))) {
            echo " checked ";
        }
        echo ">
                    Send to All Agents
                    <div class=\"clear\"></div>
                  </div>                  
                </div>
                <div class=\"col\">
                  <div class=\"form-control\">
                    <input name=\"check['email_blast']['send_individual_email']\" type=\"checkbox\" value=\"1\" class= \"email_blast check_email_blast\" ";
        // line 231
        if ((array_key_exists("email_blast_send_individual_email", $context) && ((isset($context["email_blast_send_individual_email"]) ? $context["email_blast_send_individual_email"] : $this->getContext($context, "email_blast_send_individual_email")) == 1))) {
            echo " checked ";
        }
        echo ">
                      Send Individual Email
                    <div class=\"clear\"></div>
                  </div>
                </div>
                <div class=\"col\">
                  <div class=\"form-control\">
                    <input name=\"check['email_blast']['manage_default_grps']\" type=\"checkbox\" value=\"1\" class= \"email_blast check_email_blast\" ";
        // line 238
        if ((array_key_exists("email_blast_manage_default_grps", $context) && ((isset($context["email_blast_manage_default_grps"]) ? $context["email_blast_manage_default_grps"] : $this->getContext($context, "email_blast_manage_default_grps")) == 1))) {
            echo " checked ";
        }
        echo ">
                      Manage Default Grps
                    <div class=\"clear\"></div>
                  </div>
                </div>
                <div class=\"clear\"></div>
                <div class=\"form-head\"><input name=\"check['newsletters']['main']\" type=\"checkbox\" value=\"1\" data-attr= \"newsletters\" class = \"checkpermission check_newsletter\" id =\"selectall_newsletter\" ";
        // line 244
        if ((array_key_exists("newsletters_main", $context) && ((isset($context["newsletters_main"]) ? $context["newsletters_main"] : $this->getContext($context, "newsletters_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;<label for = \"selectall_newsletter\">Newsletters</label></div>
                <div class=\"col\">
                  <div class=\"form-control\">
                    <input name=\"check['newsletters']['add_newsletter']\" type=\"checkbox\" value=\"1\" class = \"newsletters check_newsletter\" ";
        // line 247
        if ((array_key_exists("newsletters_add_newsletter", $context) && ((isset($context["newsletters_add_newsletter"]) ? $context["newsletters_add_newsletter"] : $this->getContext($context, "newsletters_add_newsletter")) == 1))) {
            echo " checked ";
        }
        echo ">
                    Add Newsletter
                    <div class=\"clear\"></div>
                  </div>
                </div>
                <div class=\"col\">
                  <div class=\"form-control\">
                    <input name=\"check['newsletters']['newsletter_defaults']\" type=\"checkbox\" value=\"1\" class = \"newsletters check_newsletter\" ";
        // line 254
        if ((array_key_exists("newsletters_newsletter_defaults", $context) && ((isset($context["newsletters_newsletter_defaults"]) ? $context["newsletters_newsletter_defaults"] : $this->getContext($context, "newsletters_newsletter_defaults")) == 1))) {
            echo " checked ";
        }
        echo ">
                    Newsletter Defaults
                    <div class=\"clear\"></div>
                  </div>
                </div>
                <div class=\"clear\"></div>
                <div class=\"form-head\"><input name=\"check['statistics']['main']\" type=\"checkbox\" value=\"1\" data-attr= \"statistics\" class = \"checkpermission check_statistics\" id = \"selectall_statistics\" ";
        // line 260
        if ((array_key_exists("statistics_main", $context) && ((isset($context["statistics_main"]) ? $context["statistics_main"] : $this->getContext($context, "statistics_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;<label for =\"selectall_statistics\">Statistics</label></div>
                <div class=\"col\">
                  <div class=\"form-control\">
                    <input name=\"check['statistics']['bulk_outgoing_emails']\" type=\"checkbox\" value=\"1\" class = \"statistics check_statistics\" ";
        // line 263
        if ((array_key_exists("statistics_bulk_outgoing_emails", $context) && ((isset($context["statistics_bulk_outgoing_emails"]) ? $context["statistics_bulk_outgoing_emails"] : $this->getContext($context, "statistics_bulk_outgoing_emails")) == 1))) {
            echo " checked ";
        }
        echo ">
                    Bulk Outgoing Emails
                    <div class=\"clear\"></div>
                  </div>                 
                </div>
                <div class=\"col\">
                  <div class=\"form-control\">
                    <input name=\"check['statistics']['virtual_tour_space']\" type=\"checkbox\" value=\"1\" class = \"statistics check_statistics\" ";
        // line 270
        if ((array_key_exists("statistics_virtual_tour_space", $context) && ((isset($context["statistics_virtual_tour_space"]) ? $context["statistics_virtual_tour_space"] : $this->getContext($context, "statistics_virtual_tour_space")) == 1))) {
            echo " checked ";
        }
        echo ">
                    Virtual Tour Space
                    <div class=\"clear\"></div>
                  </div>
                </div>
                 <div class=\"col\">
                   <div class=\"form-control\">
                    <input name=\"check['statistics']['ip_blocking']\" type=\"checkbox\" value=\"1\" class = \"statistics check_statistics\" ";
        // line 277
        if ((array_key_exists("statistics_ip_blocking", $context) && ((isset($context["statistics_ip_blocking"]) ? $context["statistics_ip_blocking"] : $this->getContext($context, "statistics_ip_blocking")) == 1))) {
            echo " checked ";
        }
        echo ">
                    IP Blocking
                    <div class=\"clear\"></div>
                  </div>
                </div>
                <div class=\"clear\"></div>
                  <div class=\"form-head\"><input name=\"check['default_surveys']['main']\" type=\"checkbox\" data-attr= \"default_surveys\" value=\"1\" class = \"checkpermission check_default_surveys\" id =\"selectall_default_surveys\" ";
        // line 283
        if ((array_key_exists("default_surveys_main", $context) && ((isset($context["default_surveys_main"]) ? $context["default_surveys_main"] : $this->getContext($context, "default_surveys_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;<label for = \"selectall_default_surveys\">Default Surveys</label></div>
                  <div class=\"col\">
                    <div class=\"form-control\">
                    <input name=\"check['default_surveys']['add_default_survey']\" type=\"checkbox\" value=\"1\" class = \"default_surveys check_default_surveys\" ";
        // line 286
        if ((array_key_exists("default_surveys_add_default_survey", $context) && ((isset($context["default_surveys_add_default_survey"]) ? $context["default_surveys_add_default_survey"] : $this->getContext($context, "default_surveys_add_default_survey")) == 1))) {
            echo " checked ";
        }
        echo ">
                     Add Default Survey
                    <div class=\"clear\"></div>
                    </div>
                  </div>
                  <div class=\"clear\"></div>
                  <div class=\"form-head\"><input name=\"check['documents']['main']\" type=\"checkbox\" value=\"1\" data-attr= \"documents\" class = \"checkpermission check_documents\" id =\"selectall_document\" ";
        // line 292
        if ((array_key_exists("documents_main", $context) && ((isset($context["documents_main"]) ? $context["documents_main"] : $this->getContext($context, "documents_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;<label for = \"selectall_document\">Documents</label></div>
                  <div class=\"col\">
                    <div class=\"form-control\">
                    <input name=\"check['documents']['add_document']\" type=\"checkbox\" value=\"1\" class = \"documents check_documents\" ";
        // line 295
        if ((array_key_exists("documents_add_document", $context) && ((isset($context["documents_add_document"]) ? $context["documents_add_document"] : $this->getContext($context, "documents_add_document")) == 1))) {
            echo " checked ";
        }
        echo ">
                     Add Document
                    <div class=\"clear\"></div>
                    </div>
                  </div>              
                  <div class=\"clear\"></div>
                   <div class=\"form-head\"><input name=\"check['form_templates']['main']\" type=\"checkbox\" value=\"1\" data-attr= \"form_templates\" class = \"checkpermission check_form_templates\" id =\"selectall_form_templates\" ";
        // line 301
        if ((array_key_exists("form_templates_main", $context) && ((isset($context["form_templates_main"]) ? $context["form_templates_main"] : $this->getContext($context, "form_templates_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;<label for = \"selectall_form_templates\">Form Templates</label></div>
                   <div class=\"col\">
                    <div class=\"form-control\">
                    <input name=\"check['form_templates']['add_form_templates']\" type=\"checkbox\" value=\"1\" class = \"form_templates check_form_templates\" ";
        // line 304
        if ((array_key_exists("form_templates_add_form_templates", $context) && ((isset($context["form_templates_add_form_templates"]) ? $context["form_templates_add_form_templates"] : $this->getContext($context, "form_templates_add_form_templates")) == 1))) {
            echo " checked ";
        }
        echo ">
                     Add Form Templates
                    <div class=\"clear\"></div>
                    </div>
                  </div>
                   <div class=\"col\">
                    <div class=\"form-control\">
                    <input name=\"check['form_templates']['list_form_templates']\" type=\"checkbox\" value=\"1\" class = \"form_templates check_form_templates\" ";
        // line 311
        if ((array_key_exists("form_templates_list_form_templates", $context) && ((isset($context["form_templates_list_form_templates"]) ? $context["form_templates_list_form_templates"] : $this->getContext($context, "form_templates_list_form_templates")) == 1))) {
            echo " checked ";
        }
        echo ">
                     List Form Templates
                    <div class=\"clear\"></div>
                    </div>
                  </div>
                  <div class=\"clear\"></div>                  
                    <div class=\"form-head\">
                      <input name=\"check['idx_setup_items']['main']\" type=\"checkbox\" value=\"1\" id=\"selectall_idx_setup\" data-attr = \"idx_setup_items\" class = \"checkpermission check_idx_setup\" ";
        // line 318
        if ((array_key_exists("idx_setup_items_main", $context) && ((isset($context["idx_setup_items_main"]) ? $context["idx_setup_items_main"] : $this->getContext($context, "idx_setup_items_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;<label for=\"selectall_idx_setup\">IDX Setup Items</label></div>
                    <div class=\"col\">
                      <div class=\"form-control\">
                        <input name=\"check['idx_setup_items']['idx_feed_template']\" type=\"checkbox\" value=\"1\" class = \"idx_setup_items check_idx_setup\" ";
        // line 321
        if ((array_key_exists("idx_setup_items_idx_feed_template", $context) && ((isset($context["idx_setup_items_idx_feed_template"]) ? $context["idx_setup_items_idx_feed_template"] : $this->getContext($context, "idx_setup_items_idx_feed_template")) == 1))) {
            echo " checked ";
        }
        echo ">
                          IDX Feed Template
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['idx_setup_items']['idx_reports']\" type=\"checkbox\" value=\"1\" class = \"idx_setup_items check_idx_setup\" ";
        // line 326
        if ((array_key_exists("idx_setup_items_idx_reports", $context) && ((isset($context["idx_setup_items_idx_reports"]) ? $context["idx_setup_items_idx_reports"] : $this->getContext($context, "idx_setup_items_idx_reports")) == 1))) {
            echo " checked ";
        }
        echo ">
                        IDX Reports
                        <div class=\"clear\"></div>
                      </div>
                    </div>
                    <div class=\"col\">
                      <div class=\"form-control\">
                        <input name=\"check['idx_setup_items']['edit_alert_mail']\" type=\"checkbox\" value=\"1\" class = \"idx_setup_items check_idx_setup\" ";
        // line 333
        if ((array_key_exists("idx_setup_items_edit_alert_mail", $context) && ((isset($context["idx_setup_items_edit_alert_mail"]) ? $context["idx_setup_items_edit_alert_mail"] : $this->getContext($context, "idx_setup_items_edit_alert_mail")) == 1))) {
            echo " checked ";
        }
        echo ">
                          Edit Alert Mail
                        <div class=\"clear\"></div>
                      </div>                     
                    </div>
                    <div class=\"col\">
                       <div class=\"form-control\">
                        <input name=\"check['idx_setup_items']['edit_viewing_sche_mail']\" type=\"checkbox\" value=\"1\" class = \"idx_setup_items check_idx_setup\" ";
        // line 340
        if ((array_key_exists("idx_setup_items_edit_viewing_sche_mail", $context) && ((isset($context["idx_setup_items_edit_viewing_sche_mail"]) ? $context["idx_setup_items_edit_viewing_sche_mail"] : $this->getContext($context, "idx_setup_items_edit_viewing_sche_mail")) == 1))) {
            echo " checked ";
        }
        echo ">
                        Edit Viewing Sche. Mail
                        <div class=\"clear\"></div>
                      </div>
                    </div>
                    <div class=\"clear\"></div>
                    <div class=\"form-head\">
                      <input name=\"check['transfer_process']['main']\" type=\"checkbox\" value=\"1\" id=\"selectall_transfer_process\" data-attr= \"transfer_process\" class = \"checkpermission check_transfer_process\" ";
        // line 347
        if ((array_key_exists("transfer_process_main", $context) && ((isset($context["transfer_process_main"]) ? $context["transfer_process_main"] : $this->getContext($context, "transfer_process_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;<label for=\"selectall_agentlist\"> Transfer Process</label></div>
                    <div class=\"col\">
                      <div class=\"form-control\">
                        <input name=\"check['transfer_process']['apg_db_transfer']\" type=\"checkbox\" value=\"1\" class = \"transfer_process check_transfer_process\" ";
        // line 350
        if ((array_key_exists("transfer_process_apg_db_transfer", $context) && ((isset($context["transfer_process_apg_db_transfer"]) ? $context["transfer_process_apg_db_transfer"] : $this->getContext($context, "transfer_process_apg_db_transfer")) == 1))) {
            echo " checked ";
        }
        echo ">
                          APG - DB Transfer
                        <div class=\"clear\"></div>
                      </div>                
                    </div>
                    <div class=\"col\">
                      <div class=\"form-control\">
                        <input name=\"check['transfer_process']['focus_site_transfer']\" type=\"checkbox\" value=\"1\" class = \"transfer_process check_transfer_process\" ";
        // line 357
        if ((array_key_exists("transfer_process_focus_site_transfer", $context) && ((isset($context["transfer_process_focus_site_transfer"]) ? $context["transfer_process_focus_site_transfer"] : $this->getContext($context, "transfer_process_focus_site_transfer")) == 1))) {
            echo " checked ";
        }
        echo ">
                         Focus Site Transfer
                        <div class=\"clear\"></div>
                      </div>                  
                    </div>
                    <div class=\"clear\"></div>
                    <div class=\"form-head\">
                      <input name=\"check['site_setup_items']['main']\" type=\"checkbox\" value=\"1\" id=\"selectall_site_setup_items\" data-attr= \"site_setup_items\" class = \"checkpermission check_site_setup_items\" ";
        // line 364
        if ((array_key_exists("site_setup_items_main", $context) && ((isset($context["site_setup_items_main"]) ? $context["site_setup_items_main"] : $this->getContext($context, "site_setup_items_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;<label for=\"selectall_site_setup_items\"> Site Setup Items</label></div>
                    <div class=\"col\">
                      <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['admin_log']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 367
        if ((array_key_exists("site_setup_items_admin_log", $context) && ((isset($context["site_setup_items_admin_log"]) ? $context["site_setup_items_admin_log"] : $this->getContext($context, "site_setup_items_admin_log")) == 1))) {
            echo " checked ";
        }
        echo ">
                          Admin Log
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['admin_auto_scan_report']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 372
        if ((array_key_exists("site_setup_items_admin_auto_scan_report", $context) && ((isset($context["site_setup_items_admin_auto_scan_report"]) ? $context["site_setup_items_admin_auto_scan_report"] : $this->getContext($context, "site_setup_items_admin_auto_scan_report")) == 1))) {
            echo " checked ";
        }
        echo ">
                          Admin Auto Scan Report
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['list_report_templates']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 377
        if ((array_key_exists("site_setup_items_list_report_templates", $context) && ((isset($context["site_setup_items_list_report_templates"]) ? $context["site_setup_items_list_report_templates"] : $this->getContext($context, "site_setup_items_list_report_templates")) == 1))) {
            echo " checked ";
        }
        echo ">
                           List Report Templates
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['popup_windows']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 382
        if ((array_key_exists("site_setup_items_popup_windows", $context) && ((isset($context["site_setup_items_popup_windows"]) ? $context["site_setup_items_popup_windows"] : $this->getContext($context, "site_setup_items_popup_windows")) == 1))) {
            echo " checked ";
        }
        echo ">
                          Popup Windows
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['add_report']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 387
        if ((array_key_exists("site_setup_items_add_report", $context) && ((isset($context["site_setup_items_add_report"]) ? $context["site_setup_items_add_report"] : $this->getContext($context, "site_setup_items_add_report")) == 1))) {
            echo " checked ";
        }
        echo ">
                         Add Report
                        <div class=\"clear\"></div>
                      </div>
                    </div>
                    <div class=\"col\">
                      <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['auto_scan_settings']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 394
        if ((array_key_exists("site_setup_items_auto_scan_settings", $context) && ((isset($context["site_setup_items_auto_scan_settings"]) ? $context["site_setup_items_auto_scan_settings"] : $this->getContext($context, "site_setup_items_auto_scan_settings")) == 1))) {
            echo " checked ";
        }
        echo ">
                         Auto Scan Settings
                        <div class=\"clear\"></div>
                      </div>   
                      <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['add_external_link']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 399
        if ((array_key_exists("site_setup_items_add_external_link", $context) && ((isset($context["site_setup_items_add_external_link"]) ? $context["site_setup_items_add_external_link"] : $this->getContext($context, "site_setup_items_add_external_link")) == 1))) {
            echo " checked ";
        }
        echo ">
                        Add External Link
                        <div class=\"clear\"></div>
                      </div>  
                      <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['add_form']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 404
        if ((array_key_exists("site_setup_items_add_form", $context) && ((isset($context["site_setup_items_add_form"]) ? $context["site_setup_items_add_form"] : $this->getContext($context, "site_setup_items_add_form")) == 1))) {
            echo " checked ";
        }
        echo ">
                         Add Form
                        <div class=\"clear\"></div>
                      </div>  
                      <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['list_forms']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 409
        if ((array_key_exists("site_setup_items_list_forms", $context) && ((isset($context["site_setup_items_list_forms"]) ? $context["site_setup_items_list_forms"] : $this->getContext($context, "site_setup_items_list_forms")) == 1))) {
            echo " checked ";
        }
        echo ">
                         List Forms
                        <div class=\"clear\"></div>
                      </div>  
                      <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['default_form_groups']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 414
        if ((array_key_exists("site_setup_items_default_form_groups", $context) && ((isset($context["site_setup_items_default_form_groups"]) ? $context["site_setup_items_default_form_groups"] : $this->getContext($context, "site_setup_items_default_form_groups")) == 1))) {
            echo " checked ";
        }
        echo ">
                         Default Form Groups
                        <div class=\"clear\"></div>
                      </div>             
                    </div>
                    <div class=\"col\">
                       <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['default_meta_tags']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 421
        if ((array_key_exists("site_setup_items_default_meta_tags", $context) && ((isset($context["site_setup_items_default_meta_tags"]) ? $context["site_setup_items_default_meta_tags"] : $this->getContext($context, "site_setup_items_default_meta_tags")) == 1))) {
            echo " checked ";
        }
        echo ">
                         Default Meta Tags
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['property_lists_options']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 426
        if ((array_key_exists("site_setup_items_property_lists_options", $context) && ((isset($context["site_setup_items_property_lists_options"]) ? $context["site_setup_items_property_lists_options"] : $this->getContext($context, "site_setup_items_property_lists_options")) == 1))) {
            echo " checked ";
        }
        echo ">
                         Property Lists Options
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['add_framed_report']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 431
        if ((array_key_exists("site_setup_items_add_framed_report", $context) && ((isset($context["site_setup_items_add_framed_report"]) ? $context["site_setup_items_add_framed_report"] : $this->getContext($context, "site_setup_items_add_framed_report")) == 1))) {
            echo " checked ";
        }
        echo ">
                          Add Framed Report
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['add_custom_page']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 436
        if ((array_key_exists("site_setup_items_add_custom_page", $context) && ((isset($context["site_setup_items_add_custom_page"]) ? $context["site_setup_items_add_custom_page"] : $this->getContext($context, "site_setup_items_add_custom_page")) == 1))) {
            echo " checked ";
        }
        echo ">
                           Add Custom Page
                        <div class=\"clear\"></div>
                      </div>
                       <div class=\"form-control\">
                        <input name=\"check['site_setup_items']['edit_light_dark_footer']\" type=\"checkbox\" value=\"1\" class = \"site_setup_items check_site_setup_items\" ";
        // line 441
        if ((array_key_exists("site_setup_items_edit_light_dark_footer", $context) && ((isset($context["site_setup_items_edit_light_dark_footer"]) ? $context["site_setup_items_edit_light_dark_footer"] : $this->getContext($context, "site_setup_items_edit_light_dark_footer")) == 1))) {
            echo " checked ";
        }
        echo ">
                           Edit Light/Dark Footer
                        <div class=\"clear\"></div>
                      </div>
                    </div>
                     <div class=\"clear\"></div>
                    <div class=\"form-head\">
                      <input name=\"check['admin_settings']['main']\" type=\"checkbox\" value=\"1\" id=\"selectall_admin_settings\" data-attr = \"admin_settings\" class = \"checkpermission check_admin_settings\" ";
        // line 448
        if ((array_key_exists("admin_settings_main", $context) && ((isset($context["admin_settings_main"]) ? $context["admin_settings_main"] : $this->getContext($context, "admin_settings_main")) == 1))) {
            echo " checked ";
        }
        echo ">&nbsp;<label for=\"selectall_admin_settings\" >Admin Settings</label>
                    </div>
                    <div class=\"col\">
                      <div class=\"form-control\">
                        <input name=\"check['admin_settings']['list_admin_signatures']\" type=\"checkbox\" value=\"1\" class = \"admin_settings check_admin_settings\" ";
        // line 452
        if ((array_key_exists("admin_settings_list_admin_signatures", $context) && ((isset($context["admin_settings_list_admin_signatures"]) ? $context["admin_settings_list_admin_signatures"] : $this->getContext($context, "admin_settings_list_admin_signatures")) == 1))) {
            echo " checked ";
        }
        echo ">
                        List Admin Signatures
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['admin_settings']['add_admin_signature']\" type=\"checkbox\" value=\"1\" class = \"admin_settings check_admin_settings\" ";
        // line 457
        if ((array_key_exists("admin_settings_add_admin_signature", $context) && ((isset($context["admin_settings_add_admin_signature"]) ? $context["admin_settings_add_admin_signature"] : $this->getContext($context, "admin_settings_add_admin_signature")) == 1))) {
            echo " checked ";
        }
        echo ">
                        Add Admin Signature
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['admin_settings']['manage_admin_users']\" type=\"checkbox\" value=\"1\" class = \"admin_settings check_admin_settings\" ";
        // line 462
        if ((array_key_exists("admin_settings_manage_admin_users", $context) && ((isset($context["admin_settings_manage_admin_users"]) ? $context["admin_settings_manage_admin_users"] : $this->getContext($context, "admin_settings_manage_admin_users")) == 1))) {
            echo " checked ";
        }
        echo ">
                        Manage Admin Users
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['admin_settings']['manage_admin_logs']\" type=\"checkbox\" value=\"1\" class = \"admin_settings check_admin_settings\" ";
        // line 467
        if ((array_key_exists("admin_settings_manage_admin_logs", $context) && ((isset($context["admin_settings_manage_admin_logs"]) ? $context["admin_settings_manage_admin_logs"] : $this->getContext($context, "admin_settings_manage_admin_logs")) == 1))) {
            echo " checked ";
        }
        echo ">
                          Manage Admin Logs
                        <div class=\"clear\"></div>
                      </div>                      
                    </div>
                    <div class=\"col\">
                      <div class=\"form-control\">
                        <input name=\"check['admin_settings']['education_tab_settings']\" type=\"checkbox\" value=\"1\" class = \"admin_settings check_admin_settings\" ";
        // line 474
        if ((array_key_exists("admin_settings_education_tab_settings", $context) && ((isset($context["admin_settings_education_tab_settings"]) ? $context["admin_settings_education_tab_settings"] : $this->getContext($context, "admin_settings_education_tab_settings")) == 1))) {
            echo " checked ";
        }
        echo ">
                        Education Tab Settings
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['admin_settings']['focus_site_tab_settings']\" type=\"checkbox\" value=\"1\" class = \"admin_settings check_admin_settings\" ";
        // line 479
        if ((array_key_exists("admin_settings_focus_site_tab_settings", $context) && ((isset($context["admin_settings_focus_site_tab_settings"]) ? $context["admin_settings_focus_site_tab_settings"] : $this->getContext($context, "admin_settings_focus_site_tab_settings")) == 1))) {
            echo " checked ";
        }
        echo ">
                         Focus Site Tab Settings
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['admin_settings']['change_page_contents']\" type=\"checkbox\" value=\"1\" class = \"admin_settings check_admin_settings\" ";
        // line 484
        if ((array_key_exists("admin_settings_change_page_contents", $context) && ((isset($context["admin_settings_change_page_contents"]) ? $context["admin_settings_change_page_contents"] : $this->getContext($context, "admin_settings_change_page_contents")) == 1))) {
            echo " checked ";
        }
        echo ">
                         Change Page Contents 
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['admin_settings']['update_pop_content']\" type=\"checkbox\" value=\"1\" class = \"admin_settings check_admin_settings\" ";
        // line 489
        if ((array_key_exists("admin_settings_update_pop_content", $context) && ((isset($context["admin_settings_update_pop_content"]) ? $context["admin_settings_update_pop_content"] : $this->getContext($context, "admin_settings_update_pop_content")) == 1))) {
            echo " checked ";
        }
        echo ">
                        Update Pop Content  
                        <div class=\"clear\"></div>
                      </div>                   
                    </div>
                    <div class=\"col\">
                      <div class=\"form-control\">
                        <input name=\"check['admin_settings']['property_detail_text']\" type=\"checkbox\" value=\"1\" class = \"admin_settings check_admin_settings\" ";
        // line 496
        if ((array_key_exists("admin_settings_property_detail_text", $context) && ((isset($context["admin_settings_property_detail_text"]) ? $context["admin_settings_property_detail_text"] : $this->getContext($context, "admin_settings_property_detail_text")) == 1))) {
            echo " checked ";
        }
        echo ">
                         Property Detail Text
                        <div class=\"clear\"></div>
                      </div> 
                      <div class=\"form-control\">
                        <input name=\"check['admin_settings']['domain_forwarding']\" type=\"checkbox\" value=\"1\" class = \"admin_settings check_admin_settings\" ";
        // line 501
        if ((array_key_exists("admin_settings_domain_forwarding", $context) && ((isset($context["admin_settings_domain_forwarding"]) ? $context["admin_settings_domain_forwarding"] : $this->getContext($context, "admin_settings_domain_forwarding")) == 1))) {
            echo " checked ";
        }
        echo ">
                          Domain Forwarding
                        <div class=\"clear\"></div>
                      </div>
                      <div class=\"form-control\">
                        <input name=\"check['admin_settings']['crawlers']\" type=\"checkbox\" value=\"1\" class = \"admin_settings check_admin_settings\" id = \"showWASclients\" ";
        // line 506
        if ((array_key_exists("admin_settings_crawlers", $context) && ((isset($context["admin_settings_crawlers"]) ? $context["admin_settings_crawlers"] : $this->getContext($context, "admin_settings_crawlers")) == 1))) {
            echo " checked ";
        }
        echo ">
                          Crawlers
                        <div class=\"clear\"></div>
                      </div>
                      <input type= \"hidden\" name= \"action\" ";
        // line 510
        if (array_key_exists("action", $context)) {
            echo " value=";
            echo twig_escape_filter($this->env, (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "html", null, true);
            echo " ";
        }
        echo ">
                    </div>
                    <div class=\"clear\"></div>              
                  <div align=\"right\" style=\"padding-right:20px;\"><input type=\"hidden\" name=\"reseller_id\" value=";
        // line 513
        echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")), "html", null, true);
        echo "><input name=\"\" type=\"submit\" class=\"btn\" value=\"Submit\"></div>
      </div>
      <div class=\"clear\" style='height:20px;'></div>
    </form>
  </div>
</div>
 <div class=\"footer\">© 2014 All Rights Reserved</div>
";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:permission.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  985 => 513,  975 => 510,  966 => 506,  956 => 501,  946 => 496,  934 => 489,  924 => 484,  914 => 479,  904 => 474,  892 => 467,  882 => 462,  872 => 457,  862 => 452,  853 => 448,  841 => 441,  831 => 436,  821 => 431,  811 => 426,  801 => 421,  789 => 414,  779 => 409,  769 => 404,  759 => 399,  749 => 394,  737 => 387,  727 => 382,  717 => 377,  707 => 372,  697 => 367,  689 => 364,  677 => 357,  665 => 350,  657 => 347,  645 => 340,  633 => 333,  621 => 326,  611 => 321,  603 => 318,  591 => 311,  579 => 304,  571 => 301,  560 => 295,  552 => 292,  541 => 286,  533 => 283,  522 => 277,  510 => 270,  498 => 263,  490 => 260,  479 => 254,  467 => 247,  459 => 244,  448 => 238,  436 => 231,  424 => 224,  416 => 221,  405 => 215,  393 => 208,  385 => 205,  374 => 199,  362 => 192,  350 => 185,  340 => 180,  332 => 177,  321 => 171,  311 => 166,  301 => 161,  289 => 154,  279 => 149,  269 => 144,  257 => 137,  247 => 132,  237 => 127,  227 => 122,  219 => 119,  208 => 113,  196 => 106,  184 => 99,  175 => 95,  162 => 87,  151 => 81,  140 => 75,  128 => 68,  118 => 63,  108 => 58,  99 => 54,  96 => 53,  91 => 50,  85 => 46,  82 => 45,  39 => 3,  36 => 2,  11 => 1,);
    }
}
