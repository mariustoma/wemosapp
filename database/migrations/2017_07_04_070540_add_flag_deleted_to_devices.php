<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFlagDeletedToDevices extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('devices', function ($table) {
			$table->tinyInteger('flag_disabled', false, true)->default(0)->after('date_added');
			$table->tinyInteger('flag_deleted', false, true)->default(0)->after('flag_disabled');
			$table->index('type');
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
    	Schema::table('devices', function($table) {
    		$table->dropColumn('flag_disabled');
    		$table->dropColumn('flag_deleted');
    		$table->dropIndex('type');
    		$table->dropIndex('flag_disabled');
    		$table->dropIndex('flag_deleted');
    	});
    }
}
