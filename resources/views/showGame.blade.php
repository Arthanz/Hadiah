{{-- @extends ('template')

@section ('title', 'Show Games')

@section ('content') --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Game Details') }}
        </h2>
    </x-slot>
<div class="d-flex m-5">
{{-- <div class="card" style="width: 18rem; margin: 1cm">
    <img src="{{asset('/storage/game/'.$games->image)}}" class="card-img-top" alt="..." style="border-radius: 15px>
    <div class="card-body" style="margin: 1rem">
      <h5 class="card-title">{{$games->name}}</h5>
      <h6 class="card-subtitle mb-2 ">Price: {{$games->price}}</h6>
      <p class="card-text mb-2">Publisher {{$games->publisher}}</p>
      <p class="card-text mb-2">Published Date: {{$games->PublishDate}}</p>
<p class="card-text mb-2">Category: {{$games->category->nama}}</p>      <p class="card-text mb-2">Category: {{$games->category->nama}}</p>
      <a href="{{route('edit', $games->id)}}" class="btn btn-success m-1"">Edit Game</a>
      <form action="/delete-game/{{$games->id}}" method="POST">
        @csrf
        @method('delete')
        <button class="btn btn-danger m-1">Delete</button>
    </form> --}}
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin: 1rem">
        <div class=" p-6 text-gray-900 dark:text-gray-100 w-full flex flex-wrap -mx-2 mb-2" style="flex-wrap: wrap">
            <div class="card" style="width: 18rem;margin: 1cm" >
                <img src="{{asset('/storage/game/'.$games->image)}}" class="card-img-top" alt="..." style="border-radius: 15px ">
                <div class="card-body bg-white dark:bg-gray-700 overflow-hidden shadow-sm sm:rounded-lg" style="margin: 1px; margin-top: 5px">
                    <h5 class="card-title" style="color: rgb(163, 217, 250)" >{{$games->name}}</h5>
                    <p class="card-text" style="color: aquamarine">Price: {{$games->price}}</p>
                    <p class="card-text " style="color: rgb(245, 245, 143)">Publisher: {{$games->publisher}}</p>
                    <p class="card-text" style="color: rgb(243, 163, 163)">Published Date: {{$games->PublishDate}}</p>
                    <p class="card-text mb-2" style="color: rgb(253, 170, 230)">Category: {{$games->category->nama}}</p>
                    <a href="{{route('show', $games->id)}}" class="btn btn-primary m-1" style="border-radius: 15px;background-color:rgb(83, 168, 247)">Details</a>
                    <a href="{{route('edit', $games->id)}}" class="btn btn-success m-1" style="border-radius: 15px;background-color:rgb(89, 213, 89)">Edit</a>
                    <form action="/delete-game/{{$games->id}}" method="POST" >
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger m-1" style="border-radius: 15px;background-color:rgb(241, 78, 75)">Delete</button>
                    </form>
                </div>
             </div>
            </div>
          </div>
        </div>
        </div>

    </div>

{{-- @endsection --}}
</x-app-layout>
