<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle Navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">Home</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                @if (!Auth::guest())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">Usuários <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="{{ url('/painel/usuarios') }}"><i class="fa fa-list"></i> Listar</a></li>
                            <li><a href="{{ url('/painel/usuarios/create') }}"><i class="fa fa-plus"></i> Adicionar</a></li>
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">Página Sobre <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="{{ url('/painel/sobre') }}"><i class="fa fa-wrench"></i> Configurações2</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">Página Notícias <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="{{ url('/painel/noticias') }}"><i class="fa fa-list"></i> Listar</a></li>
                            <li><a class="dropdown-item" href="{{ url('/painel/noticias/create') }}"><i class="fa fa-wrench"></i> Adicionar</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">Página Eventos <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a class="dropdown-item" href="{{ url('/painel/eventos') }}"><i class="fa fa-list"></i> Listar</a></li>
                            <li><a class="dropdown-item" href="{{ url('/painel/eventos/create') }}"><i class="fa fa-wrench"></i> Adicionar</a></li>
                        </ul>
                    </li>
                @endif

            </ul>

            <ul class="nav navbar-nav navbar-right">
                @if (!Auth::guest())
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
    </div>
</nav>