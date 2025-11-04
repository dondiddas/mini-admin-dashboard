<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light d-flex flex-column" style="min-height: 100vh">

    @include('partials.header')

    <div class="d-flex flex-grow-1">
        @include('partials.sidebar')

        <main class="p-4 flex-grow-1">
            <div class="container-fluid">
                @yield('content')
            </div>
        </main>
    </div>

    @include('partials.footer')

</body>
</html>
