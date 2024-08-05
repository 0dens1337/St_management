<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-white">
@include('includes.header')

<div class="container-fluid">
    <div class="row">
        @auth
            <div id="sidebar" class="col-md-3 col-lg-2 p-0 bg-white">
                @include('includes.sidebar')
            </div>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4 mt-2">
                @yield('content')
            </main>
        @else
            <main role="main" class="col-md-12 px-md-4">
                @yield('content')
            </main>
        @endauth
    </div>
</div>

@include('includes.footer')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.1/dist/Chart.min.js"></script>

</body>
</html>
