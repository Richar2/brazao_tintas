 <!DOCTYPE html>
<html lang="ptbr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset ('fontawesome-free-5.6.3-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset ('/css/template.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Lora" rel="stylesheet"> 
    <script src="main.js"></script>
</head>
<body>
   <div class="cabecalho">

   </div>
  
   
   <div class="bar-pesquisa">
        <div class="logo"><img src="{{asset ('/assets/imgs/brazão 3.png')}}" ></div>
           
           <div class="login"><i id="user" class="fas fa-user"> </i>
           <p class="legend">Olá visitante! <br>Entre ou Casdatre-se! </p>
          
          </div>
                <div class="carrinho"><i  id="car" class="fas fa-cart-arrow-down"></i>
                <div class="rebar"></div>
                </div>
    
                 
                        <div class="pesquisa">     
                        <form method="post" action="">   
                        <input type="text"> 
                            <button>
                                   <i id="ico" class="fas fa-search"></i>
                            </button>
                        </form>
                        </div>     
                   
    </div>
 
    
    <nav class="menu">
    <div class="menu-icons" >
    <p class="menu-tex">DEPARTAMENTOS</p>
    <i id="icon_menu" class="fas fa-bars"></i>
    
    </div>
    </nav>


    <div class="banner"></div>



    <div class="footer"></div>
    
</body>
</html>