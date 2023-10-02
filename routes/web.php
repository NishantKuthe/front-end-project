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

Route::namespace('Common')->group(function () {
    Route::get('/', 'StaticController@index')->name('home');
    Route::get('/about', 'StaticController@about')->name('about');
    Route::get('/news', 'StaticController@news')->name('newses');
    Route::get('/achievers', 'StaticController@achievers')->name('achievers');
    Route::get('/downloads', 'StaticController@downloads')->name('downloads');
    Route::get('/bank-partners', 'StaticController@bankPartners')->name('bank-partners');
    Route::get('/documents', 'StaticController@documents')->name('documents');
    Route::get('/gallery', 'StaticController@gallery')->name('gallery');
    Route::get('/contact', 'StaticController@contact')->name('contact-us');

    Route::get('/packages', 'StaticController@packages')->name('packages');
    Route::get('/products', 'StaticController@products')->name('products');
    Route::get('/product-detail/{id}/{pame}', 'StaticController@productDetail')->name('product-detail');

    Route::get('/privacy-policy', 'StaticController@privacyPolicy')->name('privacy-policy');
    Route::get('/terms-and-conditions', 'StaticController@termsAndCondition')->name('terms-and-conditions');
    Route::get('/product-catalogue', 'StaticController@productCatalogue')->name('product-catalogue');

    
    Route::get('/business-opportunity', 'StaticController@businessOpportunities')->name('business-opportunities');
    Route::get('/direct-seller-agreement', 'StaticController@directSellerAgreement')->name('direct-seller-agreement');
    Route::get('/buy-back-policy', 'StaticController@buyBackPolicy')->name('buy-back-policy');
    Route::get('/refund-policy', 'StaticController@refundPolicy')->name('refund-policy');
});
