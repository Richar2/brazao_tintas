<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageneProduct extends Model
{
    
    
    
    public function produto(){
        return $this->hasOne(Produto::class);
    }
}
