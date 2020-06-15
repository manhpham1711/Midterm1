<?php
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookSeeder extends Seeder {
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run(Faker $faker) {
		for ($i = 0; $i < 2; $i++) {
			DB::table('tours')->insert([
				'name' => $faker->name,
				'image' => "public/GuTg2t3QFGfTQ5xvKq3vjrC47AJOARneWp4kbxln.jpeg",
				'typetour' => 'Từ Hà Nội',
				'schedule' => Str::random(20),
				'depart' => Str::random(20),
				'number' => $faker->numberBetween(20, 60),
				'price' => $faker->numberBetween(350000, 900000),
			]);
		}
	}
}
