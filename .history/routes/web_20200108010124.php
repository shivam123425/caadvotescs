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


Route::get('/post', 'Admin\PageController@pageContent');

Route::get('/post', 'Admin\PageController@pageContent');


//Site View


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

    Route::get('/page-edit/{id}', 'Admin\PageController@pageedit');


    Route::put('/user-profile-update/{id}', 'Admin\DashboardController@userupdate');

    Route::delete('/delete-user/{id}', 'Admin\DashboardController@deleteuser');

    //Pages Section
    Route::get('/add-page-content', 'Admin\PageController@index');
    Route::get('/pages-list', 'Admin\PageController@pageList');
    Route::put('/page-update/{id}', 'Admin\PageController@pageupdate');
    Route::delete('/delete-page/{id}', 'Admin\PageController@deletepage');
    Route::post('/save-page', 'Admin\PageController@savePage');


    //Menu Section 
    Route::get('/create-menu', 'Admin\MenuController@createmenu');
    Route::post('/save-menu', 'Admin\MenuController@savemenu');
    Route::get('/menu-list', 'Admin\MenuController@menuList');    
}); 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
