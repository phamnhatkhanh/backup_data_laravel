<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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


   
    return view('dashboard');
});
// Route::get('/', function () {
//     return redirect('/test')->with([
//         'status'=>'data_pfdass_to_page',
//         'khanh'=>'phamnhatkhanh'
//     ]);
// });
Route::get('/test', [Controller::class,'index'])->name('page.test');
