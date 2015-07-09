<?php

/* C:\lamp\www\serviceme/themes/serviceme/pages/home-insurance-request/htm.htm */
class __TwigTemplate_6414d3855cac14207eb6341295e16277dcda8a58aa9e43449fb714f87b1e1919 extends Twig_Template
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
        $context['__cms_component_params'] = [];
        echo $this->env->getExtension('CMS')->componentFunction("HomeInsuranceForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\serviceme/themes/serviceme/pages/home-insurance-request/htm.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
