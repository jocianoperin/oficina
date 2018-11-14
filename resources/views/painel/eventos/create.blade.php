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
                                        <label for="email">Titulo</label>
                                        <input type="text" class="form-control" name="titulo" placeholder="Titulo" required>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Evento</label>
                                        <input type="text" class="form-control" name="evento" placeholder="Eventos" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Texto</label>
                                        <input type="text" class="form-control" name="texto" placeholder="Texto" required>
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
