<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortController;
use App\Http\Controllers\Admin\AdminPortController;
use App\Http\Controllers\Admin\AdminRegionController;

require __DIR__.'/auth.php';
Auth::routes();

//Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group([
    'as'    => 'public.',
], function () {
    Route::resource('ports', PortController::class, ['only' => ['index','show']]);
    Route::get('map', [PortController::class, 'map'])->name('map');
});
Route::group([
    'as'            => 'admin.',
    'prefix'        => 'admin',
    'middleware'    => 'auth',
], function () {
    Route::resource('ports', AdminPortController::class);
    Route::resource('regions', AdminRegionController::class);
});
Route::redirect('', 'ports');
