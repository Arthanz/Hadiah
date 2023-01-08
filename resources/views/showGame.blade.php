@extends ('template')

@section ('title', 'Show Games')

@section ('content')
<div class="d-flex m-5">
<div class="card" style="width: 18rem; margin: 1cm">
    <img src="{{asset('/storage/game/'.$games->image)}}" class="card-img-top" alt="...">
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
    </form>
    </div>
  </div>
</div>
@endsection
