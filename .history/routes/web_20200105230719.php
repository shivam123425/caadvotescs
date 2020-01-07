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
    return view('site.index');
});


Route::get('/posts', 'Admin\PageController@pageContent')->name('post');



Route::get('/db', function() {
    if(DB::connection()->getDatabaseName())
    {
       echo "conncted sucessfully to database ".DB::connection()->getDatabaseName();
    }
 });

Route::group(['middleware' => ['auth','admin']], function () {
    
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });

    Route::get('/users', 'Admin\DashboardController@registered');

    Route::get('/user-edit/{id}', 'Admin\DashboardController@useredit');

    Route::put('/user-profile-update/{id}', 'Admin\DashboardController@userupdate');

    Route::delete('/delete-user/{id}', 'Admin\DashboardController@deleteuser');

    Route::get('/add-page-content', 'Admin\PageController@index');
    Route::get('/page-list', 'Admin\PageController@pageList');

    Route::post('/save-page', 'Admin\PageController@savePage');


    
}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
