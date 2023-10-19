<!doctype html>
<html lang="en">

<head>
    @include('sections.head')
</head>

<body>
    {{-- <div class="bg"> --}}
    @include('sections.navbar')
    <main>
        @yield('content')
    </main>
    @include('sections.footer')
    <script src="{{ mix('js/app.js') }}"></script>
    {{-- </div> --}}

</body>

</html>
