<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\ImageneProduct;
use DB;
use App\Models\Categorias;
use App\Models\Produto;


class ProdutoController extends Controller
{
   
    
    public function tableProd()
    {
        //$prod= Produto::get();    
        //$cat= Categorias::get();
       //return $prod;
       
       return view('components.tabelaprod');
    }
    public function componetProd()
    {
       return  $prod= Produto::orderBy('id', 'DESC')->get();  
    }
    
    
    
    
    
    public function produtosindex()
    {
        return view('components.cadprod');
    }

    
    public function produtoscreate(Request $request)
    {
       $dataform=$request->all();
      /*
       $data['image']= $user->image;
       if ($request->hasFile('image') && $request ->file('image')->isValid()){
           if ($user->image)
          $name=$user->image;
            else {
                $name=$user->id.kebab_case($user->name);
            } 
       }

         */
       $prod=  Produto::create($dataform);
       //$cate=   Categorias::create($dataform);
       //$image= ImageneProduct::create($dataform); 
       
       
       dd($dataform);
        //return 'savecad';
    }

    public function store(Request $request)
    {
        //
    }

    
    public function show($id)
    {
        //
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
