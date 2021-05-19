@extends('layout.app')

@section('title', 'Inserimento Vestiti')

@section('content')

  <form action="{{ route('vestiti.store')}}" method="POST ">
      @csrf
      @method('post')

      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name='name' id="name">
      </div>
      <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" name='marca' id="marca">
      </div>
      <div class="form-group">
        <label for="taglia">Taglia</label>
        <input type="text" class="form-control" name='taglia' id="taglia">
      </div>
      <div class="form-group">
        <label for="prezzo">Prezzo</label>
        <input type="number" class="form-control" name='prezzo' id="prezzo">
      </div>
      <div class="form-group">
        <label for="descrizione">Descrizione</label>
        <input type="text" class="form-control" name='descrizione' id="descrizione">
      </div>

      <button type="submit" class="btn btn-default">Submit</button>
  </form>

@endsection