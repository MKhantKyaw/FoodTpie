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
    return view('page.index');
});

Route::get('/pricing', function() {
	return view('page.pricing');
});

Route::get('/reservation', function() {
	return view('page.reservation');
});

Route::get('/about' , function() {
	return view('page.about_us');
});

Route::get('/contact' , function() {
	return view('page.contact_us');
});

Route::get('/registerUser' , function() {
	return view('page.register');
});


Route::get('/productControl', 'AdminPanelController@showProduct');


//user panel
Route::get('/userDashboard','UserpanelController@index');
Route::get('/promotion','UserpanelController@promotion');
Route::post('/storePromo','UserpanelController@storePromo');
Route::get('/userDashboard/{order_id}/{order_date}/{order_time}', 'UserpanelController@cancelOrder');
Route::get('/userDashboard/profile','UserpanelController@profile');
Route::patch('/update/{id}','UserpanelController@update');
Auth::routes();

//admin panel
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin');
Route::get('/admin', 'HomeController@admin')->middleware('auth:admin');
Route::get('/admin/userControl', 'AdminPanelController@showUsertable');
Route::get('/admin/orders', 'AdminPanelController@showAdminOrder');

Route::get('/admin/invoice/{order_id}','AdminPanelController@showPDF');

// Route::post('/login/admin', 'Auth\LoginController@adminLogout');


// Route::get('/home', 'HomeController@index')->name('home');
Route::post('/', 'HomeController@index');
//order from ssl
		Route::resource('products','ProductsController');

		Route::resource('orders','OrdersController');

		Route::get('/cart','ProductsController@cart');
		Route::get('/menu','ProductsController@menu');
		Route::post('/passOrder','OrdersController@order');
