<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/test', function () {
    return "My first route";
});

Route::get('/hola/{nombre?}', function ($name = "Sara") {
    return "Hi, $name. : <a href='".route("about us")."'>Click here</a>";
});

Route::get('/us', function () {
    return "<h1> ¿Do you want to dance? </h1>";
})->name("about us");

Route::get('home/{name?}/{last_name?}', function ($nombre = "Valki", $apellido = "Zárate") {
    $posts = ["Post1", "Post2", "Post3", "Post4"];
    //$posts2 = ["2Post1", "2Post2", "2Post3", "2Post4"];
    $posts2 = [];

    //$who = "Sara";
    //El primer parámetro debe coincidir con el nombre de la variable que declaremos en el blade
    //return view("home")->with("name", $nombre)->with("primer_apellido", $apellido);
    
    return view("home", ['name' => $nombre, 'primer_apellido' => $apellido,'posts' => $posts, 'posts2' => $posts2]);

})->name("home");

//Route::get('cualquiercosa', 'PostController@index');

Route::resource('dashboard/post', 'dashboard\PostController');
Route::post('dashboard/post/{post}/image', 'dashboard\PostController@image')->name('post.image');

Route::resource('dashboard/category', 'dashboard\CategoryController');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
