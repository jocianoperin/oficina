<?php namespace App;


use Illuminate\Database\Eloquent\Model;

class Eventos extends Model{


	protected $table = 'teventos';
	protected $primaryKey = 'SobCodigo';

	protected $fillable = ['SobTexto','SobEvento','SobArquivo'];

}
