{{-- <!doctype html>
<html lang="en">

<head>
    @include('sections.head')
</head>

<body class="body">
    @include('sections.navbar')
    <main>
        @yield('content')
    </main>
    @include('sections.footer')
    <script src="{{ mix('js/app.js') }}"></script>
</body>

</html> --}}

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('sections.head')
</head>

<body class="body">
    <div id="app" class="app">
        <div class="page-content-wrapper">
            @include('sections.navbar')
            <div class="container-fluid main-container fade-in">
                @yield('content')
            </div>
        </div>

    </div>
    <script src="{{ mix('js/app.js') }}"></script>
</body>
@include('sections.footer')

</html>
