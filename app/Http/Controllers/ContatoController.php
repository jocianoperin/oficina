<?php namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Support\Facades\Mail;
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

    public function contato(){
        $item = Contato::find(Input::get('id'));
        return view('painel.contato.contato', compact('item'));
    }

    public function create()
    {
        return view('painel.contato.create');
    }

    public function create2()
    {
        $create = new Contato();

        $create->ConNome = Input::get('nome');
        $create->ConEmail = Input::get('email');
        $create->ConAssunto = Input::get('object');
        $create->ConMensagem = Input::get('message');

        $create->save();

        Mail::send('emails.contato', compact('create'), function ($message) use ($create) {

            $message->to('yurireisc@gmail.com')->subject('Contato vindo do site!');
        });

        return redirect('painel/contato')->with('success', 'Registro adicionado com sucesso!');
    }

    public function destroy()
    {
        Contato::find(Input::get('id'))->delete();

        return redirect('painel/contatos')->with('success', 'Registro excluido com sucesso!');
    }

}
