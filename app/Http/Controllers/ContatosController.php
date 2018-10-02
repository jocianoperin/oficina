<?php namespace App\Http\Controllers;

use App\User;
use Input;
use Hash;
use Auth;

class ContatosController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $itens = User::paginate(15);

        return view('painel.usuarios.index', compact('itens'));
    }

    public function create()
    {
        return view('painel.usuarios.create');
    }

    public function create2()
    {
        $create = new User();

        $create->name = Input::get('name');
        $create->email = Input::get('email');
        $create->object = Hash::make(Input::get('object'));
        $create->message = Hash::make(Input::get('message'));


        $create->save();

//        return redirect('painel/usuarios')->with('success', 'Registro adicionado com sucesso!');
    }

    public function update()
    {
        $item = User::find(Input::get('id'));

        return view('painel.contato.update', compact('item'));
    }

    public function update2()
    {
        $update = User::find(Input::get('id'));

        $update->name = Input::get('name');
        $update->email = Input::get('email');

        if (Input::has('senha')) {
            $update->password = Hash::make(Input::get('senha'));
        }

        $update->save();

        return redirect('painel/usuarios')->with('success', 'Registro alterado com sucesso!');
    }

    public function destroy()
    {
        User::find(Input::get('id'))->delete();

        return redirect('painel/usuarios')->with('success', 'Registro excluido com sucesso!');
    }

}
