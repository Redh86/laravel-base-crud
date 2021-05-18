@extends('layout.app')

@section('title', 'vestiti')

@section('content')
    <h1>AAAAAAAAAAAAAAAAAAAAAAAAAAAAAA</h1>
    @foreach ($vestiti as $vestito)
        @dump($vestito)
    @endforeach
@endsection