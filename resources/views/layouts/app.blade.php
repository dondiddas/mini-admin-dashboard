<!DOCTYPE html>
<html>
<head>
<style>
/* Remove SVG arrows from Laravel pagination on Bootstrap 5 */
.page-link svg, 
.page-link svg * {
    display: none !important;
    width: 0 !important;
    height: 0 !important;
    overflow: hidden;
}
/* Sidebar link style */
.sidebar-link {
  display: block;
  padding: 10px 15px;
  border-radius: 8px;
  color: #fff !important; /* force white text */
  background: transparent;
  transition: 0.25s ease;
}

/* Hover effect */
.sidebar-link:hover {
  background: rgba(255, 255, 255, 0.08);
  color: #fff !important;
  transform: translateX(3px);
}

/* Active state */
.active-link {
  background: #0d6efd;
  color: #fff !important;
  font-weight: 600;
  box-shadow: 0 0 8px rgba(13,110,253,0.4);
}

</style>

    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-dark d-flex flex-column" style="min-height: 100vh">

    @include('partials.header')

    <div class="d-flex flex-grow-1">
        @include('partials.sidebar')

        <main class="p-4 flex-grow-1">
            <div class="container-fluid bg-dark">
                @yield('content')
            </div>
        </main>
    </div>

    @include('partials.footer')

</body>
</html>
