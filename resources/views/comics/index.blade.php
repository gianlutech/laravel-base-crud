@extends('layouts.main')

@section('content')

<div class="container">
    <div class="add text-center">
        <a href="{{route('comics.create')}}" class="btn btn-success">+AGGIUNGI+</a>
    </div>
<ul class="list-group">
    @forelse($comics as $comic)
  <li class="list-group-item mt-5">{{$comic->title}}</li>
  <li class="list-group-item">{{$comic->description}}</li>
  <li class="list-group-item">
      <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    </li>
  <li class="list-group-item">{{$comic->price}}</li>
  <li class="list-group-item">{{$comic->series}}</li>
  <li class="list-group-item">{{$comic->sale_date}}</li>
  <li class="list-group-item">{{$comic->type}}</li>
  <li class="list-group-item d-flex">
      <a href="{{route('comics.show', $comic->id)}}" class="btn btn-primary mx-2">SCOPRI DI PIU'</a>
      <a href="{{route('comics.edit', $comic->id)}}" class="btn btn-warning mx-2">MODIFICA</a>
      <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger mx-2">ELIMINA</button>
      </form>
    </li>
  @empty
  <li class="list-group-item">
      <h3>NESSUN COMIC!!</h3>
  </li>
  @endforelse
</ul>
</div>

@endsection