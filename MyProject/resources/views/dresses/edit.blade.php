@extends('layout.app')

@section('title', 'Inserimento Vestiti')

@section('content')

  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('vestiti.update', $vestiti->id) }}" method="POST">
      @csrf
      @method('put')
      <h1>Modifica i parametri</h1>
      <div class="form-group">
        <label for="name">Nome</label>
        <input type="text" class="form-control" name='name' id="name" value="{{$vestiti -> name}}">
      </div>
      <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" name='marca' id="marca" value="{{$vestiti -> marca}}">
      </div>
      <div class="form-group">
        <label for="taglia">Taglia</label>
        <input type="text" class="form-control" name='taglia' id="taglia" value="{{$vestiti -> taglia}}">
      </div>
      <div class="form-group">
        <label for="prezzo">Prezzo</label>
        <input type="number" class="form-control" name='prezzo' id="prezzo" value="{{$vestiti -> prezzo}}">
      </div>
      <div class="form-group">
        <label for="descrizione">Descrizione</label>
        <input type="text" class="form-control" name='descrizione' id="descrizione" value="{{$vestiti -> descrizione}}">
      </div>

      <button type="submit" class="btn btn-default">Submit</button>
  </form>

@endsection