{{-- @extends('template')

@section('title','Home page')

@section ('content') --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin: 1rem" >
        <div class=" p-6 text-gray-900 dark:text-gray-100 d-flex m-3 flex-wrap">
            @foreach ($games as $g)
            <div class="card" style="width: 18rem;margin: 1cm" >
                <img src="{{asset('/storage/game/'.$g->image)}}" class="card-img-top" alt="..." style="border-radius: 15px ">
                <div class="card-body bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg" style="margin: 1px; margin-top: 5px">
                    <h5 class="card-title" style="color: rgb(163, 217, 250)" >{{$g->name}}</h5>
                    <p class="card-text" style="color: aquamarine">Price: {{$g->price}}</p>
                    <p class="card-text " style="color: rgb(245, 245, 143)">Publisher: {{$g->publisher}}</p>
                    <p class="card-text" style="color: rgb(243, 163, 163)">Published Date: {{$g->PublishDate}}</p>
                    <a href="{{route('show', $g->id)}}" class="btn btn-primary m-1" style="border-radius: 15px;background-color:rgb(83, 168, 247)">Details</a>
                    <a href="{{route('edit', $g->id)}}" class="btn btn-success m-1" style="border-radius: 15px;background-color:rgb(89, 213, 89)">Edit</a>
                    <form action="/delete-game/{{$g->id}}" method="POST" >
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger m-1" style="border-radius: 15px;background-color:rgb(241, 78, 75)">Delete</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
{{-- @endsection --}}
</x-app-layout>
