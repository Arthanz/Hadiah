@extends('template')

@section('title','Home page')
    
@section ('content')
    <h1>berhasil</h1>
    @foreach ($games as $g)
    <p>{{$g->name}}</p>
    @endforeach

@endsection