<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Series Home</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<div class="container">
    <h1>Series CRUD</h1>
    <h2>Series List</h2>

    <table class="form-table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Genre</th>
            <th>Seasons</th>
            <th>Episodes</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($series as $serie)
            <tr>
                <td>{{ $serie->id }}</td>
                <td>{{ $serie->title }}</td>
                <td>{{ $serie->genre }}</td>
                <td>{{ $serie->seasons }}</td>
                <td>{{ $serie->episodes }}</td>
                <td>{{ $serie->description }}</td>
                <td>
                    <div style="display: flex; gap: 10px;">
                        <a href="{{ route('series.edit', $serie->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('series.destroy', $serie->id) }}" method="POST" style="margin: 0;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <a href="{{ route('series.create') }}">
        <button class="btn btn-primary">Add New Series</button>
    </a>
</div>
</body>
</html>
