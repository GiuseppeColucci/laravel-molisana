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

Route::get('/', function () {
    $array=config('pasta');
    return view('home' ,['array'=>$array]);//['array'=>$array] stampa la variabile
});

Route::get('/product/{id}', function ($id) {
    $array=config('pasta');//quea è la variabile di collegamento
    return view('product',['id'=>$id,'array'=>$array]);//['array'=>$array] stampa la variabile/['id'=>$id] stampa l'id della funzione
//serve per avere una rut dinamicizata
});

