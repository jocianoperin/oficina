<?php namespace App;


use Illuminate\Database\Eloquent\Model;

class Noticias extends Model{


	protected $table = 'tnoticias';
	protected $primaryKey = 'SobCodigo';

	protected $fillable = ['SobTexto'];




}
