@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Oferta hurtowni
        </h1>
        @guest
            <h5 class="text-2xl mt-6 text-center">
                Zaloguj się, by móc złożyć zamówienie!
            </h5>
        @else
            @if (Auth::user()->account_type=="work")
                <a class="border-b-2 pb-2 mt-6 border-dotted italic text-blue-500" href="shop/create">
                    Dodaj nowy produkt
                </a>
                <input type="text" class="mt-6 ml-15 border-2 border-black-500" id="myInput" onkeyup="myFunction()" placeholder="Szukaj...">
            @endif            
        @endguest        
    </div>
</div>
@guest    
@else
@foreach ($products as $product)
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <p class="mx-auto border-b flex justify-center text-3xl py-5">
            {{ $product->name }}
        </p>
        <p class="py-3 text-1xl">
            {{ $product->description }}
        </p>
        <p class="py-3 text-1xl">
            Cena (za tonę): {{ $product->price }}
        </p>
        <p class="py-3 text-1xl">
            Dostępność (w kg): {{ $product->available }}
        </p>
        @if(Auth::user()->account_type=="work")
            <a class="border-b-2 py-2 mt-6 border-dotted italic text-green-500" href="shop/{{ $product->id }}/edit">
                Edytuj &rarr;
            </a>
            <form action="shop/{{ $product->id }}" method="POST">
                @csrf
                @method('delete')
                <button class="border-b-2 py-2 mt-6 border-dotted italic text-red-500">Usuń &rarr;</button>
            </form>
        @endif
    </div>
    <div>
        <img src="{{ $product->image_path }}" width="350" alt=" {{ $product->slug }}">
    </div>        
</div>
@endforeach
@endguest
@endsection