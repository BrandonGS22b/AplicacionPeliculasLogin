<?php
    require_once("c://xampp/htdocs/login/view/head/head.php");



// Verificar si el usuario no ha iniciado sesión y no le da acceso asi entre por ruta especifica o link xd
if (empty($_SESSION['usuario'])) {
    header("Location: ../home/login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./style/styleIndex.css" rel="stylesheet">
</head>
<body>
 
<div class="fondo_menu">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Inicio</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <?php if (empty($_SESSION['administrador'])): ?>
                         <!-- lo que esta aqui arriba administrador -->
                        
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Productos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Precios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contáctanos</a>
                            </li>
                        </ul>
                        <a href="/login/view/home/logout.php" class="boton">Cerrar Sesión</a>
                    <?php else: ?>
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Agregar información</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Editar perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Sesión de recursos</a>
                            </li>
                        </ul>
                        <a href="/login/view/home/logout.php" class="boton">Cerrar Sesión</a>
                    <?php endif ?>
                </div>
            </div>
        </nav>
    </div>
</div>
<div class="fondo">
    <!-- Aquí puedes agregar el contenido específico de la sección de agregar productos -->


    <style>
    .fondo {
        background-image: url("../head/img/caratulas");
        background-size: cover;
        background-position: center;
        /* Otros estilos de la sección fondo */
    }

   
</style>
 <header>
            <div class="logo2">
               

            <div class="busqueda">
                <div>
                    <label class="busqueda" for="">
                
                </label>
            </div>
        </div>
        <input id="menu" type="checkbox">
        <aside class="menuP">
            <div class="menuH">
                <nav class="princi">
                    <h1>Ducally Tecno</h1>
                    <a href="populares.html">Estrenos</a>
                    <a href="populares.html">Mas vistas</a>
                    <a href="proximamente.html">Series</a>
                    <a href="proximamente.html">Anime</a>
                </nav>
                <div class="gene">
                    <h2>GENEROS</h2>
                    <a href="populares.html">Acción</a>
                    <a href="populares.html">Animación</a>
                    <a href="populares.html">Aventura</a>
                    <a href="populares.html">Ciencia Ficción</a>
                    <a href="populares.html">Comedia</a>
                    <a href="populares.html">Crimen</a>
                    <a href="populares.html">Drama</a>
                    <a href="populares.html">Fantasía</a>
                    <a href="populares.html">Guerra</a>
                    <a href="populares.html">Historia</a>
                    <a href="populares.html">Romance</a>
                    <a href="populares.html">Suspense</a>
                    <a href="populares.html">Terror</a>
                    <a href="populares.html">Misterio</a>
                    <label for="menu">
                     
                    </label>
                </div>
                <label for="menu">
                  
                </label>
            </div>
        </aside>
    </header>

    <main>

    <div class="carrucel">
            <div class="card" id="img1">
                <a href="reproductoresP/Doctor-Strange-en-Multiverso-de-la-Locura.html">
                    <div class="carrucelhijo">
                        <img src="img/carrusel/pdrstren.jpg" alt="">
                    </div>
                    <div class="cardinfo">
                        <h3>Doctor Strange en el Multiverso de la Locura</h3>
                    </div>
                </a>
            </div>


            <div class="card" id="img2">

                <a href="reproductoresP/spiderman-un-nuevo-universo.html">
                    <div class="carrucelhijo">
                        <img src="img/carrusel/pspiderman.jpg" alt="">
                    </div>
                    <div class="cardinfo">
                        <h3>Spider-Man: un nuevo universo</h3>
                    </div>
            </div>
            </a>


            <div class="card" id="img3">

                <a href="reproductoresP/sonic2.html">
                    <div class="carrucelhijo">
                        <img src="img/carrusel/psonic2.jpg">
                    </div>
                    <div class="cardinfo">
                        <h3>Sonic 2</h3>
                    </div>
            </div>
            </a>


            <div class="card" id="img4">

                <a href="reproductoresP/joker.html">
                    <div class="carrucelhijo">
                        <img src="img/carrusel/pjoker.jpg" alt="">
                    </div>
                    <div class="cardinfo">
                        <h3>Joker</h3>
                    </div>
            </div>
            </a>


            <div class="card" id="img5">

                <a href="reproductoresP/vengadores-infinity-war.html">
                    <div class="carrucelhijo">
                        <img src="./img/carrusel/pengame.jpg" alt="">
                    </div>
                    <div class="cardinfo">
                        <h3>vengadores infinity war</h3>
                    </div>
                </a>
            </div>

        </div>

        <div class="title">
            <h1>Agregadas recientemente</h1>
        </div>

        <div class="grid">

            <div class="pelicula">
                <a href="reproductoresP/animalesfantasticos3.html">
                    <img src="img/caratulas/pAnimalesFantascicosLosSceretosD.jpg" alt="">
                    Animales Fantásticos 3: Los Secretos de Dumbledore
                </a>
            </div>


            <div class="pelicula">
                <a href="reproductoresP/vengadores4.html">
                    <img src="img/caratulas/avengers.jpg" alt="">
                    Avengers: Endgame
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/joker.html">
                    <img src="img/caratulas/joker.jpg" alt="">
                    joker
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/ligadelajusticiaZACK.html">
                    <img src="img/caratulas/ligajusticia.jpg" alt="">
                    La Liga de la Justicia de Zack Snyder
                </a>
            </div>


            <div class="seibar">
                <h2>Recomendado</h2>
                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/animalesfantasticos3.html">
                            <img src="img/caratulas/pAnimalesFantascicosLosSceretosD.jpg" alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/animalesfantasticos3.html"> Animales Fantásticos 3: Los Secretos de
                            Dumbledore <br> 4.7 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/parasitos.html">
                            <img src="img/caratulas/parasitos.jpg" alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/parasitos.html">Parásitos<br> 4.4 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/vengadores4.html">
                            <img src="img/caratulas/avengers.jpg" alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/vengadores4.html">Avengers: Endgame<br> 4.7 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/John-Wick-3.html">
                            <img src="img/caratulas/john-wick-3.jpg" alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/John-Wick-3.html">John Wick 3: Parabellum<br> 4.4 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/spiderman-lejos-de-casa.html">
                            <img src="img/caratulas/spider-man-lejos-de-casa.jpg" alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/spiderman-lejos-de-casa.html">Spider-Man: lejos de casa<br> 4.0 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/aves-de-presa.html">
                            <img src="img/caratulas/aves-de-presa-y-la-fantabulosa-emancipacion-de-harley-quinn-25967-poster-200x300.jpg"
                                alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/aves-de-presa.html"> Aves de presa <br> 3.7 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>

                <div class="seibarc">
                    <div class="imagenes">
                        <a href="reproductoresP/joker.html">
                            <img src="img/caratulas/joker.jpg" alt="">
                        </a>
                    </div>
                    <div class="sifo">
                        <a href="reproductoresP/joker.html">Guason<br> 4.7 <br>
                            <img src="iconos/hd.png" alt=""> <img id="play" src="iconos/boton-de-play.png" alt="">
                        </a>
                    </div>
                </div>
                <div class="vermaszz">
                    <a href="populares.html">Ver mas</a>
                </div>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/parasitos.html">
                    <img src="img/caratulas/parasitos.jpg" alt="">
                    Parasitos
                </a>
            </div>


            <div class="pelicula">
                <a href="reproductoresP/sonic2.html">
                    <img src="img/caratulas/Sonic2.jpg" alt="">
                    Sonic 2
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/Toystory4.html">
                    <img src="img/caratulas/toystory4.jpg" alt="">
                    Toy story 4
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/ultimo-ritual.html">
                    <img src="img/caratulas/ultimoRitu.jpg" alt="">
                    El ultimo ritual
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/vengadores-infinity-war.html">
                    <img src="img/caratulas/vengadores-infinity-war.jpg" alt="">
                    vengadores infinity war
                </a>
            </div>


            <div class="pelicula">
                <a href="reproductoresP/spiderman-lejos-de-casa.html">
                    <img src="img/caratulas/spider-man-lejos-de-casa.jpg" alt="">
                    spider man lejos de casa
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/spiderman-un-nuevo-universo.html">
                    <img src="img/caratulas/spaidermananimada.jpg" alt="">
                    Spider-Man: un nuevo universo
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/gozilla-vs-kong.html">
                    <img src="img/caratulas/godzilla-vs-kong.jpg" alt="">
                    godzilla vs kong
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/deadpool2.html">
                    <img src="img/caratulas/deadpool-2.jpg" alt="">
                    Deadpool 2
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/aquaman.html">
                    <img src="img/caratulas/aquaman.jpg" alt="">
                    Aquaman
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/Bohemian-Rhaosody.html">
                    <img src="img/caratulas/bohemian-rhapsody.jpg" alt="">
                    Bohemian Rhaosody
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/John-Wick-3.html">
                    <img src="img/caratulas/john-wick-3.jpg" alt="">
                    john wick 3
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/it-2.html">
                    <img src="img/caratulas/it-capitulo-2.jpg" alt="">
                    it 2 capitulo 2
                </a>
            </div>


            <div class="pelicula">
                <a href="reproductoresP/aves-de-presa.html">
                    <img src="img/caratulas/aves-de-presa-y-la-fantabulosa-emancipacion-de-harley-quinn-25967-poster-200x300.jpg"
                        alt="">
                    Aves de presa
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/soul.html">
                    <img src="img/caratulas/soul.jpg" alt="">
                    Soul
                </a>
            </div>

            <div class="pelicula">
                <a href="reproductoresP/capitana-marvel.html">
                    <img src="img/caratulas/capitana-marvel.jpg" alt="">
                    Capitana marvel
                </a>
            </div>

        </div>
        <div class="vermas">
            <a href="populares.html">Ver mas</a>
        </div>
    </main>

    <footer>
        <div class="footer">
            <div>
                <a href="">Terminos y condiciones</a>
            </div>
            <div>
                <a href="">Contacto</a>
            </div>

            <div class="terminos3">
                <p>PeliTech 2022-2023</p>
            </div>
        </div>
    </footer>

    
</body>
</html>

