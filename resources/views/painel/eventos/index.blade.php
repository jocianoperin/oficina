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
                        Eventos
                    </div>
                    <div class="panel-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="col-sm-1 text-center"><i class="fa fa-wrench"></i></th>
                                <th class="col-sm-1 text-center">Arte</th>
                                <th class="col-sm-1 text-center">Documentos</th>
                                <th class="col-sm-1">Codigo</th>
                                <th class="col-sm-6">Titulo</th>
                                <th class="col-sm-1">Liberado</th>
                                <th class="col-sm-1 text-center"><i class="fa fa-trash"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count(@$itens) > 0)
                                @foreach($itens as $item)
                                    <tr>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/eventos/update?id='.$item->EveCodigo)}}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="#" class="btn btn-primary">
                                                <i class="fa fa-image"></i>
                                            </a>
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="#" class="btn btn-primary">
                                                <i class="fa fa-file"></i>
                                            </a>
                                        </td>
                                        <td style="vertical-align: middle;">{{$item->EveCodigo}}</td>
                                        <td style="vertical-align: middle;">{{$item->EveTitulo}}</td>
                                        <td style="vertical-align: middle;">{{$item->EveLiberado == 1 ? 'Sim' : 'Não'}}</td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/eventos/destroy?id='.$item->EveCodigo)}}" class="btn btn-danger btn-destroy">
                                                <i class="fa fa-remove"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4">
                                        <p class="text-center">Nenhum registro encontrado.</p>
                                    </td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
