<?php

use App\Http\Controllers\bookController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// to store a book  ---------> add the reset of book _model
Route::post('book',[bookController::class,'store']);
// to show all books
Route::get('book',[bookController::class,'show']);
// to get image as response 
Route::get('book/image/{filename}', [bookController::class, 'showImage']);

// get a single item of books by there id
Route::get('book/{id}', [bookController::class, 'index']);
// delete book
Route::delete('book/{id}', [bookController::class, 'delete']);
// update a book 
Route::put('book/{id}', [bookController::class, 'update']);