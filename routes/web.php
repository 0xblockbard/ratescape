<?php

use Illuminate\Support\Facades\Route;
use Spatie\Browsershot\Browsershot;

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

//Auth::routes();

Route::get('/'          , ['uses' => 'PagesController@home'])               ->name('home');
// Route::get('/about'     , ['uses' => 'PagesController@about'])              ->name('about');
// Route::get('/blog'      , ['uses' => 'PagesController@blog'])               ->name('blog');
// Route::get('/contact'   , ['uses' => 'PagesController@contact'])            ->name('contact');
// Route::post('/contact'  , ['uses' => 'PagesController@submitContact'])      ->name('submit_contact_message');

Route::get('/discord', function () {
    return redirect('https://discord.gg/6mM7taSW');
})->name('discord');

Route::group(['middleware' => 'guest'], function () {

    // Route::get('login'  , ['uses' => 'Auth\LoginController@showLoginForm']) ->name('login_page');
    // Route::post('login' , ['uses' => 'Auth\LoginController@login'])         ->name('login');

    Route::get('login'          , ['uses' => 'User\MagicLinkController@enter'])         ->name('login');
    Route::post('login'         , ['uses' => 'User\MagicLinkController@sendMagicLink']) ->name('process_magic_link');
    Route::get('login/expired'  , ['uses' => 'User\MagicLinkController@enterExpired'])  ->name('login_expired');

    Route::get('join/{email}'  , ['uses' => 'User\MagicLinkController@join']) ->name('create_new_user');

//    Route::get('signup',['uses' => 'Auth\RegisterController@signupPage'])->name('signup_page');
//    Route::get('signup/email',['uses' => 'Auth\RegisterController@showRegistrationForm'])->name('signup_form');
//    Route::post('signup',['uses' => 'Auth\RegisterController@register'])->name('register');
//    Route::post('beta-signup', ['uses' => 'BetaSignupController@betaSignup'])->name('beta_signup');
//    Route::get('/password/reset', ['uses' => 'PasswordController@passwordRequest'])->name('password.request');
//    Route::post('/password/reset', ['uses' => 'PasswordController@passwordEmail'])->name('password.email');
//    Route::get('/reset-password/{token}', ['uses' => 'PasswordController@passwordReset'])->name('password.reset');
//    Route::post('/reset-password', ['uses' => 'PasswordController@passwordUpdate'])->name('password.update');

});


// User has to be logged in to access these routes
Route::group(['middleware' => 'auth'], function () {

    Route::get('logout'     , ['uses' => 'Auth\LoginController@logout'])    ->name('logout');
    Route::get('settings'   , ['uses' => 'User\SettingsController@show'])   ->name('settings');

});

Route::get('/upload', 'FileUploadController@showUploadForm');
Route::post('/upload', 'FileUploadController@storeUploads');


// Admin only routes
Route::group(['middleware' => 'admin'], function () {

    //*****************************
    // Admin MISC/API Routes Begin
    //*****************************
    Route::get('admin'                          , ['uses' => 'Admin\AdminController@show'])                 ->name('admin');
    Route::get('/api/toggleSidebar'             , ['uses' => 'Admin\AdminApiController@toggleSidebar'])     ->name('admin_toggle_sidebar');
    Route::post('/admin/upload/image'           , ['uses' => 'Admin\ImageController@uploadImage'])          ->name('admin_upload_image');
    Route::post('/admin/upload/featured-image'  , ['uses' => 'Admin\ImageController@uploadFeaturedImage'])  ->name('admin_upload_featured_image');
    Route::get('/admin/test/image'              , ['uses' => 'Admin\ImageController@testImage'])            ->name('admin_test_image');
    
    //*****************************
    // Admin MISC/API Routes End
    //*****************************



    //*****************************
    // Admin User Routes Begin
    //*****************************
    Route::get('admin/users'                            , ['uses' => 'Admin\UserController@overview'])              ->name('admin_users_overview');
    Route::get('admin/users/new'                        , ['uses' => 'Admin\UserController@create'])                ->name('admin_users_new');
    Route::post('admin/users/new'                       , ['uses' => 'Admin\UserController@store'])                 ->name('admin_users_store');
    Route::get('admin/users/edit/{uuid}'                , ['uses' => 'Admin\UserController@edit'])                  ->name('admin_users_edit');
    Route::put('admin/users/edit/{uuid}'                , ['uses' => 'Admin\UserController@update'])                ->name('admin_users_update');
    Route::get('admin/users/delete/{uuid}'              , ['uses' => 'Admin\UserController@delete'])                ->name('admin_users_delete');
    //*****************************
    // Admin User Routes End
    //*****************************



    //*****************************
    // Admin Pages Routes Begin
    //*****************************
    Route::get('admin/pages'                            , ['uses' => 'Admin\PagesController@overview'])             ->name('admin_pages_overview');
    Route::get('admin/pages/new'                        , ['uses' => 'Admin\PagesController@create'])               ->name('admin_pages_new');
    Route::post('admin/pages/new'                       , ['uses' => 'Admin\PagesController@store'])                ->name('admin_pages_store');
    Route::get('admin/pages/edit/{uuid}'                , ['uses' => 'Admin\PagesController@edit'])                 ->name('admin_pages_edit');
    Route::put('admin/pages/edit/{uuid}'                , ['uses' => 'Admin\PagesController@update'])               ->name('admin_pages_update');
    Route::get('admin/pages/delete/{uuid}'              , ['uses' => 'Admin\PagesController@delete'])               ->name('admin_pages_delete');
    //*****************************
    // Admin Pages Routes End
    //*****************************



    //*****************************
    // Admin Blogposts Routes Begin
    //*****************************
    Route::get('admin/blogposts'                        , ['uses' => 'Admin\BlogController@overview'])              ->name('admin_blogposts_overview');
    Route::get('admin/blogposts/new'                    , ['uses' => 'Admin\BlogController@create'])                ->name('admin_blogposts_new');
    Route::post('admin/blogposts/new'                   , ['uses' => 'Admin\BlogController@store'])                 ->name('admin_blogposts_store');
    Route::get('admin/blogposts/edit/{uuid}'            , ['uses' => 'Admin\BlogController@edit'])                  ->name('admin_blogposts_edit');
    Route::put('admin/blogposts/edit/{uuid}'            , ['uses' => 'Admin\BlogController@update'])                ->name('admin_blogposts_update');
    Route::get('admin/blogposts/preview/{uuid}'         , ['uses' => 'Admin\BlogController@preview'])               ->name('show_blogpost_preview');
    Route::get('admin/blogposts/delete/{uuid}'          , ['uses' => 'Admin\BlogController@delete'])                ->name('admin_blogposts_delete');
    //*****************************
    // Admin Blogposts Routes End
    //*****************************



    //*****************************
    // Admin Categories Routes Begin
    //*****************************
    Route::get('admin/categories'                       , ['uses' => 'Admin\CategoryController@overview'])          ->name('admin_categories_overview');
    Route::get('admin/categories/new'                   , ['uses' => 'Admin\CategoryController@create'])            ->name('admin_categories_new');
    Route::post('admin/categories/new'                  , ['uses' => 'Admin\CategoryController@store'])             ->name('admin_categories_store');
    Route::get('admin/categories/{type}/edit/{slug}'    , ['uses' => 'Admin\CategoryController@edit'])              ->name('admin_categories_edit');
    Route::put('admin/categories/{type}/edit/{slug}'    , ['uses' => 'Admin\CategoryController@update'])            ->name('admin_categories_update');
    Route::get('admin/categories/delete/{type}/{slug}'  , ['uses' => 'Admin\CategoryController@delete'])            ->name('admin_categories_delete');
    //*****************************
    // Admin Categories Routes End
    //*****************************

});



//*****************************
// General Blogposts Routes Begin
//*****************************
Route::get('/blog/{slug}', ['uses' => 'BlogController@show'])->name('show_blogpost');
//*****************************
// General Blogposts Routes End
//*****************************



//*****************************
// General Pages Routes Begin
//*****************************
Route::get('/{slug}', ['uses' => 'PagesController@show'])->name('show_page');
//*****************************
// General Pages Routes End
//*****************************
