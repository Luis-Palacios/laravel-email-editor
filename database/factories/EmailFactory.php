<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Email;
use Faker\Generator as Faker;

$factory->define(Email::class, function (Faker $faker) {
    return [
        'subject' => $faker->text(30),
        'body' => array(
            'blocks' =>
            array(
                0 =>
                array(
                    'key' => 'btmi0',
                    'text' => $faker->text(),
                    'type' => 'unstyled',
                    'depth' => 0,
                    'inlineStyleRanges' =>
                    array(),
                    'entityRanges' =>
                    array(),
                    'data' =>
                    (object)array(),
                ),
            ),
            'entityMap' =>
            (object)array(),
        )
    ];
});
