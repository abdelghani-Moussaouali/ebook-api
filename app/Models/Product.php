<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Product extends Model
{
    use HasFactory;

    public function ctegogries()
    {
        return $this->hasMany(Product::class);
    }
    public function reviwes(){
        return $this->belongsTo(reviwes::class);
    }
}
