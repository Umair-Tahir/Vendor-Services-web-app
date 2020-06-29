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



//----------------Admin Panel---------------
//
//Route::post('login', [ 'as' => 'login', 'uses' => 'LoginController@do']);


Route::group(['prefix'=>'admin'],function (){
    Route::group(['middleware' => 'auth'],function () {
        Route::get('admin_home', 'AdminController@home');
        Route::get('/profile', 'AdminController@profile');
        Route::post('logout', 'AdminController@destroy');
        Route::resource('vendors','VendorController');
        Route::resource('categories','CategoryController');
        Route::resource('cities','CityController');
        Route::resource('services','ServiceController');
        Route::resource('blog','BlogController');
        Route::resource('contact','ContactusController');
    });
    Route::get('/', 'AdminController@index')->name('adminlogin');       //first page
//Admin public routes
    Route::post('login', 'AdminController@login');
//    Route::get('login', 'AdminController@index')->name('adminlogin');       //first page

});
//<!----------------Ending Admin Panel--------------->



//----------------Front End ====>>> Vendor Dashboard ---------------
Route::group(['prefix'=>'Vendor'],function (){          //using prefix in 1st group

    //using 2nd group for middleware
    Route::group(['middleware' => 'auth'],function () {
            //return view('admin_panel.admin.adminprofile')->with('Status', 'Logged in');
        Route::get('Dashboard', 'Vendor_Dashboard\VdvendorController@home');
        Route::post('logout', 'Vendor_Dashboard\VdvendorController@destroy');
        Route::resource('services','Vendor_Dashboard\VdserviceController');
        // Route::get('service\{id}','Vendor_Dashboard\VdOpserviceController@show');
        // Route::get('delete\service\{id}','Vendor_Dashboard\VdOpserviceController@destroy');
        // Route::get('Edit\Service\{id}','Vendor_Dashboard\VdOpserviceController@edit');
        Route::post('Edit\Service','Vendor_Dashboard\VdOpserviceController@create_service');//edit service
        Route::resource('Blog','Vendor_Dashboard\VdBlogController');
        Route::resource('Amenities\Add','Vendor_Dashboard\VdAmenitieController');

    });
    Route::get('/','Vendor_Dashboard\VdvendorController@index');
    Route::post('signin','Vendor_Dashboard\VdvendorController@register');



});
//<!----------------Ending Front End ====>>> Vendor Dashboard --------------->/////////

//----------------Front End ====>>> User Dashboard ---------------
Route::group(['prefix'=>'User'],function () {          //using prefix in 1st group
    Route::group(['middleware' => 'auth'],function () {
        Route::get('home','Front_End\FeUserController@home');
        Route::get('logout','Front_End\FeUserController@destroy');
    });

    Route::post('register','Front_End\FeUserController@register');
    Route::get('/','Front_End\FeUserController@index');
});
//----------------Starting Front End ====>>> User Dashboard ---------------

Route::get('/', 'Front_End\FeHomeController@index')->name('front_home');

Route::resource('categories','Front_End\FeCategoryController');
Route::get('Vendors','Front_End\FeVendorController@index');
Route::get('show Vendor\{id}','Front_End\FeVendorController@show_vendor');
Route::get('Service\{name}','Front_End\FeServiceController@show');
Route::get('Service','Front_End\FeServiceController@index');
Route::get('show Vendor\{id}','Front_End\FeVendorController@show');
Route::get('Single Vendor\{id}','Front_End\FeVendorController@show_vendor');
Route::resource('blogs','Front_End\FeBlogController');

Route::get('Search Results', 'Front_End\FeVendorController@search');
Route::get('Contact us', 'Front_End\FeHomeController@contactus');
//<!--------------Ending Front End routes--------------->
