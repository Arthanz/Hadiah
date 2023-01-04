@extends ('template')

@section ('title', 'Show Games')

@section ('content')

<div class="card" style="width: 18rem;">
    <div class="card-body" style="margin: 1cm">
      <h5 class="card-title">{{$games->name}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">Price: {{$games->price}}</h6>
      <p class="card-text">Genre: {{$games->genre}}</p>
      <p class="card-text">Published Date: {{$games->PublishDate}}</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
@endsection