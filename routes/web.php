<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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

Route::middleware(['web', 'country.lang', 'track.visits'])->get('/', [IndexController::class, 'indexPage'])->name('HOME');

Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')
        ->header('Content-Type', 'text/xml');
});

Route::post('/contact', [IndexController::class, 'postContact'])
    ->middleware(['web', 'throttle:10,1'])
    ->name('CONTACT');