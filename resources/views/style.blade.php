<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/mystyle.css')}}">
    <style>
        h2{
            color:rgb(16, 28, 248);
            text-align:center;
            text-decoration:line-through;
        }
        .ratakanan{
            color:red;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <!-- CSS dengan cara inline -->
    <h1 style="
    color:blue;
    text-align:center;
    text-decoration: underline;">Halo Apa Kabar?</h1>
    <!-- CSS dengan cara inpage -->
    <h2>Hallo Apa kabar ?<br></h2>
    <!-- CSS dengan cara external file (biasanya supaya 1 web seragam) -->
    <h3>Hallo Apa kabar ?<br></h3>

    <div class="ratakanan kotaku1"> Harga: Rp. 35.000,-</div>
    <div class="ratakanan" style="color:blue">Diskon besar</div>
</body>
</html>
