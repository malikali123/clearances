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
    Route::group(['prefix' => 'bank', 'middleware' => 'can:banks'], function () {
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



        ################################## roles ######################################
        Route::group(['prefix' => 'roles', 'middleware' => 'can:permession'], function () {
            Route::get('/', 'RolesController@index')->name('admin.roles.index');
            Route::get('create', 'RolesController@create')->name('admin.roles.create');
            Route::post('store', 'RolesController@saveRole')->name('admin.roles.store');
            Route::get('/edit/{id}', 'RolesController@edit') ->name('admin.roles.edit') ;
            Route::post('update/{id}', 'RolesController@update')->name('admin.roles.update');
         });
        ################################## end roles ######################################



    //==============================clearance============================
    Route::group(['prefix' => 'clearance', 'middleware' => 'can:imports'], function () {
        Route::get('/', 'ClearanceController@index')->name('admin.clearance');
        Route::get('create', 'ClearanceController@create')->name('clearance.create');
        Route::get('print', 'BankCClearanceControllerontroller@print')->name('clearance.print');
        Route::post('store', 'ClearanceController@store')->name('clearance.store');
        Route::get('edit/{id}', 'ClearanceController@edit')->name('clearance.edit');
        Route::post('update/{clearance}', 'ClearanceController@update')->name('clearance.update');
        Route::get('delete/{id}', 'ClearanceController@destroy')->name('clearance.delete');

    });
    #########################################  end clearance rote #######################################



    //==============================clearance============================
    Route::group(['prefix' => 'users', 'middleware' => 'can:users'], function () {
        Route::get('/', 'UserController@index')->name('admin.users');
        Route::get('create', 'UserController@create')->name('users.create');
        Route::get('print', 'UserController@print')->name('users.print');
        Route::post('store', 'UserController@store')->name('users.store');
        Route::get('edit/{id}', 'UserController@edit')->name('users.edit');
        Route::get('edit2/{id}', 'UserController@edit2')->name('users.edit2');
        Route::post('update/{user}', 'UserController@update')->name('users.update');
        Route::post('update2/{user}', 'UserController@update2')->name('users.update2');
        Route::get('delete/{id}', 'UserController@destroy')->name('users.delete');

    });
    #########################################  end clearance rote #######################################





    //==============================import============================
    Route::group(['prefix' => 'import', 'middleware' => 'can:imports'], function () {
        Route::get('/', 'ImportController@index')->name('admin.import');
        Route::get('helth', 'ImportController@helth')->name('helth.import');
        Route::get('importqty', 'ImportController@certificate')->name('admin.importqty');
        Route::get('create', 'ImportController@create')->name('import.create');
        Route::get('print', 'ImportController@print')->name('import.print');
        Route::post('store', 'ImportController@store')->name('import.store');
        Route::get('edit/{id}', 'ImportController@edit')->name('import.edit');
        Route::get('certificated/{id}', 'ImportController@certificated')->name('import.certificated');
        Route::post('update/{import}', 'ImportController@update')->name('import.update');
       // Route::get('helth2/{id}', 'TransactionController@helth')->name('transactions.helth');

        Route::get('delete/{id}', 'ImportController@destroy')->name('import.delete');

    });
    #########################################  end import rote #######################################




    //==============================values============================
    Route::group(['prefix' => 'values', 'middleware' => 'can:imports'], function () {
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
    Route::group(['prefix' => 'transactions', 'middleware' => 'can:helth'], function () {
        Route::get('/', 'TransactionController@index')->name('admin.transactions');
        Route::get('helth', 'TransactionController@index')->name('helth.transactions');
        Route::get('create', 'TransactionController@create')->name('transactions.create');
        Route::get('print', 'TransactionController@print')->name('transactions.print');
        Route::get('print_helth/{id}', 'TransactionController@printHelth')->name('transactions.print.helth');
        Route::post('helth', 'TransactionController@store')->name('helth.store');
        Route::post('store', 'TransactionController@store')->name('transactions.store');
        Route::get('edit/{id}', 'TransactionController@edit')->name('transactions.edit');
        Route::get('payment/{id}', 'TransactionController@edit')->name('transactions.payment');
        Route::get('helth/{id}', 'TransactionController@helth')->name('transactions.helth');
        Route::post('update/{value}', 'TransactionController@update')->name('transactions.update');
        Route::get('delete/{id}', 'TransactionController@delete')->name('transactions.delete');

    });
    #########################################  end transactions rote #######################################

    //==============================Report============================
    Route::group(['prefix' => 'Report', 'middleware' => 'can:reports'], function () {
        Route::get('impotr', 'ImportController@index')->name('admin.transactions');
        Route::get('banks', 'TransactionController@create')->name('transactions.create');
        Route::get('codes', 'ValueController@print')->name('transactions.print');
        Route::get('certificate', 'TransactionController@store')->name('transactions.store');
        Route::get('edit/{id}', 'ClearanceController@edit')->name('transactions.edit');
        Route::get('payment/{id}', 'TransactionController@edit')->name('transactions.payment');
        Route::post('update/{value}', 'TransactionController@update')->name('transactions.update');
        Route::get('delete/{id}', 'TransactionController@delete')->name('transactions.delete');

    });
    #########################################  end report rote #######################################



//    Route::group(['prefix' => 'users'], function () {
//        Route::get('/', 'UsersController@index')->name('admin.users.index');
//        Route::get('/create', 'UsersController@create')->name('admin.users.create');
//        Route::post('/store', 'UsersController@store')->name('admin.users.store');
//    });

    //==============================Setting============================
    Route::resource('settings', 'SettingController');
});

