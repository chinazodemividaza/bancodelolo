<?php

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

Route::get('hi', function () {
    return view('welcome');
});

Route::get('cliente',function(){
    return view('cliente');
});

Route::get('crear',function(){
    return view('crear/crearclien');
}); 

Route::get('lista',function(){
    return view('listas/listaclient');
}); 

Route::get('listasuc',function(){
    return view('listas/listasucu');
}); 


Route::get('crearsuc',function(){
    return view('crear/crearsucu');
}); 


Route::get('sucursales',function(){
    return view('sucursales');
});

Route::get('saldos',function(){
    return view('saldos');
});

Route::get('depositos',function(){
    return view('depositos');
});

Route::get('retiros',function(){
    return view('retiros');
});