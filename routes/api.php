<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/', function (Request $request) {
    return $request->user();

    

});




Route::group(['middleware' => ['auth:api']], function () {

    Route::get("logout", "App\Http\Controllers\AuthController@logout");
    Route::get("get-user", "App\Http\Controllers\AuthController@getUser");
    Route::get('get-all-roles', "App\Http\Controllers\AuthController@getAllRoles");     
    Route::post("check-login", "App\Http\Controllers\AuthController@checkLogin");
    Route::resource('users', "App\Http\Controllers\UsersController");
    Route::resource("isapres", "App\Http\Controllers\IsapresController");
    Route::resource("regions", "App\Http\Controllers\RegionsController");
    Route::resource("providers", "App\Http\Controllers\ProvidersController");
    Route::get("get-all-regions", "App\Http\Controllers\RegionsController@getAllRegions");
    
    

});

Route::group(['middleware' => ['cors']], function () {

    Route::get("get-plans", "App\Http\Controllers\SeekerController@getPlans");
    Route::get("get-search-data", "App\Http\Controllers\SeekerController@getSearchData");
    Route::post("make-contact", "App\Http\Controllers\ContactController@makeContact");
    Route::get("send-contact-notification", "App\Http\Controllers\ContactController@sendContactNotificationToWhatsapp");

    Route::post("register", "App\Http\Controllers\AuthController@register");
    Route::post("login", "App\Http\Controllers\AuthController@login");
    Route::post('reset-password-request', "App\Http\Controllers\AuthController@resetPasswordRequest")->name('password.reset');
    Route::post('reset-password', "App\Http\Controllers\AuthController@resetPassword");
    Route::get('test', "App\Http\Controllers\TestController@index");

});

Route::get('get-plan-pdf/{code}', "App\Http\Controllers\PlansController@getPlanPDF");
Route::get('get-uf-value', "App\Http\Controllers\GeneralController@getUFValue");
Route::get('get-meta-data', "App\Http\Controllers\GeneralController@getMetadata");
Route::get("get-isapres-for-contact", "App\Http\Controllers\IsapresController@getIsapresForContact");