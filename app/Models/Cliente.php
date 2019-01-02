<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable=[];
    
    
    public function acesso(){
        
        return $this->belongsTo(Acessocliente::class);
    }
    public function endereco(){
        
        return $this->hasMany(Endereco::class);
    }
}
