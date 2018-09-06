<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Order_detailTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('zh_CN');
        $orderIDs= DB::table('orders')->pluck('id')->toArray();

        $albumIDs= DB::table('albums')->pluck('id','price')->toArray();
        $value = array_flip($albumIDs);

        foreach ($orderIDs as $k => $v) {
          $id = $faker->randomElement($albumIDs);
            DB::table('order_details')->insert([
                'order_id' => $v,
                'album_id' => $id,
                'price' => $value[$id],
                'quantity' => $faker->randomNumber(1),
            ]);
        }
    }
}
