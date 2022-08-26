<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $tabel = 'products';

    // COLUNAS QUE PODEM SER PREENCHIDAS
    protected $fillable = ['name', 'price', 'description', 'photo']; 
    
}
