<?php namespace App;


use Illuminate\Database\Eloquent\Model;

class Sobre extends Model{


	protected $table = 'tsobre';
	protected $primaryKey = 'SobCodigo';

	protected $fillable = ['SobTexto', 'SobPresidente'];




}
