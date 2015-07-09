<?php namespace ServiceMe\ServiceRequests\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateModelCarInsuranceClaimsTable extends Migration
{

    public function up()
    {
        Schema::create('serviceme_servicerequests_model_car_insurance_claims', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('car_insurance_id', 32);
            $table->integer('year');
            $table->string('claim_type', 100);
            $table->timestamps();
        });


    }

    public function down()
    {
        Schema::dropIfExists('serviceme_servicerequests_model_car_insurance_claims');
    }

}
