<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(User::class, function (Faker $faker) {
    $created_at = $faker->dateTimeBetween('-3 month', '-2 month');
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'email_verified_at' => $created_at,
        'password' => bcrypt('123456'),
        'remember_token' => Str::random(10),
        'first_name' => $faker->firstName(),
        'last_name' => $faker->lastName(),
        'status' => 10,
//        'avatar' => '51.png',
        'city' => $faker->city(),
        'role' => rand(1,2)
    ];
});
