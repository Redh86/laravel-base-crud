@extends('layout.app')

@section('title', 'Home')
    
@section('content')
    <h1>Hello World</h1>
    <a href="{{ route('vestiti.index')}}">Link a Vestiti</a>
@endsection