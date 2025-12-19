@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<h2>Nos animaux</h2>

<section>
    @foreach ($animals as $animal)
    <article>

        <a href="{{ route('animals.show', $animal->id) }}">
            <img src="{{ asset('images/animaux/' . $animal->photo) }}" alt="{{ $animal->name }}">
        </a>

        <h3>{{ $animal->name }}</h3>

        <p>Espèce : {{ $animal->species }}</p>
        <p>Age : {{ $animal->age }} ans</p>
        <p>{{ $animal->description }}</p>
        <nav>
            <a href="{{ route('animals.edit', $animal->id) }}">Modifier</a>
            <a href="{{ route('animals.delete', $animal->id) }}">Supprimer</a>
        </nav>
    </article>
    <hr>
    @endforeach
    @endsection
</section>