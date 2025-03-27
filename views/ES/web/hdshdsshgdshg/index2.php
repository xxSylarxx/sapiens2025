<?php
$modelA = new BannerModel();
$modelB = new NoticiasModel();
$modelC = new ModalModel();
$arrBanner = $modelA->obtenerBanner();
$arrBanner['cuerpo'] = (array) json_decode($arrBanner['cuerpo'], true);
$arrNoticias = $modelB->listarNoticiasWeb(0, 5, '%');
$arrModal = $modelC->obtenerModal();
//var_dump($arrModal);
//exit;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $empresa['metades'] ?>">
    <link rel="shortcut icon" href="<?php echo WEBURL ?>/assets/img/icons/escudo.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/web.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/niveles.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/networks.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">

    <script src="https://www.google.com/recaptcha/api.js?hl=en"></script>
    <script src="<?php echo WEBURL ?>/assets/js/bootstrap.min.js"></script>


    <title><?php echo $empresa['nombre'] ?></title>
</head>

<body>



    <?php include_once './views/includes/header.php'; ?>

    <style>
        .abajo {
            background-color: var(--color1);
        }

        #valores {
            margin-top: -160px;
        }


        #valores .flip {
            height: 200px;
            padding: 0.6em;
        }

        #valores .card {

            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform .6s;
            transform-style: preserve-3d;
            border-radius: 12px;
            border-color: none;
            background-color: white;
        }

        #valores .flip:nth-child(1):hover .card {
            transform: rotateY(180deg);

        }

        #valores .front,
        #valores .back {

            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            cursor: default;
        }

        #valores .front {

            color: var(--color7);

        }

        #valores .back {
            text-align: start;
            border-radius: 12px;
            color: white;
            transform: rotateY(180deg);
            background-color: var(--color4);
            box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px, rgb(12, 90, 219) 0px 0px 0px 3px;
            padding: 0.5em;
        }

        #valores .back h4 {
            text-align: center;

        }

        #valores .back span {
            margin-left: 1px;
            margin-right: 2px;
        }

        #valores2 {
            position: absolute;
            text-align: center;
            z-index: 99;
            top: 8%;
            left: 100px;
        }

        #valores2 .flip {
            height: 250px;
            padding: 0.6em;
            overflow: hidden;
        }

        #valores2 .card {

            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform .6s;
            transform-style: preserve-3d;
            border-radius: 12px;
            border-color: var(--color4);
            background-color: transparent;
        }

        #valores2 .flip:nth-child(1):hover .card {
            transform: rotateY(180deg);

        }

        #valores2 .front,
        #valores2 .back {

            position: absolute;
            width: 100%;
            height: 100%;
            backface-visibility: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            cursor: default;
        }



        #valores2 .front {
            color: white;
            padding: 0.5em;

        }

        #valores2 .back {
            border-radius: 12px;
            color: white;
            transform: rotateY(180deg);
            background-color: var(--color4);
            padding: .8em;
            font-size: 1rem;

        }

        #valores2 .back span {

            text-align: start;
        }

        #div-video {
            position: relative;
            background-color: var(--color5);
            margin: 0;
            overflow: hidden;

        }

        #div-video video {
            opacity: .3;


        }



        .button1 {
            background-color: var(--color4);
            border: 1px solid var(--color4);
            border-radius: 10px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
        }

        .button1 a {

            color: white;
        }

        .button1:hover {

            transform: scale(1.06);
            background-color: var(--color1);
            border: 1px solid var(--color1);
        }

        .button2 {

            background-color: transparent;
            border: 1px solid white;
            border-radius: 10px;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            transition: transform .3s ease-in-out;
        }

        .button2 a {

            color: white;
        }

        .button2:hover {

            transform: scale(1.06);
            background-color: var(--color1);
            border: 1px solid var(--color1);
        }


        /* separador */
        .separador {
            background-color: var(--color3);
            height: 4px;
            width: 50px;
            transition: width 2s;
        }

        #div-hover:hover .separador {
            background-color: var(--color3);
            width: 180px;
        }

        #noticias:hover .separador {
            background-color: var(--color3);
            width: 180px;
        }

        .div-banner {

            position: absolute;
            left: 10px;
            display: flex;
            justify-content: center;
            align-items: flex-end;
            height: 100%;
            padding-bottom: 25%;
        }

        .tittle-banner1 {

            color: white;
            font-weight: bold;
        }

        .tittle-banner2 {

            color: white;
            font-weight: bold;
        }

        /* Destilo del separador*/
        .bar-main {
            width: 10%;
            margin: 18px 0 45px;
            text-align: start;
        }

        .bar.bar-big {
            height: 5px;
            width: 120px;
            background: #aec6ef;
            margin: 20px auto;
            position: relative;
            border-radius: 30px;
        }

        .bar.bar-big::before {
            content: '';
            position: absolute;
            left: 0;
            top: -2.7px;
            height: 10px;
            width: 10px;
            border-radius: 50%;
            background: #410099;
            -webkit-animation-duration: 3s;
            animation-duration: 3s;
            -webkit-animation-timing-function: linear;
            animation-timing-function: linear;
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite;
            -webkit-animation-name: MOVE-BG;
            animation-name: MOVE-BG;
        }

        #valores2 .bar-main {
            width: 100%;
        }

        @-webkit-keyframes MOVE-BG {
            from {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }

            to {
                -webkit-transform: translateX(88px);
                transform: translateX(88px);
            }
        }

        @keyframes MOVE-BG {
            from {
                -webkit-transform: translateX(0);
                transform: translateX(0);
            }

            to {
                -webkit-transform: translateX(88px);
                transform: translateX(88px);
            }
        }

        /*estilo de circular*/


        .about_shape {
            position: relative;
            margin-top: -400px;
            z-index: -1;
            left: -72px;
        }

        .about_shape img {
            -webkit-animation: alltuchtopdown 1.5s ease-in-out 0s infinite alternate;
            animation: alltuchtopdown 1.5s ease-in-out 0s infinite alternate;
            -webkit-animation-duration: 2.5s;
            animation-duration: 2.5s;


        }

        /* para ocultar los iconos por defecto*/
        .accordion-body p {
            margin: 0;
        }

        .accordion-button:not(.collapsed)::after {
            display: none;
            content: "";

            background-image: url("");

        }



        .accordion-button::after {
            display: none;
            width: 0px;

            height: 0px;

            content: "";

            background-image: url("");

            background-size: 0px;

        }



        /* color y tamaño en modo activo */

        .accordion-button:not(.collapsed) div.boton-icono {

            color: var(--color1);

            font-size: 20px;

            -webkit-transform: rotate(-180deg);

            transform: rotate(-180deg);

        }



        /* color y tamaño */

        .accordion-button div.boton-icono {

            color: var(--color5);

            font-size: 16px;

            transition: -webkit-transform 0.2s ease-in-out;

            transition: transform 0.2s ease-in-out;

            transition: transform 0.2s ease-in-out, -webkit-transform 0.2s ease-in-out;

        }



        .accordion-button {

            font-weight: bold;

            color: var(--color2);

            font-size: 16px;


        }



        .accordion-button:hover {

            color: var(--color1);

        }



        .accordion-flush .accordion-item {

            border-bottom: 0;

        }



        .accordion-button:not(.collapsed) {

            color: var(--color1);

        }

        .accordion-item {
            border: none;
        }

        .accordion-button i {
            color: var(--color6);
        }

        .fa-circle {

            font-size: 10px;

            color: var(--color1);

        }



        .title-pe {

            color: var(--color5);
            font-size: 18px;
            font-weight: none;

        }



        /* focus accordion */

        .accordion-button:focus {

            box-shadow: none;

        }

        @keyframes alltuchtopdown {
            0% {
                -webkit-transform: rotateX(0deg) translateY(0px);
                -ms-transform: rotateX(0deg) translateY(0px);
                transform: rotateX(0deg) translateY(0px)
            }

            50% {
                -webkit-transform: rotateX(0deg) translateY(-20px);
                -ms-transform: rotateX(0deg) translateY(-20px);
                transform: rotateX(0deg) translateY(-20px)
            }

            100% {
                -webkit-transform: rotateX(0deg) translateY(0px);
                -ms-transform: rotateX(0deg) translateY(0px);
                transform: rotateX(0deg) translateY(0px)
            }
        }



        #careers {
            background-image: url("./assets/img/inicio/fondo1.png");
            background-color: var(--color4);
            background-size: 100%;
        }

        #img-contact {

            background: linear-gradient(rgba(35, 35, 35, 0.6), rgba(35, 35, 35, 0.6)), url("./assets/img/inicio/contact.jpg") no-repeat;

            background-size: cover;

        }

        .form-control:focus {


            box-shadow: 0 0 0 .25rem rgba(12, 90, 219, 0.25);
        }

        html {
            scroll-behavior: smooth;
        }

        section[id] {
            scroll-margin-top: 120px;
        }

        #div-video1 {
            scroll-margin-top: 100px;
        }

        #div-contact {
            scroll-margin-top: 50px;
        }

        #div-industrias {
            background-color: white;
            margin-top: -5px;
            scroll-margin-top: 50px;
            position: relative;

        }

        #img-banner {
            object-fit: cover;
            width: 1920px;
            height: 876px;
        }

        #div-progra {
            background: linear-gradient(rgba(12, 90, 219, 0.8), rgba(12, 90, 219, 0.7)), url("./assets/img/inicio/blog2.jpg");

            background-size: 100%;
            opacity: .8;


        }

        /* novedades */
        #industrias .card {
            position: relative;
            padding: .4rem;
            border-radius: 0;
            transition: transform .3s ease-in-out;
            box-shadow: 0 0 10px rgb(212 212 212);
            margin: 1rem 1.2rem;
        }

        #industrias .card .news {
            position: absolute;
            top: 20px;
            left: -16px;
            border-radius: 5px;
            padding: 4px 12px;
            background-color: var(--color4);
            color: white;
            font-size: 14px;
            font-weight: bold;
        }

        #industrias .card img {
            object-fit: cover;
        }

        #industrias .card:hover {
            transform: scale(1.06);
        }

        #industrias .card h6 {
            margin-bottom: 1.2rem;
        }

        #industrias .card p {
            font-size: 18px;
            text-align: start;
            overflow: hidden;
            color: var(--color7);
        }

        #ind-health {
            position: absolute;
            left: 36%;
            top: 40%;
        }

        #ind-government {
            position: absolute;
            left: 26%;
            top: 40%;
        }

        #ind-manufacturing {
            position: absolute;
            left: 24%;
            top: 40%;
        }

        #ind-banking {
            position: absolute;
            left: 35%;
            top: 40%;
        }

        .btn-carousel1 {
            padding-right: 5rem;
        }

        .btn-carousel2 {
            padding-left: 5rem;
        }

        .btn-carousel1 span {

            border-radius: 50%;
            background-color: var(--color4);
            background-size: 50%;
            opacity: 1;
        }

        .btn-carousel2 span {

            border-radius: 50%;
            background-color: var(--color4);
            background-size: 50%;
            opacity: 1;
        }


        .carousel-control-prev,
        .carousel-control-next {
            opacity: 1;
        }

        @media only screen and (min-width:210px) and (max-width:409px) {



            #ind-health {
                position: absolute;
                left: 39%;
                top: 45%
            }

            #ind-government {
                position: absolute;
                left: 30%;
                top: 45%
            }

            #ind-manufacturing {
                position: absolute;
                left: 30%;
                top: 45%
            }

            #ind-banking {
                position: absolute;
                left: 39%;
                top: 45%
            }

            #img-contact {

                background: linear-gradient(rgba(35, 35, 35, 0.6), rgba(35, 35, 35, 0.6)), url("./assets/img/inicio/contact.jpg") center center no-repeat;

                background-size: cover;

            }

            .btn-carousel1.btn-carousel2 {
                display: none;
            }


            #valores2 {
                padding-top: 2rem;
                padding-bottom: 2rem;
                position: static;
            }

            #div-video video {
                display: none;


            }

            #div-about .about {
                padding-top: 10rem;
            }

            #valores {
                margin-top: 0px;
            }

            .div-banner {
                position: absolute;
                left: 1.5rem;
                display: flex;
                justify-content: center;

                height: 100%;
                padding-bottom: 10%;
            }

            .tittle-banner1 {
                font-size: 1rem;
                padding: 1rem;
                color: white;

                font-weight: bold;
            }

            .tittle-banner2 {
                display: none;


            }

            #img-banner {
                object-fit: cover;
                width: 780px;
                height: 419px;
            }


            #rc-imageselect,
            .g-recaptcha {
                transform: scale(0.77);
                -webkit-transform: scale(0.77);
                margin-right: 20rem;
            }




        }

        @media only screen and (min-width:410px) and (max-width:1096px) {
            #img-contact {

                background: linear-gradient(rgba(35, 35, 35, 0.6), rgba(35, 35, 35, 0.6)), url("./assets/img/inicio/contact.jpg") center center no-repeat;

                background-size: cover;

            }

            .btn-carousel1.btn-carousel2 {
                display: none;
            }


            #valores2 {
                padding-top: 2rem;
                padding-bottom: 2rem;
                position: static;
            }

            #div-video video {
                display: none;


            }

            #div-about .about {
                padding-top: 10rem;
            }

            #valores {
                margin-top: 0px;
            }

            .div-banner {
                position: absolute;
                left: 1.5rem;
                display: flex;
                justify-content: center;

                height: 100%;
                padding-bottom: 10%;
            }

            .tittle-banner1 {
                font-size: 1rem;
                padding: 1rem;
                color: white;

                font-weight: bold;
            }

            .tittle-banner2 {
                display: none;


            }

            #img-banner {
                object-fit: cover;
                width: 780px;
                height: 419px;
            }


            #rc-imageselect,
            .g-recaptcha {
                transform: scale(0.77);
                -webkit-transform: scale(0.77);
                margin-right: 20rem;
            }

        }

        @media only screen and (min-width:1097px) and (max-width:1280px) {

            #valores2 {

                top: 8%;
                left: 60px;


            }

            #div-video {

                height: 900px;
            }

            #div-video video {

                width: 150%;
            }

            #valores2 {
                padding-top: 2rem;
                height: 900px;

            }

            #ind-health {
                position: absolute;
                left: 33%;
                top: 40%
            }

            #ind-government {
                position: absolute;
                left: 23%;
                top: 40%
            }

            #ind-manufacturing {
                position: absolute;
                left: 19%;
                top: 40%
            }

            #ind-banking {
                position: absolute;
                left: 35%;
                top: 40%
            }
        }


        @media only screen and (min-width:1281px) and (max-width:1366px) {


            #div-video {

                height: 900px;
            }

            #div-video video {

                width: 150%;
            }

            #valores2 {
                padding-top: 2rem;
                height: 900px;

            }

            #ind-health {
                position: absolute;
                left: 33%;
                top: 40%
            }

            #ind-government {
                position: absolute;
                left: 23%;
                top: 40%
            }

            #ind-manufacturing {
                position: absolute;
                left: 19%;
                top: 40%
            }

            #ind-banking {
                position: absolute;
                left: 35%;
                top: 40%
            }
        }
    </style>
    <!-- Modal -->
    <?php
    if ($arrModal['visible'] == 'S') { ?>
        <div class="modal fade" id="modalHome" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title"><?php echo $arrModal['titulo'] ?></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php echo $arrModal['cuerpo'] ?>
                    </div>
                </div>
            </div>
        </div>
        <script>
            const modalHome = new bootstrap.Modal(document.getElementById('modalHome'));
            modalHome.show();
        </script>
    <?php } ?>


    <section>
        <?php
        if ($arrBanner['tipo'] == 'slider') { ?>
            <div id="carouselBanner" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <?php
                    foreach ($arrBanner['cuerpo'] as $key => $item) { ?>

                        <div class="carousel-item <?php echo $key == 0 ? 'active' : '' ?>">
                            <?php if ($key == 0) { ?>
                                <div class="container div-banner">
                                    <div class="">
                                        <h2 class="tittle-banner1">Expand your in-house team and&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> get dedicated developers on demand </h2>

                                        <br>
                                        <button class="button2">
                                            <a class="" href="" data-bs-toggle="modal" data-bs-target="#modalcontact">Get Started Now</a>
                                        </button>
                                    </div>
                                </div>
                            <?php } else if ($key == 1) { ?>
                                <div class="container div-banner">
                                    <div class="">
                                        <h2 class="tittle-banner1">We can help you to bring speed, efficiency, and <br>expertise to your software development team with the<br> trust and commitment you need </h2>

                                        <br>
                                        <button class="button2">
                                            <a class="" href="" data-bs-toggle="modal" data-bs-target="#modalcontact">Get Started Now</a>
                                        </button>
                                    </div>
                                </div>
                            <?php } ?>
                            <img src="<?php echo $item['imagen'] ?>" class="d-block crop w-100" id="img-banner">
                        </div>
                    <?php } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselBanner" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselBanner" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        <?php
        } else if ($arrBanner['tipo'] == 'video') { ?>
            <video src="<?php echo $arrBanner['cuerpo']['video']; ?>" width="100%" <?php echo $arrBanner['cuerpo']['control'] ? 'controls' : '' ?> <?php echo $arrBanner['cuerpo']['muted'] ? 'muted' : '' ?> autoplay></video>
        <?php } ?>
    </section>
    <!-- ventana emergente get start -->
    <div class="modal fade" id="modalcontact" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="modalVideoLabel">Contact Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row d-flex ">

                        <div class="col-12 col-lg-12 p-5" style="background-color: #EFF2F7;">
                            <form action="">
                                <div class="row ">
                                    <h3 class="fw-bold">Get In Touch</h3>
                                    <div class="form-group pt-2">
                                        <div class="row d-flex">
                                            <div class="col-6 col-lg-6"> <input type="text" class="form-control mb-3 " placeholder="Name"></div>
                                            <div class="col-6 col-lg-6"><input type="text" class="form-control mb-3 " placeholder="Phone"></div>
                                        </div>
                                        <div class="row d-flex">
                                            <div class="col-12 col-lg-12"> <input type="text" class="form-control mb-3 " placeholder="Email"></div>

                                        </div>
                                        <textarea class="form-control mb-4 " rows="4" placeholder="Your Message..."></textarea>
                                        <div style="text-align:center;">
                                            <center>
                                                <div class="norobot">
                                                    <div class="g-recaptcha mb-3" data-sitekey="6LfWVXoeAAAAADpSOlaIhXFrWaCRo69cHw1wOJJR"></div>
                                                </div>
                                            </center>
                                            <button class="button1 fw-bold py-2" style="background-color:var(--color2);border-color:var(--color2);">Send&nbsp; </button>

                                            <br>
                                            <br>
                                            <div>
                                                <span>"By sending this form I confirm that I have read and accept Awari Digital <a href="policy" style="text-decoration:underline;" target="_blank"> Privacy Policy </a> &nbsp;” </span>
                                            </div>
                                            <br>
                                            <br>


                                        </div>
                                    </div>
                                </div>



                            </form>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>


    <section class="container" id="valores">


        <div class="row justify-content-center">

            <div class="col-lg p-0 ">

                <div class="flip mx-1">

                    <div class="card shadow ">

                        <div class="front ">

                            <span class="fs-1"><img src="./assets/img/icons/computer.png" width="50" alt=""></span>


                            <h4 class="py-2">Expand your Expertise</h4>

                        </div>

                        <div class="back">
                            <h4 class="py-2">Expand your Expertise</h4>
                            <span>Experienced developers in new technologies are available to your team and project on demand.</span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg p-0 ">

                <div class="flip mx-1">

                    <div class="card shadow ">

                        <div class="front ">

                            <span class="fs-1"><img src="./assets/img/icons/cogwheels.png" width="50" alt=""></span>


                            <h4 class="py-2">Gain <br>Agility</h4>

                        </div>

                        <div class="back" style="font-size:.8rem;">
                            <h4 class="py-2">Gain <br>Agility</h4>
                            <span>Respond fast and efficiently to the needs of your project. Our developers are located in the USA and in Latin America.</span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg p-0 ">

                <div class="flip mx-1">

                    <div class="card shadow ">

                        <div class="front ">

                            <span class="fs-1"><img src="./assets/img/icons/support.png" width="50" alt=""></span>


                            <h4 class="py-2">Ensure Confidentiality</h4>

                        </div>

                        <div class="back" style="font-size:.8rem;">
                            <h4 class="py-2">Ensure Confidentiality</h4>
                            <span>Our developers are not assigned to different clients in the same industry or region at the same time. </span>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-lg p-0 ">

                <div class="flip mx-1">

                    <div class="card shadow ">

                        <div class="front ">

                            <span class="fs-1"><img src="./assets/img/icons/estadisticas.png" width="50" alt=""></span>


                            <h4 class="py-2">Achieve <br> Efficiency</h4>

                        </div>

                        <div class="back">
                            <h4 class="py-2">Achieve Efficiency</h4>
                            <span>A team lead is assigned without cost to ensure that the work meets standards and quality.</span>

                        </div>

                    </div>

                </div>

            </div>
            <div class="col-lg p-0 ">

                <div class="flip mx-1">

                    <div class="card shadow ">

                        <div class="front ">

                            <span class="fs-1"><img src="./assets/img/icons/ahorra-energia.png" width="50" alt=""></span>


                            <h4 class="py-2">Get Competitive Rates</h4>

                        </div>

                        <div class="back">
                            <h4 class="py-2">Get Competitive Rates</h4>
                            <span>We offer high quality services at an international competitive cost.</span>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>
    <br>
    <br>
    <br>
    <section id="div-about">
        <div class="container">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-5 about ">
                    <img src="./assets/img/inicio/about2.png" class="img-fluid" alt="">
                    <div class=" about_shape ">
                        <div class="">
                            <div class="">
                                <img src="./assets/img/inicio/about-circle.png" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 my-auto about ">
                    <h3 style="color:var(--color7);font-weight:bold;">About Us</h3>
                    <div class="bar-main">
                        <div class="bar bar-big"></div>
                    </div>
                    <p style="text-align:justify;">Awari Digital, Inc. is a Connecticut Hispanic-women-owned company with partnerships in Latin America. We have been supporting projects and initiatives both locally and internationally.</p>
                    <p style="text-align:justify;"> Our mission is to ensure that our experienced developers deliver high quality of services to our clients.

                        Our work and service levels become the main reference for our future engagements.

                        We invite you to review some examples of the work we have done for our clients.
                    </p>
                </div>
            </div>
        </div>


    </section>

    <br>
    <br>
    <br>
    <div id="div-video1"></div>
    <section id="div-video">

        <div class="container " id="valores2">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h4 style="color:white;font-weight:bold;">SERVICES</h4>
                    <h1 style="color:white;font-weight:bold;">We Can Help You</h1>
                    <div class="bar-main">
                        <div class="bar bar-big"></div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-end">
                <div class="col-lg-4">
                    <button class="button1">
                        <a class="" href="" data-bs-toggle="modal" data-bs-target="#modalcontact">Get Started Now</a>
                    </button>
                </div>
            </div>
            <br>

            <div class="row justify-content-center">
                <div class="col-lg-12 p-0 ">

                    <div class="flip mx-1">

                        <div class="card shadow ">

                            <div class="front ">

                                <span class="fs-1"><img src="./assets/img/icons/team.png" width="50" alt=""></span>


                                <h4 class="py-2">IT Staff Augmentation</h4>
                                <span> Expand your in-house team and get dedicated developers on demand.</span>
                            </div>

                            <div class="back">
                                <h4 class="py-2">IT Staff Augmentation</h4>
                                <span> Expand your in-house team and get dedicated developers on demand.</span>

                            </div>

                        </div>

                    </div>

                </div>
            </div>
            <div class="row justify-content-center">

                <div class="col-lg-4 p-0 ">

                    <div class="flip mx-1">

                        <div class="card shadow ">

                            <div class="front ">

                                <span class="fs-1"><img src="./assets/img/icons/developer.png" width="50" alt=""></span>


                                <h4 class="py-2">Custom Software Development</h4>
                                <span>Solve your business needs with customized software solutions.</span>
                            </div>

                            <div class="back">
                                <h4 class="py-2">Custom Software Development</h4>
                                <span>Solve your business needs with customized software solutions.</span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 p-0 ">

                    <div class="flip mx-1">

                        <div class="card shadow ">

                            <div class="front ">

                                <span class="fs-1"><img src="./assets/img/icons/mobile.png" width="50" alt=""></span>


                                <h4 class="py-2">Mobile App Development</h4>
                                <span>Get high-performing solutions that satisfy the needs of your company’s staff at all levels – from frontline workers to the higher-ups.</span>

                            </div>

                            <div class="back">
                                <h4 class="py-2">Mobile App Development</h4>
                                <span style="font-size:.8rem;">Get high-performing solutions that satisfy the needs of your company’s staff at all levels – from frontline workers to the higher-ups. Whether you need native apps on iOS, Android, Windows platforms, or whether you need a cross-platform solution, we can help you with the appropriate solution.</span>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-lg-4 p-0 ">

                    <div class="flip mx-1">

                        <div class="card shadow ">

                            <div class="front ">

                                <span class="fs-1"><img src="./assets/img/icons/support2.png" width="50" alt=""></span>


                                <h4 class="py-2">Application Management & Support</h4>
                                <span>Simplify and automate your processes leveraging your data to make smarter, faster, and better decisions. </span>
                            </div>

                            <div class="back">
                                <h4 class="py-2">Application Management & Support</h4>
                                <span>Simplify and automate your processes leveraging your data to make smarter, faster, and better decisions. </span>

                            </div>

                        </div>

                    </div>

                </div>




            </div>

        </div>
        <video src="./assets/video/video_fondo.mp4" width="110% " loop autoplay="" muted=""> </video>


    </section>

    <section id="div-industrias">
        <br>
        <br>
        <br>

        <div class="container " style="text-align:center;">
            <div class="row justify-content-center">
                <div class="col-lg-12">

                    <h2 style="color:var(--color7);font-weight:bold;">Industries</h2>
                    <div class="bar-main" style="width:100%;">
                        <div class="bar bar-big"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-lg-3" style="position:relative;">
                    <img src="./assets/img/inicio/health.png" class="img-fluid" alt="">
                    <div id="ind-health">
                        <h3 style="color:white;">Health</h3>
                    </div>
                </div>
                <div class="col-lg-3" style="position:relative;">
                    <img src="./assets/img/inicio/goverment.png" class="img-fluid" alt="">
                    <div id="ind-government" style=>
                        <h3 style="color:white;">Government</h3>
                    </div>
                </div>
                <div class="col-lg-3" style="position:relative;">
                    <img src="./assets/img/inicio/telecomm.png" class="img-fluid" alt="">
                    <div id="ind-manufacturing">
                        <h3 style="color:white;">Manufacturing</h3>
                    </div>
                </div>
                <div class="col-lg-3" style="position:relative;">
                    <img src="./assets/img/inicio/banking.png" class="img-fluid" alt="">
                    <div id="ind-banking">
                        <h3 style="color:white;">Banking</h3>
                    </div>
                </div>

            </div>
        </div>


        <br>
        <br>
        <br>
        <div id="industrias">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner " style="height:500px;">
                    <div class="carousel-item active">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <?php
                                for ($i = 0; $i <= 2; $i++) :
                                    $value = $arrNoticias[$i]; ?>
                                    <div class="col-12 col-lg-4 p-0 ">
                                        <a href="entrada/<?php echo $value['tagname'] ?>" class="card crop  " style="height:60%;" target="_blank">
                                            <span class="news"><?php echo $value['catdes'] ?></span>
                                            <img src="<?php echo $value['portada'] ?>" width="100%" height="460">
                                            <div class="card-body">
                                                <p>Awari | </p>
                                                <h5><?php echo $value['titulo'] ?></h5>
                                                <p style="font-size:15px;">
                                                    <?php echo $value['detalle'] ?>
                                                </p>
                                            </div>
                                            <div class="card-footer" style="background-color:transparent;">
                                                <h6>Read More&nbsp;<i class="fas fa-angle-right my-auto"></i></h6>
                                            </div>
                                        </a>

                                    </div>
                                <?php endfor ?>


                            </div>

                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <?php
                                if (count($arrNoticias) > 3) {
                                    for ($i = 3; $i <= 4; $i++) :
                                        $value = $arrNoticias[$i]; ?>
                                        <div class="col-12 col-lg-4 p-0 ">
                                            <a href="/entrada/<?php echo $value['tagname'] ?>" class="card crop  " style="height:60%;" target="_blank">
                                                <span class="news"><?php echo $value['catdes'] ?></span>
                                                <img src="<?php echo $value['portada'] ?>" width="100%" height="460">
                                                <div class="card-body">
                                                    <p>Awari | </p>
                                                    <h5><?php echo $value['titulo'] ?></h5>
                                                    <p style="font-size:15px;">
                                                        <?php echo $value['detalle'] ?>
                                                    </p>
                                                </div>
                                                <div class="card-footer" style="background-color:transparent;">
                                                    <h6>Read More&nbsp;<i class="fas fa-angle-right my-auto"></i></h6>
                                                </div>
                                            </a>

                                        </div>
                                <?php endfor;
                                }

                                ?>


                            </div>

                        </div>
                    </div>

                </div>
                <button class="btn-carousel1 carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="btn-carousel2 carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>




        </div>
    </section>
    <br>
    <br>

    <section class="py-4">

        <div class="container " style="text-align:center;">
            <div class="row justify-content-center">
                <div class="col-lg-12">

                    <h2 style="color:var(--color7);font-weight:bold;">Programming & Technology Expertise</h2>
                    <div class="bar-main" style="width:100%;">
                        <div class="bar bar-big"></div>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <!--sadsad-->

        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-12 col-lg-4 py-1 px-1">

                            <div class="accordion accordion-flush" id="accordionFlushExample1">
                                <div class="accordion-item">

                                    <h2 class="accordion-header" id="flush1">

                                        <button class="accordion-button collapsed shadow-lg " style="background: linear-gradient(rgba(41, 55, 66, 0.1), rgba(41, 55, 66, 0.1)), url('./assets/img/inicio/blog1.jpg');border: 2px solid var(--color4);border-radius:5px;background: size 10px;" type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="false" aria-controls="item1">

                                            <div class="w-100 title-pe" style="color:var(--color6);"><i class="fas fa-laptop-code"></i>&nbsp;Standards</div>

                                            <div class="boton-icono"><i class="fas fa-chevron-down"></i></div>

                                        </button>

                                    </h2>

                                    <div id="item1" class="accordion-collapse collapse" aria-labelledby="flush1" data-bs-parent="#accordionFlushExample">

                                        <div class="accordion-body">



                                            <div class="d-flex flex-row">

                                                <span class="me-3"><i class="fas fa-circle" aria-hidden="true"></i></span>

                                                <span>

                                                    <p>

                                                        Html 5

                                                    </p>

                                                </span>

                                            </div>
                                            <div class="d-flex flex-row">

                                                <span class="me-3"><i class="fas fa-circle" aria-hidden="true"></i></span>

                                                <span>

                                                    <p>

                                                        Css

                                                    </p>

                                                </span>

                                            </div>
                                            <div class="d-flex flex-row">

                                                <span class="me-3"><i class="fas fa-circle" aria-hidden="true"></i></span>

                                                <span>

                                                    <p>

                                                        Json

                                                    </p>

                                                </span>

                                            </div>
                                            <div class="d-flex flex-row">

                                                <span class="me-3"><i class="fas fa-circle" aria-hidden="true"></i></span>

                                                <span>

                                                    <p>

                                                        Xml / Xsd

                                                    </p>

                                                </span>

                                            </div>
                                            <div class="d-flex flex-row">

                                                <span class="me-3"><i class="fas fa-circle" aria-hidden="true"></i></span>

                                                <span>

                                                    <p>

                                                        Containers / Docker

                                                    </p>

                                                </span>

                                            </div>
                                            <div class="d-flex flex-row">

                                                <span class="me-3"><i class="fas fa-circle" aria-hidden="true"></i></span>

                                                <span>

                                                    <p>

                                                        XAML

                                                    </p>

                                                </span>

                                            </div>
                                            <div class="d-flex flex-row">

                                                <span class="me-3"><i class="fas fa-circle" aria-hidden="true"></i></span>

                                                <span>

                                                    <p>

                                                        Git

                                                    </p>

                                                </span>

                                            </div>
                                            <div class="d-flex flex-row">

                                                <span class="me-3"><i class="fas fa-circle" aria-hidden="true"></i></span>

                                                <span>

                                                    <p>

                                                        Angular

                                                    </p>

                                                </span>

                                            </div>







                                        </div>

                                    </div>

                                </div>



                            </div>








                        </div>
                        <div class="col-12 col-lg-4 py-1  px-1">
                            <div class="accordion-item ">

                                <h2 class="accordion-header" id="flush2">

                                    <button class="accordion-button collapsed shadow-lg " style="background: linear-gradient(rgba(41, 55, 66, 0.1), rgba(41, 55, 66, 0.1)), url('./assets/img/inicio/blog2.jpg');border: 2px solid var(--color4);border-radius:5px;background-size:100%;" type="button" data-bs-toggle="collapse" data-bs-target="#item2" aria-expanded="false" aria-controls="item2">

                                        <div class="w-100 title-pe" style="color:var(--color6);"><i class="fas fa-code"></i>&nbsp;Languages</div>

                                        <div class="boton-icono"><i class="fas fa-chevron-down"></i></div>

                                    </button>

                                </h2>

                                <div id="item2" class="accordion-collapse collapse" aria-labelledby="flush2" data-bs-parent="#accordionFlushExample">

                                    <div class="accordion-body">


                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Java

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    C#

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    JavaScript

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    TypeScript

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    NodeJS

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Python

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Ruby

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    PHP

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Bash

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    C++

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Dart

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Visual Basic

                                                </p>

                                            </span>

                                        </div>




                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-12 col-lg-4 py-1  px-1">
                            <div class="accordion-item ">

                                <h2 class="accordion-header" id="flush3">

                                    <button class="accordion-button collapsed shadow-lg  " style="background: linear-gradient(rgba(41, 55, 66, 0.1), rgba(41, 55, 66, 0.1)), url('./assets/img/inicio/blog3.jpg');border: 2px solid var(--color4);border-radius:5px;background-size:100%;" type="button" data-bs-toggle="collapse" data-bs-target="#item3" aria-expanded="false" aria-controls="item3">

                                        <div class="w-100 title-pe" style="color:var(--color6);"><i class="fas fa-cloud"></i>&nbsp;Cloud | CMS | CRM | ERP</div>

                                        <div class="boton-icono"><i class="fas fa-chevron-down"></i></div>

                                    </button>

                                </h2>

                                <div id="item3" class="accordion-collapse collapse" aria-labelledby="flush3" data-bs-parent="#accordionFlushExample">

                                    <div class="accordion-body">


                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    AWS (Amazon Web Services)

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Jira

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    DevOps

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Infor / Mongoose

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    WordPress

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    SharePoint

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Azure

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Alibaba Cloud

                                                </p>

                                            </span>

                                        </div>






                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-12 col-lg-4 py-1  px-1">
                            <div class="accordion-item">

                                <h2 class="accordion-header" id="flush4">

                                    <button class="accordion-button collapsed shadow-lg " style="background: linear-gradient(rgba(41, 55, 66, 0.1), rgba(41, 55, 66, 0.1)), url('./assets/img/inicio/blog4.jpg');border: 2px solid var(--color4);border-radius:5px;background-size:100%;" type="button" data-bs-toggle="collapse" data-bs-target="#item4" aria-expanded="false" aria-controls="item4">

                                        <div class="w-100 title-pe" style="color:var(--color6);"><i class="fas fa-database"></i>&nbsp;Databases</div>

                                        <div class="boton-icono"><i class="fas fa-chevron-down"></i></div>

                                    </button>

                                </h2>

                                <div id="item4" class="accordion-collapse collapse" aria-labelledby="flush4" data-bs-parent="#accordionFlushExample">

                                    <div class="accordion-body">



                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    SQL Server

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Oracle

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Mysql

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    PostgreSQL
                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    MongoDB
                                                </p>

                                            </span>

                                        </div>





                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-12 col-lg-4 py-1  px-1">
                            <div class="accordion-item ">

                                <h2 class="accordion-header" id="flush5">

                                    <button class="accordion-button collapsed shadow-lg  " style="background: linear-gradient(rgba(41, 55, 66, 0.1), rgba(41, 55, 66, 0.1)), url('./assets/img/inicio/blog5.jpg');border: 2px solid var(--color4);border-radius:5px;background-size:100%;" type="button" data-bs-toggle="collapse" data-bs-target="#item5" aria-expanded="false" aria-controls="item5">

                                        <div class="w-100 title-pe" style="color:var(--color6);"><i class="fas fa-sitemap"></i>&nbsp;System Integrations</div>

                                        <div class="boton-icono"><i class="fas fa-chevron-down"></i></div>

                                    </button>

                                </h2>

                                <div id="item5" class="accordion-collapse collapse" aria-labelledby="flush5" data-bs-parent="#accordionFlushExample">

                                    <div class="accordion-body">

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    REST

                                                </p>

                                            </span>

                                        </div>


                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    GraphQL

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    WEB UI / API

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    SSO

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Apache-NiFi

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Cloud Architecture

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Saas

                                                </p>

                                            </span>

                                        </div>






                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-12 col-lg-4 py-1  px-1">
                            <div class="accordion-item ">

                                <h2 class="accordion-header" id="flush6">

                                    <button class="accordion-button collapsed shadow-lg  " style="background: linear-gradient(rgba(41, 55, 66, 0.1), rgba(41, 55, 66, 0.1)), url('./assets/img/inicio/blog6.jpg');border: 2px solid var(--color4);border-radius:5px;background-size:100%;" type="button" data-bs-toggle="collapse" data-bs-target="#item6" aria-expanded="false" aria-controls="item6">

                                        <div class="w-100 title-pe" style="color:var(--color6);"><i class="fas fa-mobile-alt"></i>&nbsp;Mobile & Tablet</div>

                                        <div class="boton-icono"><i class="fas fa-chevron-down"></i></div>

                                    </button>

                                </h2>

                                <div id="item6" class="accordion-collapse collapse" aria-labelledby="flush6" data-bs-parent="#accordionFlushExample">

                                    <div class="accordion-body">




                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    React-Native

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Bootstrap

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    iOs Native

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Android Native

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    jQuery Mobile

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Xamarin

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Flutter

                                                </p>

                                            </span>

                                        </div>






                                    </div>

                                </div>

                            </div>


                        </div>
                        <div class="col-12 col-lg-4 py-1  px-1">
                            <div class="accordion-item ">

                                <h2 class="accordion-header" id="flush7">

                                    <button class="accordion-button collapsed shadow-lg  " style="background: linear-gradient(rgba(41, 55, 66, 0.1), rgba(41, 55, 66, 0.1)), url('./assets/img/inicio/blog7.jpg');border: 2px solid var(--color4);border-radius:5px;background-size:100%;" type="button" data-bs-toggle="collapse" data-bs-target="#item7" aria-expanded="false" aria-controls="item7">

                                        <div class="w-100 title-pe" style="color:var(--color6);"><i class="fab fa-microsoft"></i>&nbsp;Microsoft</div>

                                        <div class="boton-icono"><i class="fas fa-chevron-down"></i></div>

                                    </button>

                                </h2>

                                <div id="item7" class="accordion-collapse collapse" aria-labelledby="flush7" data-bs-parent="#accordionFlushExample">

                                    <div class="accordion-body">




                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    .NET Framework (ASP,.NET.MVC, C#)

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    VB Desktop

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Web API

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    WCF

                                                </p>

                                            </span>

                                        </div>




                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-12 col-lg-4 py-1  px-1">
                            <div class="accordion-item ">

                                <h2 class="accordion-header" id="flush8">

                                    <button class="accordion-button collapsed shadow-lg  " style="background: linear-gradient(rgba(41, 55, 66, 0.1), rgba(41, 55, 66, 0.1)), url('./assets/img/inicio/blog8.jpg');border: 2px solid var(--color4);border-radius:5px;background-size:100%;" type="button" data-bs-toggle="collapse" data-bs-target="#item8" aria-expanded="false" aria-controls="item8">

                                        <div class="w-100 title-pe" style="color:var(--color6);"><i class="fas fa-file-alt"></i>&nbsp;Reporting & Charting</div>

                                        <div class="boton-icono"><i class="fas fa-chevron-down"></i></div>

                                    </button>

                                </h2>

                                <div id="item8" class="accordion-collapse collapse" aria-labelledby="flush5" data-bs-parent="#accordionFlushExample">

                                    <div class="accordion-body">




                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    BI / Analytics

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Telerik Report

                                                </p>

                                            </span>

                                        </div>






                                    </div>

                                </div>

                            </div>

                        </div>
                        <div class="col-12 col-lg-4 py-1  px-1">
                            <div class="accordion-item ">

                                <h2 class="accordion-header" id="flush9">

                                    <button class="accordion-button collapsed shadow-lg  " style="background: linear-gradient(rgba(41, 55, 66, 0.1), rgba(41, 55, 66, 0.1)), url('./assets/img/inicio/blog9.jpg');border: 2px solid var(--color4);border-radius:5px;background-size:100%;" type="button" data-bs-toggle="collapse" data-bs-target="#item9" aria-expanded="false" aria-controls="item9">

                                        <div class="w-100 title-pe" style="color:var(--color6);"><i class="fab fa-node-js"></i>&nbsp;Libraries Frameworks</div>

                                        <div class="boton-icono"><i class="fas fa-chevron-down"></i></div>

                                    </button>

                                </h2>

                                <div id="item9" class="accordion-collapse collapse" aria-labelledby="flush9" data-bs-parent="#accordionFlushExample">

                                    <div class="accordion-body">




                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    JQuery

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    React

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Redux

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    AngularJS

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    SequelizeJS

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    ExpressJS

                                                </p>

                                            </span>

                                        </div>

                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    MongooseJS

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Angular TypeScript

                                                </p>

                                            </span>

                                        </div>



                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>





            </div>
        </div>














        </div>

    </section>

    <br>
    <br>
    <br>

    <section id="careers">
        <br>
        <br>
        <div class="container " style="text-align:center;">
            <div class="row justify-content-center">
                <div class="col-lg-12">

                    <h2 style="color:white;font-weight:bold;">Careers</h2>
                    <div class="bar-main" style="width:100%;">
                        <div class="bar bar-big"></div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-12">
                    <div style="text-align:center;color:white;font-size:18px;"><span>At Awari Digital Inc., we are continuously looking for talented individuals to join our team. <br>We seek dynamic, results-oriented individuals, interested to work in a collaborative,<br> innovative and friendly environment. </span></div>
                    <br>
                    <div style="text-align:center;color:white;font-weight:bold;font-size:20px;"><span>Interested in joining us? </span></div>
                    <br>
                    <div style="text-align:center;color:white;">Contact our Recruitment Team at &nbsp;<a href="mailto:recruitment@awaridigital.com" style="color:var(--color8);font-weight:bold;" target="_blank">recruitment@awaridigital.com</a>&nbsp;with any questions
                    </div>


                </div>
            </div>
        </div>
        <br>
        <br>

    </section>

    <section id="div-contact">
        <div class="container-fluid" id="img-contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12" style="text-align:center;color:white;font-weight:bold;padding-top:12rem;padding-bottom:12rem;">
                        <h1>Contact Us</h1>
                    </div>

                </div>

            </div>

        </div>
        <br>
        <br>
        <div class="container">
            <div class="row d-flex ">
                <div class="col-12 col-lg-4 py-5" style="background-color:var(--color4);">
                    <div class="row">
                        <div class="col-2 col-lg-2">
                            <img src="./assets/img/icons/call.png" class="img-fluid" alt="">
                            <br>

                        </div>
                        <div class="col-10 col-lg-6">
                            <p style="color:white;">Make A Call <br>+860.919.9633</p>

                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-lg-11 " style="border-style: dashed;border-width: 0px 0px 1px 0px;border-color: #FFFFFF99;padding: 0px 0px 25px 0px;">

                        </div>
                    </div>
                    <div class="row pt-4">
                        <div class="col-2 col-lg-2">
                            <img src="./assets/img/icons/mail.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 col-lg-6">
                            <p style="color:white;">Send A Email<br><a href="mailto:info@awaridigital.com" style="color:var(--color6);" target="_blank">info@awaridigital.com</a></p>

                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-lg-11 " style="border-style: dashed;border-width: 0px 0px 1px 0px;border-color: #FFFFFF99;padding: 0px 0px 25px 0px;">

                        </div>
                    </div>

                </div>
                <div class="col-12 col-lg-8 p-5" style="background-color: #EFF2F7;">
                    <form action="">
                        <div class="row ">
                            <h3 class="fw-bold">Get In Touch</h3>
                            <div class="form-group pt-2">
                                <div class="row d-flex">
                                    <div class="col-6 col-lg-6"> <input type="text" class="form-control mb-3 " placeholder="Name"></div>
                                    <div class="col-6 col-lg-6"><input type="text" class="form-control mb-3 " placeholder="Phone"></div>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-12 col-lg-12"> <input type="text" class="form-control mb-3 " placeholder="Email"></div>

                                </div>
                                <textarea class="form-control mb-4 " rows="4" placeholder="Your Message..."></textarea>
                                <div style="text-align:center;">
                                    <center>
                                        <div class="norobot">
                                            <div class="g-recaptcha mb-3" data-sitekey="6LfWVXoeAAAAADpSOlaIhXFrWaCRo69cHw1wOJJR"></div>
                                        </div>
                                    </center>
                                    <button class="button1 fw-bold py-2" style="background-color:var(--color2);border-color:var(--color2);">Send&nbsp; </button>

                                    <br>
                                    <br>
                                    <div>
                                        <span>"By sending this form I confirm that I have read and accept Awari Digital <a href="policy" style="text-decoration:underline;" target="_blank"> Privacy Policy </a> &nbsp;” </span>
                                    </div>
                                    <br>
                                    <br>


                                </div>
                            </div>
                        </div>



                    </form>
                </div>


            </div>

        </div>


    </section>
    <br>
    <br>

    <?php include_once './views/includes/footer.php'; ?>

</body>







<script type="text/javascript">
    let modal = new bootstrap.Modal(document.getElementById('myModal'), );
    modal.show();
</script>

<script src="<?php echo WEBURL ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo WEBURL ?>/assets/js/jquery-ui.min.js"></script>
<script src="<?php echo WEBURL ?>/assets/js/jquery.dd.min.js"></script>
<script src="<?php echo WEBURL ?>/assets/js/popper.min.js"></script>


<script src="<?php echo WEBURL ?>/assets/js/bootstrap.pooper.js"></script>

<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
<script src="<?php echo WEBURL ?>/assets/js/hubslider.min.js"></script>

<script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        header.classList.toggle("abajo", window.scrollY > 750);
    })
</script>
<script>
    $(".hover").mouseleave(
        function() {
            $(this).removeClass("hover");
        }
    );
</script>


</html>