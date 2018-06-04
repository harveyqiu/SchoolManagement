<?php

use Faker\Generator as Faker;

$factory->define(App\Society::class, function (Faker $faker) {
    static $password;
    return [
        'name' => $faker->name,
        'password' => $password ?: $password = bcrypt('123456'),
        'remember_token' => str_random(10),
        'society_id' => 101,
        'proprieter_name' => $faker->name,
        'proprieter_class' => 13,
        'proprieter_grade' => 3,
        'proprieter_qq' => 12345678,
        'achievements' => $faker->text,
        'recruit' => 1,
        'email' => 'jeek@jeek.com',
        'stars' => 1,
        'type' => 1,
        'confirmed' => 1,
        'recruit_qq_group' => '123456',
        'introduction' => $faker->text
    ];
});
