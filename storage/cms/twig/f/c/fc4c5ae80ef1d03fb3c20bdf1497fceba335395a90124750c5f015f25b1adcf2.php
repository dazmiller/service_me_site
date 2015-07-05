<?php

/* C:\lamp\www\serviceme/themes/serviceme/pages/buy-vehicle-request.htm */
class __TwigTemplate_fc4c5ae80ef1d03fb3c20bdf1497fceba335395a90124750c5f015f25b1adcf2 extends Twig_Template
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
        echo $this->env->getExtension('CMS')->componentFunction("BuyVehicleForm"        , $context['__cms_component_params']        );
        unset($context['__cms_component_params']);
    }

    public function getTemplateName()
    {
        return "C:\\lamp\\www\\serviceme/themes/serviceme/pages/buy-vehicle-request.htm";
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
