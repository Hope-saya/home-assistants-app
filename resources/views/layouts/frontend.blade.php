<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Home</title>
    @include('partials.frontend.css')
</head>

<body>
    @include('partials.frontend.loader')
    @include('partials.frontend.header')

    <div class="content-wrapper">
        @yield('content')
    </div>

    @include('partials.frontend.footer')
    @include('partials.frontend.js')
    @include('sweetalert::alert')

</body>

</html>