<?php namespace ServiceMe\ServiceRequests\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Car Insurance Claims Controller Back-end Controller
 */
class CarInsuranceClaimsController extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController',
        'Backend.Behaviors.RelationController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('ServiceMe.ServiceRequests', 'servicerequests', 'carinsuranceclaimscontroller');
    }
}