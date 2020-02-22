<?php

use Illuminate\Http\Request;

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


Route::get('/', function () {
    return [
        'app' => 'Event Management System',
        'version' => '1.0.0',
    ];
});

Route::group(['namespace' => 'Events'], function () {
    //Show all events
    Route::get('/event', 'EventController@index');
    
    //Show single event details
    Route::get('/event/{id}', 'EventController@show');
    
    //Create Event
    Route::post('/event', 'EventController@store');
    
    //Find users of the event
    Route::post('/event/users', 'EventController@eventusers');
    
    //Update Event Details
    Route::patch('/event/{id}','EventController@update');
    
    //Delete an event
    Route::delete('/event/{id}','EventController@delete');
    
    //Register user for an event
    Route::post('/event/registeruser','EventController@registeruser');
});

Route::group(['namespace' => 'Auth'], function () {

    Route::post('auth/login', ['as' => 'login', 'uses' => 'AuthController@login']);

    Route::post('auth/register', ['as' => 'register', 'uses' => 'RegisterController@register']);
    
    // Send reset password mail
    Route::post('auth/recovery', 'ForgotPasswordController@sendPasswordResetLink');
    
    // handle reset password form process
    Route::post('auth/reset', 'ResetPasswordController@callResetPassword');

    Route::post('logout', ['as' => 'logout', 'uses' => 'LogoutController@logout']);
});

Route::group(['middleware' => ['jwt', 'jwt.auth']], function () {

    Route::group(['namespace' => 'Profile'], function () {

        Route::get('profile', ['as' => 'profile', 'uses' => 'ProfileController@me']);

        Route::put('profile', ['as' => 'profile', 'uses' => 'ProfileController@update']);

        Route::put('profile/password', ['as' => 'profile', 'uses' => 'ProfileController@updatePassword']);

    });

});


    
