<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <title>Comissão de Cultura</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="{{asset("css/main.css")}}">
	    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'/>
    <link rel="icon" href="{{asset('imagens/icone.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{asset('imagens/icone.ico')}}" type="image/x-icon" />
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
</head>
<body>


@yield('content')

<!-- jQuery 2.1.4 -->
<script src="{{asset("plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
<!-- Bootstrap 3.3.5 -->
<!-- Scripts -->
<script src="{{asset("bootstrap/js/bootstrap.min.js")}}"></script>
{{--<script src="{{asset("bootstrap/js/jquery.js")}}"></script>--}}
<script src="{{asset("bootstrap/js/jquery.dropotron.min.js")}}"></script>
<script src="{{asset("bootstrap/js/browser.min.js")}}"></script>
<script src="{{asset("bootstrap/js/breakpoints.min.js")}}"></script>
<script src="{{asset("bootstrap/js/util.js")}}"></script>
<script src="{{asset("bootstrap/js/main.js")}}"></script>

<!-- page script -->
<script>
    $(function () {
        // Scripts aqui
    })
</script>

</body>
</html>
