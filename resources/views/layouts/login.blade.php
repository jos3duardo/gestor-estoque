<!doctype html>
<html lang="pt-BR">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-162661564-4"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-162661564-4');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema de gestão de estoque">
    <title>{{env('APP_NAME')}}</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('css/signin.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body class="text-center">
    <div class="container">
        <img class="mb-1" src="/img/logo.jpg" alt="" width="72" height="72">
        <div style="font-size: 43px">{{env('APP_NAME')}}<small style="font-size: 16px">{{env('APP_VERSION')}}</small></div>
        @yield('content')
        <p class="mt-3 mb-1 text-muted">
            &copy; Todos os Direitos Reservados
            {{date('Y')}}
        </p>
        <a href="http://jos3duardo.xyz" target="_blank">Siscompra || Jos3duardo</a>
    </div>

</body>
</html>


