<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/cocktail', 'CocktailController@index');



Route::get('ingredient/by-cocktail-id/{cocktailId}', 'IngredientenController@getIngredientByCocktail');

Route::get('benodigheden/by-cocktail-id/{cocktailId}', 'BenodighedenController@getBenodighedenByCocktail');

Route::get('instructies/by-cocktail-id/{cocktailId}', 'InstructiesController@getInstructiesByCocktail');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
