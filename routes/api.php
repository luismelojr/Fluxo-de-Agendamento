<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/teste', function () {
    $generator = (new \App\Bookings\SlotRangeGenerator(now()->startOfDay(), now()->addDay()->endOfDay()))
        ->generate(30);

    dd($generator);
});
