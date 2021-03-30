<!DOCTYPE php>
<php lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre Mi</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body id="sobre-mi">
    <header>
    <?php
    $pg="sobre-mi";
        include_once ("menu.php");
        ?>
    </header>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-sm-5 col-12 mt-4">
                    <h1 class="mt-sm-4 pb-sm-4">Sobre mí</h1>
                    <p class="pb-sm-5">Estudiante de desarrollo web, me gusta aprender cosas nuevas en el mundo de la tecnologia y ampliar mi conocimiento.</p>
                    <a href="/contacto.php" class="btn btn-rojo sobre-mi">Enviar mensaje</a>
    
                </div>
                <div class="col-sm-3 col-12 mt-4 offset-sm-2">
                    <img src="/files/1467646262_522853_1467646344_noticia_normal.jpg" alt="David Mata" title="David Mata"
                        class="img-fluid img-circle">
                </div>
            </div>
        </div>
        <section id="tecnologias" class="color-gradiente pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2 class="my-sm-5 text-white">Conocimientos y tecnologias </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>Bootstrap</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1101/C9QJ7V3X.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>HTML5</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/2538/kEpgHiC9.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>CSS</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/6727/css.png">
                        </div>
                    </div>
                    <div class="col-sm-2 col-6 text-center">
                        <div class="px-4 py-5 card mx-0">
                            <h3>Git</h3>
                            <img class="img-fluid d-block mx-auto" width="60"
                                src="https://img.stackshare.io/service/1046/git.png">
                        </div>
                    </div>
                </div>
            
                </div>
    
            </div>
        </section>
        <section id="idiomas">
            <div class="container">
                <div class="row py-5 mx-0">
                    <div class="col-sm-6 col-12">
                        <div class="row mr-sm-1 bg-white card-idioma shadow">
                            <div class="col-4 text-center card">
                                <i class="fas fa-comment-alt"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>IDIOMAS</h2>
                                <ul>
                                    <li>ESPAÑOL - Nativo</li>
                                    <li>INGLÉS - Avanzado</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-12">
                        <div class="row ml-sm-2 bg-white card-idioma shadow">
                            <div class="col-4 text-center card">
                                <i class="fas fa-star"></i>
                            </div>
                            <div class="col-8 p-5">
                                <h2>HOBBIES</h2>
                                <ul>
                                    <li>Musica, videojuegos, redes sociales.</li>
                                    <li>Peliculas, deportes</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="experiencia" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-briefcase"></i> Experiencia</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded">
    
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 px-5 py-3 my-auto d-none d-sm-block">
                            <img src="" class="img-fluid baw" title="">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3></h3>
                            <h4></h4>
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 px-5 py-3 my-auto d-none d-sm-block">
                            <img src="" class="img-fluid baw" title="">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3></h3>
                            <h4></h4>
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 px-5 py-3 my-auto d-none d-sm-block">
                            <img src="" class="img-fluid baw" title="">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3></h3>
                            <h4></h4>
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 px-5 py-3 my-auto d-none d-sm-block">
                            <img src="" class="img-fluid baw" title="">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3></h3>
                            <h4></h4>
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 px-5 py-3 my-auto d-none d-sm-block">
                            <img src="" class="img-fluid baw" title="">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3></h3>
                            <h4></h4>
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 px-5 py-3 my-auto d-none d-sm-block">
                            <img src="" class="img-fluid baw" title="">
                        </div>
                        <div class="col-12 col-sm-10 p-3">
                            <h3></h3>
                            <h4></h4>
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i>Formación acádémica</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 px-5 py-3 my-auto d-none d-sm-block">
                            <img src="" class="img-fluid baw" title="">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3></h3>
                            <h4></h4>
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="formacion" class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2><i class="fas fa-graduation-cap"></i> Cursos de desarrollo profesional</h2>
                </div>
            </div>
            <div class="row shadow bg-white rounded">
                <div class="col-12">
                    <div class="row">
                        <div class="col-2 px-5 py-3 my-auto d-none d-sm-block">
                            <img src="" class="img-fluid baw" title="">
                        </div>
                        <div class="col-12- col-sm-10 p-3">
                            <h3</h3>
                            <h4></h4>
                            <h5></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
<script src="js/bootstrap.min.js"></script>
<footer style="text-align: center;">
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                <a href="https://github.com" target="_blank" title="Github"><i class="fab fa-github"></i></a>
                <a href="https://www.facebook.com/david.j.navarro1/" target="_blank" title="facebook"><i class="fab fa-facebook"></i></a>
            </div>
            <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                    Sponsor <a href="https://depcsuite.com" target="_blank" title="DEPCSUITE">DePC Suite</a>
            </div>
            <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3">
                <a href="mailto:info@depcsuite.com">David_jose95@hotmail.com</a>
            </div>
            <div class="col-sm-3 col-12 text-right">
                <a href="https://api.whatsapp.com/send?phone=541168991656" title="Whatsapp"><i class="fab fa-whatsapp"></i></a>
            </div>

        </div>
    </div>
</footer>
</html>
