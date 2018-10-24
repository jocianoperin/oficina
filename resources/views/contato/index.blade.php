@extends('app')
@section('content')
    <div id="page-wrapper">

        <!-- Header -->
        <div id="header">

            @include("includes.titulo")
            @include("includes.top")
            @include("includes.banner")

        </div>


        <!-- Footer
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

            @include("includes.footer")

        </div> -->

    </div>
@endsection