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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main.css" />
</head>
<body class="is-preload">
<div id="page-wrapper">

    <!-- Header -->
    <div id="header">

        <!-- Logo -->


        <h1><a href="/" id="logo"><img src="http://www.utfpr.edu.br/logo.png" alt="Universidade Tecnológica Federal do Paraná" title="Universidade Tecnológica Federal do Paraná" height="59" width="379"></a></h1>

        <!-- Nav -->
        <nav id="nav">
            <ul>
                <li><a href="/">Home</a></li>
                <li>
                    <a href="noticias">Noticias</a>
                <li><a href="eventos">Eventos</a></li>
                <li class="current"><a href="about">Sobre</a></li>
            </ul>
        </nav>

    </div>



    <!-- Posts -->
    <section class="wrapper style1">
        <div class="container">
            <div class="row">
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                        <a href="#" class="image left"><img src="images/pic01.jpg" alt="" /></a>
                        <div class="inner">
                            <h3>The First Thing</h3>
                            <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                        </div>
                    </div>
                </section>
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                        <a href="#" class="image left"><img src="images/pic02.jpg" alt="" /></a>
                        <div class="inner">
                            <h3>The Second Thing</h3>
                            <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                        </div>
                    </div>
                </section>
            </div>
            <div class="row">
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                        <a href="#" class="image left"><img src="images/pic03.jpg" alt="" /></a>
                        <div class="inner">
                            <h3>The Third Thing</h3>
                            <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                        </div>
                    </div>
                </section>
                <section class="col-6 col-12-narrower">
                    <div class="box post">
                        <a href="#" class="image left"><img src="images/pic04.jpg" alt="" /></a>
                        <div class="inner">
                            <h3>The Fourth Thing</h3>
                            <p>Duis neque nisi, dapibus sed mattis et quis, nibh. Sed et dapibus nisl amet mattis, sed a rutrum accumsan sed. Suspendisse eu.</p>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section id="cta" class="wrapper style3">
        <div class="container">
            <header>
                <h2>Are you ready to continue your quest?</h2>
                <a href="#" class="button">Insert Coin</a>
            </header>
        </div>
    </section>

    <!-- Footer -->
    <div id="footer">
        <div class="container">
            <div class="row">
                <section class="col-3 col-6-narrower col-12-mobilep">
                    <h3>Links to Stuff</h3>
                    <ul class="links">
                        <li><a href="#">Mattis et quis rutrum</a></li>
                        <li><a href="#">Suspendisse amet varius</a></li>
                        <li><a href="#">Sed et dapibus quis</a></li>
                        <li><a href="#">Rutrum accumsan dolor</a></li>
                        <li><a href="#">Mattis rutrum accumsan</a></li>
                        <li><a href="#">Suspendisse varius nibh</a></li>
                        <li><a href="#">Sed et dapibus mattis</a></li>
                    </ul>
                </section>
                <section class="col-3 col-6-narrower col-12-mobilep">
                    <h3>More Links to Stuff</h3>
                    <ul class="links">
                        <li><a href="#">Duis neque nisi dapibus</a></li>
                        <li><a href="#">Sed et dapibus quis</a></li>
                        <li><a href="#">Rutrum accumsan sed</a></li>
                        <li><a href="#">Mattis et sed accumsan</a></li>
                        <li><a href="#">Duis neque nisi sed</a></li>
                        <li><a href="#">Sed et dapibus quis</a></li>
                        <li><a href="#">Rutrum amet varius</a></li>
                    </ul>
                </section>
                <section class="col-6 col-12-narrower">
                    <h3>Get In Touch</h3>
                    <form>
                        <div class="row gtr-50">
                            <div class="col-6 col-12-mobilep">
                                <input type="text" name="name" id="name" placeholder="Name" />
                            </div>
                            <div class="col-6 col-12-mobilep">
                                <input type="email" name="email" id="email" placeholder="Email" />
                            </div>
                            <div class="col-12">
                                <textarea name="message" id="message" placeholder="Message" rows="5"></textarea>
                            </div>
                            <div class="col-12">
                                <ul class="actions">
                                    <li><input type="submit" class="button alt" value="Send Message" /></li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>

        <!-- Icons -->
        <ul class="icons">
            <li><a href="https://www.facebook.com/utfprdoisvizinhos/" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
        </ul>

        <!-- Copyright -->
        <div class="copyright">
            <ul class="menu">
                <li>&copy; Untitled. All rights reserved</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>

    </div>

</div>


</body>
</html>
@endsection