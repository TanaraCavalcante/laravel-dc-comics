@extends("layouts.app")

@section("page-title", "show-id")

@section("main-content")
<main class="container">

    <article>
        <div class="d-flex gap-5 m-5" >
            <img src="{{ $movie->poster }}" class="card-img-top" alt="{{ $movie->original_title }}" style="width: 18rem;">
            <div class="card-body">
              <h2 class="card-title">{{ $movie->original_title }}</h2>
              <h4 class="card-subtitle mb-2 text-body-secondary mb-4">{{ $movie->original_title }}</h4>
              <p class="card-text"><strong>Description:</strong> {{ $movie->description }}</p>
              <p class="card-text"><strong>Actors: </strong>{{ $movie->actors }}</p>
              <p class="card-text"><strong>Director: </strong>{{ $movie->director }}</p>
              <p class="card-text"><strong>Sudio: </strong>{{ $movie->studio }}</p>
              <p class="card-text"><strong>Duraction: </strong>{{ $movie->duration_minutes }} minutes.</p>
              <p class="card-text"><strong>Year: </strong>{{ $movie->year }}</p>
              <p class="card-text"><strong>Country origine: </strong>{{ $movie->country }}</p>
              {{-- <a href="{{ route("movies.index") }}" class="btn btn-primary my-5">Back in Home</a> --}}
            </div>
          </div>
    </article>

@endsection
