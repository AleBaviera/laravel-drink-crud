<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;
use App\Drink;

$factory->define(Drink::class, function (Faker $faker) {
    return [
      'name'=>$faker-> word,
      'mark'=>$faker-> sentence(2),
      'price'=>$faker-> randomNumber(2),
      'exp'=>$faker-> date
    ];
});
