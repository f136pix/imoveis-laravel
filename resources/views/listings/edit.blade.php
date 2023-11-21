@extends('layout')

@section('content')

    <x-card class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">
                Editar um anuncio
            </h2>
            <p class="mb-4">Anuncio: {{ $item->titulo }}</p>
        </header>

        <form action="/oportunidades/{{ $item->id }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- previne cross-site requests -->
            @method('PUT') <!-- form method = PUT-->

            <div class="mb-1">
                <label for="company" class="inline-block text-lg mb-2">Empresa</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="empresa"
                    value="{{ $item->empresa }}" />
                <!-- exibindo erros relacionados ao request empresa -->
                @error('empresa')
                    <!-- message do erro do param em questão-->
                    <p class="text-red-500 text-xs mb-3">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-1">
                <label for="title" class="inline-block text-lg mb-2">Titulo da Vaga</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="titulo"
                    value="{{ $item->titulo }}" placeholder="Ex: Senior Laravel Developer" />
            </div>
            @error('titulo')
                <p class="text-red-500 text-xs mb-3 mb-">{{ $message }}</p>
            @enderror

            <div class="mb-1">
                <label for="local" class="inline-block text-lg mb-2">Local</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="local"
                    value="{{ $item->local }}" placeholder="Ex: Remote, Londrina, PR" />
            </div>
            @error('local')
                <p class="text-red-500 text-xs mb-3 mb-">{{ $message }}</p>
            @enderror

            <div class="mb-1">
                <label for="email" class="inline-block text-lg mb-2">Email Contato</label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="email"
                    value="{{ $item->email }}" />
            </div>
            @error('email')
                <p class="text-red-500 text-xs mb-3 mb-">{{ $message }}</p>
            @enderror

            <div class="mb-1">
                <label for="website" class="inline-block text-lg mb-2">
                    Site Empresa
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="website"
                    value="{{ $item->website }}" />
            </div>
            @error('website')
                <p class="text-red-500 text-xs mb-3 mb-">{{ $message }}</p>
            @enderror

            <div class="mb-1">
                <label for="tags" class="inline-block text-lg mb-2">
                    Tags (Separadas por virgula)
                </label>
                <input type="text" class="border border-gray-200 rounded p-2 w-full" name="tags"
                    value="{{ $item->tags }}" placeholder="Ex: Laravel, Backend, Postgres, etc" />
            </div>
            @error('tags')
                <p class="text-red-500 text-xs mb-3 mb-">{{ $message }}</p>
            @enderror

            <div class="mb-1">
                <label for="logo" class="inline-block text-lg mb-2">
                    Logo da Emrpesa
                </label>
                <input type="file" class="border border-gray-200 rounded p-2 w-full" name="logo"/>
                <img class="w-48 mr-6 mb-6" src="{{ $item->logo ? asset('storage/'.$item->logo) : asset('/images/no-image.png') }}" alt="" />
            </div>
            @error('logo')
                <p class="text-red-500 text-xs mb-3 mb-">{{ $message }}</p>
            @enderror

            <div class="mb-1">
                <label for="description" class="inline-block text-lg mb-2">
                    Descrição da Vaga
                </label>
                <textarea class="border border-gray-200 rounded p-2 w-full" name="descricao" rows="10"
                    placeholder="Tarefas, Salario, Requerimentos, etc...">
                   {{ $item->descricao }}
                </textarea>
            </div>

            @error('descricao')
                <p class="text-red-500 text-xs mb-1">{{ $message }}</p>
            @enderror

            <div class="mb-1">
                <button class="bg-black text-white rounded py-2 px-4">
                    Salvar alterações
                </button>

                <a href="/" class="text-black ml-4"> Voltar </a>
            </div>
        </form>
    </x-card>
@endsection
