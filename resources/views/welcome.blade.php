@extends('layouts.app')

@section('title', 'Accueil')

@section('content')
<h1>Nos animaux</h1>

<section>
    @foreach ($animals as $animal)
    <x-animal-card :animal="$animal" />
    @endforeach
</section>
@endsection