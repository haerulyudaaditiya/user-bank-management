<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('header')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-
QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Ensure the entire page is a flexbox container */
        html,
        body {
            height: 100%;
        }

        /* Flexbox column layout */
        body {
            display: flex;
            flex-direction: column;
        }

        /* The main content should grow and fill available space */
        .content {
            flex-grow: 1;
        }

        .container.content {
            padding-top: 2rem;
        }

        /* Footer should naturally appear at the bottom */
        footer {
            background-color: #343a40;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }
    </style>
    @stack('css')
</head>

<body>
    @yield('content')
    @include('footer')
    @stack('javascript')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
    YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
