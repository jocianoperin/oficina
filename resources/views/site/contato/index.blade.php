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
                <h1>Envie sua mensagem</h1>
                <p>Preencha o formulário abaixo:</p>
                <form action="/contato" method="post">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="row gtr-50">
                        <div class="col-6 col-12-mobilep">
                            <input type="text" name="nome" id="nome" placeholder="Nome"/>
                        </div>
                        <div class="col-6 col-12-mobilep">
                            <input type="email" name="email" id="email" placeholder="Email"/>
                        </div>
                        <div class="col-12 col-12-mobilep">
                            <input type="text" name="object" id="object" placeholder="Assunto"/>
                        </div>
                        <div class="col-12">
                            <textarea name="message" id="message" placeholder="Mensagem" rows="5"></textarea>
                        </div>
                        <div class="col-12">
                            <ul class="actions">
                                <li><input type="submit" class="button alt" value="Enviar mensagem"/></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </section>
        </div>

    </div>

    @include("site.includes.footer")

</div>

</div>


</body>
</html>
@endsection









@endsection