<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
  
  public function __construct()
  {
      
  }
  
  
  
  
    public function getproduto($id)
   {
    $produtos=$id;
    
    //dd($id);
    return view('components.carrinho',compact ('produtos'));
   }
}
