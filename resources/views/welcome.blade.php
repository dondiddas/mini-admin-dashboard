<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Directory System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #e4e4e4;
        }

        .btn-primary {
            background-color: #0d6efd;
            border:none;
        }

        .btn-primary:hover {
            background-color: #0b5ed7;
        }

        a {
            color: #0d6efd;
        }
        a:hover {
            color: #3e91ff;
        }

        .card-box {
            background: #1e1e1e;
            border: 1px solid #2e2e2e;
        }
    </style>
</head>
<body class="d-flex justify-content-center align-items-center" style="height: 100vh;">

<div class="container text-center p-5 card-box rounded-4 shadow-lg" style="max-width: 450px;">
    
    <h1 class="mb-3 fw-bold text-white">Student Directory System</h1>

    <p class="mb-4 text-light">
        Easily manage student information and maintain secure academic records.
        <br><br>
        Please login to begin.
    </p>

    <a href="{{ route('login') }}" class="btn btn-primary mb-3 w-100 py-2 fw-semibold">Login</a>

    {{-- Optional registration link for admins only --}}
    <a href="{{ route('dashboard.register') }}" class="text-decoration-none">
        <small> Register a User (Admin Access)</small>
    </a>

</div>

</body>
</html>
