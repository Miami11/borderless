<?php

use Faker\Generator as Faker;
//use Faker\Factory;
/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
//$faker = Faker::create('zh_CN');
//Type error: Argument 1 passed to Illuminate\Database\Eloquent\Factory::{closure}() must be an instance of Faker\Generator\Generator, instance of Fa
//  ker\Generator given
//$factory->define(App\User::class, function (Faker\Generator $faker) {
//    $faker = Faker\Factory::create('zh_CN');
//    return [
//        'name' => $faker->addProvider(new Faker\Provider\zh_TW\Name($faker)),
//        'email' => $faker->unique()->safeEmail,
//        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//        'remember_token' => str_random(10),
//        'api_token' => str_random(10),
//        'account' => str_random(5),
//        'mobile' => '09'.$faker->randomNumber(8),
//        'address'=> $faker->addProvider(new Faker\Provider\zh_TW\Address($faker))
//        'name' => $faker->name,
//        'email' => $faker->unique()->safeEmail,
//        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
//        'sex' => $faker->boolean(),
//        'mobile' => '09'.$faker->randomNumber(8),
//        'account' => str_random(5),
//        'img' => "uploads/images/members/member1.jpg",
//        'address'=> $faker->address,
//        'remember_token' => str_random(10),
//    ];
//});
