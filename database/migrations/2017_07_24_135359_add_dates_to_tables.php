<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDatesToTables extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function ($table) {
			$table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->after('flag_deleted');
			$table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
			Schema::table('devices', function ($table) {
				$table->dateTime('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'))->after('flag_deleted');
				$table->dateTime('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			});
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function ($table) {
			$table->dropColumn('updated_at');
			$table->dropColumn('created_at');
		});
			Schema::table('devices', function ($table) {
				$table->dropColumn('updated_at');
				$table->dropColumn('created_at');
			});
	}
}
