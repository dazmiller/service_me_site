<?php

/* C:\lamp\www\serviceme/plugins/mja/forms/components/entryform/default.htm */
class __TwigTemplate_ce009adda44e5a9ac458b8e681417a5f2574644bf98a09e6ae0ad8bd0e358fe4 extends Twig_Template
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
    <p>Successfully created a new entry!</p>
</div>

<form role=\"form\"
    data-request=\"";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["__SELF__"]) ? $context["__SELF__"] : null), "html", null, true);
        echo "::onSave\"
    data-request-success=\"\$el.hide();\$('.confirm-container').removeClass('hide');\">

    ";
        // line 9
        echo $this->getAttribute((isset($context["form"]) ? $context["form"] : null), "formRender", array(), "method");
        echo "

    <div class=\"form-group\">
        <button class=\"btn btn-primary btn-block btn-lg\" type=\"submit\" value=\"register\">Create</button>
    </div>

</form>
";
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\serviceme/plugins/mja/forms/components/entryform/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  26 => 6,  19 => 1,);
    }
}
