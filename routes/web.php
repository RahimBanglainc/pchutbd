<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'HomeController@index')->name('index');
Route::get('blog', 'HomeController@blogindex')->name('blog');
Route::get('blog/{slug}', 'HomeController@blogshow')->name('blog.show');
Route::get('stall/{slug}', 'HomeController@stallshow')->name('stall.show');
Route::get('stallList', 'HomeController@stallList')->name('stallList');
Route::get('item/{slug}', 'HomeController@item')->name('item.view');
Route::get('category/{slug}', 'HomeController@category')->name('cat.view');
Route::get('category/item/{slug}', 'HomeController@subcategory')->name('catitem.view');
Route::get('/page/{slug}', 'HomeController@page')->name('page.view');
Route::get('/getItemFeature//{id}', 'HomeController@feature')->name('feature.view');
Route::get('/all-item/', 'HomeController@allItem')->name('all.view');
Route::get('/search', 'HomeController@search')->name('search');

Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::post('/favorite/{id}/add', 'HomeController@favorite')->name('favorite.post');
});

// Route::get('/', 'HomeController@index')->name('home');


// this is admin route
Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('dashboard', 'DeshboardController@index')->name('dashboard');

    // Route::get('users', 'DeshboardController@users')->name('users');
    // Route::post('users/add', 'DeshboardController@usercreate')->name('users.add');
    // Route::put('users/{id}/update', 'DeshboardController@userupdate')->name('users.put');

    Route::resource('users', 'UserController');
    Route::resource('category', 'CategoryController');
    Route::resource('subcategory', 'SubcategoryController');
    Route::resource('blog', 'BlogController');
    Route::resource('stall', 'StallController');
    Route::resource('item', 'ItemController');
    Route::resource('page', 'PageController');
    Route::resource('feature', 'FeatureController');
    Route::resource('settings', 'SettingsController');
});



// this is client route
Route::group(['as' => 'client.', 'prefix' => 'client', 'namespace' => 'Storefront', 'middleware' => ['auth', 'client']], function () {

    Route::get('dashboard', 'DeshboardController@index')->name('dashboard');

    Route::get('userStallRequest', 'DeshboardController@stallshaw')->name('stallreq');
    Route::post('userStallPost', 'DeshboardController@stallcreate')->name('stallpost');

    Route::get('userProfile', 'DeshboardController@profile')->name('profile');
    Route::put('userProfilePost', 'DeshboardController@profileupdate')->name('profilepost');


    Route::get('userPassword', 'DeshboardController@passchange')->name('Passwordshow');
    Route::put('userPasswordPost', 'DeshboardController@passupdate')->name('passwordpost');

    Route::get('editstall', 'DeshboardController@editstall')->name('editstall');
    Route::put('editstallPost', 'DeshboardController@editstallpost')->name('editstallpost');

    Route::resource('item', 'ItemController');

    // only get here
    // Route::get('postitem', 'DeshboardController@postitem')->name('postitem');
    Route::get('payment', 'DeshboardController@payment')->name('payment');
    Route::get('order', 'DeshboardController@order')->name('order');
    Route::get('myorder', 'DeshboardController@myorder')->name('myorder');
    Route::get('invoice', 'DeshboardController@invoice')->name('invoice');
    // Route::get('item', 'DeshboardController@item')->name('item');
    Route::get('favourite', 'DeshboardController@favourite')->name('favourite');

});
