<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Acessocliente extends Model
{
    protected $fillable=[
        'email',
        'senha'  
    ];
    
    public function cliente(){
       
        return $this->hasOne(Cliente::class);
    }
}
