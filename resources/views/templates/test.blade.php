<!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
      
    <title>Document</title>
    <!--<link rel="stylesheet" href="{{asset ('css/app.css')}}">-->
   
   
    <link rel="stylesheet" href="{{asset ('/css/cadastro.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet"> 
</head>
@yield('css-view')  
<body>
    
        

    @yield('conteudo-view')
    
   
    
    @yield('css-view')  
    <script src="{{asset('js/app.js')}}" ></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" ></script>
</body>
</html>