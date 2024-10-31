<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MoviesController;

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

// Route::get('/', function () {
//     return view('pages.home');
// });

//todo -------Read delle CRUD

// as routes estao sendo conectadas com o controler e de là ele esta se comunicando com a view!
Route::get("/", [MoviesController::class, "index"])->name("movies.index");
Route::get('/create', [MoviesController::class, "create"])-> name("movies.create"); //sempre antes do id
Route::get('/{id}',[MoviesController::class, "show"])->name("movies.show");
Route::post("/", [MoviesController::class, "store"])->name("movie.store");
Route::get("/{id}/edit", [MoviesController::class, "edit"])->name("movies.edit");
Route::put("/{id}", [MoviesController::class, "update"])->name("movies.update");