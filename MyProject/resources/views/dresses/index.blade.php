@extends('layout.app')

@section('title', 'vestiti')

@section('content')

    <a href="{{ route('vestiti.create')}}" class="btn btn-primary">Inserisci nuovo Vestito</a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Marca</th>
            <th scope="col">Taglia</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Descrizione</th>
            <th scope="col">Detail</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($vestiti as $vestito)
                <tr>
                    <th scope="row">{{$vestito['id']}}</th>
                    <td>{{$vestito['nome']}}</td>
                    <td>{{$vestito['marca']}}</td>
                    <td>{{$vestito['taglia']}}</td>
                    <td>{{$vestito['prezzo']}}€</td>
                    <td>{{$vestito['descrizione']}}</td>
                    <td>
                        <a href="{{route('vestiti.show', ['vestiti' => $vestito -> id])}}" class="btn btn-info">Dettagli</a>
                        <a href="{{route('vestiti.edit', ['vestiti' => $vestito -> id])}}" class="btn btn-warning">Modifica</a>
                        <form action="{{route('vestiti.destroy', ['vestiti' => $vestito -> id])}}" method='post'>
                          @csrf
                          @method('delete')
                          <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
@endsection