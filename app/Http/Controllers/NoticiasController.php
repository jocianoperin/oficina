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
        $item_sobre = Noticias::find(1);
        return view('painel.noticias.index', compact('item_sobre'));
    }


    public function update()
    {
        $update = Noticias::find(Input::get('codigo'));

        $update->SobTexto = Input::get('texto');
        $update->SobPresidente = Input::get('presidente');

        $update->save();

        return redirect('painel/noticias')->with('success', 'Registro alterado com sucesso!');
    }

    public function create()
    {
        $create = Noticias::find(Input::get('codigo'));

        $create->SobTexto = Input::get('texto');
        $create->SobPresidente = Input::get('presidente');

        $create->save();

        return redirect('painel/noticias')->with('success', 'Registro alterado com sucesso!');
    }

    public function destroy()
    {
        Noticias::find(Input::get('id'))->delete();

        return redirect('painel/noticias')->with('success', 'Registro excluido com sucesso!');
    }

}
