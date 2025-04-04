<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Swipe – The Simplest Chat Platform</title>
    <meta name="description" content="#">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/lib/bootstrap.min.css') }}" type="text/css" rel="stylesheet">
    <!-- Swipe core CSS -->
    <link href="{{ asset('assets/css/swipe.min.css') }}" type="text/css" rel="stylesheet">
    <!-- Favicon -->
    <link href="{{ asset('assets/img/favicon.png') }}" type="image/png" rel="icon">
    <!-- Box Icon CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <main>
        @yield('content')
    </main>

    <script src="{{ asset('assets/js/jquery-3.3.1.slim.min.js') }}"></script>
    <script>
        window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
    <script src="{{ asset('assets/js/vendor/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/swipe.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script>
        function scrollToBottom(el) {
            el.scrollTop = el.scrollHeight;
        }
        scrollToBottom(document.getElementById('content'));
    </script>
</body>

</html>
