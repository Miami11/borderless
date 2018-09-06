<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('zh_CN');
        $userIDs= DB::table('users')->pluck('id')->toArray();
        foreach (range(1, 10) as $index) {
            DB::table('orders')->insert([
                'user_id' => $faker->randomElement($userIDs),
                'name' => $faker->name,
                'address'=> $faker->address,
                'mobile' => '09'.$faker->randomNumber(8),
                'total_amount' => NULL,
                'transaction_date' => $faker->dateTimeBetween('-1 months', 'now'),
            ]);
        }
    }
}
