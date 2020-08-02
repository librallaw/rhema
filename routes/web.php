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
    return view('home');
})->name('home');

Route::get("/sponsor","SponsorshipController@showSponsorship")->name("showSponsorship");
Route::post("/pay","PaymentController@redirectToGateway")->name("pay");
Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');

//About Route
Route::get('about', 'AboutController@about')->name('about');

//Outreaches Route
Route::get('outreach', 'OutreachController@outreach')->name('outreaches');

//RhemaSpeaks Route
Route::get('rhema-speaks', 'SingleController@single')->name('single');

//Buy Rhema Route
Route::get('buy', 'BuyController@buy')->name('buy');

//Contact Route
Route::get('contact', 'ContactController@contact')->name('contact');
Route::post('contact', 'ContactController@addContact')->name('addContact');


