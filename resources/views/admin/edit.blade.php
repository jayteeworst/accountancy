@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Edycja użytkownika {{ $user->id }}
        </h1>
    </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <form action="/admin/{{ $user->id }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <p class="text-1xl py-3">
                Nazwa użytkownika: {{ $user->name }}
            </p>
            <p class="py-3 text-1xl">
                Adres e-mail: {{ $user->email }}
            </p>
            <p class="py-3 text-1xl">
                <input type="text" value="{{ $user->account_type }}" name="account_type">
            </p>
            <p class="py-3 text-1xl">
                Data i godzina założenia: {{ $user->created_at }}
            </p>        
        </div>  
        <div>
            <button type="submit" class="bg-green-500 block shadow-5xl mb-10 p-2 w-80 uppercase font-bold">
                Zastosuj zmiany    
            </button>     
        </div>   
    </form>  
</div>
@endsection