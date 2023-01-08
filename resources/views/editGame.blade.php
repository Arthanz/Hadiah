{{-- @extends('template')

@section('title', 'edit book')

@section('content') --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Game') }}
        </h2>
    </x-slot>
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin: 1rem">
        <div class="m-5">
            <form action="/update-game/{{$games->id}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" style="background-color:rgb(196, 212, 207);border-radius: 15cm" aria-describedby="emailHelp" name="title" value="{{$games->name}}">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">price</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" style="background-color:rgb(196, 212, 207);border-radius: 15cm" name="price" value="{{$games->price}}">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Publisher</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  style="background-color:rgb(196, 212, 207);border-radius: 15cm" name="publisher" value="{{$games->publisher}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Published date</label>
                    <input type="date" class="form-control" id="exampleInputPassword1" name="publishDate" style="background-color:rgb(196, 212, 207);border-radius: 15cm" value="{{$games->PublishDate}}">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Image</label>
                    <input type="file" class="form-control"  style="background-color:rgb(196, 212, 207);border-radius: 15cm" id="exampleInputPassword1" name="image" value="{{$games->image}}">
                   </div>
                   <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Category</label>
                    <select class="form-select" aria-label="Default select example" style="background-color:rgb(196, 212, 207);border-radius: 15cm" name="category">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->nama}}</option>
                        @endforeach
                      </select>
                </div>
                <button type="submit" class="btn btn-primary font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight"  style="background-color:rgb(60, 190, 101);border-radius: 15cm">Submit</button>
              </form>
            </div>

    </div>

{{-- @endsection --}}
</x-app-layout>
