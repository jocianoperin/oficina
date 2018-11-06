<?php namespace App\Http\Controllers;

use App\Noticias;
use App\Sobre;

class SiteController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    public function noticias()
    {

        $itens_noticia = Noticias::where('SobLiberado', '=', 1)->paginate(15);
        return view('noticias.index', compact('itens_noticia'));

    }

    public function eventos()
    {
        return view('eventos.index');
    }

    public function sobre()
    {
        $sobre = Sobre::find(1);
        return view('sobre.index', compact('sobre'));
    }
    public function contato()
    {

        return view('contato.index');
    }
}
