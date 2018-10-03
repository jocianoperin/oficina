<?php namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('home');
    }

    public function noticias()
    {
        return view('noticias');
    }

    public function eventos()
    {
        return view('eventos');
    }

    public function about()
    {
        return view('about');
    }

    public function contato()
    {
        return view('contato');
    }

    public function contato2()
    {
        $create = new Contato();

        $create->name = Input::get('name');
        $create->email = Input::get('email');
        $create->object = Hash::make(Input::get('object'));
        $create->message = Hash::make(Input::get('message'));

        $create->save();

        Mail::send('emails.contato', compact('create'), function ($message) use ($create) {

            $message->to('comissaoculturautfpr@gmail.com')->subject('Contato vindo do site!');
        });

        return redirect('painel/contato')->with('success', 'Registro adicionado com sucesso!');
    }

}
