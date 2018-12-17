<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
   
   
   
    public function produto(){
        return $this->hasOne(Produto::class);
    }
}
