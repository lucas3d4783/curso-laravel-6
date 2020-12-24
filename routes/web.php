<?php

use Illuminate\Support\Facades\Route;

Route::view('view', 'welcome');

/*
Route::get('view', function () {
    return view('welcome');
});
*/

Route::redirect('redirect1', 'redirect2');

/***Route::get('redirect1', function () {
    return redirect('redirect2');
});***/


Route::get('redirect2', function () {
    return 'Redirect 2';
});

Route::get('produtos/{idProduct?}', function($idProduct = ''){ //colocando o "?" ele informa que o parâmetro é opcional e definindo um calor default vazio
    return "Produto(s) {$idProduct}";
});

Route::get('categoria/{flag}/posts', function($flag){
    return "Posts da categoria: {$flag}";
});

Route::get('categorias/{flag}', function($flag){
    return "Produtos da categoria: {$flag}";
});

Route::any('any', function (){
    return 'Any -> aceita qualquer método HTTP -> não é recomendado pois pode deixar vulnerável';
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
