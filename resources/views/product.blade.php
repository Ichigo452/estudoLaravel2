@extends('layouts.main')

@section('title', 'Produto')

@section('content')
@if ($id != null)
    <h1>Produto {{ $id }}</h1>
@endif
@endsection
