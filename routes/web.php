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

// Single listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Route::get('/posts/{id}', function($id){
//     return response('Posts '.$id);
// })->where('id', '[0-9]+');

// Route::get('/search', function(Request $request){
//     return $request->name;
// });