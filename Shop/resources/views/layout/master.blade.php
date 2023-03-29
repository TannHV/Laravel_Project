<!DOCTYPE html>
<html lang="en">

<head>
    @include('layout.header')
</head>

<body>
    @include('layout.navbar')
    
    @yield('body')

    @include('layout.footer')
    @include('layout.scripts')
</body>

</html>
