<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acessocliente;
use App\Models\Endereco;
use App\Models\Cliente;




class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('components.cadclientes'); 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function saveCli(Request $request)
    {
        //$form = $request->all();
        
        $form = $request->except(['_token']);
        $acesso = Acessocliente::create($form);
        $cliente = Cliente::create($form);
        $endereco= Endereco::create($form);
        
        
        
      
        
        $cliente->acessocliente()->associate($acesso);
        $endereco->cliente()->associate($cliente);
       
        $cliente->save();
        $endereco->save();
        
        //dd($form);
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update( Endereco $endereco ,Cliente $cliente, Acessocliente $acesso)
    {
        
        
       
        $upform=$endereco ->find(1);
        $cli=$cliente->find($upform->cliente_id);
        $upform->estado='Maranhão';
        $cli->nome='Richard';
        //$upform->cliente_id
        //$cliente_id =$endereco->cliente_id;
        //dd( $upform->cliente_id);
       // $cliente->acessocliente()->associate($acesso);
      
        
        $cli->save();
        $upform->save();
    
    
    
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
