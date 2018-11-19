<?php namespace App\Http\Controllers;

use App\Eventos;
use App\Noticias;
use App\Sobre;
use Illuminate\Support\Facades\Input;

class SiteController extends Controller
{

    public function index(){
        return view('site.home');
    }

    public function noticias(){
        $noticias = Noticias::where('NotLiberado', '=', 1)->paginate(9);
        return view('site.noticias.index', compact('noticias'));
    }

    public function noticia(){
        $noticia = Noticias::find(Input::get('id'));
        return view('site.noticias.noticia', compact('noticia'));
    }

    public function eventos()
    {
        $eventos = Eventos::where('EveLiberado', '=', 1)->paginate(4);
        return view('site.eventos.index', compact('eventos'));
    }

    public function sobre()
    {
        $sobre = Sobre::find(1);
        return view('site.sobre.index', compact('sobre'));
    }
    public function contato()
    {
        return view('site.contato.index');
    }
}
