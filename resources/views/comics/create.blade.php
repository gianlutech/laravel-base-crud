@extends('layouts.main')


@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center">
        <h1 class="mb-5">Aggiungi un fumetto</h1>
        <a href="{{route('comics.index')}}" class="btn btn-secondary">INDIETRO</a>
    </div>
<form action="{{route('comics.store')}}" method="POST">
    @csrf
<div class="row">
<div class="mb-3 col-6">
  <label for="title" class="form-label">Titolo</label>
  <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo...">
</div>
<div class="mb-3 col-6">
  <label for="type" class="form-label">Genere</label>
  <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il genere">
</div>
<div class="mb-3 col-6">
  <label for="thumb" class="form-label">Copertina</label>
  <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci un' immagine">
</div>
<div class="mb-3 col-6">
  <label for="price" class="form-label">Prezzo</label>
  <input type="number" class="form-control" id="price" name="price" min="0" placeholder="Inserisci il prezzo">
</div>
<div class="mb-3 col-6">
  <label for="series" class="form-label">Serie</label>
  <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie">
</div>
<div class="mb-3 col-6">
  <label for="sale_date" class="form-label">Data di vendita</label>
  <input type="date" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di vendita">
</div>

<div class="mb-3 col">
  <label for="description" class="form-label">Descrizione</label>
  <textarea class="form-control" id="description" name="description" rows="3"></textarea>
</div>
<div class="d-flex align-items-center justify-content-end">
    <button type="reset" class="btn btn-danger mx-2">Cancella</button>
    <button type="submit" class="btn btn-success mx-2">Aggiungi</button>
</div>
</div>
</form>
</div>
@endsection