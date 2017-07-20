<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFlagDeletedToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    	Schema::table('users', function ($table) {
    		$table->enum('role', ['admin', 'user', 'guest'])->default('guest')->after('password');
    		$table->tinyInteger('flag_disabled', false, true)->default(0)->after('date_added');
    		$table->tinyInteger('flag_deleted', false, true)->default(0)->after('flag_disabled');
    		$table->index('role');
    		$table->index('flag_disabled');
    		$table->index('flag_deleted');
    	});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
    	Schema::table('users', function($table) {
    		$table->dropColumn('flag_disabled');
    		$table->dropColumn('flag_deleted');
    		$table->dropIndex('role');
    		$table->dropIndex('flag_disabled');
    		$table->dropIndex('flag_deleted');
    	});
    }
}
