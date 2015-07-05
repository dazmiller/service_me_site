<?php namespace ServiceMe\ServiceRequests\Components;

use Cms\Classes\ComponentBase;
use ServiceMe\ServiceRequests\Controllers\RealEstateController  as RealEstateEnquiryController;
use ServiceMe\ServiceRequests\Models\ModelRealEstate;


class RealEstate extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Real Estate Form Component',
            'description' => 'Form for Real Estate Enquiries'
        ];
    }




    public function onRun()
    {
        // Build a back-end form with the context of 'frontend'
        $formController = new RealEstateEnquiryController();
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


        return ['error' => ModelRealEstate::create(post('ModelRealEstate'))];
    }

}