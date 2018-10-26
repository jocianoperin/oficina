            @extends('app')
            @section('content')



                <div id="header">

                    @include("includes.titulo")
                    @include("includes.top")


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

                        {{--<!-- Icons -->--}}
                        {{--<ul class="icons">--}}
                            {{--<li><a href="https://www.facebook.com/utfprdoisvizinhos/" class="icon fa-facebook"><span class="label">Facebook</span></a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}

                        {{--<!-- Copyright -->--}}
                        {{--<div class="copyright">--}}
                            {{--<ul class="menu">--}}
                                {{--<li>&copy; Untitled. All rights reserved</li>--}}
                                {{--<li>Design: <a href="http://html5up.net">HTML5 UP</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}

                    {{--</div>--}}

                </div>




    </div>









@endsection