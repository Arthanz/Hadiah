{{-- @extends('template')

@section('title','Home page')
@section ('content') --}}
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create Game') }}
        </h2>
    </x-slot>

<div  class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg" style="margin: 1rem">
    <div class="m-5">
    <form action="/form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Name</label>
          <input type="text"  style="background-color:rgb(196, 212, 207);border-radius: 15cm" class="form-control  @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{old('name')}}">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1"class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Price</label>
          <input type="text"  style="background-color:rgb(196, 212, 207);border-radius: 15cm" class="form-control" id="exampleInputPassword1" name="price"  value="{{old('price')}}" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Publisher</label>
            <input type="text"  style="background-color:rgb(196, 212, 207);border-radius: 15cm"  class="form-control" id="exampleInputPassword1" name="publisher"  value="{{old('publisher')}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Publish Date</label>
            <input type="date"  style="background-color:rgb(196, 212, 207);border-radius: 15cm" class="form-control" id="exampleInputPassword1" name="PublishDate"  value="{{old('PublishDate')}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Image</label>
          <input type="file"  style="background-color:rgb(196, 212, 207);border-radius: 15cm" class="form-control" id="exampleInputPassword1" name="image"  value="{{old('image')}}">
         </div>
         <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Category</label>
            <select  style="background-color:rgb(196, 212, 207);border-radius: 15cm" class="form-select" aria-label="Default select example" name="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->nama}}</option>
                @endforeach
              </select>
        </div>
        <button type="submit"   style="background-color:rgb(23, 214, 96);border-radius: 15cm" class="btn btn-primary font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Submit</button>
    </form>
    </div>
</div>
  {{-- @endsection --}}
</x-app-layout>
