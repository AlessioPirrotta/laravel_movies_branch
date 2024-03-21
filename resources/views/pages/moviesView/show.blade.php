@extends('layouts.app')

@section('title', 'Movie SHOW')

@section('main')
<main class="text-center bg-dark-subtle">
    <h2>{{ $movie->title }}</h2>

    <p>{{ $movie->plot }}</p>

</main>
@endsection
