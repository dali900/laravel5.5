<?php

use Faker\Generator as Faker;

$factory->define(App\Seeding::class, function (Faker $faker) {
    return [
        "title" => $faker->sentence(),
        "info"  => $faker->text(),
    ];
});
