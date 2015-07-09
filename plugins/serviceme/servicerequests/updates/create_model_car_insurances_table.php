<?php namespace ServiceMe\ServiceRequests\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateModelCarInsurancesTable extends Migration
{

    public function up()
    {
        Schema::create('serviceme_servicerequests_model_car_insurances', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('make', 32);
            $table->string('model', 100);
            $table->integer('year');
            $table->string('body_type', 32);;
            $table->string('transmission', 16);
            $table->integer('colour');
            $table->integer('plan_start_insurance');
            $table->date('dob');
            $table->string('gender', 32);
            $table->integer('age_drivers_licence_obtained');
            $table->boolean('driver_owner');
            $table->boolean('own_another_vehicle');
            $table->boolean('any_accidents');
            $table->integer('accident_year');
            $table->string('claim_type',32);
            $table->integer('engine_size_min');
            $table->integer('engine_size_max');
            $table->integer('cylinders');
            $table->string('engine_type',32);
            $table->string('induction_turbo',50);
            $table->integer('power_min');
            $table->integer('power_max');
            $table->integer('tow_braked_min');
            $table->integer('tow_braked_max');
            $table->string('ancap_safety_rating',32);
            $table->string('green_star_rating',32);
            $table->string('p_plate_approved', 16);
            $table->string('dealer_postcodes', 100);
            $table->integer('dealer_distance');
            // backend fields
            $table->integer('status');
            $table->integer('open');
            $table->integer('user_id');
            $table->timestamps();
        });



    }

    public function down()
    {
        Schema::dropIfExists('serviceme_servicerequests_model_car_insurances');

    }

}
