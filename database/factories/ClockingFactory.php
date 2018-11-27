<?php

use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(App\Clocking::class, function (Faker $faker) {
    return [
        'CHECKTIME' => new Carbon
    ];
});
