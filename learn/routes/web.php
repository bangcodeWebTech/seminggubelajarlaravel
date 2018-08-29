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
	return view('welcome');
});

Route::get('/about', 'MyController@showAbout');


Route::get('/testmodel', function() {
	/*Mencari semua model*/
	// $query =  App\Post::all();

	/*Mencari model berdasarkan id*/
	// $query = App\Post::find(1);

	/*Mencari model berdasarkan title*/
	// $query= App\Post::where('title','like','%cepat nikah%')->get();
	// return $query;

	/*mengubah record*/
	// $post = App\Post::find(1);
	// $post->title="Ciri keluarga sakinah";
	// $post->save();
	// return $post; 

	/*Menghapus record*/
	// $post = App\Post::find(1);
	// $post->delete();

	/*Menambah Record*/
	$post= new App\Post;
	$post->title="7 Amalan pembuka jodoh";
	$post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
	$post->save();
	return $post;
	
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
