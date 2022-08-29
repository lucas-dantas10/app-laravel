<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // protected $tabel = 'products';

    // COLUNAS QUE PODEM SER PREENCHIDAS
    protected $fillable = ['name', 'price', 'description', 'image']; 

    public function search($filter)
    {
        $results = $this->where(function ($query) use($filter) {
            if ($filter) {
                $query->where('name', 'LIKE', "%{$filter}%");
            }
        })//->toSql();
        ->paginate();

        return $results;

        // dd($results);
    }
    
}
