@extends('template')

@section('title','Home page')
    
@section ('content')
<div class="d-flex m-5">
    @foreach ($games as $g)
    {{-- <p>{{$g->name}}</p> --}}
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{$g->name}}</h5>
            <p class="card-text">{{$g->price}}</p>
            <p class="card-text">{{$g->genre}}</p>
            <p class="card-text">{{$g->PublishDate}}</p>
            <a href="/show-game/{{$g->id}}" class="btn btn-primary m-1" >Go somewhere</a>
            <a href="/show-game/{{$g->id}}" class="btn btn-success m-1">Edit</a>
            <a href="/show-game/{{$g->id}}" class="btn btn-danger m-1">Delete</a>
        </div>
    </div>
    @endforeach
</div>


@endsection