<?php namespace ServiceMe\ServiceRequests\Components;

use Cms\Classes\ComponentBase;
use ServiceMe\ServiceRequests\Controllers\HomeInsuranceController  as HomeInsuranceEnquiryController;
use ServiceMe\ServiceRequests\Models\ModelHomeInsurance;

class HomeInsurance extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'HomeInsurance Component',
            'description' => 'A form for entering a home insurance request'
        ];
    }

    public function onRun()
    {
        // Build a back-end form with the context of 'frontend'
        $formController = new HomeInsuranceEnquiryController();
        $formController->create('frontend');

        // Append the formController to the page
        $this->page['form'] = $formController;

        // Append the missing style file so that our front-end forms would look
        // just like back-end
        //$this->addCss('/modules/backend/assets/css/controls.css', 'core');

        $this->addJs('/modules/system/assets/js/framework.extras.js', 'core');
        $this->addJs('/modules/backend/assets/js/october-min.js', 'core');

        $this->addCss('/modules/backend/assets/css/october.css', 'core');
        // $this->addCss('/modules/backend/assets/css/controls.css', 'core');

        foreach($formController->getAssetPaths() as $type => $assets)
            foreach($assets as $asset)
                $this->{'add'.ucfirst($type)}($asset);
    }

    public function onSave()
    {


        return ['error' => ModelHomeInsurance::create(post('ModelHomeInsurance'))];
    }

}