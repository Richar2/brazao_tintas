<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    
    protected $fillable=[];
    
    public function cliente(){
        
        return $this->belongsTo(Cliente::class);
    }
}
