<?php

use Illuminate\Http\Request;
use App\Blog;
use App\Category;
use App\Message;
use App\Portfolio;
use App\Profile;
use App\Resume;
use App\Setting;
use App\Skill;
use App\SocialMedia;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

Route::group(['middleware' => 'auth.api'], function(){
    Route::get('profiles','Admin\AdminProfileController@index');
    Route::get('profiles/{id}', 'Admin\AdminProfileController@show');
    Route::post('profiles', 'Admin\AdminProfileController@store');
    Route::put('profiles/{id}', 'Admin\AdminProfileController@update');
    Route::delete('profiles/{id}', 'Admin\AdminProfileController@delete');
});

Route::apiResource('/resumes', 'Admin\AdminResumeController');