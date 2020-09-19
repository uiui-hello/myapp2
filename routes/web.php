<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
// URL'/'時にtasksへリダイレクト
Route::get('/', function() {
    return redirect('tasks');
});

// メール確認する為のルーティングを有効にする
Auth::routes(['verify' => true]);

// ログインユーザーのみtasksへアクセス可能
Route::resource('tasks', 'TaskController')
->middleware('verified');

// ユーザー情報変更画面へアクセス
Route::get('/user', 'UserController@index')->name('user');
Route::get('/user/edit', 'UserController@edit');
Route::post('/user/edit', 'UserController@update');

// パスワード変更画面へアクセス
Route::get('changepassword', 'HomeController@showChangePasswordForm');
Route::post('changepassword', 'HomeController@changePassword')->name('changepassword');

Route::get('/home', 'HomeController@index')->name('home');

// メールアドレス確認メールを送信
Route::post('/email', 'ChangeEmailController@sendChangeEmailLink');

// 新規メールアドレスに更新
Route::get("reset/{token}", "ChangeEmailController@reset");