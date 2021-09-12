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

Route::get('/', function () {
    return view('welcome');
});
/**ROUTES FOR THE MAIN PAGES */
Route::get('home', 'PagesController@home');
Route::get('contact', 'PagesController@contact');
Route::get('blogs', 'PagesController@blogs');
Route::post('create', 'PagesController@store');
Route::get('about', 'PagesController@about');


/**Authetication controllers */
Route::get('login', 'AuthController@index');
Route::post('post-login', 'AuthController@postLogin'); 
Route::get('register', 'AuthController@register');
Route::post('post-register', 'AuthController@postRegister'); 
Route::get('dashboard', 'AuthController@dashboard'); 
Route::get('logout', 'AuthController@logout');

/**Routes for UserControllers*/


/**Route for posts */

Route::resource('posts', 'PostsController');