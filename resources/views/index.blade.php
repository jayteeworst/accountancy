@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Świeże produkty spożywcze prosto z polskiej hurtowni
                </h1>
                <a href="/shop" class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    Przeglądaj ofertę
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2017/11/28/17/15/dark-mood-food-2984168_960_720.jpg" width="700" alt="apple">
        </div>
        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-4xl font-extrabold text-gray-600">
                Lorem ipsum dolor?
            </h2>
            <p class="py-8 text-gray-500 text-l">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos ratione amet est. 
                Debitis porro neque autem ipsam magni aliquam dolorem...
            </p>
            <p class="font-extrabold text-gray-600 text-l pb-9">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium placeat veniam, possimus! Voluptates eveniet atque iste corrupti at animi neque?
            </p>
            <a href="/shop" class="uppercase bg-blue-500 text-gray-100 text-l font-extrabold py-3 px-8 rounded-3xl">
                Sprawdź!
            </a>
        </div>
    </div>
@endsection