<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| student Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth:clearance']
    ], function () {

    //==============================dashboard============================
    Route::get('/clearance/dashboard', function () {
        return view('pages.Clearances.dashboard.dashboard');
    });

    //==============================account============================
    Route::group(['prefix' => 'account'], function () {
        Route::get('/', 'AccountController@index')->name('admin.account');
        Route::get('create', 'AccountController@create')->name('account.create');
        Route::get('print', 'AccountController@print')->name('account.print');
        Route::post('store', 'AccountController@store')->name('account.store');
        Route::get('edit/{id}', 'AccountController@edit')->name('account.edit');
        Route::post('update/{account}', 'AccountController@update')->name('account.update');
        Route::get('delete/{id}', 'AccountController@delete')->name('account.delete');

    });
    #########################################  end Bank rote #######################################


    //==============================import============================
    Route::group(['prefix' => 'import'], function () {
        Route::get('/', 'ImportController@index')->name('admin.import');
        Route::get('create', 'ImportController@create')->name('import.create');
        Route::get('print', 'ImportController@print')->name('import.print');
        Route::post('store', 'ImportController@store')->name('import.store');
        Route::get('edit/{id}', 'ImportController@edit')->name('import.edit');
        Route::get('payment/{id}', 'TransactionController@payment')->name('transactions.payment');

        Route::post('update/{import}', 'ImportController@update')->name('import.update');
        Route::get('delete/{id}', 'ImportController@destroy')->name('import.delete');

    });
    #########################################  end import rote #######################################

    //==============================transactions============================
    Route::group(['prefix' => 'transactions'], function () {
        Route::get('/', 'TransactionController@index')->name('admin.transactions');
        Route::get('create', 'TransactionController@create')->name('transactions.create');
        Route::get('print/{id}', 'TransactionController@print')->name('transactions.print');
        Route::post('store', 'TransactionController@store')->name('transactions.store');
        Route::get('edit/{id}', 'TransactionController@edit')->name('transactions.edit');
        Route::get('payment/{id}', 'TransactionController@payment')->name('transactions.payment');
        Route::post('update/{value}', 'TransactionController@update')->name('transactions.update');
        Route::get('delete/{id}', 'TransactionController@delete')->name('transactions.delete');

    });
    #########################################  end transactions rote #######################################


});
