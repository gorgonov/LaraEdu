<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\TeacherProfile;
use Faker\Generator as Faker;

$factory->define(TeacherProfile::class, function (Faker $faker) {
    return [
        'description' => $faker->sentence(rand(6,20)),
    ];
});
