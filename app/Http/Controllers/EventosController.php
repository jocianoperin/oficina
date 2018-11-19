<?php namespace App\Http\Controllers;

use App\Eventos;
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
        $item = Eventos::find(Input::get('id'));

        return view('painel.enventos.update', compact('item'));
    }


    public function update2()
    {
        $update = Eventos::find(Input::get('codigo'));

        $update->EveTitulo = Input::get('titulo');
        $update->EveDescricao = Input::get('descricao');
        $update->EveInicio = Input::get('inicio')->format('Y-m-d');
        $update->EveFim = Input::get('fim')->format('Y-m-d');
        $update->EveLiberado = Input::get('liberado');

        $update->save();

        return redirect('painel/eventos')->with('success', 'Registro alterado com sucesso!');
    }
    public function create()
    {
        return view('painel.eventos.create');
    }

    public function create2()
    {

        $create = new Eventos();
        $create->EveTitulo = Input::get('titulo');
        $create->EveDescricao = Input::get('descricao');
        $create->EveInicio = Input::get('inicio');
        $create->EveFim = Input::get('fim');
        $create->EveLiberado = Input::get('liberado');


        $create->save();

        return redirect('painel/eventos')->with('success', 'Registro adicionado com sucesso!');
    }

    public function destroy()
    {
        Eventos::find(Input::get('id'))->delete();

        return redirect('painel/eventos')->with('success', 'Registro excluido com sucesso!');
    }

}
