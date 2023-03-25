@extends('layouts.app')

@section('content')
<div class="w-4/5 m-auto text center">
    <div class="py-15 border-b border-gray-200">
        <h1 class="text-6xl">
            Dodawanie użytkownika
        </h1>
    </div>
</div>
<div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
    <form action="/admin" method="POST">
        @csrf
        {{-- @method('PUT') --}}
        <div>
            <p class="text-1xl py-3">
                Nazwa użytkownika: <input type="text" id="name" name="name">
            </p>
            <p class="py-3 text-1xl">
                Adres e-mail: <input type="text" id="email" name="email">
            </p>
            <p class="py-3 text-1xl">
                Hasło: <input type="password" id="password" name="password">
            </p>
            <p class="py-3 text-1xl">
                Typ konta (user/work/admin): <input type="text" id="account_type" name="account_type">
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