<?php

/* UsersUserManageBundle:UserManage:index.html.twig */
class __TwigTemplate_77c25f812576cca19cfbb2b79d31f9633d75f265bd293d70f5f173b101cf4b55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("UsersUserManageBundle::login-layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "UsersUserManageBundle::login-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "";
    }

    // line 4
    public function block_content_header($context, array $blocks = array())
    {
        echo "";
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "<script>
\$().ready(function() {  
  \$(\"#loginform1\").validate({
     rules: {
        username: {
                    required: true,
                  },       
        password: {
                    required: true,   
                  },
       },
     messages: {
        username: {
                    required: \"Please enter a valid username\",      
                  },
        password: {
                    required: \"Please enter a valid password\",
                  },
     }
    
    });
      
  });
 </script>
  <div class=\"main-container\">
    <div class=\"row-fluid login-contain\">
    <h2 class=\"form-signin-heading\">Login Panel</h2>
    ";
        // line 34
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            echo "          
           <span id='flash_error' class='padding_left_30px'> ";
            // line 35
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "</span>          
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "     
      <div class=\"form-signin\">
          <span id='no_li_css'>";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'errors');
        echo "</span>
         ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'label');
        echo "
         ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "username", array()), 'widget');
        echo "
          <span id='no_li_css'>";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'errors');
        echo " </span>
         ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'label');
        echo "
         ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "password", array()), 'widget');
        echo "
      </div>
      <div class=\"clearfix form-actions\"> <span class=\"pull-left\">
        <label class=\"checkbox inline\"><!--Remember me--></label>
        <label><!--a class=\"forget-pwd\" href=\"#myModal3\" data-toggle=\"modal\">Forgot Password?</a--> </label>
        </span>
        ";
        // line 51
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Login", array()), 'widget');
        echo "
      </div>
     ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
  </div>  
   

  <div class=\"row-fluid controle-panel\">
      <h1>Control Panel Requirement </h1>
      <div class=\" row-fluid margin-left-0\">
        <div class=\"span4\">
          <p class=\"test\"> [ <a href=\"javascript:;\" onclick=\"popups()\">Test Here</a> ] </p>
          <img alt=\"\"  src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/pop-ups.png"), "html", null, true);
        echo "\" />
          <h2>Pop Ups</h2>
          <p class=\"control-txt\">Accessing the control panel requires that pop-ups be enabled for full use.</p>
          <p><a href=\"#myModal\"  data-toggle=\"modal\">Learn more....</a></p>
        </div>
        <div class=\"span4\"> <img alt=\"\" src=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/browser.png"), "html", null, true);
        echo "\" />
          <h2>Browser</h2>
          <p class=\"control-txt\"> Accessing the control panel required that Internet Explorer 5.5 or above is utilized or.</p>
          <p><a href=\"#\">Learn more....</a></p>
        </div>
        <div class=\"span4\">
          <p class=\"test\"> [ <a href=\"javascript:;\" onclick=\"cookies()\">Test Here</a> ] </p>
          <img alt=\"\" src=\"";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/cookies.png"), "html", null, true);
        echo "\" />
          <h2>Cookies </h2>
          <p class=\"control-txt\">You will want to ensure that your cookies are enabled on your computer.</p>
          <p><a href=\"#myModal2\" data-toggle=\"modal\">Learn more....</a></p>
        </div>
        <div class=\"span4\"> <img  alt=\"\" src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/screen.png"), "html", null, true);
        echo "\" />
          <h2>Screen Resolution</h2>
          <p class=\"control-txt\">You will want to ensure that your screen resolution is at least 1024 * 768 px.</p>
          <p><a href=\"#\">Learn more....</a></p>
        </div>
      </div>
    </div>
    <div class=\"row-fluid copy-right\">© 2014 All Rights Reserved</div>
  <div id=\"modals\"> 
    <!-- sample modal content -->
    <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" class=\"modal hide fade\" id=\"myModal\" style=\"display: none;\">
      <div class=\"modal-header\">
        <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
        <h3 id=\"myModalLabel\">Popups </h3>
      </div>
      <div class=\"modal-body\">
        <div id=\"StaticPageContent\" class=\"divProperties\">
          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            <tbody>
              <tr>
                <td><div id=\"top\"><b>Click on the links below to see how to enable cookies on different Web Browsers:</b></div></td>
              </tr>
              <tr>
                <td height=\"20\"></td>
              </tr>
              <tr>
                <td>a) <a href=\"#1\" class=\"helplink\">Internet Explorer 6</a></td>
              </tr>
              <tr>
                <td>b) <a href=\"#2\" class=\"helplink\">Internet Explorer 7</a></td>
              </tr>
              <tr>
                <td>c) <a href=\"#3\" class=\"helplink\">Mozilla Firefox 1.5</a></td>
              </tr>
              <tr>
                <td>d) <a href=\"#4\" class=\"helplink\">Mozilla Firefox 2.0</a></td>
              </tr>
              <tr>
                <td height=\"25\"></td>
              </tr>
              <tr>
                <td><div id=\"1\">
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                      <tbody>
                        <tr>
                          <td><div class=\"article_title\">
                              <div class=\"article_title\"><b>a) <u>Enabling cookies in Internet Explorer 6</u></b>&nbsp;&nbsp;&nbsp;<a href=\"#top\" class=\"backtop\">Back to Top</a></div>
                            </div>
                            <div class=\"article_summary\"> <br>
                              To enable cookies in internet explorer, follow the instructions below for the browser version you are using. </div>
                            <div class=\"article_body normal_links\"> <font face=\"Verdana\" size=\"2\">Follow the steps below:<br>
                              </font>
                              <ol>
                                <li><font face=\"Verdana\" size=\"2\">Select <strong>Internet Options</strong> from the Tools menu.<br>
                                  <br>
                                  <img src=\"";
        // line 134
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/tools-options.jpg"), "html", null, true);
        echo "\" alt=\"\"></font></li>
                                <li><font face=\"Verdana\" size=\"2\">Click on the <strong>Privacy</strong> tab.</font></li>
                                <li><font face=\"Verdana\" size=\"2\">Click the <strong>Default</strong> button (or manually slide the bar down to \"<strong>Medium</strong>\") under <strong>Settings</strong>.</font></li>
                                <li><font face=\"Verdana\" size=\"2\">Click <strong>OK</strong>.<br>
                                  <br>
                                  <img src=\"";
        // line 139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/privacy-default.jpg"), "html", null, true);
        echo "\"></font></li>
                              </ol>
                            </div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div></td>
              </tr>
              <tr>
                <td height=\"15\"></td>
              </tr>
              <tr>
                <td><div id=\"2\">
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                      <tbody>
                        <tr>
                          <td><div class=\"article_title\">
                              <div class=\"article_title\"><b>b) <u>Enable cookies in internet explorer (7.0) browser</u></b>&nbsp;&nbsp;&nbsp;<a href=\"#top\" class=\"backtop\">Back to Top</a></div>
                            </div>
                            <div class=\"article_summary\"><br>
                              To enable cookies in internet explorer (7.0) browser, here's what you can do:</div>
                            <div class=\"article_body normal_links\"> <font face=\"Verdana\" size=\"2\">Follow the steps below:<br>
                              <br>
                              </font>
                              <ol>
                                <li><font face=\"Verdana\" size=\"2\">Click <strong>Start</strong> and select <strong>Control Panel</strong>.<br>
                                  (Windows XP Classic View - click on Windows <strong>Start</strong> button and select <strong>Settings</strong> and <strong>Control Panel</strong>). </font></li>
                                <li><font face=\"Verdana\" size=\"2\">Double-click the <strong>Internet Options</strong> icon. </font></li>
                                <li><font face=\"Verdana\" size=\"2\">Select the <strong>Privacy</strong> tab. </font></li>
                                <li><font face=\"Verdana\" size=\"2\">Under <strong>Settings</strong>, click <strong>Advanced</strong>. </font></li>
                                <li><font face=\"Verdana\" size=\"2\">Check <strong>Override automatic cookie handling</strong> under <strong>Cookies</strong> section in <strong>Advanced Privacy Settings</strong> window.</font> </li>
                                <li><font face=\"Verdana\" size=\"2\">Under <strong>First-party Cookies</strong>, select <strong>Accept</strong>. </font></li>
                                <li><font face=\"Verdana\" size=\"2\">Under <strong>Third-party Cookies</strong>, select <strong>Accept</strong>. </font></li>
                                <li><font face=\"Verdana\" size=\"2\">Check <strong>Always allow session cookies</strong>.</font> </li>
                                <li><font face=\"Verdana\" size=\"2\">Click <strong>OK</strong>. </font></li>
                                <li><font face=\"Verdana\" size=\"2\">Click <strong>OK</strong> to exit.</font> </li>
                              </ol>
                            </div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div></td>
              </tr>
              <tr>
                <td height=\"15\"></td>
              </tr>
              <tr>
                <td><div id=\"3\">
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                      <tbody>
                        <tr>
                          <td><div class=\"article_title\">
                              <div class=\"article_title\"><b>c) <u>Enable cookies on mozilla firefox (1.5) browser</u></b>&nbsp;&nbsp;&nbsp;<a href=\"#top\" class=\"backtop\">Back to Top</a></div>
                            </div>
                            <div class=\"article_summary\">To enable  cookies on mozilla firefox (1.5) browser, here's what you can do!</div>
                            <div class=\"article_body normal_links\"> <font face=\"Verdana\" size=\"2\"><span class=\"text12\">Follow the steps below:
                              <ol>
                                <li>From the Tools menu, select <strong>Options</strong>.<br>
                                  <br>
                                  <img src=\"";
        // line 198
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/tools-options_mozilla.jpg"), "html", null, true);
        echo "\" /> </li>
                                <li>From <strong>Options</strong>, select the <strong>Privacy</strong> option. </li>
                                <li>Select <strong>Cookies</strong> tab, check the checkbox for <strong>Allow sites to set Cookies</strong>. </li>
                                <li>Click <strong>OK</strong> and close the <strong>Options</strong> dialog box.<br>
                                  <br>
                                  <img src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/privacy-cookies.jpg"), "html", null, true);
        echo "\" /> </li>
                                <li>Close and restart the browser. </li>
                              </ol>
                              </span></font></div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div></td>
              </tr>
              <tr>
                <td height=\"15\"></td>
              </tr>
              <tr>
                <td><div id=\"4\">
                    <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
                      <tbody>
                        <tr>
                          <td><div class=\"article_title\">
                              <div class=\"article_title\"><b>d) <u>Enable cookies in Mozilla Firefox (2.0) browser</u></b>&nbsp;&nbsp;&nbsp;<a href=\"#top\" class=\"backtop\">Back to Top</a></div>
                            </div>
                            <div class=\"article_summary\"><br>
                              To enable cookies in Mozilla Firefox (2.0) browser, here's what you can do!</div>
                            <div class=\"article_body normal_links\"> <font face=\"Verdana\" size=\"2\">Follow the steps below:<br>
                              </font>
                              <ol>
                                <li><font face=\"Verdana\" size=\"2\">Go to the \"<strong>Tools</strong>\" menu.</font> </li>
                                <li><font face=\"Verdana\" size=\"2\">Select \"<strong>Options</strong>\".<br>
                                  <br>
                                  <img src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/tools-options_mozilla2.jpg"), "html", null, true);
        echo "\" width=\"350\" alt=\"\" /></font> </li>
                                <li><font face=\"Verdana\" size=\"2\">Select the \"<strong>Privacy</strong>\" tab</font> </li>
                                <li><font face=\"Verdana\" size=\"2\">Check the box corresponding to \"<strong>Accept cookies from sites</strong>\".</font> </li>
                                <li><font face=\"Verdana\" size=\"2\">Click \"<strong>OK</strong>\" to save changes.<br>
                                  <br>
                                  <img src=\"";
        // line 236
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/privacy-cookies_mozilla2.jpg"), "html", null, true);
        echo "\" width=\"350\" alt=\"\" /></font> </li>
                              </ol>
                            </div></td>
                        </tr>
                      </tbody>
                    </table>
                  </div></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button data-dismiss=\"modal\" class=\"btn\">Close</button>
      </div>
    </div>
  </div>
  <div id=\"modals\"> 
    <!-- sample modal content -->
    <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" class=\"modal hide fade\" id=\"myModal2\" style=\"display: none;\">
      <div class=\"modal-header\">
        <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
        <h3 id=\"myModalLabel\">Cookies </h3>
      </div>
      <div class=\"modal-body\">
        <div style=\"\" class=\"divProperties\" id=\"StaticPageContent\">
          <table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"100%\">
            <tbody>
              <tr>
                <td><div id=\"top\"><b><u>Common Popup Blockers And How To Disable Them</u></b></div></td>
              </tr>
              <tr>
                <td height=\"20\"></td>
              </tr>
              <tr>
                <td>a) <a href=\"#1\" class=\"helplink\">Safari</a></td>
              </tr>
              <tr>
                <td>b) <a href=\"#2\" class=\"helplink\">Firefox</a></td>
              </tr>
              <tr>
                <td>c) <a class=\"helplink\" href=\"#3\">Internet Explorer</a></td>
              </tr>
              <tr>
                <td height=\"25\"></td>
              </tr>
              <tr>
                <td><div id=\"1\">
                    <table width=\"100%\" cellspacing=\"3\" cellpadding=\"0\" border=\"0\">
                      <tbody>
                        <tr>
                          <td><b>a) <u>Disable Popup Blocker in Safari</u></b>&nbsp;&nbsp;&nbsp;<a class=\"backtop\" href=\"#top\">Back to Top</a></td>
                        </tr>
                        <tr>
                          <td height=\"10\"></td>
                        </tr>
                        <tr>
                          <td>1. Open Safari</td>
                        </tr>
                        <tr>
                          <td>2. Click on the Safari Menu</td>
                        </tr>
                        <tr>
                          <td>3. Uncheck \"Block Pop-Up Windows\"</td>
                        </tr>
                        <tr>
                          <td height=\"10\"></td>
                        </tr>
                        <tr>
                          <td><img border=\"0\" src=\"";
        // line 305
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/safari_popupblocker.gif"), "html", null, true);
        echo "\" /></td>
                        </tr>
                      </tbody>
                    </table>
                  </div></td>
              </tr>
              <tr>
                <td height=\"25\"></td>
              </tr>
              <tr>
                <td><div id=\"2\">
                    <table width=\"100%\" cellspacing=\"3\" cellpadding=\"0\" border=\"0\">
                      <tbody>
                        <tr>
                          <td><b>a) <u>Disable Popup Blocker in Firefox</u></b>&nbsp;&nbsp;&nbsp;<a class=\"backtop\" href=\"#top\">Back to Top</a></td>
                        </tr>
                        <tr>
                          <td height=\"10\"></td>
                        </tr>
                        <tr>
                          <td><ul>
                              <li><strong>To Disable</strong>
                                <ol>
                                  <li>Open the <strong>Options</strong> window in Firefox.</li>
                                  <li>Click on the <strong>Web Features</strong> icon.</li>
                                  <li>Uncheck the Block Popup Windows option.Click<strong> Apply</strong>&nbsp;<br>
                                    and <strong>OK</strong> to close the options window.</li>
                                </ol>
                              </li>
                              <li> </li>
                              <li><strong>To&nbsp;allow pop-ups&nbsp;for AgentPanelElite</strong>
                                <ol>
                                  <li>Click <strong>Allowed Sites</strong>.</li>
                                  <li>Enter this address( <a target=\"_blank\" href=\"http://www.agentpanelgolddb.com/\">http://www.agentpanelgolddb.com/</a>)</li>
                                  <li>Click <strong>OK</strong>.</li>
                                </ol>
                              </li>
                              <li><strong>For more information you can visit:<br>
                                </strong><a target=\"_blank\" href=\"http://www.mozilla.org/support/firefox/options#webfeatures\">http://www.mozilla.org/support/firefox/options#webfeatures</a></li>
                            </ul></td>
                        </tr>
                      </tbody>
                    </table>
                  </div></td>
              </tr>
              <tr>
                <td height=\"25\"></td>
              </tr>
              <tr>
                <td><div id=\"3\">
                    <table width=\"100%\" cellspacing=\"3\" cellpadding=\"0\" border=\"0\">
                      <tbody>
                        <tr>
                          <td><b>a) <u>Disable Popup Blocker in Internet Explorer</u></b>&nbsp;&nbsp;&nbsp;<a class=\"backtop\" href=\"#top\">Back to Top</a></td>
                        </tr>
                        <tr>
                          <td height=\"10\"></td>
                        </tr>
                        <tr>
                          <td><ul>
                              <li>
                                <div align=\"left\"><strong>To Disable</strong></div>
                                <ol>
                                  <li>
                                    <div align=\"left\">Open <strong>Internet Explorer</strong>.</div>
                                  </li>
                                  <li>
                                    <div align=\"left\">On the<strong> Tools</strong> menu, point to <strong>Pop-up 
                                      Blocker</strong>, and then <br>
                                      click <strong>Pop-up Blocker 
                                      Settings</strong>.</div>
                                  </li>
                                  <li>
                                    <div align=\"left\">Choose the <strong>Turn Off Pop-up Blocker</strong> option.<br>
                                    </div>
                                  </li>
                                </ol>
                              </li>
                              <li>
                                <div align=\"left\"><strong>To allow pop-ups for AgentPanelElite</strong></div>
                                <ol>
                                  <li>
                                    <div align=\"left\">From the<strong> Internet Explorer</strong> tool-bar, Select <strong>Tools</strong> menu, from <br>
                                      the drop down menu, Select <strong>Internet Options</strong> then Select <br>
                                      the <strong>Privacy</strong> tab (<em>at the bottom of the Pirvacy window should <br>
                                      be a Pop-up Blocker 
                                      section</em>), Select the <strong>Settings</strong> button.</div>
                                  </li>
                                  <li>
                                    <div align=\"left\">Add this address to the \"Address of Website to allow.\" <a target=\"_blank\" href=\"http://www.agentpanelgolddb.com\"><font color=\"#000000\">http://www.agentpanelgolddb.com/</font></a> </div>
                                  </li>
                                  <li>
                                    <div align=\"left\">Select the <strong>Add</strong> button, then Select <br>
                                      the <strong>Close</strong> button, then Select the <strong>OK</strong> button.</div>
                                  </li>
                                </ol>
                              </li>
                              <li>
                                <div align=\"left\"><strong>For more informations you can 
                                  visit:</strong><br>
                                  <a target=\"_blank\" href=\"http://www.microsoft.com/windowsxp/using/web/sp2_popupblocker.mspx\">http://www.microsoft.com/windowsxp</a></div>
                              </li>
                            </ul></td>
                        </tr>
                        <tr>
                          <td height=\"10\"></td>
                        </tr>
                        <tr>
                          <td><img border=\"0\" src=\"";
        // line 413
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/UsersUserManage/images/internet_popupblocker.jpg"), "html", null, true);
        echo "\" /></td>
                        </tr>
                      </tbody>
                    </table>
                  </div></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class=\"modal-footer\">
        <button data-dismiss=\"modal\" class=\"btn\">Close</button>
      </div>
    </div>
  </div>
  <div id=\"modals\"> 
    <!-- sample modal content -->
    <div aria-hidden=\"true\" aria-labelledby=\"myModalLabel\" role=\"dialog\" tabindex=\"-1\" class=\"modal hide fade\" id=\"myModal3\" style=\"display: none;\">
      <div class=\"modal-header\">
        <button aria-hidden=\"true\" data-dismiss=\"modal\" class=\"close\" type=\"button\">×</button>
        <h3 id=\"myModalLabel\"> Forgot Password </h3>
      </div>
      <div class=\"modal-body\">
        <form class=\"form-signin\">
          <label>E-Mail</label>
         ";
        // line 439
        echo "        </form>
      </div>
      <div class=\"modal-footer\">
        <button data-dismiss=\"modal\" class=\"btn btn-submit\">Submit</button>
        <button data-dismiss=\"modal\" class=\"btn\">Close</button>
      </div>
    </div>
  </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  561 => 439,  533 => 413,  422 => 305,  350 => 236,  342 => 231,  311 => 203,  303 => 198,  241 => 139,  233 => 134,  175 => 79,  167 => 74,  157 => 67,  149 => 62,  137 => 53,  131 => 51,  122 => 44,  118 => 43,  114 => 42,  110 => 41,  106 => 40,  102 => 39,  96 => 37,  88 => 35,  82 => 34,  53 => 7,  50 => 6,  44 => 4,  38 => 2,  11 => 1,);
    }
}
