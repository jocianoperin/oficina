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
        $itens = Noticias::orderBy('created_at', 'DESC')->paginate(15);

        return view('painel.noticias.index', compact('itens'));
    }

    public function create()
    {

        return view('painel.noticias.create');
    }


    public function create2()
    {
        $create = new Noticias();

        $create->NotTitulo = Input::get('titulo');
        $create->NotTexto = Input::get('texto');
        $create->NotLiberado = Input::get('liberado');
        $create->save();

        return redirect('painel/noticias')->with('success', 'Registro adicionado com sucesso!');
    }

    public function update()
    {
        $item = Noticias::find(Input::get('id'));

        return view('painel.noticias.update', compact('item'));
    }


    public function update2()
    {
        $update = Noticias::find(Input::get('codigo'));

        $update->NotTexto = Input::get('texto');
        $update->NotTitulo = Input::get('titulo');
        $update->NotLiberado = Input::get('liberado');
        $update->save();

        return redirect('painel/noticias')->with('success', 'Registro alterado com sucesso!');
    }

    public function destroy()
    {
        Noticias::find(Input::get('id'))->delete();

        return redirect('painel/noticias')->with('success', 'Registro excluido com sucesso!');
    }

}
