<?php namespace ServiceMe\ServiceRequests\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Real Estate Controller Back-end Controller
 */
class RealEstateController extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController'
    ];

    public $formConfig = 'config_form.yaml';



}