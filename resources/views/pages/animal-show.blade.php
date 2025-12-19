@extends('layouts.app')

@section('title', $animal->name)

@section('content')
<h2>{{ $animal->name }}</h2>
<div class="card">
    <img src="{{ asset('images/animaux/' . $animal->photo) }}" alt="{{ $animal->name }}">

    <div class="card-details">
        <p>Espèce : {{ $animal->species }}</p>
        <p>Âge : {{ $animal->age }} ans</p>
        <p>{{ $animal->description }}</p>
    </div>
</div>
@endsection