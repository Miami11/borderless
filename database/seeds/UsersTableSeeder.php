<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //create zh_CN data
        $faker = Faker::create('zh_CN');

        foreach (range(1, 10) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'role_id' => 2,
                'email' => $faker->unique()->safeEmail,
                'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
                'sex' => $faker->boolean(),
                'mobile' => '09'.$faker->randomNumber(8),
                'account' => str_random(5),
                'image' => "images/members/default.jpg",
                'api_token' => str_random(10),
                'address'=> $faker->address,
                'remember_token' => str_random(10),
            ]);
        }
    }
}
