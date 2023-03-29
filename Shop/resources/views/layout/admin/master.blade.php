<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout.admin.head')
</head>
<body class="sb-nav-fixed">
    @include('layout.admin.navbar')
    <div id="layoutSidenav">
        @include('layout.admin.slidebar')
        <div id="layoutSidenav_content">
            @yield('content')
            @include('layout.admin.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="/js/scripts.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script src="/assets_2/demo/chart-area-demo.js"></script>
    <script src="/assets_2/demo/chart-bar-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
    <script src="/js/datatables-simple-demo.js"></script>
</body>
</html>
