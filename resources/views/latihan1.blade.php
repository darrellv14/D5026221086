<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Darrell Valentino</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  </head>
  <body class="bg-dark">
    <div class="container-fluid px-0">
      <div class="row mx-0">
        <div class="col-12 px-0">
          <img src="{{ asset('img/pizza.jpg') }}" alt="pizza" class="img-fluid w-auto" />
        </div>
      </div>
    </div>
    <div class="container mt-3">
      <div class="row mb-3 mx-auto">
        <img src="{{ asset('img/pizza1.jpg') }}" alt="pizza1" class="col-3 img-fluid" />
        <img src="{{ asset('img/pizza2.jpg') }}" alt="pizza2" class="col-3 img-fluid" />
        <img src="{{ asset('img/pizza3.jpg') }}" alt="pizza3" class="col-3 img-fluid" />
        <img src="{{ asset('img/pizza4.jpg') }}" alt="pizza4" class="col-3 img-fluid" />
      </div>
      <div class="row mb-2">
        <div class="col-8">
          <h4 class="text-white">Pepperoni Pizza</h4>
          <h4 class="text-danger">$10.00</h4>
        </div>
        <p class="col-4 small text-white">⭐ 4.5 [50+]</p>
      </div>
      <div class="row mb-3">
        <p class="col-12 text-white">
          A traditional Neapolitan pizza topped with tomato sauce, fresh
          mozzarella cheese, basil leaves, and drizzled with olive oil.
          <a href="https://google.com" class="text-success">Read more.</a>
        </p>
      </div>
      <div class="mb-4">
        <div class="row mb-1">
          <h5 class="col-12 text-white">Size</h5>
        </div>
        <div class="row">
          <div class="col-1 text-white">
            <button type="button" class="btn btn-outline-warning">S</button>
          </div>
          <div class="col-1 px-4 text-white">
            <button type="button" class="btn btn-outline-warning">M</button>
          </div>
          <div class="col-1 px-4 text-white">
            <button type="button" class="btn btn-outline-warning">L</button>
          </div>
          <div class="col-9"></div>
        </div>
      </div>

      <div class="mb-5">
        <div class="row mb-1">
          <h5 class="col-12 text-white">Ingredient</h5>
        </div>
        <div class="row">
          <div class="col-3 text-white">
            <div class="border border-white rounded">
              <img src="{{ asset('img/tomato.png') }}" alt="tomato" width="50px" class="mx-auto d-block">
            </div>
          </div>
          <div class="col-3 text-white">
            <div class="border border-white rounded">
              <img src="{{ asset('img/basil.png') }}" alt="tomato" width="50px" class="mx-auto d-block">
            </div>
          </div>
          <div class="col-3 text-white">
            <div class="border border-white rounded">
              <img src="{{ asset('img/shallot.png') }}" alt="tomato" width="50px" class="mx-auto d-block">
            </div>
          </div>
          <div class="col-3"></div>
        </div>
      </div>

      <div class="row mb-5 mt-2">
        <div class="col-3">
          <div class="border py-2 border-white rounded">
            <img src="{{ asset('img/bag.png') }}" alt="bag" width="40px" class="mx-auto d-block">
          </div>
        </div>
        <div class="col-9">
          <div class="bg-success py-2 rounded border-0">
            <h3 class="text-white text-center">Order Now</h3>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
