<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f3f2f7;
            color: #333;
        }
       
      .green-text {
        color: green;
        }
        .badge {
        display: inline-block;
        padding: 5px 10px;
        border-radius: 20px;
        font-size: 14px;
        font-weight: bold;
        text-align: center;
    }

    .badge-danger {
        background-color: purple;
        color: #fff;
    }

        header {
            background-color: #bb6cba;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        nav {
            background-color:purple;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0.5rem;
        }

        nav a {
            color: #fff;
            margin: 0 1rem;
            text-decoration: none;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 1rem;
        }

        .post {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 1rem;
            margin-bottom: 1rem;
        }

        .post h2 {
            margin-top: 0;
        }

        .post p {
            margin-bottom: 0;
        }

        footer {
            background-color: #bb6c6c;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        .filter-icons {
            font-size: 20px;
            margin-right: 10px;
        }

        .filter-container {
            display: flex;
            align-items: center;
        }
    </style>
</head>
<body>
    <nav>
        <div class="filter-container">
            <i class="filter-icons"></i><a href={{ route('home') }}>Home</a>
            <i class="filter-icons"></i><a href={{ route('home') }}>About</a>
            <i class="filter-icons"></i><a href="mailto:info@homeAid.com">Contact</a> 
        </div>
    </nav>

   

    <div class="container">
        @yield('content')
    </div>

    <footer>
        &copy; {{ date('Y') }} homeAid. All rights reserved.
    </footer>
    @include('sweetalert::alert')
</body>
</html>
