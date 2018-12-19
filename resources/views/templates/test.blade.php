<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">

    <title>Document</title>
</head>
@yield('css-view')  
<body>
    <div class="container">
        

    @yield('conteudo-view')
    
    </div>

    @yield('css-view')  
    <script ></script>
</body>
</html>