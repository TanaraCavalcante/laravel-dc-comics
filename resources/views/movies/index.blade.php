@extends("layouts.app")

@section("page-title", "Movies-index")

@section("main-content")
    <main class="container">
        <button class="btn btn-secondary">Add new movie</button>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Original Title</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Studio</th>
                    <th scope="col">Year</th>
                </tr>
            </thead>
            <tbody>
            @forelse ($movies as $movie)
                <tr>
                    <th scope="row">{{ $movie->original_title}}</th>
                    <td >{{ $movie->title}} </td>
                    <td>{{ $movie->description}}</td>
                    <td>{{ $movie->studio}}</td>
                    <td>{{ $movie->year}}</td>
                    <td>
                        <button class="btn btn-sm btn-secondary">show</button>
                    </td>
                </tr>
            @empty
            </tbody>
        </table>
            <h1>No movies are avaliable at the moment...</h1>
            @endforelse
    </main>
@endsection
