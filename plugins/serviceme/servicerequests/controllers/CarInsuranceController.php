<?php namespace ServiceMe\ServiceRequests\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Car Insurance Controller Back-end Controller
 */
class CarInsuranceController extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('ServiceMe.ServiceRequests', 'servicerequests', 'carinsurancecontroller');


    }
}