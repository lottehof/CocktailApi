<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login','Api\AuthController@login');
Route::post('register','Api\AuthController@register');
Route::get('logout','Api\AuthController@logout');
Route::post('save_user_info','Api\AuthController@saveUserInfo')->middleware('jwtAuth');

Route::post('/create', 'CocktailController@storeCocktail');
Route::get('/cocktail', 'CocktailController@index');
Route::get('/cocktails', 'CocktailController@show');


Route::get('/cocktail/{cocktailId}', 'CocktailController@CocktailById');


Route::get('/ingredient/by-cocktail-id/{cocktailId}', 'IngredientenController@getIngredientByCocktail');

Route::get('/benodigheden/by-cocktail-id/{cocktailId}', 'BenodighedenController@getBenodighedenByCocktail');

Route::get('/instructies/by-cocktail-id/{cocktailId}', 'InstructiesController@getInstructiesByCocktail');

Route::get('/cocktail/by-cocktail-id/{cocktailId}', 'CocktailController@getCocktailsById');

Route::get('/cocktail/strength/{strength}', 'CocktailController@getStrength');
