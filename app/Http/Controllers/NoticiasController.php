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
        $itens_noticia = Noticias::find(1);
        return view('painel/noticias/index', compact('itens_noticia'));
    }

    public function create()
    {

        return view('painel.noticias.create');
    }


    public function create2()
    {
        $create = new Noticias();

        $create->SobTitulo = Input::get('titulo');
        $create->SobTexto = Input::get('texto');
        $create->save();

        return redirect('painel/noticias')->with('success', 'Registro adicionado com sucesso!');
    }

    public function update()
    {
        $update = Sobre::find(Input::get('codigo'));

        $update->SobTexto = Input::get('texto');
        $update->SobPresidente = Input::get('presidente');

        $update->save();

        return redirect('painel/noticias')->with('success', 'Registro alterado com sucesso!');
    }

    public function destroy()
    {
        Noticias::find(Input::get('id'))->delete();

        return redirect('painel/noticias')->with('success', 'Registro excluido com sucesso!');
    }

}
