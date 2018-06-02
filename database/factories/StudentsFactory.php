<?php

use Faker\Generator as Faker;

$factory->define(App\Student::class, function (Faker $faker) {
    static $password;
    static $user_id;
    static $class;
    static $grade;
    return [
        'real_name' => $faker->name,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'user_id' => $user_id,
        'class' => $class,
        'grade' => $grade,
        'attend_year' => 2018,
        'qq' => '123'
    ];
});

