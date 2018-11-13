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
                        <i class="fa fa-wrench"></i>
                        Configurações da Página Sobre
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="header"> <strong>Informações da Página:</strong> </div>
                                <hr class="center-block">
                            </div>
                            <div class="col-md-12">
                                <form action="{{url('painel/sobre/update?codigo='.$item_sobre->SobCodigo)}}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                    <div class="form-group">
                                        <label for="texto">Presidente:</label>
                                        <input type="text" class="form-control" name="presidente" value="{{$item_sobre->SobPresidente}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="texto">Texto:</label>
                                        <textarea id="texto" class="form-control" name="texto">
                                            @if($item_sobre->SobTexto)
                                                {{$item_sobre->SobTexto}}
                                            @endif
                                        </textarea>
                                        <script>
                                            CKEDITOR.replace( 'texto' );
                                        </script>
                                    </div>
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
