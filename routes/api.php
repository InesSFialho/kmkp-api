<?php

use Illuminate\Http\Request;

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

Route::apiResource('users', 'API\UserController');
Route::apiResource('users.pantries', 'API\PantryController')->shallow();
Route::apiResource('ingredients', 'API\IngredientController');
Route::apiResource('diets', 'API\DietController');
Route::apiResource('diets.recipes', 'API\RecipeController')->shallow();
Route::apiResource('meals', 'API\MealController');
Route::apiResource('sidedishes', 'API\SidedishController');
Route::apiResource('types', 'API\SidedishTypeController');


