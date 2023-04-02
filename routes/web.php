<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProduitsController;
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

Route::get('/', function () {
    return view('welcome');
});


// Route::resource('/clients',ClientController::class);

Route::get('/form', function () {
    return view('produitForm');
});

Route::resource('/home',ProduitsController::class);

// Route::get('/get_Produits', [ProduitsController::class, 'index'] );


// Edit Submit form
// Route::post('/update/{id}', [ProduitsController::class, 'update'] )->name('u');

// Remove item 
// Route::get('/remove/{id}', [ProduitsController::class, 'destroy'] )->name('d');

// update item 
Route::get('/update/{id}', [ProduitsController::class, 'update'] );
Route::get('/destroyAll', [ProduitsController::class, 'destroyAll'] );

// Trashed items
Route::get('/trashed', [ProduitsController::class, 'trashed'] )->name('trash');

// Restore All items
Route::get('/restoreAll', [ProduitsController::class, 'restoreAll'] )->name('restoreAll');

// Restore One item
Route::get('/restore/{id}', [ProduitsController::class, 'restoreOne'] )->name('restoreOne');
