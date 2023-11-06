<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        a:visited{
            color:green;
            text-decoration: none;
        }
        a:link{
            color:green;
            text-decoration: none;
        }
        a:hover{
            cursor: pointer;
            color:greenyellow;
            text-decoration:underline;
        }

        .fotolingkaran{
            border-radius: 50%;
        }

        .fotorounded{
            border-radius: 2%;
        }
    </style>

    <title>Document</title>
</head>
<body>
    <a href="https://detik.com/" target="_blank">Detik.com</a>
    |
    <a href="https://W3Schools.com/" target="_blank">W3Schools HTML</a>
    |
    <a href="https://www.its.ac.id/" target="_blank">Web ITS </a>
    <br>
    <img src="{{asset('img/foto-its-pewarnaan.jpeg') }}" alt="" width="50%" class="fotolingkaran">
    <br>
    <img src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2023/07/Tim-Going-Global-Project-GGP-pada-saat-pelaksanaan-proyek-lapangan-dalam-program-Blue-Energy-for-Blue-Economy-di-Malang.jpeg" alt="test" class="fotorounded" width="800px">
</body>
</html>
