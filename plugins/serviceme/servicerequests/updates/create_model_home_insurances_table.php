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
            $table->string('address', 255);
            $table->integer('postcode');
            $table->date('proposed_start_date');
            $table->integer('estimated_year_construction');
            $table->integer('number_storeys');
            $table->integer('number_bathrooms');
            $table->integer('number_bedrooms');
            $table->string('bedroom_size',24);
            $table->string('home_desc', 255);
            $table->string('exterior_walls', 32);
            $table->string('roof_material', 32);
            $table->string('home_occupied',32);
            $table->string('strata_plan',12);
            $table->string('pool', 32);
            $table->string('name', 100);
            $table->date('dob_oldest_policy_holder');
            $table->boolean('entitled_no_claim');
            $table->boolean('any_below_ground');
            $table->string('security_devices', 255);
            $table->string('door_security_devices', 100);
            $table->string('window_security_devices', 100);
            $table->boolean('alarm');
            $table->boolean('land_larger_normal');
            $table->boolean('had_policy_cancelled');
            $table->integer('num_times_claim_declined');
            $table->integer('num_claims_total');
            $table->integer('num_convictions');
            $table->boolean('cover_storm_dmg_gates_fences');
            $table->boolean('cover_accidental_dmg');
            $table->boolean('over_50_discount');
            $table->integer('carports');
            $table->integer('balconies_decks');
            $table->integer('verandahs');
            $table->boolean('euro_kitchen_appliances');
            $table->boolean('granite_marble_tiling');
            $table->boolean('large_glazed_areas');
            $table->boolean('plantation_shutters');
            $table->boolean('curved_walls');
            $table->boolean('ducted_aircon');
            $table->boolean('tennis_court');
            $table->boolean('inground_pool');
            $table->boolean('watertight');
            $table->boolean('new_home_under_construction');
            $table->boolean('under_renovation');
            $table->string('home_use', 100);
            $table->boolean('mortgate');
            $table->string('insure_name_or_company', 50);
            $table->integer('num_owners_named_policy');
            $table->string('comments', 255);

            // backend fields
            $table->integer('status');
            $table->integer('open');
            $table->integer('user_id');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('serviceme_servicerequests_model_home_insurances');
    }

}
