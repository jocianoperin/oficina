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
                        Notícias
                    </div>
                    <div class="panel-body">
                        <a href="{{url('painel/noticias/create')}}" style="margin-bottom:2%;" class="btn btn-md btn-primary"><i class="fa fa-plus"></i> Adicionar Notícia</a>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th class="col-sm-1 text-center"><i class="fa fa-wrench"></i></th>
                                <th class="col-sm-1">Imagem</th>
                                <th class="col-sm-1">Codigo</th>
                                <th class="col-sm-5">Título</th>
                                <th class="col-sm-1">Liberado</th>
                                <th class="col-sm-2"><i class="fa fa-calendar"></i> <i class="fa fa-clock-o"></i></th>
                                <th class="col-sm-1 text-center"><i class="fa fa-trash"></i></th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count(@$itens) > 0)
                                @foreach($itens as $item)
                                    <tr>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/noticias/update?id='.$item->NotCodigo)}}" class="btn btn-primary">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                        </td>
                                        <td style="vertical-align: middle;">
                                            <a href="{{url('painel/noticias/update?id='.$item->NotCodigo)}}" class="btn btn-primary">
                                                <i class="fa fa-photo"></i>
                                            </a>
                                        </td>
                                        <td style="vertical-align: middle;">{{$item->NotCodigo}}</td>
                                        <td style="vertical-align: middle;">{{$item->NotTitulo}}</td>
                                        <td style="vertical-align: middle;">{{$item->NotLiberado == 1 ? 'Sim': 'Não' }}</td>
                                        <td style="vertical-align: middle;">
                                            {{$item->created_at->format('d/m/Y')}} <br>
                                            {{$item->created_at->format('h:i:s')}}
                                        </td>
                                        <td class="text-center" style="vertical-align: middle;">
                                            <a href="{{url('painel/noticias/destroy?id='.$item->NotCodigo)}}" class="btn btn-danger btn-destroy">
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
                    <div class="panel-footer">
                        {!! $itens->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
