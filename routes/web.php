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

 //Front end user page routes
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'welcomeController@index')->name('welcome');
Route::get('/about', 'AboutController@index')->name('about');
Route::resource('projects', 'ProjectsController')->except(['store', 'create', 'destroy', 'update', 'edit']);
Route::resource('blog', 'Blog_Posts_Controller')->except(['store', 'create', 'destroy', 'update', 'edit']);
Route::resource('comments', 'CommentsController')->except(['index', 'create', 'show', 'edit']);

//Send contact info routes
Route::resource('/contact', 'ContactController')->except(['create', 'show', 'edit', 'update', 'destroy']);

//Backend admin routes
Route::get('/admin', 'adminController@index')->name('admin');
Route::group(
    array('prefix' => 'admin'),
    function () {
        Route::resource('adminProjects', 'adminResources\adminProjectsController');
        Route::resource('adminBlog', 'adminResources\adminBlogController');
        Route::resource('adminUsers', 'adminResources\adminUsersController')->except(['create', 'update', 'show', 'edit', 'store']);
        Route::resource('adminContact', 'adminResources\adminContactController')->except(['create', 'edit', 'update', 'store']);
    }
);