<?php

/* UsersUserManageBundle:UserManage:delete_reseller_model.html.twig */
class __TwigTemplate_e99fc964a39fec6fab16c94fc396c010b04574a0286b0cc678f2f8adcf9c24fd extends Twig_Template
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
        echo "<div id=\"myModal\" class=\"modal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
<!-- hide fade-->
  <div class=\"modal-header\">
    <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">×</button>
    <h3 id=\"myModalLabel\">Delete Reseller</h3>
  </div>
  <div class=\"modal-body\">
    <p>Are you sure to delete the record?</p>
  </div>
  <div class=\"modal-footer\">
    <button class=\"btn\" data-dismiss=\"modal\" aria-hidden=\"true\">Close</button>
    <button class=\"btn btn-primary\">Delete</button>
  </div>
</div>";
    }

    public function getTemplateName()
    {
        return "UsersUserManageBundle:UserManage:delete_reseller_model.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
