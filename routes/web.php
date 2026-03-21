<?php

use App\Http\Controllers\ServiceRequestController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::post('/service-requests', [ServiceRequestController::class, 'store'])->name('service-requests.store');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__.'/settings.php';
