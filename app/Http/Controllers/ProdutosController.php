<?php namespace App\Http\Controllers;

use App\Produtos;
use Input;
use Hash;
use Auth;

class ProdutosController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $itens = Produtos::paginate(15);

        return view('painel.produtos.index', compact('itens'));
    }

    public function create()
    {
        return view('painel.produtos.create');
    }

    public function create2()
    {
        $create = new Produtos();

        $create->nome = Input::get('nome');
        $create->descricao = Input::get('descricao');


        $create->save();

        return redirect('painel/produtos')->with('success', 'Registro adicionado com sucesso!');
    }

    public function update()
    {
        $item = Produtos::find(Input::get('id'));

        return view('painel.produtos.update', compact('item'));
    }

    public function update2()
    {
        $update = Produtos::where('codigo','=',Input::get('id'))->first();

        $update->nome = Input::get('nome');
        $update->descricao = Input::get('descricao');

        $update->save();

        return redirect('painel/produtos')->with('success', 'Registro adicionado com sucesso!');
    }

    public function destroy()
    {
        Produtos::find(Input::get('id'))->delete();

        return redirect('painel/produtos')->with('success', 'Registro excluido com sucesso!');
    }

}
