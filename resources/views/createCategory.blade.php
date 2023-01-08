<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="d-flex m-3 flex-wrap">
        @foreach ($category as $g)
        {{-- <p>{{$g->name}}</p> --}}
        <div class="card" style="width: 18rem;margin: 1cm" >
            <div class="card-body">
                <p class="card-text mb-2 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Category: {{$g->nama}}</p>
                <form action="/delete-category/{{$g->id}}" method="POST">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger m-1 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight " style="background-color: red;border-radius: 15cm;">Delete</button>
                </form>

            </div>
        </div>
        @endforeach
    </div>
<div>
    <form action="/store" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label" style="color:white;margin:1rem">New Category Name:</label>
          <input type="text" style="border-radius: 15px 15px 15px 15px;background-color:gray;margin:1rem"class="form-control @error('Judul') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{old('name')}}">
        </div>
        <button type="submit" class="btn btn-primary" style="border-radius: 15px 15px 15px 15px;color:rgb(232, 244, 244);margin:1rem;background-color:rgb(71, 120, 252);">Submit</button>
    </form>
</div>
</x-app-layout>
