<?php


use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'title'       => $faker->sentence(),
        'description' => $faker->text()
    ];
});
