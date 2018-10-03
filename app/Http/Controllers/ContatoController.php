<?php namespace App\Http\Controllers;

use App\Contato;
use Input;
use Hash;
use Auth;

class ContatoController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $itens = Contato::paginate(15);

        return view('painel.contato.index', compact('itens'));
    }

    public function create()
    {
        return view('painel.contato.create');
    }

    public function create2()
    {
        $create = new Contato();

        $create->name = Input::get('name');
        $create->email = Input::get('email');
        $create->object = Input::get('object');
        $create->message = Input::get('message');

        $create->save();

        Mail::send('emails.contato', compact('create'), function ($message) use ($create) {

            $message->to('perinjociano@gmail.com')->subject('Contato vindo do site!');
        });

        return redirect('painel/contato')->with('success', 'Registro adicionado com sucesso!');
    }

    public function update()
    {
        $item = Contato::find(Input::get('id'));

        return view('painel.contato.update', compact('item'));
    }

    public function update2()
    {
        $update = Contato::find(Input::get('id'));

        $update->name = Input::get('name');
        $update->email = Input::get('email');

        if (Input::has('senha')) {
            $update->password = Hash::make(Input::get('senha'));
        }

        $update->save();

        return redirect('painel/contato')->with('success', 'Registro alterado com sucesso!');
    }

    public function destroy()
    {
        Contato::find(Input::get('id'))->delete();

        return redirect('painel/contato')->with('success', 'Registro excluido com sucesso!');
    }

}
