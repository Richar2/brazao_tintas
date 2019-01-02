<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    
    protected $fillable=[
    'nome_endereco',
    'endereco',
    'referencia',
    'complemento',
    'bairro',
    'cidade',
    'estado',
    'numero',
    'cep'
           ];
    
    public function cliente(){
        
        return $this->belongsTo(Cliente::class);
    }
}
