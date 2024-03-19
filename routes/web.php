<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    $employee = \App\Models\Employee::find(1);
    $service = \App\Models\Service::find(1);
   (new \App\Bookings\ScheduleAvailability($employee, $service))
       ->forPeriod(
           now()->startOfDay(),
           now()->addMonth()->endOfDay()
       );
});

require __DIR__.'/auth.php';
