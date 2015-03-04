<?php

/* UsersUserManageBundle::reseller_sidebar.html.twig */
class __TwigTemplate_65c0c1c2104a87f54786cba75ac8c267c872e3f2b1bb5f22617818360c058832 extends Twig_Template
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
        echo "  <div id=\"accordion\">
        <h3>Setting</h3> 
          <div style=\"height:100px !important;\">
            <ul>
                ";
        // line 6
        echo "                <li><a href=\"";
        echo $this->env->getExtension('routing')->getPath("_pagetheme");
        echo "\">Page theming</a></li>
\t\t\t\t<li>
\t\t\t\t      <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("_addaccount");
        echo "/";
        echo twig_escape_filter($this->env, (isset($context["account_id"]) ? $context["account_id"] : $this->getContext($context, "account_id")), "html", null, true);
        echo "\">Update Account</a></li>
\t\t\t\t<li><a href=\"\">Update Profile</a></li>
\t\t\t\t<li><a href=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("password");
        echo "\">Change Password</a></li>
                                ";
        // line 11
        if ((array_key_exists("usertype", $context) && ((isset($context["usertype"]) ? $context["usertype"] : $this->getContext($context, "usertype")) == 4))) {
            // line 12
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("account_setting");
            echo "/";
            echo twig_escape_filter($this->env, (isset($context["account_id"]) ? $context["account_id"] : $this->getContext($context, "account_id")), "html", null, true);
            echo "\">Account Setting</a></li>
                                ";
        }
        // line 14
        echo "            </ul> 
          </div> 
        <h3>Signature</h3>
          <div style=\"height:100px !important;\">
              <ul>
                  <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("manage_signature");
        echo "\">Add Default Signature</a></li>
                  <li><a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("signatures");
        echo "\">Default Signatures</a></li>                  
              </ul>
          </div>
      ";
        // line 23
        if ((array_key_exists("agent_list", $context) && ((isset($context["agent_list"]) ? $context["agent_list"] : $this->getContext($context, "agent_list")) == 1))) {
            echo " 
        <h3>Account</h3>
          <div>
            <ul> 
              ";
            // line 27
            if ((array_key_exists("agent_list_add_agent", $context) && ((isset($context["agent_list_add_agent"]) ? $context["agent_list_add_agent"] : $this->getContext($context, "agent_list_add_agent")) == 1))) {
                // line 28
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("_addaccount");
                echo "\">Add Account</a></li>
              ";
            }
            // line 30
            echo "              
              ";
            // line 31
            if ((array_key_exists("agent_list_account_list", $context) && ((isset($context["agent_list_account_list"]) ? $context["agent_list_account_list"] : $this->getContext($context, "agent_list_account_list")) == 1))) {
                echo "  
                  <li><a href=\"";
                // line 32
                echo $this->env->getExtension('routing')->getPath("_accountlist");
                echo "\">Account List</a></li>
              ";
            }
            // line 34
            echo "              
              ";
            // line 35
            if ((array_key_exists("agent_list_show_agent_list", $context) && ((isset($context["agent_list_show_agent_list"]) ? $context["agent_list_show_agent_list"] : $this->getContext($context, "agent_list_show_agent_list")) == 1))) {
                // line 36
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("_agentlist");
                echo "\">Agent List</a></li>
              ";
            }
            // line 38
            echo "              
              ";
            // line 39
            if ((array_key_exists("agent_list_welcome_letter", $context) && ((isset($context["agent_list_welcome_letter"]) ? $context["agent_list_welcome_letter"] : $this->getContext($context, "agent_list_welcome_letter")) == 1))) {
                echo " 
                  <li><a href=\"#\">Welcome Letter</a></li>
              ";
            }
            // line 42
            echo "              
              ";
            // line 43
            if ((array_key_exists("agent_list_show_was_clients", $context) && ((isset($context["agent_list_show_was_clients"]) ? $context["agent_list_show_was_clients"] : $this->getContext($context, "agent_list_show_was_clients")) == 1))) {
                echo " 
                  <li><a href=\"#\">Show WAS clients</a></li>
              ";
            }
            // line 46
            echo "              
              ";
            // line 47
            if ((array_key_exists("agent_list_show_kr_clients", $context) && ((isset($context["agent_list_show_kr_clients"]) ? $context["agent_list_show_kr_clients"] : $this->getContext($context, "agent_list_show_kr_clients")) == 1))) {
                echo "  
                  <li><a href=\"#\">Show KR clients</a></li>
              ";
            }
            // line 50
            echo "            </ul>              
          </div>
      ";
        }
        // line 53
        echo "      
      
      ";
        // line 55
        if ((array_key_exists("site_list", $context) && ((isset($context["site_list"]) ? $context["site_list"] : $this->getContext($context, "site_list")) == 1))) {
            // line 56
            echo "        <h3>Site</h3>
          <div>
            <ul>              
              ";
            // line 59
            if ((array_key_exists("site_list_add_site", $context) && ((isset($context["site_list_add_site"]) ? $context["site_list_add_site"] : $this->getContext($context, "site_list_add_site")) == 1))) {
                // line 60
                echo "                  <li><a href=\"#\">Add Site</a></li>
              ";
            }
            // line 62
            echo "              
              ";
            // line 63
            if ((array_key_exists("site_list_show_site_list", $context) && ((isset($context["site_list_show_site_list"]) ? $context["site_list_show_site_list"] : $this->getContext($context, "site_list_show_site_list")) == 1))) {
                // line 64
                echo "                  <li><a href=\"#\">Site List</a></li>
              ";
            }
            // line 66
            echo "              
              ";
            // line 67
            if ((array_key_exists("site_list_list_custom_templates", $context) && ((isset($context["site_list_list_custom_templates"]) ? $context["site_list_list_custom_templates"] : $this->getContext($context, "site_list_list_custom_templates")) == 1))) {
                // line 68
                echo "                  <li><a href=\"#\">List Custom Templates</a></li>
              ";
            }
            // line 70
            echo "              
              ";
            // line 71
            if ((array_key_exists("site_list_new_custom_template", $context) && ((isset($context["site_list_new_custom_template"]) ? $context["site_list_new_custom_template"] : $this->getContext($context, "site_list_new_custom_template")) == 1))) {
                // line 72
                echo "                  <li><a href=\"#\">New Custom Temlate</a></li>
              ";
            }
            // line 74
            echo "
                  <li><a href=\"#\">List Property Templates</a></li>
              ";
            // line 76
            if ((array_key_exists("site_list_new_property_template", $context) && ((isset($context["site_list_new_property_template"]) ? $context["site_list_new_property_template"] : $this->getContext($context, "site_list_new_property_template")) == 1))) {
                // line 77
                echo "                  <li><a href=\"#\">New Property Template</a></li>
              ";
            }
            // line 79
            echo "              
              ";
            // line 80
            if ((array_key_exists("site_list_list_theme_templates", $context) && ((isset($context["site_list_list_theme_templates"]) ? $context["site_list_list_theme_templates"] : $this->getContext($context, "site_list_list_theme_templates")) == 1))) {
                // line 81
                echo "                  <li><a href=\"#\">List Theme Template</a></li>
              ";
            }
            // line 83
            echo "              
              ";
            // line 84
            if ((array_key_exists("site_list_site_visitor_and_form_states", $context) && ((isset($context["site_list_site_visitor_and_form_states"]) ? $context["site_list_site_visitor_and_form_states"] : $this->getContext($context, "site_list_site_visitor_and_form_states")) == 1))) {
                // line 85
                echo "                  <li><a href=\"#\">Site Visitor & Form Stats</a></li>
              ";
            }
            // line 87
            echo "              
              ";
            // line 88
            if ((array_key_exists("site_list_list_focus_sites", $context) && ((isset($context["site_list_list_focus_sites"]) ? $context["site_list_list_focus_sites"] : $this->getContext($context, "site_list_list_focus_sites")) == 1))) {
                // line 89
                echo "                  <li><a href=\"#\">List Focus Sites</a></li>
              ";
            }
            // line 91
            echo "              
              ";
            // line 92
            if ((array_key_exists("site_list_client_custom_focus_site", $context) && ((isset($context["site_list_client_custom_focus_site"]) ? $context["site_list_client_custom_focus_site"] : $this->getContext($context, "site_list_client_custom_focus_site")) == 1))) {
                // line 93
                echo "                  <li><a href=\"#\">Client Custom Focus Site</a></li>
              ";
            }
            // line 95
            echo "              
              ";
            // line 96
            if ((array_key_exists("site_list_add_focus", $context) && ((isset($context["site_list_add_focus"]) ? $context["site_list_add_focus"] : $this->getContext($context, "site_list_add_focus")) == 1))) {
                // line 97
                echo "                  <li><a href=\"#\">Add Focus Site</a></li>
              ";
            }
            // line 99
            echo "            </ul>
          </div>   
      ";
        }
        // line 102
        echo "
      ";
        // line 103
        if ((array_key_exists("mortgage_broker_list", $context) && ((isset($context["mortgage_broker_list"]) ? $context["mortgage_broker_list"] : $this->getContext($context, "mortgage_broker_list")) == 1))) {
            // line 104
            echo "        <h3>Mortgage Broker</h3>
          <div>
            <ul>
              ";
            // line 107
            if ((array_key_exists("mortgage_broker_list_show_mortgage", $context) && ((isset($context["mortgage_broker_list_show_mortgage"]) ? $context["mortgage_broker_list_show_mortgage"] : $this->getContext($context, "mortgage_broker_list_show_mortgage")) == 1))) {
                // line 108
                echo "                  <li><a href=\"#\">Mortgage List</a></li>
              ";
            }
            // line 109
            echo "            
              
              ";
            // line 111
            if ((array_key_exists("mortgage_broker_list_add_mortgage_broker", $context) && ((isset($context["mortgage_broker_list_add_mortgage_broker"]) ? $context["mortgage_broker_list_add_mortgage_broker"] : $this->getContext($context, "mortgage_broker_list_add_mortgage_broker")) == 1))) {
                // line 112
                echo "                  <li><a href=\"#\">Add Mortgage Broker</a></li>
              ";
            }
            // line 113
            echo "            
              
              ";
            // line 115
            if ((array_key_exists("mortgage_broker_list_show_mortgage_broker_list", $context) && ((isset($context["mortgage_broker_list_show_mortgage_broker_list"]) ? $context["mortgage_broker_list_show_mortgage_broker_list"] : $this->getContext($context, "mortgage_broker_list_show_mortgage_broker_list")) == 1))) {
                // line 116
                echo "                  <li><a href=\"#\">Mortgage Broker List</a></li>
              ";
            }
            // line 118
            echo "              
              ";
            // line 119
            if ((array_key_exists("mortgage_broker_list_welcome_letter", $context) && ((isset($context["mortgage_broker_list_welcome_letter"]) ? $context["mortgage_broker_list_welcome_letter"] : $this->getContext($context, "mortgage_broker_list_welcome_letter")) == 1))) {
                // line 120
                echo "                  <li><a href=\"#\">Welcome Letter</a></li>
              ";
            }
            // line 121
            echo "            
            </ul>
          </div>  
      ";
        }
        // line 125
        echo "      
      ";
        // line 126
        if ((array_key_exists("default_agent_settings", $context) && ((isset($context["default_agent_settings"]) ? $context["default_agent_settings"] : $this->getContext($context, "default_agent_settings")) == 1))) {
            // line 127
            echo "          <h3>Default Agent Settings</h3>
            <div>     
              <ul>
                ";
            // line 130
            if ((array_key_exists("default_agent_settings_default_html_headers", $context) && ((isset($context["default_agent_settings_default_html_headers"]) ? $context["default_agent_settings_default_html_headers"] : $this->getContext($context, "default_agent_settings_default_html_headers")) == 1))) {
                // line 131
                echo "                  <li><a href=\"#\">Default HTML Headers</a></li>
                ";
            }
            // line 133
            echo "                
                ";
            // line 134
            if ((array_key_exists("default_agent_settings_add_agent_html_hdr", $context) && ((isset($context["default_agent_settings_add_agent_html_hdr"]) ? $context["default_agent_settings_add_agent_html_hdr"] : $this->getContext($context, "default_agent_settings_add_agent_html_hdr")) == 1))) {
                // line 135
                echo "                  <li><a href=\"#\">Add Agent HTML Hdr</a></li>
                ";
            }
            // line 137
            echo "                
                ";
            // line 138
            if ((array_key_exists("default_agent_settings_default_signatures", $context) && ((isset($context["default_agent_settings_default_signatures"]) ? $context["default_agent_settings_default_signatures"] : $this->getContext($context, "default_agent_settings_default_signatures")) == 1))) {
                // line 139
                echo "                  <li><a href=\"#\">Default Signatures</a></li>
                ";
            }
            // line 141
            echo "                
                ";
            // line 142
            if ((array_key_exists("default_agent_settings_add_agent_signature", $context) && ((isset($context["default_agent_settings_add_agent_signature"]) ? $context["default_agent_settings_add_agent_signature"] : $this->getContext($context, "default_agent_settings_add_agent_signature")) == 1))) {
                // line 143
                echo "                  <li><a href=\"#\">Add Agent Signature</a></li>
                ";
            }
            // line 145
            echo "              </ul>
            </div>    
      ";
        }
        // line 148
        echo "     
      ";
        // line 149
        if ((array_key_exists("follow_up_camp", $context) && ((isset($context["follow_up_camp"]) ? $context["follow_up_camp"] : $this->getContext($context, "follow_up_camp")) == 1))) {
            // line 150
            echo "          <h3>Follow Up Camp.</h3>
              <div>
                  <ul>
                      ";
            // line 153
            if ((array_key_exists("follow_up_camp_add_campaign_email", $context) && ((isset($context["follow_up_camp_add_campaign_email"]) ? $context["follow_up_camp_add_campaign_email"] : $this->getContext($context, "follow_up_camp_add_campaign_email")) == 1))) {
                // line 154
                echo "                        <li><a href=\"#\">Add Campaign Email</a></li>
                      ";
            }
            // line 156
            echo "                      
                      ";
            // line 157
            if ((array_key_exists("follow_up_camp_list_email_templates", $context) && ((isset($context["follow_up_camp_list_email_templates"]) ? $context["follow_up_camp_list_email_templates"] : $this->getContext($context, "follow_up_camp_list_email_templates")) == 1))) {
                // line 158
                echo "                        <li><a href=\"#\">List Email Templates</a></li>            
                      ";
            }
            // line 160
            echo "                  </ul>
              </div>
      ";
        }
        // line 163
        echo "
      ";
        // line 164
        if ((array_key_exists("email_blast", $context) && ((isset($context["email_blast"]) ? $context["email_blast"] : $this->getContext($context, "email_blast")) == 1))) {
            // line 165
            echo "          <h3>Email Blast</h3>
            <div>
              <ul>            
                ";
            // line 168
            if ((array_key_exists("email_blast_send_to_all_agents", $context) && ((isset($context["email_blast_send_to_all_agents"]) ? $context["email_blast_send_to_all_agents"] : $this->getContext($context, "email_blast_send_to_all_agents")) == 1))) {
                // line 169
                echo "                    <li><a href=\"#\">Send to All Agents</a></li>
                ";
            }
            // line 171
            echo "                
                ";
            // line 172
            if ((array_key_exists("email_blast_send_individual_email", $context) && ((isset($context["email_blast_send_individual_email"]) ? $context["email_blast_send_individual_email"] : $this->getContext($context, "email_blast_send_individual_email")) == 1))) {
                // line 173
                echo "                  <li><a href=\"#\">Send Individual Email</a></li>
                ";
            }
            // line 175
            echo "                
                ";
            // line 176
            if ((array_key_exists("email_blast_manage_default_grps", $context) && ((isset($context["email_blast_manage_default_grps"]) ? $context["email_blast_manage_default_grps"] : $this->getContext($context, "email_blast_manage_default_grps")) == 1))) {
                // line 177
                echo "                  <li><a href=\"#\">Manage Default Grps</a></li>
                ";
            }
            // line 179
            echo "              </ul>
            </div>  
      ";
        }
        // line 182
        echo "      
      ";
        // line 183
        if ((array_key_exists("newsletters", $context) && ((isset($context["newsletters"]) ? $context["newsletters"] : $this->getContext($context, "newsletters")) == 1))) {
            // line 184
            echo "          <h3>Newsletters</h3>
          <div>
              <ul>
                ";
            // line 187
            if ((array_key_exists("newsletters_add_newsletter", $context) && ((isset($context["newsletters_add_newsletter"]) ? $context["newsletters_add_newsletter"] : $this->getContext($context, "newsletters_add_newsletter")) == 1))) {
                // line 188
                echo "                    <li><a href=\"#\">Add Newsletter</a></li>
                ";
            }
            // line 190
            echo "                
                ";
            // line 191
            if ((array_key_exists("newsletters_newsletter_defaults", $context) && ((isset($context["newsletters_newsletter_defaults"]) ? $context["newsletters_newsletter_defaults"] : $this->getContext($context, "newsletters_newsletter_defaults")) == 1))) {
                // line 192
                echo "                    <li><a href=\"#\">Newsletter Defaults</a></li>            
                ";
            }
            // line 194
            echo "              </ul>
          </div>  
      ";
        }
        // line 197
        echo "      
      ";
        // line 198
        if ((array_key_exists("statistics", $context) && ((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")) == 1))) {
            // line 199
            echo "          <h3>Statistics</h3>
          <div>
            <ul>           
                ";
            // line 202
            if ((array_key_exists("statistics_bulk_outgoing_emails", $context) && ((isset($context["statistics_bulk_outgoing_emails"]) ? $context["statistics_bulk_outgoing_emails"] : $this->getContext($context, "statistics_bulk_outgoing_emails")) == 1))) {
                // line 203
                echo "                    <li><a href=\"#\">Bulk Outgoing Emails</a></li>
                ";
            }
            // line 205
            echo "                
                ";
            // line 206
            if ((array_key_exists("statistics_virtual_tour_space", $context) && ((isset($context["statistics_virtual_tour_space"]) ? $context["statistics_virtual_tour_space"] : $this->getContext($context, "statistics_virtual_tour_space")) == 1))) {
                // line 207
                echo "                    <li><a href=\"#\">Virtual Tour Space</a></li>
                ";
            }
            // line 209
            echo "                
                ";
            // line 210
            if ((array_key_exists("statistics_ip_blocking", $context) && ((isset($context["statistics_ip_blocking"]) ? $context["statistics_ip_blocking"] : $this->getContext($context, "statistics_ip_blocking")) == 1))) {
                // line 211
                echo "                    <li><a href=\"#\">IP Blocking</a></li>
                ";
            }
            // line 213
            echo "            </ul>
          </div>   
      ";
        }
        // line 216
        echo "      
      ";
        // line 217
        if ((array_key_exists("default_surveys", $context) && ((isset($context["default_surveys"]) ? $context["default_surveys"] : $this->getContext($context, "default_surveys")) == 1))) {
            // line 218
            echo "        <h3>Default Surveys</h3>
        <div>
          <ul>            
            ";
            // line 221
            if ((array_key_exists("default_surveys_add_default_survey", $context) && ((isset($context["default_surveys_add_default_survey"]) ? $context["default_surveys_add_default_survey"] : $this->getContext($context, "default_surveys_add_default_survey")) == 1))) {
                // line 222
                echo "                <li><a href=\"#\">Add Default Survey</a></li>            
            ";
            }
            // line 224
            echo "          </ul>
        </div>  
      ";
        }
        // line 227
        echo "      
      ";
        // line 228
        if ((array_key_exists("documents", $context) && ((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")) == 1))) {
            // line 229
            echo "          <h3>Documents</h3>
          <div>
              <ul>        
                  ";
            // line 232
            if ((array_key_exists("documents_add_document", $context) && ((isset($context["documents_add_document"]) ? $context["documents_add_document"] : $this->getContext($context, "documents_add_document")) == 1))) {
                // line 233
                echo "                    <li><a href=\"#\">Add Document</a></li>
                  ";
            }
            // line 235
            echo "              </ul>
          </div>
      ";
        }
        // line 238
        echo "      
      ";
        // line 239
        if ((array_key_exists("form_templates", $context) && ((isset($context["form_templates"]) ? $context["form_templates"] : $this->getContext($context, "form_templates")) == 1))) {
            // line 240
            echo "          <h3>Form Templates</h3> 
            <div>
              <ul>        
                ";
            // line 243
            if ((array_key_exists("form_templates_add_form_templates", $context) && ((isset($context["form_templates_add_form_templates"]) ? $context["form_templates_add_form_templates"] : $this->getContext($context, "form_templates_add_form_templates")) == 1))) {
                echo "            
                  <li><a href=\"#\">Add Form Template</a></li>
                ";
            }
            // line 246
            echo "                
                ";
            // line 247
            if ((array_key_exists("form_templates_list_form_templates", $context) && ((isset($context["form_templates_list_form_templates"]) ? $context["form_templates_list_form_templates"] : $this->getContext($context, "form_templates_list_form_templates")) == 1))) {
                echo "   
                  <li><a href=\"#\">List Form Templates</a></li>
                ";
            }
            // line 249
            echo "            
              </ul>
            </div>
      ";
        }
        // line 253
        echo "      
      ";
        // line 254
        if ((array_key_exists("idx_setup_items", $context) && ((isset($context["idx_setup_items"]) ? $context["idx_setup_items"] : $this->getContext($context, "idx_setup_items")) == 1))) {
            // line 255
            echo "          <h3>IDX Setup Items</h3>
          <div>
            <ul>           
              ";
            // line 258
            if ((array_key_exists("idx_setup_items_idx_feed_template", $context) && ((isset($context["idx_setup_items_idx_feed_template"]) ? $context["idx_setup_items_idx_feed_template"] : $this->getContext($context, "idx_setup_items_idx_feed_template")) == 1))) {
                // line 259
                echo "                <li><a href=\"#\">IDX Feed Template</a></li>
              ";
            }
            // line 261
            echo "              
              ";
            // line 262
            if ((array_key_exists("idx_setup_items_idx_reports", $context) && ((isset($context["idx_setup_items_idx_reports"]) ? $context["idx_setup_items_idx_reports"] : $this->getContext($context, "idx_setup_items_idx_reports")) == 1))) {
                // line 263
                echo "                <li><a href=\"#\">IDX Reports</a></li>
              ";
            }
            // line 265
            echo "              
              ";
            // line 266
            if ((array_key_exists("idx_setup_items_edit_alert_mail", $context) && ((isset($context["idx_setup_items_edit_alert_mail"]) ? $context["idx_setup_items_edit_alert_mail"] : $this->getContext($context, "idx_setup_items_edit_alert_mail")) == 1))) {
                // line 267
                echo "                <li><a href=\"#\">Edit Alert Mail</a></li>
              ";
            }
            // line 269
            echo "              
              ";
            // line 270
            if ((array_key_exists("idx_setup_items_edit_viewing_sche_mail", $context) && ((isset($context["idx_setup_items_edit_viewing_sche_mail"]) ? $context["idx_setup_items_edit_viewing_sche_mail"] : $this->getContext($context, "idx_setup_items_edit_viewing_sche_mail")) == 1))) {
                // line 271
                echo "                <li><a href=\"#\">Edit Viewing Sche. Mail</a></li>
              ";
            }
            // line 273
            echo "            </ul>
          </div>  
      ";
        }
        // line 276
        echo "      
      ";
        // line 277
        if ((array_key_exists("transfer_process", $context) && ((isset($context["transfer_process"]) ? $context["transfer_process"] : $this->getContext($context, "transfer_process")) == 1))) {
            // line 278
            echo "        <h3>Transfer Process</h3>
        <div>
          <ul>            
            ";
            // line 281
            if ((array_key_exists("transfer_process_apg_db_transfer", $context) && ((isset($context["transfer_process_apg_db_transfer"]) ? $context["transfer_process_apg_db_transfer"] : $this->getContext($context, "transfer_process_apg_db_transfer")) == 1))) {
                // line 282
                echo "              <li><a href=\"#\">APG - DB Transfer</a></li>
            ";
            }
            // line 284
            echo "            ";
            if ((array_key_exists("transfer_process_focus_site_transfer", $context) && ((isset($context["transfer_process_focus_site_transfer"]) ? $context["transfer_process_focus_site_transfer"] : $this->getContext($context, "transfer_process_focus_site_transfer")) == 1))) {
                // line 285
                echo "              <li><a href=\"#\">Focus Site Transfer</a></li>            
            ";
            }
            // line 287
            echo "          </ul>
        </div>
      ";
        }
        // line 290
        echo "      
      ";
        // line 291
        if ((array_key_exists("site_setup_items", $context) && ((isset($context["site_setup_items"]) ? $context["site_setup_items"] : $this->getContext($context, "site_setup_items")) == 1))) {
            // line 292
            echo "          <h3>Site Setup Items</h3>
          <div>
            <ul>
              ";
            // line 295
            if ((array_key_exists("site_setup_items_admin_log", $context) && ((isset($context["site_setup_items_admin_log"]) ? $context["site_setup_items_admin_log"] : $this->getContext($context, "site_setup_items_admin_log")) == 1))) {
                // line 296
                echo "                <li><a href=\"#\">Admin Log</a></li>
              ";
            }
            // line 298
            echo "              
              ";
            // line 299
            if ((array_key_exists("site_setup_items_auto_scan_settings", $context) && ((isset($context["site_setup_items_auto_scan_settings"]) ? $context["site_setup_items_auto_scan_settings"] : $this->getContext($context, "site_setup_items_auto_scan_settings")) == 1))) {
                // line 300
                echo "                <li><a href=\"#\">Auto Scan Settings</a></li>
              ";
            }
            // line 302
            echo "              
              ";
            // line 303
            if ((array_key_exists("site_setup_items_admin_auto_scan_report", $context) && ((isset($context["site_setup_items_admin_auto_scan_report"]) ? $context["site_setup_items_admin_auto_scan_report"] : $this->getContext($context, "site_setup_items_admin_auto_scan_report")) == 1))) {
                // line 304
                echo "                <li><a href=\"#\">Admin Auto Scan Report</a></li>
              ";
            }
            // line 306
            echo "              
              ";
            // line 307
            if ((array_key_exists("site_setup_items_list_report_templates", $context) && ((isset($context["site_setup_items_list_report_templates"]) ? $context["site_setup_items_list_report_templates"] : $this->getContext($context, "site_setup_items_list_report_templates")) == 1))) {
                // line 308
                echo "                <li><a href=\"#\">List Report Templates</a></li>
              ";
            }
            // line 310
            echo "              
              ";
            // line 311
            if ((array_key_exists("site_setup_items_popup_windows", $context) && ((isset($context["site_setup_items_popup_windows"]) ? $context["site_setup_items_popup_windows"] : $this->getContext($context, "site_setup_items_popup_windows")) == 1))) {
                // line 312
                echo "                <li><a href=\"#\">Popup Windows</a></li>
              ";
            }
            // line 314
            echo "              
              ";
            // line 315
            if ((array_key_exists("site_setup_items_add_report", $context) && ((isset($context["site_setup_items_add_report"]) ? $context["site_setup_items_add_report"] : $this->getContext($context, "site_setup_items_add_report")) == 1))) {
                // line 316
                echo "                <li><a href=\"#\">Add Report</a></li>
              ";
            }
            // line 318
            echo "              
              ";
            // line 319
            if ((array_key_exists("site_setup_items_add_framed_report", $context) && ((isset($context["site_setup_items_add_framed_report"]) ? $context["site_setup_items_add_framed_report"] : $this->getContext($context, "site_setup_items_add_framed_report")) == 1))) {
                // line 320
                echo "                <li><a href=\"#\">Add Framed Report</a></li>
              ";
            }
            // line 322
            echo "              
              ";
            // line 323
            if ((array_key_exists("site_setup_items_add_custom_page", $context) && ((isset($context["site_setup_items_add_custom_page"]) ? $context["site_setup_items_add_custom_page"] : $this->getContext($context, "site_setup_items_add_custom_page")) == 1))) {
                // line 324
                echo "                <li><a href=\"#\">Add Custom Page</a></li>
              ";
            }
            // line 326
            echo "              
              ";
            // line 327
            if ((array_key_exists("site_setup_items_add_external_link", $context) && ((isset($context["site_setup_items_add_external_link"]) ? $context["site_setup_items_add_external_link"] : $this->getContext($context, "site_setup_items_add_external_link")) == 1))) {
                // line 328
                echo "                <li><a href=\"#\">Add External Link</a></li>
              ";
            }
            // line 330
            echo "              
              ";
            // line 331
            if ((array_key_exists("site_setup_items_add_form", $context) && ((isset($context["site_setup_items_add_form"]) ? $context["site_setup_items_add_form"] : $this->getContext($context, "site_setup_items_add_form")) == 1))) {
                // line 332
                echo "                <li><a href=\"#\">Add Form</a></li>
              ";
            }
            // line 334
            echo "              
              ";
            // line 335
            if ((array_key_exists("site_setup_items_default_form_groups", $context) && ((isset($context["site_setup_items_default_form_groups"]) ? $context["site_setup_items_default_form_groups"] : $this->getContext($context, "site_setup_items_default_form_groups")) == 1))) {
                // line 336
                echo "                <li><a href=\"#\">Default Form Groups</a></li>
              ";
            }
            // line 338
            echo "              
              ";
            // line 339
            if ((array_key_exists("site_setup_items_property_lists_options", $context) && ((isset($context["site_setup_items_property_lists_options"]) ? $context["site_setup_items_property_lists_options"] : $this->getContext($context, "site_setup_items_property_lists_options")) == 1))) {
                // line 340
                echo "                <li><a href=\"#\">Property Lists Options</a></li>
              ";
            }
            // line 342
            echo "              
              ";
            // line 343
            if ((array_key_exists("site_setup_items_default_meta_tags", $context) && ((isset($context["site_setup_items_default_meta_tags"]) ? $context["site_setup_items_default_meta_tags"] : $this->getContext($context, "site_setup_items_default_meta_tags")) == 1))) {
                // line 344
                echo "                <li><a href=\"#\">Default Meta Tags</a></li>
              ";
            }
            // line 346
            echo "              
              ";
            // line 347
            if ((array_key_exists("site_setup_items_edit_light_dark_footer", $context) && ((isset($context["site_setup_items_edit_light_dark_footer"]) ? $context["site_setup_items_edit_light_dark_footer"] : $this->getContext($context, "site_setup_items_edit_light_dark_footer")) == 1))) {
                // line 348
                echo "                <li><a href=\"#\">Edit Light/Dark Footer</a></li>
              ";
            }
            // line 350
            echo "            </ul>
          </div>
        ";
        }
        // line 353
        echo "        
        ";
        // line 354
        if ((array_key_exists("admin_settings", $context) && ((isset($context["admin_settings"]) ? $context["admin_settings"] : $this->getContext($context, "admin_settings")) == 1))) {
            // line 355
            echo "          <h3>Admin Settings</h3>
          <div>
              <ul>            
                ";
            // line 358
            if ((array_key_exists("admin_settings_list_admin_signatures", $context) && ((isset($context["admin_settings_list_admin_signatures"]) ? $context["admin_settings_list_admin_signatures"] : $this->getContext($context, "admin_settings_list_admin_signatures")) == 1))) {
                // line 359
                echo "                    <li><a href=\"#\">List Admin Signatures</a></li>
                ";
            }
            // line 361
            echo "                
                ";
            // line 362
            if ((array_key_exists("admin_settings_add_admin_signature", $context) && ((isset($context["admin_settings_add_admin_signature"]) ? $context["admin_settings_add_admin_signature"] : $this->getContext($context, "admin_settings_add_admin_signature")) == 1))) {
                // line 363
                echo "                    <li><a href=\"#\">Add Admin Signature</a></li>
                ";
            }
            // line 365
            echo "                
                ";
            // line 366
            if ((array_key_exists("admin_settings_education_tab_settings", $context) && ((isset($context["admin_settings_education_tab_settings"]) ? $context["admin_settings_education_tab_settings"] : $this->getContext($context, "admin_settings_education_tab_settings")) == 1))) {
                // line 367
                echo "                    <li><a href=\"#\">Education Tab Settings</a></li>
                ";
            }
            // line 369
            echo "                
                ";
            // line 370
            if ((array_key_exists("admin_settings_focus_site_tab_settings", $context) && ((isset($context["admin_settings_focus_site_tab_settings"]) ? $context["admin_settings_focus_site_tab_settings"] : $this->getContext($context, "admin_settings_focus_site_tab_settings")) == 1))) {
                // line 371
                echo "                    <li><a href=\"#\">Focus Site Tab Settings</a></li>
                ";
            }
            // line 373
            echo "                
                ";
            // line 374
            if ((array_key_exists("admin_settings_manage_admin_users", $context) && ((isset($context["admin_settings_manage_admin_users"]) ? $context["admin_settings_manage_admin_users"] : $this->getContext($context, "admin_settings_manage_admin_users")) == 1))) {
                // line 375
                echo "                    <li><a href=\"#\">Manage Admin Users</a></li>
                ";
            }
            // line 377
            echo "                
                ";
            // line 378
            if ((array_key_exists("admin_settings_manage_admin_logs", $context) && ((isset($context["admin_settings_manage_admin_logs"]) ? $context["admin_settings_manage_admin_logs"] : $this->getContext($context, "admin_settings_manage_admin_logs")) == 1))) {
                // line 379
                echo "                    <li><a href=\"#\">Manage Admin Logs</a></li>
                ";
            }
            // line 381
            echo "                
                ";
            // line 382
            if ((array_key_exists("admin_settings_property_detail_text", $context) && ((isset($context["admin_settings_property_detail_text"]) ? $context["admin_settings_property_detail_text"] : $this->getContext($context, "admin_settings_property_detail_text")) == 1))) {
                // line 383
                echo "                    <li><a href=\"#\">Property Detail Text</a></li>
                ";
            }
            // line 385
            echo "                
                ";
            // line 386
            if ((array_key_exists("admin_settings_domain_forwarding", $context) && ((isset($context["admin_settings_domain_forwarding"]) ? $context["admin_settings_domain_forwarding"] : $this->getContext($context, "admin_settings_domain_forwarding")) == 1))) {
                // line 387
                echo "                    <li><a href=\"#\">Domain Forwarding</a></li>
                ";
            }
            // line 389
            echo "                
                ";
            // line 390
            if ((array_key_exists("admin_settings_crawlers", $context) && ((isset($context["admin_settings_crawlers"]) ? $context["admin_settings_crawlers"] : $this->getContext($context, "admin_settings_crawlers")) == 1))) {
                // line 391
                echo "                    <li><a href=\"#\">Crawlers</a></li>
                ";
            }
            // line 393
            echo "                
                ";
            // line 394
            if ((array_key_exists("admin_settings_change_page_contents", $context) && ((isset($context["admin_settings_change_page_contents"]) ? $context["admin_settings_change_page_contents"] : $this->getContext($context, "admin_settings_change_page_contents")) == 1))) {
                // line 395
                echo "                    <li><a href=\"#\">Change Page Contents</a></li>
                ";
            }
            // line 397
            echo "                
                ";
            // line 398
            if ((array_key_exists("admin_settings_update_pop_content", $context) && ((isset($context["admin_settings_update_pop_content"]) ? $context["admin_settings_update_pop_content"] : $this->getContext($context, "admin_settings_update_pop_content")) == 1))) {
                // line 399
                echo "                    <li><a href=\"#\">Update Pop Content</a></li>            
                ";
            }
            // line 401
            echo "              </ul>
          </div>
        ";
        }
        // line 404
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle::reseller_sidebar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  878 => 404,  873 => 401,  869 => 399,  867 => 398,  864 => 397,  860 => 395,  858 => 394,  855 => 393,  851 => 391,  849 => 390,  846 => 389,  842 => 387,  840 => 386,  837 => 385,  833 => 383,  831 => 382,  828 => 381,  824 => 379,  822 => 378,  819 => 377,  815 => 375,  813 => 374,  810 => 373,  806 => 371,  804 => 370,  801 => 369,  797 => 367,  795 => 366,  792 => 365,  788 => 363,  786 => 362,  783 => 361,  779 => 359,  777 => 358,  772 => 355,  770 => 354,  767 => 353,  762 => 350,  758 => 348,  756 => 347,  753 => 346,  749 => 344,  747 => 343,  744 => 342,  740 => 340,  738 => 339,  735 => 338,  731 => 336,  729 => 335,  726 => 334,  722 => 332,  720 => 331,  717 => 330,  713 => 328,  711 => 327,  708 => 326,  704 => 324,  702 => 323,  699 => 322,  695 => 320,  693 => 319,  690 => 318,  686 => 316,  684 => 315,  681 => 314,  677 => 312,  675 => 311,  672 => 310,  668 => 308,  666 => 307,  663 => 306,  659 => 304,  657 => 303,  654 => 302,  650 => 300,  648 => 299,  645 => 298,  641 => 296,  639 => 295,  634 => 292,  632 => 291,  629 => 290,  624 => 287,  620 => 285,  617 => 284,  613 => 282,  611 => 281,  606 => 278,  604 => 277,  601 => 276,  596 => 273,  592 => 271,  590 => 270,  587 => 269,  583 => 267,  581 => 266,  578 => 265,  574 => 263,  572 => 262,  569 => 261,  565 => 259,  563 => 258,  558 => 255,  556 => 254,  553 => 253,  547 => 249,  541 => 247,  538 => 246,  532 => 243,  527 => 240,  525 => 239,  522 => 238,  517 => 235,  513 => 233,  511 => 232,  506 => 229,  504 => 228,  501 => 227,  496 => 224,  492 => 222,  490 => 221,  485 => 218,  483 => 217,  480 => 216,  475 => 213,  471 => 211,  469 => 210,  466 => 209,  462 => 207,  460 => 206,  457 => 205,  453 => 203,  451 => 202,  446 => 199,  444 => 198,  441 => 197,  436 => 194,  432 => 192,  430 => 191,  427 => 190,  423 => 188,  421 => 187,  416 => 184,  414 => 183,  411 => 182,  406 => 179,  402 => 177,  400 => 176,  397 => 175,  393 => 173,  391 => 172,  388 => 171,  384 => 169,  382 => 168,  377 => 165,  375 => 164,  372 => 163,  367 => 160,  363 => 158,  361 => 157,  358 => 156,  354 => 154,  352 => 153,  347 => 150,  345 => 149,  342 => 148,  337 => 145,  333 => 143,  331 => 142,  328 => 141,  324 => 139,  322 => 138,  319 => 137,  315 => 135,  313 => 134,  310 => 133,  306 => 131,  304 => 130,  299 => 127,  297 => 126,  294 => 125,  288 => 121,  284 => 120,  282 => 119,  279 => 118,  275 => 116,  273 => 115,  269 => 113,  265 => 112,  263 => 111,  259 => 109,  255 => 108,  253 => 107,  248 => 104,  246 => 103,  243 => 102,  238 => 99,  234 => 97,  232 => 96,  229 => 95,  225 => 93,  223 => 92,  220 => 91,  216 => 89,  214 => 88,  211 => 87,  207 => 85,  205 => 84,  202 => 83,  198 => 81,  196 => 80,  193 => 79,  189 => 77,  187 => 76,  183 => 74,  179 => 72,  177 => 71,  174 => 70,  170 => 68,  168 => 67,  165 => 66,  161 => 64,  159 => 63,  156 => 62,  152 => 60,  150 => 59,  145 => 56,  143 => 55,  139 => 53,  134 => 50,  128 => 47,  125 => 46,  119 => 43,  116 => 42,  110 => 39,  107 => 38,  101 => 36,  99 => 35,  96 => 34,  91 => 32,  87 => 31,  84 => 30,  78 => 28,  76 => 27,  69 => 23,  63 => 20,  59 => 19,  52 => 14,  44 => 12,  42 => 11,  38 => 10,  31 => 8,  25 => 6,  19 => 1,);
    }
}
