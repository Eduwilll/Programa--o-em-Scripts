<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/produtos',function(){
//     return '<h2>Produtos</h2>'; 'Minha página html';
// });

// Route::get('/produtos/{id}', function($id){
//     $produtos = Produtos::find($id);
//     return view::make('produos_consulta', compact('produtos'));
// });

Route::resource('cliente', ClienteController::class);
Route::get('/', [ClienteController::class, 'index']);
