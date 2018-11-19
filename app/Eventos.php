<?php namespace App;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Eventos extends Model{

    use SoftDeletes;

	protected $table = 'teventos';
	protected $primaryKey = 'EveCodigo';


}
