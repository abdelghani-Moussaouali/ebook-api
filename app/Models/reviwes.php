<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class reviwes extends Model
{
    public function products(){
        return $this->belongsTo(Product::class);
    }

    public function users(){
        return $this->hasOne(User::class);
    }
}
