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
                        <i class="fa fa-plus"></i>
                        Adição de notícias
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header"><strong>Adição de notícias</strong></div>
                                <hr class="center-block">
                            </div>
                            <div class="col-md-12">
                                <form action="{{url('painel/noticias/create2')}}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group">
                                        <label for="titulo">Título:</label>
                                        <input id="titulo" type="text" class="form-control" name="titulo" value="">
                                    </div>
                                    <div class="form-group">
                                        <label for="texto">Texto:</label>
                                        <textarea id="texto" class="form-control" name="texto">
                                        </textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="liberado">Liberado:</label>
                                        <input id="liberado" checked type="radio" class="" name="liberado" value="1"> Sim
                                        <input id="liberado" type="radio" class="" style="margin-left:2%;" name="liberado" value="0"> Não
                                    </div>
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-save">&nbsp;</i>
                                            Salvar
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
