<?php namespace ServiceMe\ServiceRequests\Updates;

use Seeder;
use ServiceMe\ServiceRequests\Models\ModelRealEstate;

class SeedRealEstateTable extends Seeder
{
    public function run()
    {
        $user = ModelRealEstate::create([
            'title'             => 'A test title',
            'postcode'          => '2205',
            'newestablished'    => 'New',
            'propertytype'      => 'All',
            'minbeds'           => 1,
            'maxbeds'           => 4,
            'minprice'          => 150000,
            'maxprice'          => 456000,
            'indoorfeatures'    => '',
            'outdoorfeatures'   => '',
            'bathrooms'         => 1,
            'parking'           => 2,
            'landsize'          => 2500,
            'livecloseto'       => 'Schools',
            'liveawayfrom'      => '',
            'comments'          => 'Some comments',
        ]);
    }
}