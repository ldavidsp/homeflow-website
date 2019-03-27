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

use \App\AccountDomain;

/**
 * Domain Routes
 */
Route::domain(env('MAIN_DOMAIN'))->group(function () {
    Route::get('/', 'HomeController@index')->name('welcome');

    /** Signin Homeflow */
    Route::get('/signin', 'HomeController@signin')->name('signin');
    Route::post('/signin', 'HomeController@signinVerify');

    /** Create Homeflow*/
    Route::get('/create', 'HomeController@create');
    Route::post('/create', 'HomeController@createAccount');

});

/**
 * Subdomains Routes
 */
Route::domain('{account}.' . env('MAIN_DOMAIN'))->group(function () {
    Route::get('/', function ($account) {

        if (Auth::user()) {
            return view('home');
        }
        else {
            $response = AccountDomain::where('account_domain', $account)->first();

            if (!empty($response)) {
                return view('auth.login', ['account' => $response->name]);
            }
            else {
                return response()->json([
                    'message' => 'Not found',
                ]);
            }
        }
    });

    //Route::get('/create/account_user', 'HomeController@index')->name('create_user');
    Route::get('/create/account', function () {
        return view('auth.register');
    });

    Route::get('/home', function () {
        return view('home');
    });
});

Auth::routes();


