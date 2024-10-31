@extends("layouts.app")

@section("page-title", "Create a new movie")

@section("main-content")
<main>
    <section class="container my-3">

        <div class="row justify-content-center">
            <div class="col-12 col-md-8">

                <form method="POST" action="{{route("movies.update", $movie->id)}}">
                    @method("PUT")
                    @csrf  {{--  mando eu mesmo(form) as informaçoes ao store! --}}

                    <h2 class="col-12 col-md-8 mb-5" >
                        Editing {{$movie->original_title}}:
                    </h2>
                    <div class="mb-3 row">
                      <label for="movie-poster" class="col-sm-3 col-form-label">Addres to the poster</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="movie-poster" name="poster" value="{{$movie->poster}}">
                     </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-original_title" class="col-sm-3 col-form-label">Original Title</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-original_title" name="original_title" value="{{$movie->original_title}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-title" class="col-sm-3 col-form-label">Italian Title</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-title" name="title" value="{{$movie->title}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-description" name="description" value="{{$movie->description}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-genre" class="col-sm-3 col-form-label">Genre</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-genre" name="genre" value="{{$movie->genre}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-actors" class="col-sm-3 col-form-label">Actors</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-actors" name="actors" value="{{$movie->actors}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-director" class="col-sm-3 col-form-label">Direction</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-director" name="director" value="{{$movie->director}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-duration_minutes" class="col-sm-3 col-form-label">Duraction in minutes</label>
                        <div class="col-sm-3">
                        <input type="number" class="form-control" id="movie-duration_minutes" name="duration_minutes" value="{{$movie->duration_minutes}}">
                        </div>
                        <label for="movie-year" class="col-sm-2 col-form-label text-end">Year</label>
                        <div class="col-sm-3">
                        <input type="number" class="form-control " id="movie-year" name="year" value="{{$movie->year}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-country" class="col-sm-3 col-form-label">Country</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-country" name="country" value="{{$movie->country}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-studio" class="col-sm-3 col-form-label">Studio</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-studio" name="studio" value="{{$movie->studio}}">
                        </div>
                    </div>
                    <div class="col-12 col-md-11 text-end">
                        <button type="submit" class="btn btn-success btn-lg my-3">Edit {{$movie->original_title}}</button>
                        <button type="reset" class="btn btn-warning btn-lg my-3">Reset Fields</button>
                        <a href="{{ route("movies.index") }}" class="btn btn-info btn-lg my-5">Back in Home</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>
@endsection
