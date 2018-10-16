<?php namespace App\Http\Controllers;

use App\Sobre;
use Input;

class SobreController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $item_sobre = Sobre::find(1);
        return view('painel.sobre.index', compact('item_sobre'));
    }


    public function update()
    {
        $update = Sobre::find(Input::get('codigo'));

        $update->SobTexto = Input::get('texto');
        $update->SobPresidente = Input::get('presidente');

        $update->save();

        return redirect('painel/sobre')->with('success', 'Registro alterado com sucesso!');
    }

}
