<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Watch::class, function (Faker\Generator $faker)
{
    return [
        'name'      => $faker->numberBetween(1000, 9000),
        'quantity'    => $faker->numberBetween(0, 50),
        'price'    => $faker->randomFloat(2,100, 10000),
        'brand_id' =>$faker->numberBetween(1, 9),
        'created_at' => date('Y-m-d H:i:s'),
    ];
});

$factory->define(App\Brand::class, function (Faker\Generator $faker)
{
    return [
        'name'      => $faker->company,
        'parent_id' => $faker->numberBetween(0, 9)
    ];
});
