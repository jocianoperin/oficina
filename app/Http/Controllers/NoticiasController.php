<?php namespace App\Http\Controllers;

use App\Noticias;
use App\Services\Upload;
use Input;

class NoticiasController extends Controller
{

    public function __construct()
    {
    }

    public function index()
    {
        $itens = Noticias::paginate(15);

        return view('painel.noticias.index', compact('itens'));
    }

    public function create()
    {

        return view('painel.noticias.create');
    }


    public function create2()
    {
        $create = new Noticias();

        $create->SobTitulo = Input::get('presidente');
        $create->SobTexto = Input::get('texto');

        $create->save();

        return redirect('painel/')->with('success', 'Registro adicionado com sucesso!');
    }

    public function update()
    {
        $update = Sobre::find(Input::get('codigo'));

        $update->SobTexto = Input::get('texto');
        $update->SobPresidente = Input::get('presidente');

        $update->save();

        return redirect('painel/noticias')->with('success', 'Registro alterado com sucesso!');
    }

    public function destroy()
    {
        Noticias::find(Input::get('id'))->delete();

        return redirect('painel/noticias')->with('success', 'Registro excluido com sucesso!');
    }

    public function upload2(Upload $upload){
        if (Auth::user()->UserCodigo == Route::input('id_usu')) {
            if (Input::hasFile('file')) {
                $upload->resize(Input::file("file"), public_path() . "/upload/usuarios/avatar_"
                    . Route::input('id_usu') . ".jpg", getenv("TamPW"), getenv("TamPH"));
                return redirect(getenv("PAINEL"))->with("success", "Imagem enviada com
sucesso!");
            } else {
                return redirect(getenv("PAINEL"))->with("error", "Imagem não enviada!");
            }
        } else {
            return redirect(getenv("PAINEL") . "/")->with("error", "Você não tem autorização
para acessar esta página");
        }

    }

}
