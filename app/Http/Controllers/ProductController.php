<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = ['p1', 'p2', 'p3'];
        return $products;
        //return 'listagem de produtos';
    }
    public function show($id){
        return "Exibindo produto de ID: {$id}";
    }
    public function create(){
        return 'Formulário';
    }
    public function edit($id){
        return "Editar Produto {$id}";
    }
    public function store(Request $request){
        dd($request);
    }
    public function update(Request $request){
        dd($request);
    }
    public function destroy(Request $request){
        dd($request);
    }
    public function teste(){
        return 'teste';
    }


}
