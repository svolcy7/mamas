<?php


use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'fname' => $faker->firstName,
        'lname' => $faker->lastName,
        'body' => $faker->paragraph ($nbSentences=3,$variableNbSentences=  true),
    ];
});