@extends('layouts.app')

@section('title', $animal->name)

@section('content')
<h1>{{ $animal->name }}</h1>
<div class="card">
    <img src="{{ asset('images/animaux/' . $animal->photo) }}" alt="{{ $animal->name }}">

    <div class="card-details">
        <p>Espèce : {{ $animal->species }}</p>
        <p>Âge : {{ $animal->age }} ans</p>
        <p>{{ $animal->description }}</p>
    </div>
</div>
@endsection