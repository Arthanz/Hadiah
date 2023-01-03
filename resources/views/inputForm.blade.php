@extends('template')

@section('title','Home page')
@section ('content')
<div class="m-5">
    <h1 class="text-center">Create Game</h1>
    <form action="/form" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Price</label>
          <input type="text" class="form-control" id="exampleInputPassword1" name="price">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Genre</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="genre">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Publish Date</label>
            <input type="date" class="form-control" id="exampleInputPassword1" name="PublishDate">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Image</label>
          <input type="file" class="form-control" id="exampleInputPassword1" name="image">
         </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
  @endsection