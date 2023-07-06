<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Dashboard</title>
    @include ('partials.dashboard.css')
   
</head>

<body>
    {{-- @include ('partials.dashboard._sidebar') --}}
    @include ('partials.dashboard._navbar')


    <div class="container-scroller">
        @yield('content')
    </div>

    @include ('partials.dashboard._footer')
    @include ('partials.dashboard.js')

</body>

</html>