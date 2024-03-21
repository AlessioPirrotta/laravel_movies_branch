@extends('layouts.app')

@section('title', 'FILMFLIX index')

@section('content')
     <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">FILMFLIX</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                  </li>

                </ul>
              </div>
            </div>
          </nav>
     </header>

        <main class="text-center bg-dark-subtle">
            <style>

                .card-container {
                    display: flex;
                    flex-wrap: wrap;
                    justify-content: center;
                    margin: 0 -10px;
                }
                .card {
                    margin: 10px;
                    border: 1px solid #ddd;
                    border-radius: 5px;
                    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                    transition: 0.3s;
                    flex-basis: calc(20% - 20px);
                }
                .card:hover {
                    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.8);
                }

            </style>
                {{-- <a href="{{route('movies.create') }}" class="btn btn-primary">Crea il Tuo film</a>

            <div class="card-container p-5">
                @foreach ($movies as $movie)
                    <div class="card text-start">
                        <img src="{{ $movie->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body p-3">
                            <h6>plot: {{ $movie->plot }}</h6>
                            <h4>Language: {{ $movie->original_lenguage }}</h4>
                            <h5>vote: {{ $movie->vote }}</h5>
                            <h5>director By: {{ $movie->director }}</h5>
                            <h5>date: {{ $movie->date }}</h5>


                            <button
                            type="submit"
                            class="btn btn-primary">
                            Edit
                            </button>
                            <button
                            type="submit"
                            class="btn btn-danger">
                             Delete
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
     </main> --}}
@endsection
