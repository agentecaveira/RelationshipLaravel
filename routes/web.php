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


/**
 * One To One
 */
Route::get('one-to-one', [\App\Http\Controllers\OneToOneController::class, 'oneToOne']);
Route::get('one-to-one-inverse', [\App\Http\Controllers\OneToOneController::class, 'oneToOneInverse']);
Route::get('one-to-one-insert', [\App\Http\Controllers\OneToOneController::class, 'oneToOneInsert']);

/**
 * One To Many
 */
Route::get('one-to-many', [\App\Http\Controllers\OneToManyController::class, 'oneToMany']);
Route::get('many-to-one', [\App\Http\Controllers\OneToManyController::class, 'manyToOne']);
Route::get('one-to-many-two', [\App\Http\Controllers\OneToManyController::class, 'oneToManyTwo']);
Route::get('one-to-many-insert', [\App\Http\Controllers\OneToManyController::class, 'oneToManyInsert']);

/**
 * Has Many Through
 */

Route::get('has-many-through', [\App\Http\Controllers\OneToManyController::class, 'hasManyThrough']);
Route::get('has-many-through-inverse', [\App\Http\Controllers\OneToManyController::class, 'hasManyThroughInverse']);

/**
 * Many to many
 */
Route::get('many-to-many', [\App\Http\Controllers\manyToManyController::class, 'manyToMany']);
Route::get('many-to-many-inverse', [\App\Http\Controllers\manyToManyController::class, 'manyToManyInverse']);
Route::get('many-to-many-insert', [\App\Http\Controllers\manyToManyController::class, 'manyToManyInsert']);

/**
 * Relation Polymorphic
 */
Route::get('polymorphic', [\App\Http\Controllers\PolymorphicController::class, 'polymorphic']);
Route::get('polymorphic-insert', [\App\Http\Controllers\PolymorphicController::class, 'polymorphicInsert']);

Route::get('/', function () {
    return view('welcome');
});
