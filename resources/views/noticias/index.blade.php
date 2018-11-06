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
                        <h3>Notícias - Comissão de Cultura da UTFPR-DV</h3>
                        <p>{{strip_tags($noticias->SobTexto)}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="inner">
                        <h4>Membros: </h4>
                        <p><strong>Presidente: {{$sobre->SobPresidente}}</strong></p>
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