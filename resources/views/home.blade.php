@extends('template')

@section('title','Home page')
    
@section ('content')
<div class="d-flex m-5">
    @foreach ($games as $g)
    {{-- <p>{{$g->name}}</p> --}}
    <div class="card" style="width: 18rem;">
        <img src="{{asset('/storage/game/'.$g->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{$g->name}}</h5>
            <p class="card-text">{{$g->price}}</p>
            <p class="card-text">{{$g->genre}}</p>
            <p class="card-text">{{$g->PublishDate}}</p>
            <a href="{{route('show', $g->id)}}" class="btn btn-primary m-1" >Go somewhere</a>
            <a href="{{route('edit', $g->id)}}" class="btn btn-success m-1">Edit</a>
            <form action="/delete-game/{{$g->id}}" method="POST">
                @csrf
                @method('delete')
                <button class="btn btn-danger m-1">Delete</button>
            </form>
            
        </div>
    </div>
    @endforeach
</div>


@endsection