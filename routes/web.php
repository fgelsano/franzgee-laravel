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
    return view('front-index');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('dashboard');

// Route::get('/dashboard/profile', 'Admin\AdminProfileController@index')->name('admin-profile');
// Route::get('/dashboard/profile/edit', 'Admin\AdminProfileController@edit')->name('admin-profile-edit');
// Route::get('/dashboard/profile/save', 'Admin\AdminProfileController@save')->name('admin-profile-save');

Route::get('/dashboard/resume', 'Admin\AdminProfileController@resume')->name('admin-resume');
Route::get('/dashboard/social-media', 'Admin\AdminProfileController@socialmedia')->name('admin-social-media');

Route::get('/dashboard/skills', 'Admin\AdminSkillsController@index')->name('admin-skills');
Route::get('/dashboard/skills/add', 'Admin\AdminSkillsController@add')->name('admin-skills-add');

Route::get('/dashboard/portfolio', 'Admin\AdminPortfolioController@index')->name('admin-portfolio');
Route::get('/dashboard/portfolio/add', 'Admin\AdminPortfolioController@add')->name('admin-portfolio-add');

Route::get('/dashboard/blogs', 'Admin\AdminBlogsController@index')->name('admin-blogs');
Route::get('/dashboard/blogs/add', 'Admin\AdminBlogsController@add')->name('admin-blogs-add');

Route::get('/dashboard/blogs/categories', 'Admin\AdminBlogsController@categoriesIndex')->name('admin-categories');
Route::get('/dashboard/blogs/category/add', 'Admin\AdminBlogsController@categoriesAdd')->name('admin-categories-add');

Route::get('/dashboard/messages/inbox', 'Admin\AdminMessagesController@inbox')->name('admin-inbox');
Route::get('/dashboard/messages/drafts', 'Admin\AdminMessagesController@drafts')->name('admin-drafts');
Route::get('/dashboard/messages/sent', 'Admin\AdminMessagesController@sent')->name('admin-sent');

Route::get('/dashboard/settings', 'Admin\AdminSettingsController@index')->name('admin-settings');

Route::get('/dashboard/activity-logs', 'Admin\AdminActivityLogsController@index')->name('admin-activity-logs');

Route::post('ckeditor/image_upload', 'Admin\CKEditorController@upload')->name('upload');