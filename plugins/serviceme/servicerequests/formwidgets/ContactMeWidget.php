<?php namespace ServiceMe\ServiceRequests\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * ContactMeWidget Form Widget
 */
class ContactMeWidget extends FormWidgetBase
{

    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'serviceme_servicerequests_contact_me_widget';

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
        return $this->makePartial('contactmewidget');
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
        $this->addCss('css/contactmewidget.css', 'ServiceMe.ServiceRequests');
        $this->addJs('js/contactmewidget.js', 'ServiceMe.ServiceRequests');
    }

    /**
     * {@inheritDoc}
     */
    public function getSaveValue($value)
    {
        return $value;
    }

}
