<?php

use Illuminate\Support\Facades\Route;

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

//Auth::routes();

Route::get('/', 'HomeController@index')->name('selection');


Route::group(['namespace' => 'Auth'], function () {

Route::get('/login/{type}','LoginController@loginForm')->middleware('guest')->name('login.show');

Route::post('/login','LoginController@login')->name('login');

Route::get('/logout/{type}', 'LoginController@logout')->name('logout');


});
 //==============================Translate all pages============================
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath', 'auth']
    ], function () {

     //==============================dashboard============================
    Route::get('/dashboard', 'HomeController@dashboard')->name('dashboard');

   //==============================dashboard============================



     //==============================Bank============================
    Route::group(['prefix' => 'bank'], function () {
        Route::get('/', 'BankController@index')->name('admin.bank');
        Route::get('create', 'BankController@create')->name('bank.create');
        Route::get('print', 'BankController@print')->name('bank.print');
        Route::post('store', 'BankController@store')->name('bank.store');
        Route::get('edit/{id}', 'BankController@edit')->name('bank.edit');
        Route::post('update/{bank}', 'BankController@update')->name('bank.update');
        Route::get('delete/{id}', 'BankController@destroy')->name('bank.delete');

    });
    #########################################  end Bank rote #######################################

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





    //==============================clearance============================
    Route::group(['prefix' => 'clearance'], function () {
        Route::get('/', 'ClearanceController@index')->name('admin.clearance');
        Route::get('create', 'ClearanceController@create')->name('clearance.create');
        Route::get('print', 'BankCClearanceControllerontroller@print')->name('clearance.print');
        Route::post('store', 'ClearanceController@store')->name('clearance.store');
        Route::get('edit/{id}', 'ClearanceController@edit')->name('clearance.edit');
        Route::post('update/{clearance}', 'ClearanceController@update')->name('clearance.update');
        Route::get('delete/{id}', 'ClearanceController@destroy')->name('clearance.delete');

    });
    #########################################  end clearance rote #######################################

    //==============================import============================
    Route::group(['prefix' => 'import'], function () {
        Route::get('/', 'ImportController@index')->name('admin.import');
        Route::get('create', 'ImportController@create')->name('import.create');
        Route::get('print', 'ImportController@print')->name('import.print');
        Route::post('store', 'ImportController@store')->name('import.store');
        Route::get('edit/{id}', 'ImportController@edit')->name('import.edit');
        Route::post('update/{import}', 'ImportController@update')->name('import.update');
        Route::get('delete/{id}', 'ImportController@destroy')->name('import.delete');

    });
    #########################################  end import rote #######################################




    //==============================values============================
    Route::group(['prefix' => 'values'], function () {
        Route::get('/', 'ValueController@index')->name('admin.values');
        Route::get('create', 'ValueController@create')->name('values.create');
        Route::get('print', 'ValueController@print')->name('values.print');
        Route::post('store', 'ValueController@store')->name('values.store');
        Route::get('edit/{id}', 'ValueController@edit')->name('values.edit');
        Route::post('update/{value}', 'ValueController@update')->name('values.update');
        Route::get('delete/{id}', 'ValueController@delete')->name('values.delete');

    });
    #########################################  end values rote #######################################


    //==============================transactions============================
    Route::group(['prefix' => 'transactions'], function () {
        Route::get('/', 'TransactionController@index')->name('admin.transactions');
        Route::get('create', 'TransactionController@create')->name('transactions.create');
        Route::get('print', 'TransactionController@print')->name('transactions.print');
        Route::post('store', 'TransactionController@store')->name('transactions.store');
        Route::get('edit/{id}', 'TransactionController@edit')->name('transactions.edit');
        Route::get('payment/{id}', 'TransactionController@edit')->name('transactions.payment');
        Route::post('update/{value}', 'TransactionController@update')->name('transactions.update');
        Route::get('delete/{id}', 'TransactionController@delete')->name('transactions.delete');

    });
    #########################################  end transactions rote #######################################



    //==============================Setting============================
    Route::resource('settings', 'SettingController');
});
