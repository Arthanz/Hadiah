@extends('template')

@section('title', 'edit book')

@section('content')
<div class="m-5">
  <h1 class="text-center">Edit Game</h1>
<form action="/update-game/{{$games->id}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{$games->name}}">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">price</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="price" value="{{$games->price}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Publisher</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="publisher" value="{{$games->publisher}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">published date</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="publishDate" value="{{$games->PublishDate}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Image</label>
        <input type="file" class="form-control" id="exampleInputPassword1" name="image" value="{{$games->image}}">
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
