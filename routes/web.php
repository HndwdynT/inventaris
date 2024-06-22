<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InventarisController;

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/inventaris', [InventarisController::class, 'index'])->name('inventaris.index');
Route::get('/inventaris/add', [InventarisController::class, 'add'])->name('inventaris.add');
Route::post('/inventaris/add', [InventarisController::class, 'barang'])->name('inventaris.barang');
Route::put('/inventaris/{id}', [InventarisController::class, 'update'])->name('inventaris.update');
Route::get('/inventaris/{id}/edit', [InventarisController::class, 'edit'])->name('inventaris.edit');
Route::delete('/delete-inventaris/{id}', [InventarisController::class, 'delete'])->name('inventaris.delete');

Route::get('/prasarana', 'App\Http\Controllers\Prasarana@index')->name('prasarana');
Route::get('/sarana', 'App\Http\Controllers\Sarana@index')->name('sarana');
