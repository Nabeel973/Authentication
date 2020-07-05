<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Conversation;
use Faker\Generator as Faker;

$factory->define(Conversation::class, function (Faker $faker) {
    return [
        'user_id'=>$user->id,
        'title'=>$faker->string,
        'body'=>$faker->text

    ];
});
