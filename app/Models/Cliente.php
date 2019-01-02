<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=[
    'nome',
    'sobrenome',
    'sexo',
    'data_nascimento',
    'cpf',
    'telefone_fixo',
    'telefone_cel'];
    
    
    public function acesso(){
        
        return $this->belongsTo(Acessocliente::class);
    }
    public function endereco(){
        
        return $this->hasMany(Endereco::class);
    }
}
