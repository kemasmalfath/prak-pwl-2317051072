<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    {{-- NAVBAR --}}
    @if(!isset($noNavbar) || !$noNavbar)
        @include('components.navbar')
    @endif
    
    {{-- CONTENT --}}
    <div class="main-content">
        @yield('content')
    </div>
    
    {{-- FOOTER --}}
    @if(!isset($noFooter) || !$noFooter)
        @include('components.footer')
    @endif
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>