<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('zh_CN');

        foreach (range(1, 10) as $index) {
            DB::table('artists')->insert([
                'name' => $faker->name,
                'popular' => $faker->randomNumber(2),
            ]);
        }
    }
}
