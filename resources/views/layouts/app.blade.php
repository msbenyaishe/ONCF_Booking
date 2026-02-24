<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ONCF Booking</title>
    @vite(['resources/css/style.css', 'resources/js/app.js'])
</head>
<body class="auth-layout">

    @include('partials.navbar')

    <main class="main-content" style="padding-top: 2rem;">
        @yield('content')
    </main>

    <footer class="site-footer">
        <p>© {{ date('Y') }} ONCF Booking. Seamless travel from start to finish.</p>
    </footer>

</body>
</html>