<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTourTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('tours', function (Blueprint $table) {
			$table->id();
			$table->string('name');
			$table->string('image');
			$table->string('typetour');
			$table->string('schedule');
			$table->string('depart');
			$table->integer('number');
			$table->integer('price');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists('tours');
	}
}
