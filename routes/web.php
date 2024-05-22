<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\LandingController;


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

Route::get('/storage*', function (Request $request) {
    return redirect()->route('home');
});

Route::get('/', function (Request $request) {
    return view('website.welcome');
});

// Route::get('/', [LandingController::class, 'home'])->name('home');
// Route::get('/conferences', [LandingController::class, 'conference'])->name('conference');
// Route::get('/event-detail/{name}/{id}', [LandingController::class, 'eventDetail'])->name('eventDetail');
// Route::get('/guidelines', [LandingController::class, 'guidelines'])->name('guidelines');
// Route::get('/guidelines/detail/{id}', [LandingController::class, 'guidelinesDetail'])->name('guidelinesDetail');
// Route::get('/download', [LandingController::class, 'document'])->name('document');
// Route::get('/live-stream', [LandingController::class, 'live'])->name('live');
// Route::get('/committees', [LandingController::class, 'committees'])->name('committees');
// Route::get('/submissions', [LandingController::class, 'submissions'])->name('submissions');

