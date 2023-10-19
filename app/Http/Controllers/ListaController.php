<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use Illuminate\Http\Request;

class ListaController extends Controller
{
    // /
    public function index() {
        // request()->tag
        return view('listings.index', [
            'lista' => Lista::latest()
            ->filter(request(['tag','search'])) //  $filters = request(['tag']) em scopeFilters
            ->get()
        ]);
    }

    // oportunidade/{id}
    public function show($id) {

        $item = Lista::find($id);
    
        if($item) {
            return view('listings.show', [
                'item' => $item
            ]);
        } else { 
            abort('404');
        }

    }
}
