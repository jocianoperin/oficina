@extends('app')
@section('content')
        <!DOCTYPE HTML>
<!--
	Arcana by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
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

        <!-- Logo -->


        <h1><a href="/" id="logo"><img src="http://www.utfpr.edu.br/logo.png"
                                       alt="Universidade Tecnológica Federal do Paraná"
                                       title="Universidade Tecnológica Federal do Paraná" height="59" width="379"></a>
        </h1>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li>
                    <a href="noticias">Noticias</a>
                <li><a href="eventos">Eventos</a></li>
                <li><a href="about">Sobre</a></li>
                <li>
                    <a href="#">Acessar</a>
                    <ul>


                        <li><a href="{{url('/painel')}}"><i class="fa fa-user-o" aria-hidden="true"></i> Login </a></li>
                        <li><a href="{{url('/auth/register')}}"><i class="fa fa-gear" aria-hidden="true"></i> Registrar</a>
                        </li>

                    </ul>
                </li>
                <li class="current"><a href="contato">Contato</a></li>
            </ul>
        </nav>

    </div>


    <!-- Footer -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <section class="col-6 col-12-narrower">
                    <h3>Envie sua mensagem</h3>
                    <form action="/contato" method="post">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <div class="row gtr-50">
                            <div class="col-6 col-12-mobilep">
                                <input type="text" name="name" id="name" placeholder="Nome"/>
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

        <!-- Icons -->
        <ul class="icons">
            <li><a href="https://www.facebook.com/utfprdoisvizinhos/" class="icon fa-facebook"><span class="label">Facebook</span></a>
            </li>
        </ul>

        <!-- Copyright -->
        <div class="copyright">
            <ul class="menu">
                <li>&copy; Untitled. All rights reserved</li>
                <li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>

    </div>

</div>


</body>
</html>
@endsection