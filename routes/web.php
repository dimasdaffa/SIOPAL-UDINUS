<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\PtppPdfController;

Route::get('/', function () {
    return Redirect::route('filament.admin.pages.dashboard');
});

Route::get('/ptpp/{id}/view', [PtppPdfController::class, 'show'])->name('ptpp.view');
Route::get('/ptpp/{id}/pdf', [PtppPdfController::class, 'download'])->name('ptpp.pdf');
Route::get('/ptpp/{id}/stream', [PtppPdfController::class, 'stream'])->name('ptpp.stream');
