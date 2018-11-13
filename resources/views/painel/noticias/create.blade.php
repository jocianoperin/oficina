@extends('painel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Usuários</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{url('painel/noticias/update?codigo='.$itens_noticia->SobTexto)}}" method="POST">
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                                    <div class="form-group">
                                        <label for="texto">Texto:</label>
                                        <textarea id="texto" class="form-control" name="texto">
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
