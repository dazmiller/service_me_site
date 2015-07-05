<?php namespace ServiceMe\ServiceRequests;

use System\Classes\PluginBase;

/**
 * ServiceRequests Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'ServiceRequests',
            'description' => 'No description provided yet...',
            'author'      => 'ServiceMe',
            'icon'        => 'icon-leaf'
        ];
    }


    public function registerComponents()
    {
        return [
            '\ServiceMe\ServiceRequests\Components\RealEstate' => 'RealEstateForm',
            '\ServiceMe\ServiceRequests\Components\BuyVehicle' => 'BuyVehicleForm'
        ];
    }

}
