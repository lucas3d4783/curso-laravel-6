<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\TesteController;
use App\Http\Controllers\Admin;


Route::group([ // Assim pode ser setado diversos parâmetros de forma mais amigável do que está comentado a seguir
    'middleware' => [], //definindo uma lista de middlewares
    'prefix' => 'painel', // definindo o prefixo da rota para o grupo 
    'namespace' => 'App\Http\Controllers\Admin', // definindo o namespace que será usado para o Controller
    'name' => ['admin.'], //Definindo o prefixo do nome das rotas do grupo
], function () {
    Route::get('dashboard', function () {
        return 'Home Admin';
    })->name('dashboard');
    Route::get('produtos', function () {
        return 'Home produtos';
    })->name('produtos');
    Route::get('financeiro', function () {
        return 'Home financeiro';
    })->name('financeiro');
    Route::get('/', 'TesteController@teste')->name('home');
});

/*Route::middleware([])->group(function (){ // colocando um middleware na rota, como por exemplo o auth
    Route::prefix('painel')->group(function () { // adicionando prefixo a URL do grupo
        Route::namespace('App\Http\Controllers\Admin')->group(function () { // definindo o namespace para usar o controller
            Route::name('admin.')->group(function () { // adicionando um prefixo ao name da rota
                Route::get('dashboard', function () {
                    return 'Home Admin';
                })->name('dashboard');
                Route::get('produtos', function () {
                    return 'Home produtos';
                })->name('produtos');
                Route::get('financeiro', function () {
                    return 'Home financeiro';
                })->name('financeiro');
                Route::get('/', 'TesteController@teste')->name('home');
            });
        });
    });
});*/

Route::get('testecontroller', TesteController::class . '@teste');

Route::get('login', function () {
    return 'Tela de login';
})->name('login');

Route::get('redirect3', function (){
    return redirect()->route('url.name');
});

Route::get('/name-url', function () {
    return 'Hey hey hey';
})->name('url.name');

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
