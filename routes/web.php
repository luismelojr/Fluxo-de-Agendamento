<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    $employees = \App\Models\Employee::get();
    $service = \App\Models\Service::find(1);
    $availability = (new \App\Bookings\ServiceSlotAvailability($employees, $service))
        ->forPeriod(now()->startOfDay(), now()->addDay()->endOfDay());

    dd($availability);
});

require __DIR__.'/auth.php';
