<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/







Route::get('/', function () {
    return view('welcome');
});

//middleware auth directly on routes
//Route::get('about', ['middleware'=> 'auth', 'uses' => 'PagesController@about']);
//if not using the controller
//Route::get('about', ['middleware'=> 'auth', function(){
//    return 'this page only show if user is signed in';
//}]);

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');


//search
//Route::get("/test/search", function(){
  //  return view('test.search');
//});
//Route::post('executeSearch', array('uses' => 'SearchController@executeSearch'));

//Route::get('articles', 'ArticlesController@index'); -- commented, manual

//applyging 'manager' middleware to a route
Route::get('foo', ['middleware' => 'manager'], function(){
    return 'this page may only be viewed by manager';
});

Route::group(['middleware' => ['web']], function () {
    Route::get('articles/create', 'ArticlesController@create');
    Route::post('articles', 'ArticlesController@store');
    Route::resource('articles','ArticlesController');


    Route::get('jaagirs/create', 'JaagirsController@create');
    Route::post('jaagirs', 'JaagirsController@store');
    Route::resource('jaagirs','JaagirsController');

    Route::get('companies/create', 'CompaniesController@create');
    Route::post('companies', 'CompaniesController@store');
    Route::resource('companies','CompaniesController');

    Route::get('tags/{tags}', 'TagsController@show');

});

//autocomplete
//Route::get('/', array("as" => 'customer', 'uses' => 'CustomerController@index'));
//Route::get('/autocomplete', array('as'=> 'autocomplete', 'uses'=> 'CustomerController@autocomplete'));

//mail
//Route::get('/', ['uses' => "HomeController@index"]);
//Route::get('/email', function(){
//    Mail::send('emails.test', ['name' => 'Malvika'], function($message){
//        $message->to('abhishek.gupta@gmail.com', "SomeGuy")->from('abhishekguptablog@gmail.com')->subject('Welcome');
//    });
//});


//
//Route::controllers([
//    'auth' => 'Auth\AuthController',
//    'password' => 'Auth\PasswordController',
//]);

//needs to be at bottom than other because of wildcard route
//Route::get('articles/{id}', 'ArticlesController@show'); -- commented, manual

//Edit route, create manually
//Route::get('articles/{id}/edit', 'ArticlesController@edit'); -- commented, manual

    /*
    |--------------------------------------------------------------------------
    | Application Routes
    |--------------------------------------------------------------------------
    |
    | This route group applies the "web" middleware group to every route
    | it contains. The "web" middleware group is defined in your HTTP
    | kernel and includes session state, CSRF protection, and more.
    |
    */


Route::group(['middleware' => 'web'], function () {
    Route::auth();

    Route::get('/home', 'HomeController@index');
});
