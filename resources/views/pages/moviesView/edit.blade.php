<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Movie</title>
</head>



<body>
    <h2 class="text-center fs-2 text-primary">
        Editing {{ $movie->title }}
    </h2>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li> {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form method="POST" action={{ route('movies.update', $movie) }}>
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="plot" class="form-label">Plot</label>
            <textarea name="plot" id="plot" rows="1"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="original_lenguage" class="form-label">Original Language</label>
            <input type="text" class="form-control" id="original_lenguage" name="original_lenguage">
        </div>
        <div class="mb-3">
            <label for="vote" class="form-label">Vote</label>
            <input type="number" class="form-control" id="vote" name="vote" step="0.1">
        </div>
        <div class="mb-3">
            <label for="director" class="form-label">Director</label>
            <input type="text" class="form-control" id="director" name="director">
        </div>
        <div class="mb-3">
            <label for="date" class="form-label">Release date</label>
            <input type="number" class="form-control" id="date" name="date">
        </div>
        <button type="submit" class="btn btn-primary">Edita</button>
    </form>
</body>

</html>
