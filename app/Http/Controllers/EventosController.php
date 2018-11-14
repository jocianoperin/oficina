<?php namespace App\Http\Controllers;

use App\Eventos;
use App\Sobre;
use Input;

class EventosController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $itens = Eventos::paginate(15);

        return view('painel.eventos.index', compact('itens'));
    }


    public function update()
    {
        $update = Eventos::find(Input::get('codigo'));

        $update->SobTexto = Input::get('texto');
        $update->SobPresidente = Input::get('presidente');

        $update->save();

        return redirect('painel/eventos')->with('success', 'Registro alterado com sucesso!');
    }
    public function create()
    {
        return view('painel.eventos.create');
    }

    public function create2()
    {
        /*$create = Eventos::find(Input::get('SubCodigo'));*/

        $create = new Eventos();
        $create->SobTexto = Input::get('texto');
        $create->SobEvento = Input::get('evento');
        $create->SobArquivo = Input::get('arquivo');


        $create->save();

        return redirect('painel/eventos')->with('success', 'Registro alterado com sucesso!');
    }

    public function destroy()
    {
        Eventos::find(Input::get('id'))->delete();

        return redirect('painel/eventos')->with('success', 'Registro excluido com sucesso!');
    }

}
