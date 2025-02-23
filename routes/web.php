<?php

use App\Http\Controllers\Citology\CitologyLabController;
use App\Http\Controllers\Citology\CitologySampleController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\SampleTypeController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\SampleQrController;

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
#Sample Routes
Route::get('samples/createqr', [SampleQrController::class, 'createqr'])->name('samples.createqr');
Route::get('samples/availableqr', [SampleQrController::class, 'availableqr'])->name('samples.availableqr');
Route::resource('statuses', StatusController::class);
Route::resource('sample-types', SampleTypeController::class);
Route::resource('samples', SampleController::class);

#Notes Routes
Route::resource('notes', SampleController::class);

#Station1: SampleReception Routes
Route::resource('citology/sample-reception', CitologySampleController::class)->names('sample-reception');
Route::resource('citology/sample-processment', CitologyLabController::class)->names('sample-processment');

Route::get('/station1', function () {
    return view('station1');
})->name('station1');