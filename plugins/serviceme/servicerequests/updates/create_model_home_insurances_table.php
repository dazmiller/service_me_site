<?php namespace ServiceMe\ServiceRequests\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateModelHomeInsurancesTable extends Migration
{

    public function up()
    {
        Schema::create('serviceme_servicerequests_model_home_insurances', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name', 100);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('serviceme_servicerequests_model_home_insurances');
    }

}
