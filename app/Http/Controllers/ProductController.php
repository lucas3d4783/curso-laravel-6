<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct (){
        //$this->middleware('auth'); //definindo um middleware para todos os métodos do controller
        /*$this->middleware('auth')->only([ //especificando os métodos onde o middleware será aplicado
            'create', 
            'storage',
            'destroy',
        ]);*/
        $this->middleware('auth')->except([ // especificando os métodos aos quais não será aplicado o middleware
            'index',
        ]);
    }

    // public function index(){
    //     $products = ['p1', 'p2', 'p3'];
    //     return $products;
    //     //return 'listagem de produtos';
    // }
    // public function index(){
    //     $context['teste'] = '<h1>teste</h1>';
    //     return view('teste', $context);
    // }

    public function index(){
        $context['teste'] = '<h1>teste</h1>';
        $context['teste2'] = '<h1>teste 2</h1>';
        $context['teste3'] = '';
        return view('admin.pages.products.index', $context);
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
