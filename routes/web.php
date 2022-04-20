<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('articles/cetak_pdf',[ArticleController::class, 'cetak_pdf'])->name('articles.cetak_pdf');

Route::resource('articles',ArticleController::class);

