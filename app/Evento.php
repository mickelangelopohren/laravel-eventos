<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
	protected $fillable = [
		'nome', 'local', 'data_realizacao', 'descricao', 'quantidade_ingresso', 'valor', 'img_link'
	];
}
