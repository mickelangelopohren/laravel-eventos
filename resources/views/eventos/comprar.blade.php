@extends('eventos.base')

@section('titulo')
Comprar
@endsection


@section('conteudo')
<div class="alert alert-secondary text-center">
	<h3>Comprar</h3>
</div>
<div class="row mt-4">
	<div class="col my-2">
		{{ str_limit($evento->nome, 35) }}
	</div>
	<div class="col my-2">
		<input id="quantidade-ingressso" type="number" onkeyup="caculaTotal()" onmouseup="caculaTotal()" value="1" min="1" max="{{$evento->quantidade_ingresso}}">
	</div>
	<div class="col my-2">
		R$: <div id="valor-ingresso">{{$evento->valor}}</div>
		<input type="hidden" id="valor-default" value="{{$evento->valor}}">
	</div>
</div>

<div>
	<button type="button" class="btn btn-outline-success btn-lg" data-toggle="modal" data-target="#modal">Finalizar pedido</button>
</div>
<div class="modal fade" id="modal" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">				
				<p class="modal-title">Atenção!</p>
			</div>
			<div class="modal-body">
				<p>Seu pedido será processado.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>	
@endsection

@section('scripts')

const valorDefault = document.getElementById("valor-default").value;
caculaTotal();
function caculaTotal(){
var valorTotal = document.getElementById("quantidade-ingressso").value * valorDefault;
document.getElementById("valor-ingresso").innerHTML = valorTotal.toFixed(2);
}

@endsection