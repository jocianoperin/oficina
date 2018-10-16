<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Comissão de Cultura</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.5 -->
	<link rel="stylesheet" href="{{asset("bootstrap/css/bootstrap.min.css")}}">
	<link rel="icon" href="{{asset('imagens/icone.ico')}}" type="image/x-icon" />
	<link rel="shortcut icon" href="{{asset('imagens/icone.ico')}}" type="image/x-icon" />
	<!-- Font Awesome -->
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
</head>
<body>
	@include("painel.includes.top")
	@yield('content')

	<!-- jQuery 2.1.4 -->
	<script src="{{asset("plugins/jQuery/jQuery-2.1.4.min.js")}}"></script>
	<script src="{{asset("js/scripts.js")}}"></script>
	<script src="{{asset("plugins/ckeditor/ckeditor.js")}}"></script>
	<!-- Bootstrap 3.3.5 -->
	<script src="{{asset("bootstrap/js/bootstrap.min.js")}}"></script>


	<!-- page script -->
	<script>
        $(function () {
            CKEDITOR.replace( 'texto' );
        })
	</script>
</body>
</html>
