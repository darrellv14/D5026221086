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
    <div class="text-center">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="#">5026221086 - Darrell Valentino</a>
            <a class="btn btn-primary mr-2" href="/mahasiswa">Mahasiswa</a>

            <!-- Links -->
            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                  Daftar Database
                </a>

                <div class="dropdown-menu">
                  <a class="dropdown-item" href="/pegawai">Pegawai</a>
                  <a class="dropdown-item" href="/kertashvs">Kertas HVS</a>
                  <a class="dropdown-item" href="/nilaikuliah">Nilai Mahasiswa</a>
                  <a class="dropdown-item" href="/mahasiswa">EAS Mahasiswa</a>
                </div>
            </div>
        </nav>
        <hr />
        <br />
        <br />

        <!-- bagian judul halaman blog -->
        @yield('judul_halaman')

        @yield('header')

        @yield('isihalaman')

        @yield('konten')

        <br />
        <br />
        <hr />
        <footer>
            <nav class="bg-dark navbar-dark mb-0">
                <!-- Brand -->
                <a class="navbar-brand" href="#">5026221086 - Darrell Valentino</a>
                <p class="text-light">&copy; <a href="https://www.malasngoding.com">www.malasngoding.com</a>. 2018 - 2019</p>
                <p class="text-light">&copy; EAS PWEB KELAS D 2023</p>
            </nav>
        </footer>


    </div>



</body>

</html>
