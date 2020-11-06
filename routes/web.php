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

    Route::get('/test', function () {
        return view('test');
    })->name('test');

    Route::get('/', 'HomeController@home')->name('home');



    Route::get("/sponsor","SponsorshipController@showSponsorship")->name("showSponsorship");
    Route::post("/pay","PaymentController@redirectToGateway")->name("pay");
    Route::get('/payment/callback', 'PaymentController@handleGatewayCallback');


    Route::post('/sponsor', 'PaymentController@redirectToGatewaySponsor');


    //About Route
    Route::get('about', 'AboutController@about')->name('about');
    Route::get('author', 'AboutController@author')->name('author');

    Route::get('rhema-speaks', 'AboutController@speaks')->name('rhema-speaks');

    Route::get('download', 'AboutController@download')->name('download');

    //Outreaches Route
    Route::get('outreach', 'OutreachController@outreach')->name('outreaches');

    Route::get('rhemaspeaks', 'SingleController@rhemaspeaks')->name('rhemaspeaks');

    //RhemaSpeaks Route
    Route::get('rhema-speakss', 'SingleController@single')->name('single');

    //Buy Rhema Route
    Route::get('buy', 'BuyController@buy')->name('buy');
    Route::post('sponsor', 'BuyController@buy')->name('buy');

    //Contact Route
    Route::get('contact', 'ContactController@contact')->name('contact');
    Route::post('contact', 'ContactController@addContact')->name('addContact');


//////////////////////////signing in and registering
    Route::get('/admin/register/signup', 'RegisterController@viewRegister')->name('viewRegister');
    Route::post('/admin/register', 'RegisterController@register')->name('register');

    Route::get('/admin/signin', 'RegisterController@viewLogin')->name('viewLogin');
    Route::post('/admin/login', 'RegisterController@login')->name('login');
    Route::get('/logout', 'RegisterController@logout')->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/viewDashboard', 'DashboardController@home')->name('viewDashboard');
    ////banner
    Route::get('/view/UploadBanner', 'AdminController@viewUploadBanner')->name('viewUploadBanner');
    Route::post('/uploadBanner', 'AdminController@uploadBanner')->name('uploadBanner');
    Route::get('/view/banner', 'AdminController@viewBanner')->name('viewBanner');
    Route::get('/editBanner/{id}', 'AdminController@viewEditBanner')->name('viewEditBanner');
    Route::post('/edit/banner/{id}', 'AdminController@editBanner')->name('editBanner');
    Route::get('/delete/banner/{id}', 'AdminController@deleteBanner')->name('deleteBanner');

    //////////author
    Route::get('/view/UploadAuthor', 'AdminController@viewUploadAuthor')->name('viewUploadAuthor');
    Route::post('/uploadAuthor', 'AdminController@uploadAuthor')->name('uploadAuthor');
    Route::get('/view/author', 'AdminController@viewAuthor')->name('viewAuthor');
    Route::get('/editAuthor/{id}', 'AdminController@viewEditAuthor')->name('viewEditAuthor');
    Route::post('/edit/author/{id}', 'AdminController@editAuthor')->name('editAuthor');
    Route::get('/delete/author/{id}', 'AdminController@deleteAuthor')->name('deleteAuthor');
    /////////About Rhema
    Route::get('/view/uploadRhema', 'AdminController@viewUploadRhema')->name('viewUploadRhema');
    Route::post('/uploadRhema', 'AdminController@uploadRhema')->name('uploadRhema');
    Route::get('/view/rhema', 'AdminController@viewRhema')->name('viewRhema');
    Route::get('/editRhema/{id}', 'AdminController@viewEditRhema')->name('viewEditRhema');
    Route::post('/edit/rhema/{id}', 'AdminController@editRhema')->name('editRhema');
    Route::get('/delete/rhema/{id}', 'AdminController@deleteRhema')->name('deleteRhema');

    ////////////////////reasons
    Route::get('/view/uploadReason', 'AdminController@viewUploadReason')->name('viewUploadReason');
    Route::post('/uploadReason', 'AdminController@uploadReason')->name('uploadReason');
    Route::get('/view/reason', 'AdminController@viewReason')->name('viewReason');
    Route::get('/editReason/{id}', 'AdminController@viewEditReason')->name('viewEditReason');
    Route::post('/edit/reason/{id}', 'AdminController@editReason')->name('editReason');
    Route::get('/delete/Reason/{id}', 'AdminController@deleteReason')->name('deleteReason');
    ////////////////////////testimonial
    Route::get('/view/uploadTestimonial', 'AdminController@viewUploadTestimonial')->name('viewUploadTestimonial');
    Route::post('/uploadTestimonial', 'AdminController@uploadTestimonial')->name('uploadTestimonial');
    Route::get('/view/testimonial', 'AdminController@viewTest')->name('viewTest');
    Route::get('/editTest/{id}', 'AdminController@viewEditTest')->name('viewEditTest');
    Route::post('/edit/test/{id}', 'AdminController@editTest')->name('editTest');
    Route::get('/delete/testimonial/{id}', 'AdminController@deleteTest')->name('deleteTest');

    ///////////////////////rhema speak
    Route::get('/view/uploadSpeak', 'AdminController@viewUploadSpeak')->name('viewUploadSpeak');
    Route::post('/uploadSpeak', 'AdminController@uploadSpeak')->name('uploadSpeak');
    Route::get('/view/speak', 'AdminController@viewSpeak')->name('viewSpeak');
    Route::get('/editSpeak/{id}', 'AdminController@viewEditSpeak')->name('viewEditSpeak');
    Route::post('/edit/speak/{id}', 'AdminController@editSpeak')->name('editSpeak');
    Route::get('/delete/speak/{id}', 'AdminController@deleteSpeak')->name('deleteSpeak');
    Route::get('/view/payments', 'AdminController@viewPayment')->name('viewPayment');

});
