<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrayerRequestController;

route::get('/prayer-request',[PrayerRequestController::class,'create'])->name('prayer.request');
route::post('/prayer-request',[PrayerRequestController::class,'store'])->name('prayer-request-store');

Route::get('/', function () {
    return view('/home/index');
});
Route::get('/about-us', function () {
    return view('/about/index');
});
Route::get('/about-us', function () {
    return view('/about/index');
});
Route::get('/events', function () {
    return view('/events/index');
});
Route::get('/sermons', function () {
    return view('/sermons/index');
});
Route::get('/books', function () {
    return view('/books/index');
});
Route::get('/blog', function () {
    return view('/blog/index');
});
Route::get('/contact', function () {
    return view('/contact/index');
});
Route::get('/donate', function () {
    return view('/donate/index');
});
Route::get('/ministries', function () {
    return view('/ministries/index');
});
// Route::get('/prayer-request', function () {
//     return view('/prayer-request/index');
// });
