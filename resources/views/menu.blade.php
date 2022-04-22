@extends('layout.layout')
@section('title', 'Projeto Inicial')

@section('content')

    <h1>page 2</h1>
    <a href="{{url('/')}}">Voltar</a>
    <ul>
    @foreach ($companies as $comp)
        <li>{{ $comp->name}}</li>
    @endforeach
    </ul>
@endsection
