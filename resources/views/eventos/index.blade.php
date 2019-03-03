@extends('eventos.base')

@section('titulo')
Eventos
@endsection


@section('conteudo')
<div class="alert alert-secondary text-center">
	<h3>Eventos</h3>
</div>
<div class="row">
	@foreach ($eventos as $evento)
	<div class="col-sm-4 py-2">
		<div class="card bg-light h-100 d-inline-block">
			<img class="card-img-top p-1" src="{{ $evento->img_link }}">
			<div class="card-body">
				<div class="row mx-1 my-2">						
					<h5 class="card-title"><b>{{ str_limit($evento->nome, 27) }}</b></h5>
				</div>
				<div class="row mx-1 my-2">
					<p class="card-text">{{ $evento->local }}</p>
				</div>
				<div class="row mx-1 my-2">
					<p class="card-text">Inicio: {{\Carbon\Carbon::parse($evento->data_realizacao)->format("H:i")}}</p>
				</div>
				<div class="row mx-1 my-2">
					<p class="card-text">Data: {{\Carbon\Carbon::parse($evento->data_realizacao)->format("d/m/Y")}}</p>
				</div>
				<div class="row mx-1 pt-5">						
					<a href="{{ route('detalhes', ['id' => $evento->id]) }}"  class="btn btn-outline-success">Detalhes</a>
				</div>
			</table>
		</div>
	</div>
</div>
@endforeach
</div>

@endsection