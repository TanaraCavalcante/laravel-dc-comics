@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<section id="home">
    <div class="container" >
        <div class="row justify-content-center mt-1 p-1">
            <h1 class="col-10 col-md-8 mb-3 text-center" >Hero-movies Library</h1>
            <div class="text-center">
                <img src="{{ asset('images/cinehero.jpeg') }}" alt="Heros">
            </div>
        </div>
    </div>
</section>
@endsection
