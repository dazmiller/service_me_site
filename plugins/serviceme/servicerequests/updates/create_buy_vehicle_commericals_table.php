<?php namespace ServiceMe\ServiceRequests\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateBuyVehicleCommericalsTable extends Migration
{

    public function up()
    {
        Schema::create('serviceme_servicerequests_buy_vehicle_commericals', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('type', 32);
            $table->string('keywords', 255);
            $table->string('make', 32);
            $table->string('model', 100);
            $table->integer('year');
            $table->string('certified', 50);
            $table->string('body_type', 32);
            $table->integer('price_min');
            $table->integer('price_max');
            $table->string('transmission', 16);
            $table->integer('kilometres_min');
            $table->integer('kilometres_max');
            $table->string('colours', 32);
            $table->string('fuel_type', 32);
            $table->string('fuel_economy', 32);
            $table->string('drive_type',32);
            $table->string('lifestyle', 100);
            $table->integer('seats_min');
            $table->integer('seats_max');
            $table->integer('doors');
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
        Schema::dropIfExists('serviceme_servicerequests_buy_vehicle_commericals');
    }

}
