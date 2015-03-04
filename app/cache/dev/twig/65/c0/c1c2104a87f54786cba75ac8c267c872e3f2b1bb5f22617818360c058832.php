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
\t\t\t\t<li><a href=\"\">Change Password</a></li>
            </ul> 
          </div> 
        <h3>Signature</h3>
          <div style=\"height:100px !important;\">
              <ul>
                  <li><a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("manage_signature");
        echo "\">Add Default Signature</a></li>
                  <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("signatures");
        echo "\">Default Signatures</a></li>                  
              </ul>
          </div>
      ";
        // line 20
        if ((array_key_exists("agent_list", $context) && ((isset($context["agent_list"]) ? $context["agent_list"] : $this->getContext($context, "agent_list")) == 1))) {
            echo " 
        <h3>Account</h3>
          <div>
            <ul> 
              ";
            // line 24
            if ((array_key_exists("agent_list_add_agent", $context) && ((isset($context["agent_list_add_agent"]) ? $context["agent_list_add_agent"] : $this->getContext($context, "agent_list_add_agent")) == 1))) {
                // line 25
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("_addaccount");
                echo "\">Add Account</a></li>
              ";
            }
            // line 27
            echo "              
              ";
            // line 28
            if ((array_key_exists("agent_list_account_list", $context) && ((isset($context["agent_list_account_list"]) ? $context["agent_list_account_list"] : $this->getContext($context, "agent_list_account_list")) == 1))) {
                echo "  
                  <li><a href=\"";
                // line 29
                echo $this->env->getExtension('routing')->getPath("_accountlist");
                echo "\">Account List</a></li>
              ";
            }
            // line 31
            echo "              
              ";
            // line 32
            if ((array_key_exists("agent_list_show_agent_list", $context) && ((isset($context["agent_list_show_agent_list"]) ? $context["agent_list_show_agent_list"] : $this->getContext($context, "agent_list_show_agent_list")) == 1))) {
                // line 33
                echo "                  <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("_agentlist");
                echo "\">Agent List</a></li>
              ";
            }
            // line 35
            echo "              
              ";
            // line 36
            if ((array_key_exists("agent_list_welcome_letter", $context) && ((isset($context["agent_list_welcome_letter"]) ? $context["agent_list_welcome_letter"] : $this->getContext($context, "agent_list_welcome_letter")) == 1))) {
                echo " 
                  <li><a href=\"#\">Welcome Letter</a></li>
              ";
            }
            // line 39
            echo "              
              ";
            // line 40
            if ((array_key_exists("agent_list_show_was_clients", $context) && ((isset($context["agent_list_show_was_clients"]) ? $context["agent_list_show_was_clients"] : $this->getContext($context, "agent_list_show_was_clients")) == 1))) {
                echo " 
                  <li><a href=\"#\">Show WAS clients</a></li>
              ";
            }
            // line 43
            echo "              
              ";
            // line 44
            if ((array_key_exists("agent_list_show_kr_clients", $context) && ((isset($context["agent_list_show_kr_clients"]) ? $context["agent_list_show_kr_clients"] : $this->getContext($context, "agent_list_show_kr_clients")) == 1))) {
                echo "  
                  <li><a href=\"#\">Show KR clients</a></li>
              ";
            }
            // line 47
            echo "            </ul>              
          </div>
      ";
        }
        // line 50
        echo "      
      
      ";
        // line 52
        if ((array_key_exists("site_list", $context) && ((isset($context["site_list"]) ? $context["site_list"] : $this->getContext($context, "site_list")) == 1))) {
            // line 53
            echo "        <h3>Site</h3>
          <div>
            <ul>              
              ";
            // line 56
            if ((array_key_exists("site_list_add_site", $context) && ((isset($context["site_list_add_site"]) ? $context["site_list_add_site"] : $this->getContext($context, "site_list_add_site")) == 1))) {
                // line 57
                echo "                  <li><a href=\"#\">Add Site</a></li>
              ";
            }
            // line 59
            echo "              
              ";
            // line 60
            if ((array_key_exists("site_list_show_site_list", $context) && ((isset($context["site_list_show_site_list"]) ? $context["site_list_show_site_list"] : $this->getContext($context, "site_list_show_site_list")) == 1))) {
                // line 61
                echo "                  <li><a href=\"#\">Site List</a></li>
              ";
            }
            // line 63
            echo "              
              ";
            // line 64
            if ((array_key_exists("site_list_list_custom_templates", $context) && ((isset($context["site_list_list_custom_templates"]) ? $context["site_list_list_custom_templates"] : $this->getContext($context, "site_list_list_custom_templates")) == 1))) {
                // line 65
                echo "                  <li><a href=\"#\">List Custom Templates</a></li>
              ";
            }
            // line 67
            echo "              
              ";
            // line 68
            if ((array_key_exists("site_list_new_custom_template", $context) && ((isset($context["site_list_new_custom_template"]) ? $context["site_list_new_custom_template"] : $this->getContext($context, "site_list_new_custom_template")) == 1))) {
                // line 69
                echo "                  <li><a href=\"#\">New Custom Temlate</a></li>
              ";
            }
            // line 71
            echo "
                  <li><a href=\"#\">List Property Templates</a></li>
              ";
            // line 73
            if ((array_key_exists("site_list_new_property_template", $context) && ((isset($context["site_list_new_property_template"]) ? $context["site_list_new_property_template"] : $this->getContext($context, "site_list_new_property_template")) == 1))) {
                // line 74
                echo "                  <li><a href=\"#\">New Property Template</a></li>
              ";
            }
            // line 76
            echo "              
              ";
            // line 77
            if ((array_key_exists("site_list_list_theme_templates", $context) && ((isset($context["site_list_list_theme_templates"]) ? $context["site_list_list_theme_templates"] : $this->getContext($context, "site_list_list_theme_templates")) == 1))) {
                // line 78
                echo "                  <li><a href=\"#\">List Theme Template</a></li>
              ";
            }
            // line 80
            echo "              
              ";
            // line 81
            if ((array_key_exists("site_list_site_visitor_and_form_states", $context) && ((isset($context["site_list_site_visitor_and_form_states"]) ? $context["site_list_site_visitor_and_form_states"] : $this->getContext($context, "site_list_site_visitor_and_form_states")) == 1))) {
                // line 82
                echo "                  <li><a href=\"#\">Site Visitor & Form Stats</a></li>
              ";
            }
            // line 84
            echo "              
              ";
            // line 85
            if ((array_key_exists("site_list_list_focus_sites", $context) && ((isset($context["site_list_list_focus_sites"]) ? $context["site_list_list_focus_sites"] : $this->getContext($context, "site_list_list_focus_sites")) == 1))) {
                // line 86
                echo "                  <li><a href=\"#\">List Focus Sites</a></li>
              ";
            }
            // line 88
            echo "              
              ";
            // line 89
            if ((array_key_exists("site_list_client_custom_focus_site", $context) && ((isset($context["site_list_client_custom_focus_site"]) ? $context["site_list_client_custom_focus_site"] : $this->getContext($context, "site_list_client_custom_focus_site")) == 1))) {
                // line 90
                echo "                  <li><a href=\"#\">Client Custom Focus Site</a></li>
              ";
            }
            // line 92
            echo "              
              ";
            // line 93
            if ((array_key_exists("site_list_add_focus", $context) && ((isset($context["site_list_add_focus"]) ? $context["site_list_add_focus"] : $this->getContext($context, "site_list_add_focus")) == 1))) {
                // line 94
                echo "                  <li><a href=\"#\">Add Focus Site</a></li>
              ";
            }
            // line 96
            echo "            </ul>
          </div>   
      ";
        }
        // line 99
        echo "
      ";
        // line 100
        if ((array_key_exists("mortgage_broker_list", $context) && ((isset($context["mortgage_broker_list"]) ? $context["mortgage_broker_list"] : $this->getContext($context, "mortgage_broker_list")) == 1))) {
            // line 101
            echo "        <h3>Mortgage Broker</h3>
          <div>
            <ul>
              ";
            // line 104
            if ((array_key_exists("mortgage_broker_list_show_mortgage", $context) && ((isset($context["mortgage_broker_list_show_mortgage"]) ? $context["mortgage_broker_list_show_mortgage"] : $this->getContext($context, "mortgage_broker_list_show_mortgage")) == 1))) {
                // line 105
                echo "                  <li><a href=\"#\">Mortgage List</a></li>
              ";
            }
            // line 106
            echo "            
              
              ";
            // line 108
            if ((array_key_exists("mortgage_broker_list_add_mortgage_broker", $context) && ((isset($context["mortgage_broker_list_add_mortgage_broker"]) ? $context["mortgage_broker_list_add_mortgage_broker"] : $this->getContext($context, "mortgage_broker_list_add_mortgage_broker")) == 1))) {
                // line 109
                echo "                  <li><a href=\"#\">Add Mortgage Broker</a></li>
              ";
            }
            // line 110
            echo "            
              
              ";
            // line 112
            if ((array_key_exists("mortgage_broker_list_show_mortgage_broker_list", $context) && ((isset($context["mortgage_broker_list_show_mortgage_broker_list"]) ? $context["mortgage_broker_list_show_mortgage_broker_list"] : $this->getContext($context, "mortgage_broker_list_show_mortgage_broker_list")) == 1))) {
                // line 113
                echo "                  <li><a href=\"#\">Mortgage Broker List</a></li>
              ";
            }
            // line 115
            echo "              
              ";
            // line 116
            if ((array_key_exists("mortgage_broker_list_welcome_letter", $context) && ((isset($context["mortgage_broker_list_welcome_letter"]) ? $context["mortgage_broker_list_welcome_letter"] : $this->getContext($context, "mortgage_broker_list_welcome_letter")) == 1))) {
                // line 117
                echo "                  <li><a href=\"#\">Welcome Letter</a></li>
              ";
            }
            // line 118
            echo "            
            </ul>
          </div>  
      ";
        }
        // line 122
        echo "      
      ";
        // line 123
        if ((array_key_exists("default_agent_settings", $context) && ((isset($context["default_agent_settings"]) ? $context["default_agent_settings"] : $this->getContext($context, "default_agent_settings")) == 1))) {
            // line 124
            echo "          <h3>Default Agent Settings</h3>
            <div>     
              <ul>
                ";
            // line 127
            if ((array_key_exists("default_agent_settings_default_html_headers", $context) && ((isset($context["default_agent_settings_default_html_headers"]) ? $context["default_agent_settings_default_html_headers"] : $this->getContext($context, "default_agent_settings_default_html_headers")) == 1))) {
                // line 128
                echo "                  <li><a href=\"#\">Default HTML Headers</a></li>
                ";
            }
            // line 130
            echo "                
                ";
            // line 131
            if ((array_key_exists("default_agent_settings_add_agent_html_hdr", $context) && ((isset($context["default_agent_settings_add_agent_html_hdr"]) ? $context["default_agent_settings_add_agent_html_hdr"] : $this->getContext($context, "default_agent_settings_add_agent_html_hdr")) == 1))) {
                // line 132
                echo "                  <li><a href=\"#\">Add Agent HTML Hdr</a></li>
                ";
            }
            // line 134
            echo "                
                ";
            // line 135
            if ((array_key_exists("default_agent_settings_default_signatures", $context) && ((isset($context["default_agent_settings_default_signatures"]) ? $context["default_agent_settings_default_signatures"] : $this->getContext($context, "default_agent_settings_default_signatures")) == 1))) {
                // line 136
                echo "                  <li><a href=\"#\">Default Signatures</a></li>
                ";
            }
            // line 138
            echo "                
                ";
            // line 139
            if ((array_key_exists("default_agent_settings_add_agent_signature", $context) && ((isset($context["default_agent_settings_add_agent_signature"]) ? $context["default_agent_settings_add_agent_signature"] : $this->getContext($context, "default_agent_settings_add_agent_signature")) == 1))) {
                // line 140
                echo "                  <li><a href=\"#\">Add Agent Signature</a></li>
                ";
            }
            // line 142
            echo "              </ul>
            </div>    
      ";
        }
        // line 145
        echo "     
      ";
        // line 146
        if ((array_key_exists("follow_up_camp", $context) && ((isset($context["follow_up_camp"]) ? $context["follow_up_camp"] : $this->getContext($context, "follow_up_camp")) == 1))) {
            // line 147
            echo "          <h3>Follow Up Camp.</h3>
              <div>
                  <ul>
                      ";
            // line 150
            if ((array_key_exists("follow_up_camp_add_campaign_email", $context) && ((isset($context["follow_up_camp_add_campaign_email"]) ? $context["follow_up_camp_add_campaign_email"] : $this->getContext($context, "follow_up_camp_add_campaign_email")) == 1))) {
                // line 151
                echo "                        <li><a href=\"#\">Add Campaign Email</a></li>
                      ";
            }
            // line 153
            echo "                      
                      ";
            // line 154
            if ((array_key_exists("follow_up_camp_list_email_templates", $context) && ((isset($context["follow_up_camp_list_email_templates"]) ? $context["follow_up_camp_list_email_templates"] : $this->getContext($context, "follow_up_camp_list_email_templates")) == 1))) {
                // line 155
                echo "                        <li><a href=\"#\">List Email Templates</a></li>            
                      ";
            }
            // line 157
            echo "                  </ul>
              </div>
      ";
        }
        // line 160
        echo "
      ";
        // line 161
        if ((array_key_exists("email_blast", $context) && ((isset($context["email_blast"]) ? $context["email_blast"] : $this->getContext($context, "email_blast")) == 1))) {
            // line 162
            echo "          <h3>Email Blast</h3>
            <div>
              <ul>            
                ";
            // line 165
            if ((array_key_exists("email_blast_send_to_all_agents", $context) && ((isset($context["email_blast_send_to_all_agents"]) ? $context["email_blast_send_to_all_agents"] : $this->getContext($context, "email_blast_send_to_all_agents")) == 1))) {
                // line 166
                echo "                    <li><a href=\"#\">Send to All Agents</a></li>
                ";
            }
            // line 168
            echo "                
                ";
            // line 169
            if ((array_key_exists("email_blast_send_individual_email", $context) && ((isset($context["email_blast_send_individual_email"]) ? $context["email_blast_send_individual_email"] : $this->getContext($context, "email_blast_send_individual_email")) == 1))) {
                // line 170
                echo "                  <li><a href=\"#\">Send Individual Email</a></li>
                ";
            }
            // line 172
            echo "                
                ";
            // line 173
            if ((array_key_exists("email_blast_manage_default_grps", $context) && ((isset($context["email_blast_manage_default_grps"]) ? $context["email_blast_manage_default_grps"] : $this->getContext($context, "email_blast_manage_default_grps")) == 1))) {
                // line 174
                echo "                  <li><a href=\"#\">Manage Default Grps</a></li>
                ";
            }
            // line 176
            echo "              </ul>
            </div>  
      ";
        }
        // line 179
        echo "      
      ";
        // line 180
        if ((array_key_exists("newsletters", $context) && ((isset($context["newsletters"]) ? $context["newsletters"] : $this->getContext($context, "newsletters")) == 1))) {
            // line 181
            echo "          <h3>Newsletters</h3>
          <div>
              <ul>
                ";
            // line 184
            if ((array_key_exists("newsletters_add_newsletter", $context) && ((isset($context["newsletters_add_newsletter"]) ? $context["newsletters_add_newsletter"] : $this->getContext($context, "newsletters_add_newsletter")) == 1))) {
                // line 185
                echo "                    <li><a href=\"#\">Add Newsletter</a></li>
                ";
            }
            // line 187
            echo "                
                ";
            // line 188
            if ((array_key_exists("newsletters_newsletter_defaults", $context) && ((isset($context["newsletters_newsletter_defaults"]) ? $context["newsletters_newsletter_defaults"] : $this->getContext($context, "newsletters_newsletter_defaults")) == 1))) {
                // line 189
                echo "                    <li><a href=\"#\">Newsletter Defaults</a></li>            
                ";
            }
            // line 191
            echo "              </ul>
          </div>  
      ";
        }
        // line 194
        echo "      
      ";
        // line 195
        if ((array_key_exists("statistics", $context) && ((isset($context["statistics"]) ? $context["statistics"] : $this->getContext($context, "statistics")) == 1))) {
            // line 196
            echo "          <h3>Statistics</h3>
          <div>
            <ul>           
                ";
            // line 199
            if ((array_key_exists("statistics_bulk_outgoing_emails", $context) && ((isset($context["statistics_bulk_outgoing_emails"]) ? $context["statistics_bulk_outgoing_emails"] : $this->getContext($context, "statistics_bulk_outgoing_emails")) == 1))) {
                // line 200
                echo "                    <li><a href=\"#\">Bulk Outgoing Emails</a></li>
                ";
            }
            // line 202
            echo "                
                ";
            // line 203
            if ((array_key_exists("statistics_virtual_tour_space", $context) && ((isset($context["statistics_virtual_tour_space"]) ? $context["statistics_virtual_tour_space"] : $this->getContext($context, "statistics_virtual_tour_space")) == 1))) {
                // line 204
                echo "                    <li><a href=\"#\">Virtual Tour Space</a></li>
                ";
            }
            // line 206
            echo "                
                ";
            // line 207
            if ((array_key_exists("statistics_ip_blocking", $context) && ((isset($context["statistics_ip_blocking"]) ? $context["statistics_ip_blocking"] : $this->getContext($context, "statistics_ip_blocking")) == 1))) {
                // line 208
                echo "                    <li><a href=\"#\">IP Blocking</a></li>
                ";
            }
            // line 210
            echo "            </ul>
          </div>   
      ";
        }
        // line 213
        echo "      
      ";
        // line 214
        if ((array_key_exists("default_surveys", $context) && ((isset($context["default_surveys"]) ? $context["default_surveys"] : $this->getContext($context, "default_surveys")) == 1))) {
            // line 215
            echo "        <h3>Default Surveys</h3>
        <div>
          <ul>            
            ";
            // line 218
            if ((array_key_exists("default_surveys_add_default_survey", $context) && ((isset($context["default_surveys_add_default_survey"]) ? $context["default_surveys_add_default_survey"] : $this->getContext($context, "default_surveys_add_default_survey")) == 1))) {
                // line 219
                echo "                <li><a href=\"#\">Add Default Survey</a></li>            
            ";
            }
            // line 221
            echo "          </ul>
        </div>  
      ";
        }
        // line 224
        echo "      
      ";
        // line 225
        if ((array_key_exists("documents", $context) && ((isset($context["documents"]) ? $context["documents"] : $this->getContext($context, "documents")) == 1))) {
            // line 226
            echo "          <h3>Documents</h3>
          <div>
              <ul>        
                  ";
            // line 229
            if ((array_key_exists("documents_add_document", $context) && ((isset($context["documents_add_document"]) ? $context["documents_add_document"] : $this->getContext($context, "documents_add_document")) == 1))) {
                // line 230
                echo "                    <li><a href=\"#\">Add Document</a></li>
                  ";
            }
            // line 232
            echo "              </ul>
          </div>
      ";
        }
        // line 235
        echo "      
      ";
        // line 236
        if ((array_key_exists("form_templates", $context) && ((isset($context["form_templates"]) ? $context["form_templates"] : $this->getContext($context, "form_templates")) == 1))) {
            // line 237
            echo "          <h3>Form Templates</h3> 
            <div>
              <ul>        
                ";
            // line 240
            if ((array_key_exists("form_templates_add_form_templates", $context) && ((isset($context["form_templates_add_form_templates"]) ? $context["form_templates_add_form_templates"] : $this->getContext($context, "form_templates_add_form_templates")) == 1))) {
                echo "            
                  <li><a href=\"#\">Add Form Template</a></li>
                ";
            }
            // line 243
            echo "                
                ";
            // line 244
            if ((array_key_exists("form_templates_list_form_templates", $context) && ((isset($context["form_templates_list_form_templates"]) ? $context["form_templates_list_form_templates"] : $this->getContext($context, "form_templates_list_form_templates")) == 1))) {
                echo "   
                  <li><a href=\"#\">List Form Templates</a></li>
                ";
            }
            // line 246
            echo "            
              </ul>
            </div>
      ";
        }
        // line 250
        echo "      
      ";
        // line 251
        if ((array_key_exists("idx_setup_items", $context) && ((isset($context["idx_setup_items"]) ? $context["idx_setup_items"] : $this->getContext($context, "idx_setup_items")) == 1))) {
            // line 252
            echo "          <h3>IDX Setup Items</h3>
          <div>
            <ul>           
              ";
            // line 255
            if ((array_key_exists("idx_setup_items_idx_feed_template", $context) && ((isset($context["idx_setup_items_idx_feed_template"]) ? $context["idx_setup_items_idx_feed_template"] : $this->getContext($context, "idx_setup_items_idx_feed_template")) == 1))) {
                // line 256
                echo "                <li><a href=\"#\">IDX Feed Template</a></li>
              ";
            }
            // line 258
            echo "              
              ";
            // line 259
            if ((array_key_exists("idx_setup_items_idx_reports", $context) && ((isset($context["idx_setup_items_idx_reports"]) ? $context["idx_setup_items_idx_reports"] : $this->getContext($context, "idx_setup_items_idx_reports")) == 1))) {
                // line 260
                echo "                <li><a href=\"#\">IDX Reports</a></li>
              ";
            }
            // line 262
            echo "              
              ";
            // line 263
            if ((array_key_exists("idx_setup_items_edit_alert_mail", $context) && ((isset($context["idx_setup_items_edit_alert_mail"]) ? $context["idx_setup_items_edit_alert_mail"] : $this->getContext($context, "idx_setup_items_edit_alert_mail")) == 1))) {
                // line 264
                echo "                <li><a href=\"#\">Edit Alert Mail</a></li>
              ";
            }
            // line 266
            echo "              
              ";
            // line 267
            if ((array_key_exists("idx_setup_items_edit_viewing_sche_mail", $context) && ((isset($context["idx_setup_items_edit_viewing_sche_mail"]) ? $context["idx_setup_items_edit_viewing_sche_mail"] : $this->getContext($context, "idx_setup_items_edit_viewing_sche_mail")) == 1))) {
                // line 268
                echo "                <li><a href=\"#\">Edit Viewing Sche. Mail</a></li>
              ";
            }
            // line 270
            echo "            </ul>
          </div>  
      ";
        }
        // line 273
        echo "      
      ";
        // line 274
        if ((array_key_exists("transfer_process", $context) && ((isset($context["transfer_process"]) ? $context["transfer_process"] : $this->getContext($context, "transfer_process")) == 1))) {
            // line 275
            echo "        <h3>Transfer Process</h3>
        <div>
          <ul>            
            ";
            // line 278
            if ((array_key_exists("transfer_process_apg_db_transfer", $context) && ((isset($context["transfer_process_apg_db_transfer"]) ? $context["transfer_process_apg_db_transfer"] : $this->getContext($context, "transfer_process_apg_db_transfer")) == 1))) {
                // line 279
                echo "              <li><a href=\"#\">APG - DB Transfer</a></li>
            ";
            }
            // line 281
            echo "            ";
            if ((array_key_exists("transfer_process_focus_site_transfer", $context) && ((isset($context["transfer_process_focus_site_transfer"]) ? $context["transfer_process_focus_site_transfer"] : $this->getContext($context, "transfer_process_focus_site_transfer")) == 1))) {
                // line 282
                echo "              <li><a href=\"#\">Focus Site Transfer</a></li>            
            ";
            }
            // line 284
            echo "          </ul>
        </div>
      ";
        }
        // line 287
        echo "      
      ";
        // line 288
        if ((array_key_exists("site_setup_items", $context) && ((isset($context["site_setup_items"]) ? $context["site_setup_items"] : $this->getContext($context, "site_setup_items")) == 1))) {
            // line 289
            echo "          <h3>Site Setup Items</h3>
          <div>
            <ul>
              ";
            // line 292
            if ((array_key_exists("site_setup_items_admin_log", $context) && ((isset($context["site_setup_items_admin_log"]) ? $context["site_setup_items_admin_log"] : $this->getContext($context, "site_setup_items_admin_log")) == 1))) {
                // line 293
                echo "                <li><a href=\"#\">Admin Log</a></li>
              ";
            }
            // line 295
            echo "              
              ";
            // line 296
            if ((array_key_exists("site_setup_items_auto_scan_settings", $context) && ((isset($context["site_setup_items_auto_scan_settings"]) ? $context["site_setup_items_auto_scan_settings"] : $this->getContext($context, "site_setup_items_auto_scan_settings")) == 1))) {
                // line 297
                echo "                <li><a href=\"#\">Auto Scan Settings</a></li>
              ";
            }
            // line 299
            echo "              
              ";
            // line 300
            if ((array_key_exists("site_setup_items_admin_auto_scan_report", $context) && ((isset($context["site_setup_items_admin_auto_scan_report"]) ? $context["site_setup_items_admin_auto_scan_report"] : $this->getContext($context, "site_setup_items_admin_auto_scan_report")) == 1))) {
                // line 301
                echo "                <li><a href=\"#\">Admin Auto Scan Report</a></li>
              ";
            }
            // line 303
            echo "              
              ";
            // line 304
            if ((array_key_exists("site_setup_items_list_report_templates", $context) && ((isset($context["site_setup_items_list_report_templates"]) ? $context["site_setup_items_list_report_templates"] : $this->getContext($context, "site_setup_items_list_report_templates")) == 1))) {
                // line 305
                echo "                <li><a href=\"#\">List Report Templates</a></li>
              ";
            }
            // line 307
            echo "              
              ";
            // line 308
            if ((array_key_exists("site_setup_items_popup_windows", $context) && ((isset($context["site_setup_items_popup_windows"]) ? $context["site_setup_items_popup_windows"] : $this->getContext($context, "site_setup_items_popup_windows")) == 1))) {
                // line 309
                echo "                <li><a href=\"#\">Popup Windows</a></li>
              ";
            }
            // line 311
            echo "              
              ";
            // line 312
            if ((array_key_exists("site_setup_items_add_report", $context) && ((isset($context["site_setup_items_add_report"]) ? $context["site_setup_items_add_report"] : $this->getContext($context, "site_setup_items_add_report")) == 1))) {
                // line 313
                echo "                <li><a href=\"#\">Add Report</a></li>
              ";
            }
            // line 315
            echo "              
              ";
            // line 316
            if ((array_key_exists("site_setup_items_add_framed_report", $context) && ((isset($context["site_setup_items_add_framed_report"]) ? $context["site_setup_items_add_framed_report"] : $this->getContext($context, "site_setup_items_add_framed_report")) == 1))) {
                // line 317
                echo "                <li><a href=\"#\">Add Framed Report</a></li>
              ";
            }
            // line 319
            echo "              
              ";
            // line 320
            if ((array_key_exists("site_setup_items_add_custom_page", $context) && ((isset($context["site_setup_items_add_custom_page"]) ? $context["site_setup_items_add_custom_page"] : $this->getContext($context, "site_setup_items_add_custom_page")) == 1))) {
                // line 321
                echo "                <li><a href=\"#\">Add Custom Page</a></li>
              ";
            }
            // line 323
            echo "              
              ";
            // line 324
            if ((array_key_exists("site_setup_items_add_external_link", $context) && ((isset($context["site_setup_items_add_external_link"]) ? $context["site_setup_items_add_external_link"] : $this->getContext($context, "site_setup_items_add_external_link")) == 1))) {
                // line 325
                echo "                <li><a href=\"#\">Add External Link</a></li>
              ";
            }
            // line 327
            echo "              
              ";
            // line 328
            if ((array_key_exists("site_setup_items_add_form", $context) && ((isset($context["site_setup_items_add_form"]) ? $context["site_setup_items_add_form"] : $this->getContext($context, "site_setup_items_add_form")) == 1))) {
                // line 329
                echo "                <li><a href=\"#\">Add Form</a></li>
              ";
            }
            // line 331
            echo "              
              ";
            // line 332
            if ((array_key_exists("site_setup_items_default_form_groups", $context) && ((isset($context["site_setup_items_default_form_groups"]) ? $context["site_setup_items_default_form_groups"] : $this->getContext($context, "site_setup_items_default_form_groups")) == 1))) {
                // line 333
                echo "                <li><a href=\"#\">Default Form Groups</a></li>
              ";
            }
            // line 335
            echo "              
              ";
            // line 336
            if ((array_key_exists("site_setup_items_property_lists_options", $context) && ((isset($context["site_setup_items_property_lists_options"]) ? $context["site_setup_items_property_lists_options"] : $this->getContext($context, "site_setup_items_property_lists_options")) == 1))) {
                // line 337
                echo "                <li><a href=\"#\">Property Lists Options</a></li>
              ";
            }
            // line 339
            echo "              
              ";
            // line 340
            if ((array_key_exists("site_setup_items_default_meta_tags", $context) && ((isset($context["site_setup_items_default_meta_tags"]) ? $context["site_setup_items_default_meta_tags"] : $this->getContext($context, "site_setup_items_default_meta_tags")) == 1))) {
                // line 341
                echo "                <li><a href=\"#\">Default Meta Tags</a></li>
              ";
            }
            // line 343
            echo "              
              ";
            // line 344
            if ((array_key_exists("site_setup_items_edit_light_dark_footer", $context) && ((isset($context["site_setup_items_edit_light_dark_footer"]) ? $context["site_setup_items_edit_light_dark_footer"] : $this->getContext($context, "site_setup_items_edit_light_dark_footer")) == 1))) {
                // line 345
                echo "                <li><a href=\"#\">Edit Light/Dark Footer</a></li>
              ";
            }
            // line 347
            echo "            </ul>
          </div>
        ";
        }
        // line 350
        echo "        
        ";
        // line 351
        if ((array_key_exists("admin_settings", $context) && ((isset($context["admin_settings"]) ? $context["admin_settings"] : $this->getContext($context, "admin_settings")) == 1))) {
            // line 352
            echo "          <h3>Admin Settings</h3>
          <div>
              <ul>            
                ";
            // line 355
            if ((array_key_exists("admin_settings_list_admin_signatures", $context) && ((isset($context["admin_settings_list_admin_signatures"]) ? $context["admin_settings_list_admin_signatures"] : $this->getContext($context, "admin_settings_list_admin_signatures")) == 1))) {
                // line 356
                echo "                    <li><a href=\"#\">List Admin Signatures</a></li>
                ";
            }
            // line 358
            echo "                
                ";
            // line 359
            if ((array_key_exists("admin_settings_add_admin_signature", $context) && ((isset($context["admin_settings_add_admin_signature"]) ? $context["admin_settings_add_admin_signature"] : $this->getContext($context, "admin_settings_add_admin_signature")) == 1))) {
                // line 360
                echo "                    <li><a href=\"#\">Add Admin Signature</a></li>
                ";
            }
            // line 362
            echo "                
                ";
            // line 363
            if ((array_key_exists("admin_settings_education_tab_settings", $context) && ((isset($context["admin_settings_education_tab_settings"]) ? $context["admin_settings_education_tab_settings"] : $this->getContext($context, "admin_settings_education_tab_settings")) == 1))) {
                // line 364
                echo "                    <li><a href=\"#\">Education Tab Settings</a></li>
                ";
            }
            // line 366
            echo "                
                ";
            // line 367
            if ((array_key_exists("admin_settings_focus_site_tab_settings", $context) && ((isset($context["admin_settings_focus_site_tab_settings"]) ? $context["admin_settings_focus_site_tab_settings"] : $this->getContext($context, "admin_settings_focus_site_tab_settings")) == 1))) {
                // line 368
                echo "                    <li><a href=\"#\">Focus Site Tab Settings</a></li>
                ";
            }
            // line 370
            echo "                
                ";
            // line 371
            if ((array_key_exists("admin_settings_manage_admin_users", $context) && ((isset($context["admin_settings_manage_admin_users"]) ? $context["admin_settings_manage_admin_users"] : $this->getContext($context, "admin_settings_manage_admin_users")) == 1))) {
                // line 372
                echo "                    <li><a href=\"#\">Manage Admin Users</a></li>
                ";
            }
            // line 374
            echo "                
                ";
            // line 375
            if ((array_key_exists("admin_settings_manage_admin_logs", $context) && ((isset($context["admin_settings_manage_admin_logs"]) ? $context["admin_settings_manage_admin_logs"] : $this->getContext($context, "admin_settings_manage_admin_logs")) == 1))) {
                // line 376
                echo "                    <li><a href=\"#\">Manage Admin Logs</a></li>
                ";
            }
            // line 378
            echo "                
                ";
            // line 379
            if ((array_key_exists("admin_settings_property_detail_text", $context) && ((isset($context["admin_settings_property_detail_text"]) ? $context["admin_settings_property_detail_text"] : $this->getContext($context, "admin_settings_property_detail_text")) == 1))) {
                // line 380
                echo "                    <li><a href=\"#\">Property Detail Text</a></li>
                ";
            }
            // line 382
            echo "                
                ";
            // line 383
            if ((array_key_exists("admin_settings_domain_forwarding", $context) && ((isset($context["admin_settings_domain_forwarding"]) ? $context["admin_settings_domain_forwarding"] : $this->getContext($context, "admin_settings_domain_forwarding")) == 1))) {
                // line 384
                echo "                    <li><a href=\"#\">Domain Forwarding</a></li>
                ";
            }
            // line 386
            echo "                
                ";
            // line 387
            if ((array_key_exists("admin_settings_crawlers", $context) && ((isset($context["admin_settings_crawlers"]) ? $context["admin_settings_crawlers"] : $this->getContext($context, "admin_settings_crawlers")) == 1))) {
                // line 388
                echo "                    <li><a href=\"#\">Crawlers</a></li>
                ";
            }
            // line 390
            echo "                
                ";
            // line 391
            if ((array_key_exists("admin_settings_change_page_contents", $context) && ((isset($context["admin_settings_change_page_contents"]) ? $context["admin_settings_change_page_contents"] : $this->getContext($context, "admin_settings_change_page_contents")) == 1))) {
                // line 392
                echo "                    <li><a href=\"#\">Change Page Contents</a></li>
                ";
            }
            // line 394
            echo "                
                ";
            // line 395
            if ((array_key_exists("admin_settings_update_pop_content", $context) && ((isset($context["admin_settings_update_pop_content"]) ? $context["admin_settings_update_pop_content"] : $this->getContext($context, "admin_settings_update_pop_content")) == 1))) {
                // line 396
                echo "                    <li><a href=\"#\">Update Pop Content</a></li>            
                ";
            }
            // line 398
            echo "              </ul>
          </div>
        ";
        }
        // line 401
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
        return array (  863 => 401,  858 => 398,  854 => 396,  852 => 395,  849 => 394,  845 => 392,  843 => 391,  840 => 390,  836 => 388,  834 => 387,  831 => 386,  827 => 384,  825 => 383,  822 => 382,  818 => 380,  816 => 379,  813 => 378,  809 => 376,  807 => 375,  804 => 374,  800 => 372,  798 => 371,  795 => 370,  791 => 368,  789 => 367,  786 => 366,  782 => 364,  780 => 363,  777 => 362,  773 => 360,  771 => 359,  768 => 358,  764 => 356,  762 => 355,  757 => 352,  755 => 351,  752 => 350,  747 => 347,  743 => 345,  741 => 344,  738 => 343,  734 => 341,  732 => 340,  729 => 339,  725 => 337,  723 => 336,  720 => 335,  716 => 333,  714 => 332,  711 => 331,  707 => 329,  705 => 328,  702 => 327,  698 => 325,  696 => 324,  693 => 323,  689 => 321,  687 => 320,  684 => 319,  680 => 317,  678 => 316,  675 => 315,  671 => 313,  669 => 312,  666 => 311,  662 => 309,  660 => 308,  657 => 307,  653 => 305,  651 => 304,  648 => 303,  644 => 301,  642 => 300,  639 => 299,  635 => 297,  633 => 296,  630 => 295,  626 => 293,  624 => 292,  619 => 289,  617 => 288,  614 => 287,  609 => 284,  605 => 282,  602 => 281,  598 => 279,  596 => 278,  591 => 275,  589 => 274,  586 => 273,  581 => 270,  577 => 268,  575 => 267,  572 => 266,  568 => 264,  566 => 263,  563 => 262,  559 => 260,  557 => 259,  554 => 258,  550 => 256,  548 => 255,  543 => 252,  541 => 251,  538 => 250,  532 => 246,  526 => 244,  523 => 243,  517 => 240,  512 => 237,  510 => 236,  507 => 235,  502 => 232,  498 => 230,  496 => 229,  491 => 226,  489 => 225,  486 => 224,  481 => 221,  477 => 219,  475 => 218,  470 => 215,  468 => 214,  465 => 213,  460 => 210,  456 => 208,  454 => 207,  451 => 206,  447 => 204,  445 => 203,  442 => 202,  438 => 200,  436 => 199,  431 => 196,  429 => 195,  426 => 194,  421 => 191,  417 => 189,  415 => 188,  412 => 187,  408 => 185,  406 => 184,  401 => 181,  399 => 180,  396 => 179,  391 => 176,  387 => 174,  385 => 173,  382 => 172,  378 => 170,  376 => 169,  373 => 168,  369 => 166,  367 => 165,  362 => 162,  360 => 161,  357 => 160,  352 => 157,  348 => 155,  346 => 154,  343 => 153,  339 => 151,  337 => 150,  332 => 147,  330 => 146,  327 => 145,  322 => 142,  318 => 140,  316 => 139,  313 => 138,  309 => 136,  307 => 135,  304 => 134,  300 => 132,  298 => 131,  295 => 130,  291 => 128,  289 => 127,  284 => 124,  282 => 123,  279 => 122,  273 => 118,  269 => 117,  267 => 116,  264 => 115,  260 => 113,  258 => 112,  254 => 110,  250 => 109,  248 => 108,  244 => 106,  240 => 105,  238 => 104,  233 => 101,  231 => 100,  228 => 99,  223 => 96,  219 => 94,  217 => 93,  214 => 92,  210 => 90,  208 => 89,  205 => 88,  201 => 86,  199 => 85,  196 => 84,  192 => 82,  190 => 81,  187 => 80,  183 => 78,  181 => 77,  178 => 76,  174 => 74,  172 => 73,  168 => 71,  164 => 69,  162 => 68,  159 => 67,  155 => 65,  153 => 64,  150 => 63,  146 => 61,  144 => 60,  141 => 59,  137 => 57,  135 => 56,  130 => 53,  128 => 52,  124 => 50,  119 => 47,  113 => 44,  110 => 43,  104 => 40,  101 => 39,  95 => 36,  92 => 35,  86 => 33,  84 => 32,  81 => 31,  76 => 29,  72 => 28,  69 => 27,  63 => 25,  61 => 24,  54 => 20,  48 => 17,  44 => 16,  31 => 8,  25 => 6,  19 => 1,);
    }
}
