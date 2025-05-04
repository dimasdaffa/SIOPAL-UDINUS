<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\PtppPdfController;
use App\Models\lapor_ptpp;

Route::get('/', function () {
    return Redirect::route('filament.admin.pages.dashboard');
});



Route::get('/ptpp/view/{id}', function ($id) {
    $data = lapor_ptpp::findOrFail($id);
    return view('admin.perbaikan_pencegahan', compact('data'));
})->name('admin.perbaikan_pencegahan');
