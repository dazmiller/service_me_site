<?php namespace ServiceMe\ServiceRequests\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class CreateContactMesTable extends Migration
{

    public function up()
    {
        Schema::create('serviceme_servicerequests_contact_mes', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('serviceme_servicerequests_contact_mes');
    }

}
