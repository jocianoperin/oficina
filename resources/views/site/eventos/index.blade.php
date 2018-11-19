@extends('app')
@section('content')
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            @include("site.includes.titulo")
            @include("site.includes.top")
            @include("site.includes.banner")

        </div>
        <section class="text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Eventos</h1>

            </div>
        </section>
        <div class="album py-5 bg-light">
            <div class="container">
                @foreach($eventos as $evento)
                    <div class="card md-12 shadow-sm">
                        <h3 style="margin-bottom: 0;">{{$evento->EveTitulo}}</h3>
                        <small class="text-muted"><i
                                    class="fa fa-calendar"></i> {{$evento->EveInicio}}</small>
                        -
                        <small class="text-muted">{{$evento->EveFim}}</small>
                        <img class="card-img-top"
                             data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                             alt="Thumbnail [100%x225]"
                             src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22225%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20225%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_167144ff986%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_167144ff986%22%3E%3Crect%20width%3D%22288%22%20height%3D%22225%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.8359375%22%20y%3D%22118.8%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E"
                             data-holder-rendered="true"
                             style="margin-top:5%; height: 225px; width: 100%; display: block;">
                        <div class="card-body">
                            <p style="margin-top:5%;"
                               class="card-text">{{substr(strip_tags($evento->EveDescricao), 0, 250)}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div style="width:100% !important;" class="btn-group">

                                    <a style='width:100% !important; border-radius:0; border:none; color:#000; background-color:#eac320;'
                                       href='{{url('evento?id='.$evento->EveCodigo)}}' class='btn btn-md btn-primary'>Ler Mais..</a>

                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
            </div>
        </div>
        @include("site.includes.footer")

    </div>

    </div>
@endsection