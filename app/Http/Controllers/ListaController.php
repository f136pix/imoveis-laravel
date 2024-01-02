<?php

namespace App\Http\Controllers;

use App\Models\Lista;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;
use Symfony\Contracts\Service\Attribute\Required;

class ListaController extends Controller
{
    // GET root/
    public function index()
    {
        // request()->tag
        return view('listings.index', [
            'lista' => Lista::latest() // ordenando por created_at
                ->filter(request(['tag', 'search'])) //  parametrizando $filters em scopeFilters com request(['tag', 'search'])
                ->paginate(10) // pagination com 10 elementos por pagina
        ]);
    }

    // GET oportunidades/criar
    public function create()
    {

        return view('listings.create');

    }

    // POST oportunidades/criar
    public function store()
    {
        $formFields = request()->validate([
            'titulo' => 'required',
            'empresa' => ['required', Rule::unique('listas', 'empresa')],
            'local' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => ['required'],
            'descricao' => 'required',
        ]);


        if (request()->hasFile('logo')) {
            $formFields['logo'] = request()->file('logo')->store('logos', 'public'); // armazenando o .png do logo no server
        }

        Lista::create($formFields);

        // mesmo que redirect()->with()
        // Session::flash('message', 'Vaga postada');

        return redirect('/')->with('message', 'Imovel publicado com sucesso');
    }

    // GET oportundidades/{id}/edit
    public function edit(Lista $id)
    {
        return view('listings.edit', ['item' => $id]);
    }

    // PUT oportunidades/{id}
    public function update(Lista $id)
    {
        $formFields = request()->validate([
            'titulo' => 'required',
            'empresa' => 'required',
            'local' => 'required',
            'website' => 'required',
            'email' => ['required', 'email'],
            'tags' => ['required'],
            'descricao' => 'required',
        ]);

        if (request()->hasFile('logo')) {
            $formFields['logo'] = request()->file('logo')->store('logos', 'public');
        }

        $id->update($formFields);

        return back()->with('message', 'Imovel atualizado com sucesso !');

    }

    // DELETE oportunidades/{id}
    public function destroy(Lista $id) {
        $id->delete();
        return redirect('/')->with('message', 'Oportunidade removida');
    }

    // GET oportunidades/{id}
    public function show($id)
    {

        $item = Lista::find($id);

        if (!$item) {
            abort('404');
        } else {
            return view('listings.show', [
                'item' => $item
            ]);
        }
    }


}

