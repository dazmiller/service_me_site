<?php namespace ServiceMe\ServiceRequests\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * HomeInsuranceWidget Form Widget
 */
class HomeInsuranceWidget extends FormWidgetBase
{

    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'serviceme_servicerequests_home_insurance_widget';

    /**
     * {@inheritDoc}
     */
    public function init()
    {
    }

    /**
     * {@inheritDoc}
     */
    public function render()
    {
        $this->prepareVars();
        return $this->makePartial('homeinsurancewidget');
    }

    /**
     * Prepares the form widget view data
     */
    public function prepareVars()
    {
        $this->vars['name'] = $this->formField->getName();
        $this->vars['value'] = $this->getLoadValue();
        $this->vars['model'] = $this->model;
    }

    /**
     * {@inheritDoc}
     */
    public function loadAssets()
    {
        $this->addCss('css/homeinsurancewidget.css', 'ServiceMe.ServiceRequests');
        $this->addJs('js/homeinsurancewidget.js', 'ServiceMe.ServiceRequests');
    }

    /**
     * {@inheritDoc}
     */
    public function getSaveValue($value)
    {
        return $value;
    }

}
