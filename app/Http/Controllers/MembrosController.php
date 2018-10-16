<?php namespace App\Http\Controllers;

use App\Membros;
use Input;
use Hash;
use Auth;

class MembrosController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $itens = Membros::paginate(15)->where('MemLiberado', '=', 1);

        return view('painel.membros.index', compact('itens'));
    }

    public function create()
    {
        return view('painel.membros.create');
    }

    public function create2()
    {
        $create = new Membros();

        $create->nome = Input::get('nome');
        $create->representantediscente = Input::get('representantediscente');
        $create->liberado = Input::get('liberado');


        $create->save();

        return redirect('painel/membros')->with('success', 'Registro adicionado com sucesso!');
    }

    public function update()
    {
        $item = Membros::find(Input::get('id'));

        return view('painel.membros.update', compact('item'));
    }

    public function update2()
    {
        $update = Membros::where('MemCodigo','=',Input::get('id'))->first();

        $update->nome = Input::get('nome');
        $update->descricao = Input::get('descricao');
        $update->representantediscente = Input::get('representantediscente');

        $update->save();

        return redirect('painel/membros')->with('success', 'Registro adicionado com sucesso!');
    }

    public function destroy()
    {
        Produtos::find(Input::get('id'))->delete();

        return redirect('painel/membros')->with('success', 'Registro excluido com sucesso!');
    }

}
