<?php

use App\Http\Middleware\TrackVisits;
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

Route::middleware([TrackVisits::class])->get('/', [IndexController::class, 'indexPage'])->name('HOME');

Route::get('/sitemap.xml', function () {
    return response()->view('sitemap')
        ->header('Content-Type', 'text/xml');
});