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
      var isReplaced = false;
      function changeText() {
        var textBox = document.getElementById("textbox");
        var ngawur = document.getElementById("ngawur");

        if (isReplaced) {
          ngawur.textContent = ""; // Clear the text of the <h1> element
        } else {
          ngawur.textContent = textBox.value; // Set the text of the <h1> element to the input's value
        }

        isReplaced = !isReplaced;
      }
    </script>
  </head>

  <body>
    <div class="container mt-2">
      <script>
        function showAlert() {
          alert("KAMU KEREN BANGET BANG");
        }
      </script>
      <button class="btn btn-primary" onclick="showAlert();">
        Klik Di sini!
      </button>
      <br />
      <div class="mt-2 d-flex justify-content-center align-items-center">
        <button onclick="changeText();">Click Me!</button>
        <span id="output">replace me</span>
        <input
          id="textbox"
          type="text"
          class="form-control-lg font-weight-bolder"
        />
      </div>
      <div class="mt-2"></div>
      <h1 id="ngawur" class="font-weight-bold text-xl-center"></h1>
    </div>
  </body>
</html>
