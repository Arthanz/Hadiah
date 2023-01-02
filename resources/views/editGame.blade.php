@extends ('template')

@section ('title', 'Edit Game')

@section('content')
<form action="/update-game/{{$game->id}}" method="POST">
    @csrf
    @method('patch')
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Title</label>
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{$game->name}}">
      <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Price</label>
      <input type="text" class="form-control" id="exampleInputPassword1" name="price" value="{{$game->price}}">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Genre</label>
        <input type="number" class="form-control" id="exampleInputPassword1" name="genre" value="{{$game->genre}}">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">published date</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="publishDate" value="{{$game->PublishDate}}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection