@extends('painel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-md-offset-1">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif
            </div>
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Contatos
                    </div>
                    <div class="panel-body">

                        <h2>Visualizar Contato</h2>

                        <b>Nome:</b> {{$item->ConNome}} <br>
                        <b>Email:</b> {{$item->ConEmail}} <br><br>
                        <b>Assunto:</b> {{$item->ConAssunto}} <br><br>
                        <b>Mensagem:</b> {{$item->ConMensagem}} <br><br>

                        <a class="btn btn-md btn-primary" href="{{url('painel/contatos')}}"> Voltar </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
