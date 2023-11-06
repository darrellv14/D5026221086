<!DOCTYPE html>
<html lang="en">
  <head>
    <title>JavaScript</title>
    <link
      rel="apple-touch-icon"
      sizes="180x180"
      href="{{ asset('img/favicon_io/apple-touch-icon.png') }}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="32x32"
      href="{{ asset('img/favicon_io/favicon-32x32.png') }}"
    />
    <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{ asset('img/favicon_io/favicon-16x16.png') }}"
    />
    <link rel="manifest" href="{{ asset('img/favicon_io/site.webmanifest') }}" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/operasi.js') }}"></script>
  </head>
  <body>
    <div class="container">
      <form>
        <div class="form-group">
          <label for="bil1">Bilangan 1 :</label>
          <input type="number" id="bil1" class="form-control" />
        </div>

        <div class="form-group">
          <label for="bil2">Bilangan 2 :</label>
          <input type="number" id="bil2" class="form-control" />
        </div>

        <input type="button" onclick="tambah();" value="Penjumlahan" class="btn btn-primary" />
        <input type="button" onclick="kali();" value="Perkalian" class="btn btn-info" />
        <input type="reset" value="Ulangi" class="btn btn-danger" onclick="jawir();" />

        <h3>
          Hasil Operasi :
          <div id="hasil"></div>
          <div id="jawir"></div>
        </h3>
      </form>
    </div>
  </body>
</html>
