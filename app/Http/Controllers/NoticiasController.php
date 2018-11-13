<?php namespace App\Http\Controllers;

use App\Noticias;
use Input;

class NoticiasController extends Controller
{

    public function __construct()
    {

    }

    public function index()
    {
        $itens_noticia = Sobre::find(1);
        return view('painel.noticias.create', compact('itens_noticia'));
    }

    public function create()
    {

        return view('painel.noticias.create');
    }

    public function update()
    {
        $update = Sobre::find(Input::get('codigo'));

        $update->SobTexto = Input::get('texto');
        $update->SobPresidente = Input::get('presidente');

        $update->save();

        return redirect('painel/sobre')->with('success', 'Registro alterado com sucesso!');
    }

    public function destroy()
    {
        Noticias::find(Input::get('id'))->delete();

        return redirect('painel/noticias')->with('success', 'Registro excluido com sucesso!');
    }

}
