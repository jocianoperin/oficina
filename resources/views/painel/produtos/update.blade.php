@extends('painel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Produtos</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{url('painel/produtos/update?id='.Input::get('id'))}}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                                    <div class="form-group">
                                        <label for="nome">Nome</label>
                                        <input type="text" class="form-control" name="nome" value="{{$item->nome}}"
                                               placeholder="Nome" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="descricao">Descrição</label>
                                        <input type="text" class="form-control" name="descricao" value="{{$item->descricao}}"
                                               placeholder="Descrição" required>
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
