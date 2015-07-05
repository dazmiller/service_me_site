<?php

/* C:\lamp\www\serviceme/plugins/serviceme/servicerequests/components/buyvehicle/default.htm */
class __TwigTemplate_bc4eca3ffad3e12119cd9d1be5ef16a99b745489253b79153c0b5184bbd0b921 extends Twig_Template
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
        echo "<div class=\"confirm-container bg-success hide\">
    <p>Successfully created a new enquiry!</p>

</div>


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-10 mbottom50\">
            <div class=\"register-panel thin-shadow clearfix\">
                <div class=\"reg-panel-title\">
                    <b>BUY A VEHICLE ENQUIRY</b>
                </div>

                <form role=\"form\"
                      data-request=\"onSave\"
                      data-request-success=\"\$el.hide();\$('.confirm-container').removeClass('hide');\">

                    ";
        // line 19
        echo $this->getAttribute((isset($context["vform"]) ? $context["vform"] : null), "formRender", array(), "method");
        echo "

                    <div class=\"form-group\">
                        <div class=\"row\">
                            <div class=\"col-sm-offset-9 col-sm-3 \">
                                <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\" value=\"register\" style=\"text-align: center\">Create</button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
            <!-- end register-panel -->
        </div>

    </div>
</div>






";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\serviceme/plugins/serviceme/servicerequests/components/buyvehicle/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 19,  19 => 1,);
    }
}
