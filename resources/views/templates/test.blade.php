<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
      
    <title>Document</title>
    <link rel="stylesheet" href="{{asset ('css/app.css')}}">
</head>
@yield('css-view')  
<body>
    <div class="container">
        

    @yield('conteudo-view')
    
    </div>

    @yield('css-view')  
    <script src="{{asset('js/app.js')}}" ></script>
</body>
</html>