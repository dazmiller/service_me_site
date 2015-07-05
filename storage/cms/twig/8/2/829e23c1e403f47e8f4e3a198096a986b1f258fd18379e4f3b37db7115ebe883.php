<?php

/* C:\lamp\www\serviceme/themes/serviceme/pages/comp-test.htm */
class __TwigTemplate_829e23c1e403f47e8f4e3a198096a986b1f258fd18379e4f3b37db7115ebe883 extends Twig_Template
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
    ";
        // line 3
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("BuyVehicleForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
        // line 4
        echo "</div>


<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-10 mbottom50\">
            <div class=\"register-panel thin-shadow clearfix\">
                <div class=\"reg-panel-title\">
                    <b>REAL ESTATE ENQUIRY</b>
                </div>

                <form role=\"form\"
                      data-request=\"onSave\"
                      data-request-success=\"\$el.hide();\$('.confirm-container').removeClass('hide');\">

                    ";
        // line 19
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formRender", array(), "method");
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
</div>";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\serviceme/themes/serviceme/pages/comp-test.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 19,  27 => 4,  23 => 3,  19 => 1,);
    }
}
