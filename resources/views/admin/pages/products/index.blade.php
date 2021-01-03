@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')
<h1>Exibindo os produtos</h1>

{{$teste}}

@if($teste === 'teste') <!-- IF normal -->
    <br>
    Variável é igual a teste
@elseif($teste === 123)
    <br>
    Variável é igual a 123
@else
    <br>
    Não atendeu nenhuma condição
@endif

@unless($teste === '<h1>teste</h1>') <!-- pega a negação -->
    <br>diferente
@else
    <br>igual
@endunless

@isset($teste2) <!-- verifica se foi passado o parâmetro -->
    {{$teste2}}
@endisset

@empty($teste3) <!-- verifica se é vazio-->
    <br> vazio...
@endempty

@auth <!-- verifica se está autenticado-->
    <br>
    Autenticado
@else
    <br>
    Não autenticado
@endauth

@guest <!-- verifica se não está autenticado -->
<br>
    Não autenticado
@endguest

@switch($teste)
    @case(1)
        
        @break
    @case(2)
        
        @break
    @case('<h1>teste</h1>')
        <br>
        Switch encontrou o valor correspondente
        @break
    @default
        <br>
        Switch Default
        
@endswitch
@endsection