<?php namespace ServiceMe\ServiceRequests\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateModelRealEstatesTable extends Migration
{

    public function up()
    {
        Schema::create('serviceme_servicerequests_model__real_estates', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title', 255);
            $table->string('postcode', 12);
            $table->string('newestablished', 32);
            $table->json('propertytype');
            $table->integer('minbeds');
            $table->integer('maxbeds');
            $table->integer('minprice');
            $table->integer('maxprice');
            $table->json('indoorfeatures');
            $table->json('outdoorfeatures');
            $table->integer('bathrooms');
            $table->integer('parking');
            $table->integer('landsize');
            $table->json('livecloseto');
            $table->json('liveawayfrom');
            $table->text('comments');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('serviceme_servicerequests_model__real_estates');
    }

}
