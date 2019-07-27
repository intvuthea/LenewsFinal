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
    return view('auth.login');
});
Route::get('/{name}', function ($name) {
    return view('body.'.$name);

	// if($name=='home'){
	// 	return view('body.home',compact('$name'));
	// }
	// else if($name=='about'){
	// 	return view('body.about',compact('$name'));
	// }
	// else if($name=='team'){
	// 	return view('body.team',compact('$name'));
	// }
    
 //    else if($name=='news'){
 //    	return view('body.news',compact('name'));
 //    }
 //    else if($name=='admin'){
 //    	return view('body.admin',compact('name'));
 //    }
 //        else if($name=='wel'){
 //    	return view('welcome',compact('name'));
 //    }
 //    return $name;
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
