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
                        Usuários
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="col-sm-1 text-center">#</th>
                                <th class="col-sm-5">Codigo</th>
                                <th class="col-sm-5">Texto</th>
                                <th class="col-sm-5">Evento</th>
                                <th class="col-sm-1 text-center">#</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count(@$itens) > 0)
                                @foreach($itens as $item)
                                    <tr>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/eventos/update?id='.$item->SobCodigo)}}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td style="vertical-align: middle;">{{$item->SobCodigo}}</td>
                                        <td style="vertical-align: middle;">{{$item->SobTexto}}</td>
                                        <td style="vertical-align: middle;">{{$item->SobEvento}}</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/eventos/destroy?id='.$item->SobCodigo)}}" class="btn btn-danger btn-destroy">
                                                <i class="fa fa-remove"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
