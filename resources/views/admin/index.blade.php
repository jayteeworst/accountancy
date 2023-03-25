@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl mb-8">
            Panel administracyjny
        </h1>
        <a class="border-b-2 pb-2 mt-6 border-dotted italic text-blue-500" href="admin/create">
            Dodaj nowego użytkownika
        </a>
    </div>
</div>
@foreach ($users as $user)
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <div>
        <p class="text-1xl py-3">
            Nazwa użytkownika: {{ $user->name }}
        </p>
        <p class="py-3 text-1xl">
            Adres e-mail: {{ $user->email }}
        </p>
        <p class="py-3 text-1xl">
            Typ konta: {{ $user->account_type }}
        </p>
        <p class="py-3 text-1xl">
            Data i godzina założenia: {{ $user->created_at }}
        </p>        
    </div>  
    <div>
        <a class="border-b-2 pb-2 mt-6 border-dotted italic text-green-500" href="admin/{{ $user->id }}/edit">
            Edytuj &rarr;
        </a>
        <form action="/admin/{{ $user->id }}" class="pt-3" method="POST">
            @csrf
            @method('delete')
            <button class="border-b-2 pb-2 pt-6 border-dotted italic text-red-500">
                Usuń konto &rarr;
            </button>
        </form>      
    </div>     
</div>
@endforeach
@endsection