<?php
use App\Book;
use Illuminate\Http\Request; 

//本ダッシュボード表示
Route::get('/', 'BooksController@index');

//登録処理
Route::post('/books','BooksController@store');

//更新画面
Route::post('/booksedit/{books}','BooksController@edit');

//更新処理
Route::post('/books/update','BooksController@update');

//本を削除
Route::delete('/book/{book}','BooksController@destroy');

//Auth
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
