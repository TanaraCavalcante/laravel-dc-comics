<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("page-title", "")</title>

</head>
<body>
    {{-- inserisce il header --}}
    @include("partials.header")

    {{-- Inserisce contenuti da chi estende --}}
    <main>
        @yield("main-content")
    </main>

    {{-- Inserisce il footer --}}
    @include("partials.footer")

    @yield("additional-scripts")
    @vite("resources/js/app.js")
</body>
</html>
