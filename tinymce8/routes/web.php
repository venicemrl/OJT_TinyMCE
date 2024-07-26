<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContentController;


Route::get('/content',[ContentController::class, 'index'])->name('content.form');
 
Route::post('/save-content',[ContentController::class, 'storeContent'])->name('store.content');
 
Route::get('/content/{id}',[ContentController::class, 'showContent'])->name('show.content');

?>