<?php namespace ServiceMe\ServiceRequests\Components;

use Cms\Classes\ComponentBase;
use ServiceMe\ServiceRequests\Controllers\CarInsuranceController  as CarInsuranceEnquiryController;
use ServiceMe\ServiceRequests\Controllers\CarInsuranceController;
use ServiceMe\ServiceRequests\Models\ModelCarInsurance;
use ServiceMe\ServiceRequests\Models\ModelCarInsuranceClaim as Claim;
class CarInsurance extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'CarInsurance Component',
            'description' => 'No description provided yet...'
        ];
    }


    public function onRun()
    {
        // Build a back-end form with the context of 'frontend'
        $formController = new CarInsuranceEnquiryController();
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

        $f = new Claim();
        $formController->initRelation($f);

        foreach($formController->getAssetPaths() as $type => $assets)
            foreach($assets as $asset)
                $this->{'add'.ucfirst($type)}($asset);
    }

    public function onSave()
    {


        return ['error' => ModelCarInsurance::create(post('ModelCarInsurance'))];
    }

}