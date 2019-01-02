<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'id';
    protected $fillable=[
    'nome',
    'sobrenome',
    'sexo',
    'data_nascimento',
    'cpf',
    'telefone_fixo',
    'telefone_cel'];
    
    
    public function acessocliente(){
        
        return $this->belongsTo(Acessocliente::class,  'acesso_id', 'id');
    }
    public function endereco(){
        
        return $this->hasMany(Endereco::class);
    }
}
