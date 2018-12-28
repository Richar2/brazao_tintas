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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</html>