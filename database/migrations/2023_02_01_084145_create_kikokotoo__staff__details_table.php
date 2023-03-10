<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kikokotoo__staff__details', function (Blueprint $table) {
            $table->increments('staff_id',11);
            
            $table->string('first_name',20);
            $table->string('zan_id',20);
            $table->string('position',20);
            $table->string('dob',20);
            $table->string('doc',20);
            $table->string('dor',20);
            $table->string('dot',20);
            $table->string('cause_of_retire',20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kikokotoo__staff__details');
    }
};
