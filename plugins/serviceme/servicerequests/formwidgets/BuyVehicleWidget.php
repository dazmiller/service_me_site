<?php namespace ServiceMe\ServiceRequests\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * BuyVehicleWidget Form Widget
 */
class BuyVehicleWidget extends FormWidgetBase
{

    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'serviceme_servicerequests_buy_vehicle_widget';

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
        return $this->makePartial('buyvehiclewidget');
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
        $this->addCss('css/buyvehiclewidget.css', 'ServiceMe.ServiceRequests');
        $this->addJs('js/buyvehiclewidget.js', 'ServiceMe.ServiceRequests');
    }

    /**
     * {@inheritDoc}
     */
    public function getSaveValue($value)
    {
        return $value;
    }

}
