<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
  
  public function __construct()
  {
      
  }
  
  
  
  
    public function getproduto()
   {
     
    $nome='Richard';
    
    
    return view('components.carrinho',compact 'nome' );
   }
}
