<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    
    
    
   
   
    public function image(){
        return $this->belongsTo(ImageneProduct::class);
    }
    
    public function categoria(){
        return $this->belongsTo(Categorias::class);

    }
}
