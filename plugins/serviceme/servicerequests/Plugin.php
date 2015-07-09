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
            '\ServiceMe\ServiceRequests\Components\BuyVehicle' => 'BuyVehicleForm',
            '\ServiceMe\ServiceRequests\Components\HomeInsurance' => 'HomeInsuranceForm'
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'Owl\FormWidgets\Address\Widget' => [
                'label' => 'Address',
                'code' => 'owl-address'
            ],
            'Owl\FormWidgets\Tagbox\Widget' => [
            'label' => 'Tagbox',
            'code'  => 'owl-tagbox'
        ],
         'Owl\FormWidgets\Password\Widget' => [
            'label' => 'Password',
            'code'  => 'owl-password'
        ],
          'Owl\FormWidgets\Money\Widget' => [
            'label' => 'Money',
            'code' => 'owl-money'
        ],
        'Owl\FormWidgets\Knob\Widget' => [
            'label' => 'Knob',
            'code'  => 'owl-knob'
        ],
             'Owl\FormWidgets\HasMany\Widget' => [
            'label' => 'Hasmany',
            'code'  => 'owl-hasmany'
        ],
          'Owl\FormWidgets\Comment\Widget' => [
            'label' => 'Comment',
            'code'  => 'owl-comment'
        ],
        ];
    }

}
