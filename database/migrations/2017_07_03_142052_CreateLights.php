<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLights extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lights', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('type', ['mansarda', 'parter', 'parinti', 'centrala', 'afara'])->default('mansarda');
            $table->string('room', 100);
            $table->tinyInteger('number', false, true)->default(1);
            $table->integer('floor', false, true)->default(0);
            $table->dateTime('date_added')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->tinyInteger('flag_disabled', false, true)->default(0);
            $table->tinyInteger('flag_deleted', false, true)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lights');
    }
}
