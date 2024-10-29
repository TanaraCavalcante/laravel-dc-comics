@extends("layouts.app")

@section("page-title", "Homepage")

@section("main-content")
<main class="container">
    <article>
        @forelse ($collection as $item)

        @empty

        @endforelse
    </article>
@endsection
