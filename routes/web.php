<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\PtppPdfController;

Route::get('/', function () {
    return Redirect::route('filament.admin.pages.dashboard');
});

// Routes untuk Permintaan Tindakan Perbaikan dan Pencegahan
Route::get('/admin/pelaporan/ptpp/{id}/view', [App\Http\Controllers\PerbaikanPencegahanController::class, 'viewPDF'])->name('ptpp.view');
Route::get('/admin/pelaporan/ptpp/{id}/pdf', [App\Http\Controllers\PerbaikanPencegahanController::class, 'downloadPDF'])->name('ptpp.pdf');
Route::get('/admin/pelaporan/ptpp/preview', [App\Http\Controllers\PerbaikanPencegahanController::class, 'previewPDF'])->name('ptpp.preview');
