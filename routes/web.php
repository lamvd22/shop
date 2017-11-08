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

Route::get('/home', function () {
    return view('welcome');
    //var_dump(Route::has(''));
});

// Route::post('register', 'Auth\RegisterController@register');

Route::group(['namespace' => 'Auth', 'prefix' => 'admin'], function()
{
    // Controllers within the "App\Http\Controllers\Auth" namespace
    // Matches URL /admin/...
    Route::get('register', 'RegisterController@showRegistrationForm');
    Route::post('register', 'RegisterController@register');
    Route::get('login', 'LoginController@showLoginForm');
    Route::post('login', 'LoginController@login');
    Route::get('logout', 'LoginController@logout');
});

Route::get('login', 'LoginController@showLoginForm');
Route::post('login', 'LoginController@login');
Route::get('logout', 'LoginController@logout');

Route::get('san-pham/{id}', 'Product@index');

Route::get('san-pham', function () {
    return view('product.upload');
});
Route::post('san-pham', 'Product@upload');

