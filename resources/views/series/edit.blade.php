<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Series</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <h1>Edit Series</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('series.update', $serie->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- Use PUT for updating the resource -->

        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $serie->title) }}" required>
        </div>

        <div class="form-group">
            <label for="genre">Genre:</label>
            <input type="text" name="genre" id="genre" class="form-control" value="{{ old('genre', $serie->genre) }}" required>
        </div>

        <div class="form-group">
            <label for="seasons">Seasons:</label>
            <input type="number" name="seasons" id="seasons" class="form-control" value="{{ old('seasons', $serie->seasons) }}" required>
        </div>

        <div class="form-group">
            <label for="episodes">Episodes:</label>
            <input type="number" name="episodes" id="episodes" class="form-control" value="{{ old('episodes', $serie->episodes) }}" required>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea name="description" id="description" class="form-control" required>{{ old('description', $serie->description) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Update Series</button>
    </form>

    <a href="{{ route('home') }}" class="btn btn-custom">Back to Home</a>
</div>

</body>
</html>
