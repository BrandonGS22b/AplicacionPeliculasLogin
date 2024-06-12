<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECNO DUCALLY</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        #slideshow {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        #content {
            position: relative;
            z-index: 1;
            text-align: center;
            color: #fff;
            padding: 20px;
        }

        .btn-welcome {
            display: inline-block;
            padding: 12px 24px;
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            text-transform: uppercase;
            font-size: 18px;
            border: none;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
            cursor: pointer;
        }

        .btn-welcome:hover {
            background-color: #45a049;
        }

        .btn-welcome:focus {
            outline: none;
            box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.5);
        }

        .title {
            font-family: Arial, sans-serif;
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
        margin-bottom: 20px;
        color: #ffffff;
        text-shadow: 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #ffffff, 0 0 40px #00e8ff, 0 0 70px #00e8ff, 0 0 80px #00e8ff, 0 0 100px #00e8ff, 0 0 150px #00e8ff;
        }

        .subtitle {
            font-family: Arial, sans-serif;
        font-size: 36px;
        font-weight: bold;
        text-align: center;
        text-transform: uppercase;
        margin-bottom: 20px;
        color: #ffffff;
        text-shadow: 0 0 10px #ffffff, 0 0 20px #ffffff, 0 0 30px #ffffff, 0 0 40px #00e8ff, 0 0 70px #00e8ff, 0 0 80px #00e8ff, 0 0 100px #00e8ff, 0 0 150px #00e8ff;
        }

        .movie-list {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .movie-list img {
            width: 200px;
            height: 300px;
            object-fit: cover;
            margin: 10px;
        }

        @media (max-width: 768px) {
            .title {
                font-size: 24px;
            }

            .subtitle {
                font-size: 16px;
            }

            .btn-welcome {
                font-size: 16px;
                padding: 10px 20px;
            }

            .movie-list img {
                max-width: 150px;
                max-height: 200px;
                margin: 5px;
            }

         
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var images = [
                'view/head/img/carrusel/pspiderman.jpg',
                'view/head/img/carrusel/pjoker.jpg',
                'view/head/img/carrusel/psonic2.jpg'
            ];
            var currentIndex = 0;
            var slideshow = document.getElementById('slideshow');

            function changeImage() {
                slideshow.style.backgroundImage = 'url(' + images[currentIndex] + ')';
                currentIndex = (currentIndex + 1) % images.length;
                setTimeout(changeImage, 5000); // Cambiar imagen cada 5 segundos (5000 ms)
            }

            changeImage();
        });
    </script>
</head>
<body>
    <div id="slideshow"></div>

    <div id="content">
    
        <h1 class="title">Bienvenido a mi página web</h1>
        <p class="subtitle">Aquí encontrarás contenido relacionado con  películas</p>
        <p>PROXIMAMENTE!!!!</p>
        <a href="view/home/login.php" class="btn-welcome">¡Empecemos!</a>
    

        <div class="movie-list">
            <img src="view/head/img/caratulas/avengers.jpg" alt="Película 1">
            <img src="view/head/img/caratulas/vayavacaciones.jpg" alt="Película 2">
            <img src="view/head/img/caratulas/john-wick-3.jpg" alt="Película 3">
            <!-- Agrega más imágenes de películas aquí -->
        </div>
    </div>
</body>
</html>