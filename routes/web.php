<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// pizza routes
$pizza_controller = "App\Http\Controllers";

Route::get('/pizzas', $pizza_controller.'\PizzaController@index');
Route::post('/pizzas', $pizza_controller.'\PizzaController@store');
Route::get('/pizzas/{id}', $pizza_controller.'\PizzaController@show');
Route::delete('/pizzas/{id}', $pizza_controller.'\pizzaController@destroy');


