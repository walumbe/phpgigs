<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;

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

// All listings 
Route::get('/', [ListingController::class, 'index']);

// create listing
Route::get('/listings/create', [ListingController::class, 'create']);

// store listing request
Route::post('/listings', [ListingController::class, 'store']);

// Show edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Route::get('/posts/{id}', function($id){
//     return response('Posts '.$id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name;
// });