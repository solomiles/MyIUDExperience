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

// Route::get('/', function () {
//     return view('index');
// });

Auth::routes(['verify' => true]); //['verify' => true]


Route::get('/', 'HomeController@index')->name('index');
Route::resource('home', 'HomeController');
Route::resource('survey', 'ResponseController');

Route::resource('forum', 'ForumController'); //forum route

Route::resource('manage-users', 'ManageUsersController'); //admin manage users

Route::resource('forum-discussion', 'ForumCommentsController'); //each forum post and comments

Route::resource('admin', 'AdminController'); // admin dashboard


Route::resource('manage-blog', 'BlogController'); // admin blog control route
Route::resource('add-survey-questions', 'SurveyController'); // admin blog control route


// Route::get('manage-symptoms', 'AdminController@manageSymptoms');

Route::get('contact', function() {
    return view('contact');
}); //contact page

Route::get('about', function() {
    return view('about');
}); //about page

Route::get('blog', 'HomeController@display'); // list of all post to select from

Route::resource('blog-post', 'HomeController'); // full blog post

Route::resource('profile', 'ProfileController'); //user profile

Route::resource('manage-symptoms', 'SymptomsController'); // admin add symptoms name

Route::resource('track-symptoms', 'SymptomsTrackerController'); // track Symptoms

Route::resource('period-tracker', 'EventController');
Route::post('add-new-symptoms/store', 'SymptomsController@store');
Route::get('track-symptoms', 'SymptomsTrackerController@index');

// 
Route::get('tracked-symptoms-result','SymptomsController@result');

Route::post('daily-symptoms-chart', 'SymptomsTrackerController@dailyGraph');