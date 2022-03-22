@extends('layouts.main')

@section('content')

<div class="container">
<ul class="list-group text-center">
  <li class="list-group-item mt-5">
      <h2>{{$comic->title}}</h2></li>
  <li class="list-group-item">{{$comic->description}}</li>
  <li class="list-group-item">
      <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </li>
  <li class="list-group-item">{{$comic->price}}</li>
  <li class="list-group-item">{{$comic->series}}</li>
  <li class="list-group-item">{{$comic->sale_date}}</li>
  <li class="list-group-item">{{$comic->type}}</li>
  <li class="list-group-item">
      <a href="{{route('comics.index')}}" class="btn btn-primary"><- TORNA INDIETRO!</a>
    </li>
</ul>
</div>

@endsection