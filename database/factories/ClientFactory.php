<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use Illuminate\Support\Str;
use App\Client;
use Faker\Generator as Faker;

$factory->define(Client::class, function (Faker $faker) {
    return [
        'name' => $faker->name,  //$faker larave kintamasis skirtas netikru duomenu uzpildymui
        'surname' => $faker->sentence(4),  //sugeneruos atsitiktini sakini, kuriame yra 4 zodziai
        'username' => Str::random(15),
        'company_id' => rand(1, 10),
        'image_url' => $faker->url(),


    ];
});
