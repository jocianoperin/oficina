@extends('painel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Contatos</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{url('painel/contato/create')}}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" name="name" placeholder="Nome" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">E-mail</label>
                                        <input type="email" class="form-control" name="email" placeholder="E-mail" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="object">Assunto</label>
                                        <input type="text" class="form-control" name="object" placeholder="Assunto" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="message">Mensagem</label>
                                        <input type="text" class="form-control" name="message" placeholder="Mensagem" required>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save">&nbsp;</i>Salvar
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
