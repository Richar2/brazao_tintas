<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\ImageneProduct;
use App\Models\Categorias;
use App\Models\Produto;


class ProdutoController extends Controller
{
   
    
    public function tableProd()
    {
        //$prod= Produto::get();    
        //$cat= Categorias::get();
       //return $prod;
       
       return view('vendor.adminlte.conponentsadmin.produtos');
    }
    public function componetProd(Request $request)
    {
        $prod= Produto::orderBy('id', 'DESC')->paginate(3);  
    
        return [
            'pagination'=>[
                'total'        => $prod->total(),
                'current_page' => $prod->currentPage(),
                'per_page'     => $prod->perPage(),
                'last_page'    => $prod->lastPage(),
                'fron'         => $prod->firstItem(),
                'to'           => $prod->lastPage(),
        
            ],
            'prod'=>$prod
        ];   
    
    
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
        $this->validate($request,[
            'nome_pro'=>'required',
            'descricao_pro'=>'required'
        ]);
       Produto::find($id)->update($request->all());  
       return;  

    }

    
    public function destroy($id)
    {
        $prod= Produto::findOrFail($id);
        $prod->delete();
    }
}
