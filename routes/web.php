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

//Basic Auth Routes
Auth::routes();
Route::get('logout', function () {
    Auth::logout();

    return redirect('/login');
});

//OAuth Routes
Route::get('login/{driver}', ['as' => 'socialAuth', 'uses' => 'Auth\SocialAccountController@redirectToProvider']);
Route::get('login/{driver}/callback', ['as' => 'socialAuthCallback', 'uses' => 'Auth\SocialAccountController@handleProviderCallback']);


/* CoreUI templates */
Route::view('/', 'admin.dashboard');


Route::group(['middleware' => ['web']], function (){
    Route::get('/courses', 'PCoursesController@index');
    Route::get('/courses/{course}', 'PCoursesController@show');

    Route::get('/venues', 'PVenuesController@index');
    Route::get('/venues/{venue}', 'PVenuesController@show');


    Route::get('/lessons', 'PLessonsController@index');
    Route::get('/lessons/{lesson}', 'PLessonsController@show');

});




////////////////Admin Section//////////////
Route::group([ 'middleware' => [ 'web', 'auth' ] ], function () {
    Route::get('/admin/dash', 'AdminController@dashboard');

    Route::resource('admin/users', 'UsersController');
    Route::resource('admin/courses', 'CoursesController');
    Route::resource('admin/lessons', 'LessonsController');
    Route::resource('admin/venues', 'VenuesController');
});





// Section UI elements
Route::view('/templates/buttons', 'templates.buttons');
Route::view('/templates/social', 'templates.social');
Route::view('/templates/cards', 'templates.cards');
Route::view('/templates/forms', 'templates.forms');
Route::view('/templates/modals', 'templates.modals');
Route::view('/templates/switches', 'templates.switches');
Route::view('/templates/tables', 'templates.tables');
Route::view('/templates/tabs', 'templates.tabs');
Route::view('/templates/font-awesome-icons', 'templates.font-awesome-icons');
Route::view('/templates/simple-line-icons', 'templates.simple-line-icons');
Route::view('/templates/widgets', 'templates.widgets');
Route::view('/templates/charts', 'templates.charts');
// Section Pages
Route::view('/templates/error404', 'templates.error404')->name('error404');
Route::view('/templates/error500', 'templates.error500')->name('error500');
Route::view('/templates/blank', 'layout.blank')->name('blank');
