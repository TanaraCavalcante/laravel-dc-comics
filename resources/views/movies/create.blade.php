@extends("layouts.app")

@section("page-title", "Create a new movie")

@section("main-content")
<section id="create">
    <div class="container ">
        <div class="row justify-content-center py-3">
            <h2 class="col-12 col-md-8 mb-5" >Insert a new Hero-movie</h2>
            {{-- Display de validaçao dos dados fornecidos pelo utente --}}
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- form em branco para coleta de dados do usuario--}}
            <div class="col-12 col-md-8">
                <form method="POST" action="{{route("movie.store")}}">
                    @csrf  {{--  mando eu mesmo(form) as informaçoes ao store! --}}
                    <div class="mb-3 row">
                      <label for="movie-poster" class="col-sm-3 col-form-label">Addres to the poster</label>
                      <div class="col-sm-8">
                      <input type="text" class="form-control" id="movie-poster" name="poster" value="{{ old('poster')}}">
                     </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-original_title" class="col-sm-3 col-form-label">Original Title</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-original_title" name="original_title" value="{{ old('original_title')}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-title" class="col-sm-3 col-form-label">Italian Title</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-title" name="title" value="{{ old('title')}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-description" class="col-sm-3 col-form-label">Description</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-description" name="description" value="{{ old('description')}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-genre" class="col-sm-3 col-form-label">Genre</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-genre" name="genre" value="{{ old('genre')}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-actors" class="col-sm-3 col-form-label">Actors</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-actors" name="actors" value="{{ old('actors')}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-director" class="col-sm-3 col-form-label">Direction</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-director" name="director" value="{{ old('director')}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-duration_minutes" class="col-sm-3 col-form-label">Duraction in minutes</label>
                        <div class="col-sm-3">
                        <input type="number" class="form-control" id="movie-duration_minutes" name="duration_minutes" value="{{ old('duration_minutes')}}">
                        </div>
                        <label for="movie-year" class="col-sm-2 col-form-label text-end">Year</label>
                        <div class="col-sm-3">
                        <input type="number" class="form-control " id="movie-year" name="year" value="{{ old('year')}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-country" class="col-sm-3 col-form-label">Country</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-country" name="country" value="{{ old('country')}}">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="movie-studio" class="col-sm-3 col-form-label">Studio</label>
                        <div class="col-sm-8">
                        <input type="text" class="form-control" id="movie-studio" name="studio" value="{{ old('studio')}}">
                        </div>
                    </div>
                    <div class="col-12 col-md-11 text-end">
                        <button type="submit" class="btn btn-success my-3">Insert</button>
                        <button type="reset" class="btn btn-warning  my-3">Reset Fields</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
