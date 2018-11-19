<?php namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Noticias extends Model{

    use SoftDeletes;

	protected $table = 'tnoticias';
	protected $primaryKey = 'NotCodigo';
	protected $fillable = ['NotTexto'];

}
