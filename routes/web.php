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

Route::prefix('society')->group(function () {
    Route::prefix('societies')->group(function () {
        Route::get('detail/{id}','SocietyController@detail');
        Route::get('list','SocietyController@list');
        Route::get('establish','SocietyController@establish');
});
    Route::get('activities', function () {
        return view('welcome');
    });
    Route::get('news', function () {
        return view('welcome');
    });
    Route::prefix('admin')->group(function () {
        Route::get('','AdminDashboardController@index');
        Route::prefix('users')->group(function () {
            Route::get('list', function () {
                return view('welcome');
            });
            Route::get('new', function () {
                return view('welcome');
            });
            Route::get('detail', function () {
                return view('welcome');
            });
        });
        Route::prefix('posts')->group(function () {
            Route::get('list', 'PostController@listForAdmin');
            Route::get('detail/{id}','PostController@detailForAdmin');
        });
        Route::prefix('societies')->group(function () {
            Route::get('list', 'SocietyController@listForAdmin');
            Route::get('detail/{id}','SocietyController@detailForAdmin');
            Route::get('list/unconfirmed','SocietyController@unconfirmedListForAdmin');
            Route::get('new', function () {
                return view('welcome');
            });
        });
        Route::prefix('activities')->group(function () {
            return view('welcome');
        });
        Route::get('login',function () {
            return view('society.admin.login');
        });
    });
    Route::prefix('proprieter')->group(function () {
        Route::prefix('posts')->group(function () {
            Route::get('list', function () {
                return view('welcome');
            });
            Route::get('detail', function () {
                return view('welcome');
            });
            Route::get('add','PostController@pre_add');
        });
        Route::prefix('member')->group(function () {
            Route::get('list',function () {
                return view('welcome');
            });
            Route::get('detail',function () {
                return view('welcome');
            });
            Route::get('new',function () {
               return view('welcome');
            });
        });
    });
    Route::get('login',function () {
        return view('society.login');
    });
    Route::get('dashboard',function () {
       return view('welcome');
    });
    Route::get('/',function () {
        return view('society.index');
    });
});
Route::get('/', function () {
    return view('welcome');
});