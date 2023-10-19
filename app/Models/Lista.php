<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lista extends Model
{
    use HasFactory;

    public function scopeFilter($query, array $filters) {
        
        /* 
        $filters = req url params       
        */

        if($filters["tag"] ?? false) { // if filters[tag] != null
            $query
            ->where('tags','like','%'. request('tag') .'%');  // select column onde where 'is like' url param tag
        }

        if($filters["search"] ?? false) { // if filters[search] != null
            $query
            ->where('titulo','like','%'. request('search') .'%')
            ->orWhere('descricao','like','%'. request('search') .'%'); // select column where titulo 'is like' url param search or descricao 'is like' url param search
        }


    }
}
