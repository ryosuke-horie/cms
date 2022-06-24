<?php

use App\Book;
use Illuminate\Http\Request;


/**
* 本ダッシュボート表示(books.blade.php)
*/
Route::get('/', 'BooksController@index');

/**
* 本を登録
*/
Route::post('/books', 'BooksController@store');

//更新画面
Route::post('/booksedit/{books}','BooksController@edit');

//更新処理
Route::post('/books/update', 'BooksController@update');

/**
* 本を削除 
*/
Route::delete('/book/{book}', function (Book $book) {
    $book->delete();
    return redirect('/');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
