<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Series</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <h1>Create New Series</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('series.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control"
                   value="{{ old('title') }}" required maxlength="250">
        </div>

        <div class="form-group">
            <label for="genre">Genre:</label>
            <input type="text" name="genre" id="genre" class="form-control"
                   value="{{ old('genre') }}" required>
        </div>

        <div class="form-group">
            <label for="seasons">Seasons:</label>
            <input type="number" name="seasons" id="seasons" class="form-control"
                   value="{{ old('seasons') }}" required min="1" max="100">
        </div>

        <div class="form-group">
            <label for="episodes">Episodes:</label>
            <input type="number" name="episodes" id="episodes" class="form-control"
                   value="{{ old('episodes') }}" required min="1" max="2000">
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control"
                      required maxlength="100" rows="5" placeholder="Max 100 words "></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Create Series</button>
    </form>

    <a href="{{ route('home') }}" class="btn btn-custom">Back to Home</a>
</div>
</body>
</html>
