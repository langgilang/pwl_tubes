<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Guru;
use Faker\Generator as Faker;

$factory->define(Guru::class, function (Faker $faker) {
    return [
        'NIP' => $faker->sentence(),
        'nama' => $faker->sentence(),
        'alamat' => $faker->sentence(),
        'mapel' => $faker->sentence(),
        'email' => $faker->sentence(),
        'telp' => $faker->sentence(),
        'img' => $faker->sentence()
    ];
});
