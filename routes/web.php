<?php

use Illuminate\Support\Facades\Route;
use App\Jobs\SendWarnEmailToUser;
use Illuminate\Contracts\Queue\Job;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    SendWarnEmailToUser::dispatch();

    // (new SendWarnEmailToUser)->handle();

    // dispatch(SendWarnEmailToUser::class, 'handle');

    return view('welcome');
});
