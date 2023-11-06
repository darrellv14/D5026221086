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
    <script>
      function validateForm() {
        console.log("ini baris 34");
        // return false ;
        console.log("ini baris 35");
        return true ;
        console.log("ini baris 36");
      }

      // function validate() {
      //   var bil1 = document.getElementById("bil1");
      //   var bil2 = document.getElementById("bil2");

      //   if (bil1.value == "") {
      //     alert("Bilangan 1 harus diisi");
      //     bil1.placeholder = "Mohon diisi angka"
      //     bil1.focus();
      //     return false;
      //   } if (bil2.value == "") {
      //     alert("Bilangan 2 harus diisi");
      //     bil2.placeholder = "Mohon diisi angka"
      //     bil2.focus();
      //     return false;
      //   }
      // }
      function validateNRP() {
        var nrp = document.getElementById("nrp");

        if (nrp.value == "") {
          alert("NRP harus diisi!");
          return false;
        }

        if (isNaN(nrp.value)) {
          alert("NRP harus berupa angka!");
          return false;
        }

        if (nrp.value.length != 10 ) {
          alert("NRP harus memiliki panjang 10!");
          return false;
        }
      }
    </script>
  </head>
  <body>
    <div class="container">
      <form action="https://www.detik.com" method="post" onsubmit="return validateNRP();">
        <div class="form-group">
          <label for="bil1">Bilangan 1 :</label>
          <input type="number" id="bil1" class="form-control" />
        </div>

        <div class="form-group">
          <label for="bil2">Bilangan 2 :</label>
          <input type="number" id="bil2" class="form-control" />
        </div>

        <div class="form-group">
          <label for="nrp">NRP :</label>
          <input type="text" id="nrp" class="form-control" />
        </div>
        <input type="submit" value="KIRIM" class="btn btn-success">
      </form>
    </div>
  </body>
</html>
