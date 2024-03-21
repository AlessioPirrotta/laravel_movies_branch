@extends('layouts.app')

@section('title', ' Movies | Read Create')

@section('main')

<main>
    <h2>Crea Nuovo Fumetto</h2>
    <div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
        <form class="d-flex flex-column" action="{{ route('movies.store') }}" method="POST">

            @csrf

            <label for="title">Titolo:</label>
            <input type="text" id="title" name="title" placeholder="Title" required>

            <label for="plot">Trama:</label>
            <textarea id="plot" name="plot" placeholder="plot"></textarea>

            <label for="thumb">Link copertina:</label>
            <input type="text" id="thumb" name="thumb" placeholder="Thumb">

            <label for="original_lenguage">Lingua Originale:</label>
            <input type="text" id="original_lenguage" name="original_lenguage" placeholder="original_lenguage">

            <label for="vote">Voto:</label>
            <input type="text" id="vote" name="vote" placeholder="vote">


            <label for="director">Regista:</label>
            <input director="text" id="director" name="director" placeholder="director">

            <label for="date">Data:</label>
            <input type="text" id="date" name="date" placeholder="AAAA-MM-DD">

            <div class="d-flex justify-content-center">

                <button style="width: 20%" class="btn btn-warning my-3" type="submit">Crea</button>
            </div>

        </form>

    </div>
</main>

@endsection
