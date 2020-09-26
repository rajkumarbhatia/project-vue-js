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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::group(['middlewareGroups'=>['web']],function(){
	Route::match(['get','post'],'/','frontend\HomeController@index');
	Route::match(['get','post'],'/login','frontend\HomeController@login')->name('login');
	Route::match(['get','post'],'/signup','frontend\HomeController@signup');
	Route::match(['get','post'],'/signup/business','frontend\HomeController@signupBusiness');
	Route::match(['get','post'],'/emailCheck','frontend\HomeController@emailCheck');
	Route::match(['get','post'],'/userNameCheck','frontend\HomeController@userNameCheck');
	Route::match(['get','post'],'/send-otp','frontend\HomeController@sendOTP');
	Route::match(['get','post'],'/logout','frontend\HomeController@logout');
	Route::match(['get','post'],'/forgot-password','frontend\HomeController@forgotPassword');
	Route::match(['get','post'],'/change-password','frontend\HomeController@changePassword');
	Route::match(['get','post'],'/check-if-email-exist','frontend\HomeController@checkEmailsExist');
	Route::match(['get','post'],'/change-password-dashboard','frontend\HomeController@changePasswordDashboard');
	

	Route::group(['middleware'=>'auth'],function(){
		Route::match(['get','post'],'/dashboard','frontend\HomeController@dashboard');
		Route::match(['get','post'],'/order-list','frontend\HomeController@orderList');
		Route::match(['get','post'],'/add/order','frontend\HomeController@addOrder');

		/*new route*/
		Route::match(['get','post'],'/my-won','frontend\HomeController@myWon');
		Route::match(['get','post'],'/my-invoice','frontend\HomeController@myInvoice');
		Route::match(['get','post'],'/my-lots','frontend\HomeController@myLots');
		Route::match(['get','post'],'/outbid','frontend\HomeController@outBid');
		Route::match(['get','post'],'/favorites-bid','frontend\HomeController@favoritesBid');

		Route::match(['get','post'],'/admin/upload/order/image','frontend\HomeController@orderImage');
		Route::match(['get','post'],'/admin/order/details/{order_id}','frontend\HomeController@orderDetails');
	});


	/*admin routes*/
	Route::match(['get','post'],'/admin/login','backend\AdminController@login');

	Route::group(['middleware'=>'admin'],function()
	{
		Route::match(['get','post'],'/admin/dashboard','backend\AdminController@dashboard');
		Route::match(['get','post'],'/admin/logout','backend\AdminController@logout');
	});
});
