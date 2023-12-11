<!DOCTYPE html>
<html>

<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-light bg-secondary">
        <div class="col">
            <div class="row-12">
                <h6 class="my-4 text-center">5026221086 - Darrell Valentino</h6>
            </div>
        </div>
    </nav>

    <div class="container">
        <!-- bagian judul halaman blog -->
        @yield('judul_halaman')

        @yield('header')

        @yield('isihalaman')

        @yield('konten')

        <br />
        <br />
        <hr />
        <footer>
            <p>&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
        </footer>


    </div>



</body>

</html>
