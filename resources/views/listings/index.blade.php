@extends('layout') <!-- extends// implementa layout.blade.php  -->

@section('content') <!-- maneira como é exportado para layouts -->

@include('partials._banner') <!-- implementando partials  -->
@include('partials._search')

<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4" >

@foreach($lista as $item)

 <x-lista-card :item="$item"/> <!-- prop item = current $item-->

 @endforeach
    
</div>

<div class="mt-6 p-4">
    {{$lista->links()}} <!-- exibir menu de pagination -->
</div>
@endsection
