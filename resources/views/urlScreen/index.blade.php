@extends('layouts.app')
@section('titre')
    Accueil
@endsection
@section('content')
<h1 class="text-center py-7 text-6xl">top <span class="font-bold">collections </span></h1>
    <form action="/urlScreen" method="POST">
        @csrf
        <div class="mb-4 flex content-center justify-end h-full items-center container mx-auto px-12">
            <div class="max-w-lg  flex content-center justify-center">
                <input id="url" class="border shadow-inner py-2 px-3 text-gray-700 w-full focus:shadow-outline" type="text"  name="name">
                <button id="recherche" type="submit"><div class="bg-green-600 py-3 px-4"><img class="h-6"src="images/search.svg" alt=""></div></button>
            </div>
        </div>
    </form>
<div class="max-w-2xl mx-auto px-4 py-8 lg:max-w-7xl grid grid-cols-1 gap-y-10 sm:grid-cols-2 gap-x-8 lg:grid-cols-3 xl:grid-cols-4  ">
    @foreach ($urlScreens as $urlScreen)
        <div class="bg-white shadow-lg rounded-lg ">
            <img  src="images/{{$urlScreen->url}}" class="rounded-t-lg" alt="scren">
            <div class="p-4">
                <h3 class="text-2xl text-gray-700">{{$urlScreen->name}}</h3>
            </div>
            <div class="bg-slate-500 text-white h-12  flex  items-center text-xl "><img class="h-7"  src="images/card-list.svg" alt="">1254 items</div>
        </div>
    @endforeach
</div>
@endsection