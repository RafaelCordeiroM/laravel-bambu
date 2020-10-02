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

Route::get('/','Controller@home')->name('view.site.home');
Route::get('contato','Controller@contacts')->name('view.site.contacts');
Route::get('galeria','Controller@gallery')->name('view.site.gallery');
Route::get('e-commerce','Controller@ecommerce')->name('view.ecommerce');
/**
 * ADMIN
 */
//dashboard
Route::get('admin/dashboard','AdminController@dashboard')->name('view.admin.dashboard');
//ecommerce
Route::get('admin/ecommerce/products','AdminController@products')->name('view.admin.ecommerce.products');
Route::get('admin/ecommerce/customers','AdminController@customers')->name('view.admin.ecommerce.customers');
Route::get('admin/ecommerce/addProduct','AdminController@addProduct')->name('view.admin.ecommerce.addProduct');
//email
Route::get('admin/email/inbox','AdminController@inbox')->name('view.admin.email.inbox');
Route::get('admin/email/orders','AdminController@orders')->name('view.admin.email.orders');
Route::get('admin/email/marketing','AdminController@marketing')->name('view.admin.email.marketing');
//gallery
Route::get('admin/gallery','AdminController@gallery')->name('view.admin.gallery');
Route::get('admin/gallery/projects','AdminController@projects')->name('view.admin.gallery.projects');
Route::get('admin/gallery/addProjects','AdminController@addProjects')->name('view.admin.gallery.addProjects');

/////////// CRUD Product ////////
Route::post('admin/ecommerce/product/create','ProductController@createProduct')->name('admin.product.create');
Route::post('admin/ecommerce/product/delete','ProductController@deleteProduct')->name('admin.product.delete');
Route::post('admin/ecommerce/product/update','ProductController@updateProduct')->name('admin.product.update');
Route::post('admin/ecommerce/product/updateImage','ProductController@updateProductImage')->name('admin.product.image.update');


Route::view('teste','site.test');
