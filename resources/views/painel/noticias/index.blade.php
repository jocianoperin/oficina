@extends('painel.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Notícias
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="col-sm-1 text-center">#</th>
                                <th class="col-sm-5">Id</th>
                                <th class="col-sm-5">Título</th>
                                <th class="col-sm-1 text-center">#</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count(@$itens_noticia) > 0)
                                @foreach($itens_noticia as $item)
                                    <tr>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/noticias/update?id='.$item->SobCodigo)}}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td style="vertical-align: middle;">{{$item->SobCodigo}}</td>
                                        <td style="vertical-align: middle;">{{$item->SobTitulo}}</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/noticias/destroy?id='.$item->SobCodigo)}}" class="btn btn-danger">
                                                <i class="fa fa-remove"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="panel-footer">
                        {!! $itens_noticia->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
