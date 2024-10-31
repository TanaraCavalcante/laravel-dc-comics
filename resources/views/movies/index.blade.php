@extends("layouts.app")

@section("page-title", "Movies-index")

@section("main-content")
    <main class="container">
        <a href="{{ route("movies.create") }}" class="btn btn-outline-info my-3">Add New Movie</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Original Title</th>
                    <th scope="col">Actors</th>
                    <th scope="col">Studio</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($movies as $movie)
                <tr>
                    <th scope="row">{{ $movie->original_title}}</th>
                    <td>{{ $movie->actors}}</td>
                    <td>{{ $movie->studio}}</td>
                    <td class="px-2">{{ $movie->year}}</td>
                    <td>
                        <a href="{{ route("movies.show", $movie->id)}}" class="btn btn-sm btn-outline-warning">Show</a>
                        <a href="{{ route("movies.edit", $movie->id)}}" class="btn btn-sm btn-outline-success">Edit</a>
                        <a href="#" class="btn btn-sm btn-outline-danger">Delete</a>
                    </td>
                </tr>
            @empty
            </tbody>
        </table>
            <h1>No movies are avaliable at the moment...</h1>
            @endforelse
    </main>
@endsection
