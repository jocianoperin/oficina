@extends('app')
@section('content')
        <!DOCTYPE HTML>
<html>
<head>
    <title>Comissão de cultura</title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
</head>
<body class="is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <div id="header">

        @include("includes.titulo")
        @include("includes.top")
        @include("includes.banner")

    </div>


    <div class="container">
        <div class="row">
            <section class="col-12 col-12-narrower">
                <div class="row">
                    <div class="inner">
                        <h1>Noticias</h1>
                        @foreach($itens_noticia as $noticia)
                            <br>
                            <br>

                            <div class="container-fluid">
                                <h2>{{strip_tags($noticia->SobTitulo)}}</h2>
                                <div class="container-fluid">
                                    {{strip_tags($noticia->SobTexto)}}
                                </div>
                            </div>

                        @endforeach


                    </div>
                </div>
        </div>
    </div>
    </section>


    @include("includes.footer")

</div>

</div>


</body>
</html>
@endsection