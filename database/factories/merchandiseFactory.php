<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use Faker\Generator as Faker;
use App\Merchandises;

$factory->define(Merchandises::class, function (Faker $faker) {
        return [
            'name'=>$this->faker->word,
            'description'=>$this->faker->word,
            'quantity'=>rand(2, 300),
            'price'=>rand(2, 300),
        ];
});
