<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Auth')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #0f0f0f; /* Dark background */
            color: #fff;
        }

        .auth-wrapper {
            min-height: 100vh;
        }

        .auth-card {
            background: #1a1a1a;
            border: 1px solid #2b2b2b;
            border-radius: 12px;
        }

        .form-control {
            background: #111;
            color: #fff;
            border: 1px solid #444;
        }

        .form-control:focus {
            border-color: #0d6efd;
            background: #111;
            color: #fff;
            box-shadow: none;
        }

        a {
            color: #72aaff;
        }
        a:hover {
            color: #ffffff;
        }
    </style>
</head>

<body>

<div class="auth-wrapper d-flex justify-content-center align-items-center">
    <main class="w-100 px-3">
        @yield('content')
    </main>
</div>

</body>
</html>
