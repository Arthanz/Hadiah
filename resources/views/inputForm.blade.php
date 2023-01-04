@extends('template')

@section('title','Home page')
@section ('content')
<div class="m-5">
    <h1 class="text-center">Create Game</h1>
    <form action="/form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control  @error('name') is-invalid @enderror" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" value="{{old('name')}}">
          @error('name')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Price</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="price"  value="{{old('price')}}" >
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Publisher</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="publisher"  value="{{old('publisher')}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Publish Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="PublishDate"  value="{{old('PublishDate')}}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Image</label>
          <input type="file" class="form-control" id="exampleInputPassword1" name="image"  value="{{old('image')}}">
         </div>
         <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Category</label>
            <select class="form-select" aria-label="Default select example" name="category">
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->nama}}</option>
                @endforeach
              </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
  @endsection
