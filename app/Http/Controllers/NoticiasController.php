<?php namespace App\Http\Controllers;

use App\Sobre;
use Input;

class NoticiasController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $item_sobre = Sobre::find(1);
        return view('painel.noticias.index', compact('item_sobre'));
    }


    public function update()
    {
        $update = Sobre::find(Input::get('codigo'));

        $update->SobTexto = Input::get('texto');
        $update->SobPresidente = Input::get('presidente');

        $update->save();

        return redirect('painel/noticias')->with('success', 'Registro alterado com sucesso!');
    }

}
