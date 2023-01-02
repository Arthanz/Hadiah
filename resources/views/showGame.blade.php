@extends ('template')

@section ('title', 'Show Games')

@section ('content')

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{$games->name}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">{{$games->price}}</h6>
      <p class="card-text">{{$games->genre}}</p>
      <p class="card-text">{{$games->PublishDate}}</p>
      <a href="#" class="card-link">Card link</a>
      <a href="#" class="card-link">Another link</a>
    </div>
  </div>
@endsection