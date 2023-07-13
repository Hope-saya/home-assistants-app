<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - Dashboard</title>
    @include ('partials.dashboard.css')
   
</head>

<body>

    <div class="container-scroller">
        @include ('partials.dashboard._navbar')
        <div class="container-fluid page-body-wrapper">

            @include ('partials.dashboard._sidebar')

            <div class="main-panel">
                <div class="content-wrapper">
                    @yield('content')
                </div>
                @include ('partials.dashboard._footer')
            </div> 
        </div>
    </div>

    @include ('partials.dashboard.js')

</body>

</html>