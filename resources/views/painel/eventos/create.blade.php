@extends('painel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Eventos</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{url('painel/eventos/create')}}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group">
                                        <label for="titulo">Titulo do Evento</label>
                                        <input type="text" class="form-control" name="titulo" placeholder="Titulo" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="texto">Descrição</label>
                                        <textarea class="form-control" name="descricao" placeholder="Descrição" required></textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="evento">Data de Início</label>
                                        <input type="date" class="form-control" name="inicio" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="evento">Data de Fim</label>
                                        <input type="date" class="form-control" name="fim" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="liberado">Liberado:</label>
                                        <input id="liberado" checked type="radio" class="" name="liberado" value="1"> Sim
                                        <input id="liberado" type="radio" class="" style="margin-left:2%;" name="liberado" value="0"> Não
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
