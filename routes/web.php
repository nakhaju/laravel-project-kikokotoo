<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Kikokotoo;

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

/*Route::get('/profile-print/{id}', function ($id) {
    return view('welcome');
}); */

Route::get('/', [Kikokotoo::class, 'index']); 

Route::get('form-elements', [Kikokotoo::class, 'formElements']);
Route::get('table-elements', [Kikokotoo::class, 'tableElements']);

Route::get('/form-data', [Kikokotoo::class, 'form']); 
Route::get('/view-data', [Kikokotoo::class, 'view_staff']); 
Route::post('/data-Submit', [Kikokotoo::class, 'insertData']);
Route::get('/edit-data', [Kikokotoo::class, 'editData']);
Route::get('/profile-print/{id}', [Kikokotoo::class, 'profile']);
Route::get('edit-data/{id}', [Kikokotoo::class, 'edit']);
Route::post('/data-Submit/{id}', [Kikokotoo::class, 'update']);

Route::get('/form_b', function () {
    return view('pages.date');
});