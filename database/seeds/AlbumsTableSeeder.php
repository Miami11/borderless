<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class AlbumsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('zh_CN');
        $categoryIDs= DB::table('categories')->pluck('id')->toArray();
        $artistIDs= DB::table('artists')->pluck('id')->toArray();
        foreach (range(1, 25) as $index) {
            DB::table('albums')->insert([
                'category_id' => $faker->randomElement($categoryIDs),
                'artist_id' => $faker->randomElement($artistIDs),
                'price' => $faker->randomNumber(3),
                'name' => $faker->name,
                'info'=> $faker->paragraph,
                'release_date' => $faker->date(),
                'image' => 'images/albums/'.$faker->randomNumber(3)
            ]);
        }
    }
}
