<?php namespace App\Http\Controllers;

use App\Sobre;
use Input;

class EventosController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $item_sobre = Sobre::find(1);
        return view('painel.eventos.index', compact('item_sobre'));
    }


    public function update()
    {
        $update = Sobre::find(Input::get('codigo'));

        $update->SobTexto = Input::get('texto');
        $update->SobPresidente = Input::get('presidente');

        $update->save();

        return redirect('painel/eventos')->with('success', 'Registro alterado com sucesso!');
    }

    public function create()
    {
        $create = Eventos::find(Input::get('codigo'));

        $create->SobTexto = Input::get('texto');

        $create->save();

        return redirect('painel/eventos')->with('success', 'Registro alterado com sucesso!');
    }

    public function destroy()
    {
        Eventos::find(Input::get('id'))->delete();

        return redirect('painel/eventos')->with('success', 'Registro excluido com sucesso!');
    }

}
