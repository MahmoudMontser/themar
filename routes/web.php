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


Route::get('/','MainController@retrieve')->name('main');
Auth::routes();
Route::get('/about_us', 'AboutController@hint')->name('about');
Route::get('/contact_us', 'ContactController@hint')->name('Contact');
Route::get('/signup', 'UsersController@signup')->name('signup');
Route::get('/signin', 'UsersController@signin')->name('signin');
Route::get('/user_edit', 'UsersController@edit')->name('user_edit');
Route::post('/update_user_v','UsersController@update_user')->name('update_user_v');

Route::get('/buildings', 'BuildingsController@retrieve_all')->name('buildings');

///////////////////////////////////////////////////////////////////////////////////

Route::get('/dashboard_login', 'AdminsController@login_page')->name('dashboard_login');

Route::post('/admin_login', 'AdminsController@authenticate')->name('admin_login');

Route::group(['middleware'=>'Authenticate'],function (){




    Route::get('/dashboard_home', 'AdminsController@dash_home')->name('dashboard_home');
//users CRUD
    Route::get('/create_users_page', 'AdminsController@create_users_page')->name('create_users_page');
    Route::post('/create_users', 'AdminsController@create_user')->name('create_users');
    Route::get('/users', 'AdminsController@retrieve_users')->name('retrieve_users');
    Route::get('/edit_user/{id}','AdminsController@edit_user')->name('edit_user');
    Route::post('/update_user/{id}','AdminsController@update_user')->name('update_user');
    Route::post('/delete_user/{id}','AdminsController@delete_user')->name('delete_user');
//messages retrieve&deletion
    Route::get('/messages', 'AdminsController@retrieve_messages')->name('retrieve_messages');
    Route::post('/delete_message/{id}','AdminsController@delete_message')->name('delete_message');
//CRUD OF ABOUT US page
    Route::post('/create_hint', 'AdminsController@create_hint')->name('create_hint');
    Route::get('/hints', 'AdminsController@retrieve_hints')->name('retrieve_hints');
    Route::get('/update_hint_page/{id}', 'AdminsController@edit_hint')->name('update_hint_page');
    Route::post('/update_hint/{id}','AdminsController@update_hint')->name('update_hint');
    Route::post('/delete_hint/{id}','AdminsController@delete_hint')->name('delete_hint');

    Route::post('/create_goal', 'AdminsController@create_goal')->name('create_goal');
    Route::get('/goals', 'AdminsController@retrieve_goals')->name('retrieve_goals');
    Route::get('/update_goal_page/{id}', 'AdminsController@edit_goal')->name('update_goal_page');
    Route::post('/update_goal/{id}','AdminsController@update_goal')->name('update_goal');
    Route::post('/delete_goal/{id}','AdminsController@delete_goal')->name('delete_goal');

//CRUD OF Buildings
    Route::get('/create_buildings_page', 'AdminsController@create_buildings_page')->name('create_buildings_page');
    Route::post('/create_building', 'AdminsController@create_building')->name('create_building');
    Route::get('/update_building_page/{id}', 'AdminsController@edit_building')->name('update_building_page');
    Route::post('/update_building/{id}','AdminsController@update_building')->name('update_building');

    Route::get('/buildings_view', 'AdminsController@retrieve_buildings')->name('retrieve_buildings');
    Route::post('/delete_building/{id}','AdminsController@delete_building')->name('delete_building');
    Route::get('/add_bimages/{id}','AdminsController@add_bimages')->name('add_bimage');
    Route::post('/store_bimage/{id}','AdminsController@store_bimage')->name('store_bimage');
    Route::get('/delete_bimage/{id}','AdminsController@delete_bimage')->name('delete_bimage');



    //settings route
    Route::get('/set_settings','AdminsController@set_settings')->name('set_settings');

    Route::post('/settings','AdminsController@settings')->name('settings');


    //admin logout
    Route::get('/admin_logout','AdminsController@logout')->name('admin_logout');




});

/////////////////////////////////////////////////////
Route::post('/pushm','MessagesController@push');
Route::post('/login','LoginsController@authenticate')->name('login');
Route::post('/user_create','UsersController@create');
Route::get('/logout','LoginsController@logout')->name('logout');

