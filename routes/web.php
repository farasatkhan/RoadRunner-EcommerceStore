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



Route::get('/', 'App\Http\Controllers\GeneralController@showLandingPage');
Route::get('/shoe-details', 'App\Http\Controllers\GeneralController@showShoeDetails');
Route::get('/searchAside', 'App\Http\Controllers\ProductsController@searchShoes');


Route::get('/signup', 'App\Http\Controllers\UserController@showSignupPage');
Route::post('/signup', 'App\Http\Controllers\UserController@registerNewUser');

Route::get('/login', 'App\Http\Controllers\UserController@showLoginPage');
Route::post('/login', 'App\Http\Controllers\UserController@loggedUser');

Route::get('/logout', 'App\Http\Controllers\UserController@logoutUser');
Route::get('/logoutAdmin', 'App\Http\Controllers\AdminController@logoutAdmin');

Route::get('/adminLogin', 'App\Http\Controllers\AdminController@showAdminLoginPage');
Route::post('/adminLogin', 'App\Http\Controllers\AdminController@loggedAdmin');

Route::get('/admin_dashboard', 'App\Http\Controllers\AdminController@showAdminDashboard');

Route::get('/admin_addAdmin', 'App\Http\Controllers\AdminController@showAddAdminPage');
Route::post('/admin_addAdmin', 'App\Http\Controllers\AdminController@AddNewAdmin');

Route::get('/admin_banAdmin', 'App\Http\Controllers\AdminController@showBanAdminPage');
Route::post('/admin_banAdmin', 'App\Http\Controllers\AdminController@banAdmin');

Route::get('/admin_banUser', 'App\Http\Controllers\AdminController@showBanUserPage');
Route::post('/admin_banUser', 'App\Http\Controllers\AdminController@banUser');

Route::get('/admin_addProducts', 'App\Http\Controllers\AdminController@showAddProductPage');
Route::post('/admin_addProducts', 'App\Http\Controllers\ProductsController@AddNewProducts');
Route::post('/getReviews', 'App\Http\Controllers\ProductsController@getReviews');

Route::get('/admin_editProducts', 'App\Http\Controllers\AdminController@showEditProductPage');

Route::get('/admin_updateProducts', 'App\Http\Controllers\AdminController@showUpdateProducts');
Route::post('/admin_updateProducts/{id}', 'App\Http\Controllers\AdminController@updateProducts');

Route::get('/admin_deleteProducts', 'App\Http\Controllers\AdminController@showDeleteProducts');
Route::get('/delete', 'App\Http\Controllers\AdminController@deleteProducts');

Route::get('/adminSearch', 'App\Http\Controllers\AdminController@showAdminSearchPage');

Route::get('/profile', 'App\Http\Controllers\UserController@showProfilePage');

Route::get('/editPassword', 'App\Http\Controllers\UserController@showEditpassword');
Route::post('/editPassword', 'App\Http\Controllers\UserController@updatePassword');

Route::get('/items', 'App\Http\Controllers\ProductsController@showItems');
Route::get('/mens', 'App\Http\Controllers\ProductsController@showMensProducts');
Route::get('/womens', 'App\Http\Controllers\ProductsController@showWomensProducts');

Route::get('/viewItemsPage', 'App\Http\Controllers\ProductsController@showViewProducts');
Route::get('/cart', 'App\Http\Controllers\ProductsController@showCart');
Route::post('/postReview', 'App\Http\Controllers\ProductsController@postReviewfun');
Route::post('/getSuggestions', 'App\Http\Controllers\ProductsController@getSuggestions');


Route::post('/adminSearchResults', 'App\Http\Controllers\AdminController@adminSearchResults');


// Route::get('/addProduct', 'App\Http\Controllers\ProductsController@showAddProducts');
// Route::get('/addProduct', 'App\Http\Controllers\ProductsController@showAddProducts');
// Route::post('/addProduct', 'App\Http\Controllers\ProductsController@AddNewProducts');

Route::get('/editProduct', 'App\Http\Controllers\ProductsController@showEditProducts');

Route::get('/about', 'App\Http\Controllers\GeneralController@showAbout'); 
Route::get('/addToCart', 'App\Http\Controllers\ProductsController@order');