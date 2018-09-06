<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('zh_CN');
        foreach (range(1, 5) as $index) {
            DB::table('categories')->insert([
                'name' => $faker->colorName,
            ]);
        }
    }
}
