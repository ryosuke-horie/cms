<?php

use App\Book;
use Illuminate\Http\Request;

/**
 * 本の一覧表示
 */
Route::get('/', function () {
    return view('welcome');
});


/**
 * 本を追加
 */
 Route::post('book', function (Request $request) {
    // 
 });
 
 /**
  * 本を削除
  */
  Route::delete('/book/{book}', function(Book $book) {
      //
  });