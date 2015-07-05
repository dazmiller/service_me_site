<?php namespace ServiceMe\ServiceRequests\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Home Insurance Controller Back-end Controller
 */
class HomeInsuranceController extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('ServiceMe.ServiceRequests', 'servicerequests', 'homeinsurancecontroller');
    }
}