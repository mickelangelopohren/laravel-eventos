@extends('eventos.base')

@section('titulo')
Detalhes
@endsection


@section('conteudo')
<div class="row-centered">
	<div class="row my-2">
		<img class="img-fluid" src="{{ $evento->img_link }}">
	</div>
	<div class="row my-2">
		<h3><b>{{$evento->nome}}</b></h3>
	</div>	
	<div class="row my-2">
		Descrição: {{$evento->descricao}}
	</div>
	<div class="row my-2">
		Local: {{$evento->local}}
	</div>
	<div class="row my-2">
		Inicio: {{\Carbon\Carbon::parse($evento->data_realizacao)->format("H:i")}}
	</div>
	<div class="row my-2">
		Data: {{\Carbon\Carbon::parse($evento->data_realizacao)->format("d/m/Y")}}
	</div>
	<div class="row my-2">
		<a href="{{ route('comprar', ['id' => $evento->id]) }}"  class="btn btn-outline-success">Comprar</a>
	</div>
	<div class="row my-2">
		<a href="{{ route('index', ['id' => $evento->id]) }}"  class="btn btn-outline-success">Voltar</a>
	</div>
</div>
@endsection