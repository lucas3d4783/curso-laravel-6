<?php

use Illuminate\Support\Facades\Route;

Route::any('any', function (){
    return 'Any -> aceita qualquer método HTTP';
});

Route::match(['get', 'post'], 'match', function (){
    return 'Match -> você especifica em um array os tipos de métodos HTTP aceitos para essa rota';
});

Route::get('contato', function () {
    return view('contact');
});


Route::get('/', function () {
    return view('welcome');
});
