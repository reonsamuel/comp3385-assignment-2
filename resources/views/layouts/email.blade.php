<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>COMP3385 - Assignment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-light">

<div class="container my-5 text-center">
    <img class="my-10 img-fluid" src="{{ asset('images/UWI-Wordmark.webp') }}" alt="UWI Wordmark" width="300" />
    <div class="card p-6 p-lg-10 space-y-4 text-start">
        <div class="card-body">
            <h1 class="card-title">
                Website Feedback
            </h1>

            @yield('content')
        </div>
    </div>
</div>

</body>
</html>
