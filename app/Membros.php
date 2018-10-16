<?php namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Membros extends Model{

    use SoftDeletes;

	protected $table = 'tmembros';
	protected $primaryKey = 'MemCodigo';

	protected $fillable = ['MemNome', 'MemRepresentanteDiscente'];


}
