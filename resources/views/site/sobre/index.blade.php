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

        @include("site.includes.titulo")
        @include("site.includes.top")
        @include("site.includes.banner")


    </div>


    <div class="container">
        <div class="row">
            <section class="col-12 col-12-narrower">
                <div class="row">
                    <div class="inner">
                        <h1>Sobre a Comissão de Cultura da UTFPR-DV</h1>
                        <p>{{strip_tags($sobre->SobTexto)}}</p>
                    </div>
                </div>

                <div class="row" style="margin-top:5%;">
                    <div class="inner">
                        <h3>Membros da Comissão: </h3>
                        <p><strong>Presidente: {{$sobre->SobPresidente}}</strong></p>
                    </div>
                </div>
            </section>
        </div>
    </div>



    @include("site.includes.footer")

</div>

</div>


</body>
</html>
@endsection