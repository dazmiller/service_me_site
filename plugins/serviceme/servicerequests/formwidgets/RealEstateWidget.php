<?php namespace ServiceMe\ServiceRequests\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * RealEstateWidget Form Widget
 */
class RealEstateWidget extends FormWidgetBase
{

    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'serviceme_servicerequests_real_estate_widget';

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
        return $this->makePartial('realestatewidget');
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
        $this->addCss('css/realestatewidget.css', 'ServiceMe.ServiceRequests');
        $this->addJs('js/realestatewidget.js', 'ServiceMe.ServiceRequests');
    }

    /**
     * {@inheritDoc}
     */
    public function getSaveValue($value)
    {
        return $value;
    }

}
