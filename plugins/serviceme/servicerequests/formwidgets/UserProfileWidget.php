<?php namespace ServiceMe\ServiceRequests\FormWidgets;

use Backend\Classes\FormWidgetBase;

/**
 * UserProfileWidget Form Widget
 */
class UserProfileWidget extends FormWidgetBase
{

    /**
     * {@inheritDoc}
     */
    protected $defaultAlias = 'serviceme_servicerequests_user_profile_widget';

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
        return $this->makePartial('userprofilewidget');
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
        $this->addCss('css/userprofilewidget.css', 'ServiceMe.ServiceRequests');
        $this->addJs('js/userprofilewidget.js', 'ServiceMe.ServiceRequests');
    }

    /**
     * {@inheritDoc}
     */
    public function getSaveValue($value)
    {
        return $value;
    }

}
