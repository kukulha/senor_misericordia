<?php

use Faker\Generator as Faker;
use App\Event;

$factory->define(Event::class, function (Faker $faker) {
	$title = $faker->sentence(4);
    return [
        'name' => $title,
        'slug' => str_slug($title),
        'file' => $faker->imageUrl($width = 1200, $height= 400),
        'body' => $faker->realText(2500)
    ];
});
