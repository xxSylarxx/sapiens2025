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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo WEBURL ?>/assets/img/icons/escudo2.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/web.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/desplazamiento.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/niveles.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/networks.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@700;800;900&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <!-- animaciones de elementos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
    <script src="https://www.google.com/recaptcha/api.js?hl=en"></script>
    <!-- Script para animaciones de elementos -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- carrousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- estilos para cards nuevo estilo -->
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/estilocard.css" />
    <!-- estilos de fondo con particulas -->
    <link rel="stylesheet" media="screen" href="<?php echo WEBURL ?>/assets/css/estiloparticulas.css">



    <title>SAPIENS CONSULTING</title>
</head>



<body>

    <style>
        .abajo {
            background-color: var(--color6);
            -moz-box-shadow: 0 3px 3px rgba(94, 94, 94, 0.75);
            -webkit-box-shadow: 0 3px 3px rgba(94, 94, 94, 0.75);
            box-shadow: 0 3px 3px rgba(94, 94, 94, 0.75);
            color: black;
        }

        .abajo>.navbar-light .navbar-nav .nav-link {
            color: var(--color1);
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

        #servicios {
            padding-top: 6rem;
            margin-top: -80px;
        }

        #p-servicios {
            margin-top: -40px;
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--color1);
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
            font-size: 1.5rem;
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
            padding-bottom: 5%;
        }

        .tittle-banner1 {
            color: white;
            position: relative;
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
            background: transparent;
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
            /* background-image: url("./assets/img/inicio/fondo1.png"); */
            padding-top: 3rem;
            padding-bottom: 3rem;
            background-color: var(--color1);
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

        #section-ourservices {
            scroll-margin-top: 150px;
        }

        #div-industrias {
            background-color: white;
            /* margin-top: -5px; */
            padding-top: 5rem;
            scroll-margin-top: 50px;
            position: relative;
        }

        #img-banner {
            object-fit: cover;
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

        #div-about {
            margin-top: 5rem;
            margin-bottom: 16rem;
        }

        #div-about #about {
            padding-top: 8rem;
        }

        #programing {
            padding-top: 2rem;
        }

        #section-ourservices {
            margin-top: -50rem;
        }

        #partners {
            padding-top: 4rem;
            padding-bottom: 4rem;
        }

        #section-banner {
            margin-top: -49px;
        }

        #titulo-services {
            font-weight: bold;
            color: white;
        }

        /* Primer mediaquery */

        @media only screen and (min-width:210px) and (max-width:409px) {

            #titulo-services {
                font-weight: bold;
                color: black;
            }

            #p-servicios {
                font-size: .9rem;
            }

            #particles-js {
                display: none;
            }

            #section-ourservices {
                margin-top: 0;
                background: #012E6D;
            }

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

            #div-about #about {
                padding-top: 20rem;
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
                padding-bottom: 5%;
            }

            .tittle-banner1 {
                font-size: .6rem;
                padding: 1rem;
                color: white;
                /* z-index: -3; */
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

            #section-banner {
                margin-top: 0px;
            }

            #section-ourservices h2 {
                font-weight: bold;
                color: white;
            }

            /* #servicios > ul{
                padding-left:1rem;
            } */
        }



        @media only screen and (min-width:410px) and (max-width:600px) {
            #div-about #about {
                padding-top: 22rem;
            }

            #particles-js {
                display: none;
            }

            .container__cards {
                margin-top: 1rem;
            }

            #section-ourservices {
                margin-top: 0;
                background: #012E6D;
            }

            .tittle-banner1 {
                font-size: .8rem;
                padding: 1rem;
                color: white;
                /* z-index: -3; */
                font-weight: bold;
            }

            .button2 a {
                font-size: 1rem;
            }
        }

        @media only screen and (min-width:601px) and (max-width:919px) {
            #div-about #about {
                padding-top: 42rem;
            }

            #particles-js {
                display: none;
            }

            .container__cards {
                margin-top: 1rem;
            }

            .div-banner h2 {
                font-size: 1rem;
            }

            #section-ourservices {
                margin-top: 0;
                background: #012E6D;
            }

            .button2 a {
                font-size: 1rem;
            }
        }

        /* @media only screen and (min-width:410px) and (max-width:1096px) { */
        @media only screen and (min-width:920px) and (max-width:1096px) {
            #titulo-services {
                font-weight: bold;
                color: black;
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

            #div-about #about {
                padding-top: 8rem;
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
                padding-bottom: 5%;
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
            #section-ourservices {
                margin-top: -50rem;
            }

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

            .div-banner {
                left: 2rem;
                padding-bottom: 6%;
            }

        }

        @media only screen and (min-width:1281px) and (max-width:1600px) {
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

            #programing {
                padding-top: 4rem;
            }

            #servicios {
                padding-top: 7rem;
            }
        }
    </style>

    <?php include_once './views/includes/header.php'; ?>


    <br>
    <br>
    <section id="section-banner">
        <?php
        if ($arrBanner['tipo'] == 'slider') { ?>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-inner">
                    <?php
                    foreach ($arrBanner['cuerpo'] as $key => $item) { ?>
                        <div class="carousel-item <?php echo $key == 0 ? 'active' : '' ?>">
                            <?php if ($key == 0) { ?>
                                <div class="container div-banner">
                                    <div class="">
                                        <h2 class="tittle-banner1">Gain Agility and Expand your&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br> Expertise with Developers on Demand </h2>

                                        <br>
                                        <button class="button2">
                                            <a class="" href="" data-bs-toggle="modal" data-bs-target="#modalcontact">Contact Us</a>
                                        </button>
                                    </div>
                                </div>
                            <?php } else if ($key == 1) { ?>
                                <div class="container div-banner">
                                    <div class="">
                                        <h2 class="tittle-banner1">We bring speed, efficiency and expertise to your software <br>development team with the trust and commitment you need.<br> Take advantage of nearshore advantages for flexibility and value. </h2>

                                        <br>
                                        <button class="button2">
                                            <a class="" href="" data-bs-toggle="modal" data-bs-target="#modalcontact">Contact Us</a>
                                        </button>
                                    </div>
                                </div>
                            <?php } ?>
                            <img src="<?php echo $item['imagen'] ?>" class="d-block crop w-100" style="height:80vh;" id="img-banner">
                        </div>
                    <?php } ?>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
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
                <!-- <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="modalVideoLabel">Contact Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> -->
                <div class="modal-body">
                    <div class="row d-flex ">

                        <div class="col-12 col-lg-12 p-5" style="background-color: #EFF2F7;">
                            <form id="formContacto" name="formcontact" onsubmit="enviarCorreo(event)">
                                <div class="row ">
                                    <h3 class="fw-bold">Get In Touch</h3>
                                    <div class="form-group pt-2">
                                        <div class="row d-flex">
                                            <div class="col-6 col-lg-6"> <input type="text" name="nombre" class="form-control mb-3 " placeholder="Name" required></div>
                                            <div class="col-6 col-lg-6"><input type="text" name="telefono" class="form-control mb-3 " placeholder="Phone" required></div>
                                        </div>
                                        <div class="row d-flex">
                                            <div class="col-12 col-lg-12"> <input type="email" name="correo" class="form-control mb-3 " placeholder="Email" required></div>

                                        </div>
                                        <textarea class="form-control mb-4 " rows="4" name="consulta" placeholder="Your Message..." required></textarea>
                                        <div style="text-align:center;">
                                            <center>
                                                <div class="norobot">
                                                    <div class="g-recaptcha mb-3" data-sitekey="6LfWVXoeAAAAADpSOlaIhXFrWaCRo69cHw1wOJJR" required></div>
                                                </div>
                                            </center>
                                            <button class="button1 fw-bold py-2" style="background-color:var(--color1);border-color:var(--color2);" type="submit">Send&nbsp; </button>

                                            <br>
                                            <br>
                                            <div>
                                                <span>"By sending this form I confirm that I have read and accept Sapiens Consulting <a href="/policy" style="text-decoration:underline;" target="_blank"> Privacy Policy </a> &nbsp;” </span>
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

    <br><br>

    <!---Servicios de exito -->
    <section id="servicios">

        <center>
            <div class="container3d">

                <ul>

                    <li>
                        <a class='normal'>
                            <img src="./assets/img/recursos/confin3.png" class="img-fluid" alt="" style="margin-top:-40px;">
                        </a>
                        <p id="p-servicios">Ensure Confidentiality</p>
                        <div class='info'>
                            <h3>Ensure Confidentiality</h3>
                            <br>
                            <p>Our developers are not assigned to different clients in the same industry or region at the same time.</p>
                        </div>
                    </li>

                    <li>
                        <a class='normal'>
                            <img src="./assets/img/recursos/equityy.png" class="img-fluid" alt="" style="margin-top:-40px;">
                        </a>
                        <p id="p-servicios">Knowledge Equity</p>
                        <div class='info'>
                            <h3>Knowledge Equity</h3>
                            <br>
                            <p>Carefully selected professionals to offer outstanding performance and specialization.</p>
                        </div>
                    </li>

                    <li>
                        <a class='normal'>

                            <img src="./assets/img/recursos/near22.png" class="img-fluid" alt="" style="margin-top:-40px;">

                        </a>
                        <p id="p-servicios">Nearshore Advantages</p>
                        <div class='info'>
                            <h3>Nearshore Advantages</h3>
                            <br>
                            <p>With professionals in Peru (Eastern Time Zone), you have easy communication and real collaboration.</p>
                        </div>
                    </li>

                    <li>
                        <a class='normal'>

                            <img src="./assets/img/recursos/value2.png" class="img-fluid" alt="" style="margin-top:-40px;">

                        </a>
                        <p id="p-servicios">Highest Engagement</p>
                        <div class='info'>
                            <h3>Highest engagement value</h3>
                            <br>
                            <p>We offer high quality services at an international competitive cost.</p>
                        </div>
                    </li>

                    <li>
                        <a class='normal'>

                            <img src="./assets/img/recursos/mobile2.png" class="img-fluid" alt="" style="margin-top:-40px;">

                        </a>
                        <p id="p-servicios">Expertise</p>
                        <div class='info'>
                            <h3>Expertise </h3>
                            <br>
                            <p>We can help you with mobile development, software testing, user experience, cloud, big data and software architecture.</p>
                        </div>
                    </li>





                </ul>

            </div>

        </center>
    </section>

    <!-- seccion sobre nosotros -->

    <section id="div-about">
        <div class="container" style="position:relative;">
            <div class="row d-flex justify-content-around">
                <div class="col-lg-6" style="position:relative;">

                    <img id="img-mundo" src="./assets/img/inicio/mundo.png" style="position:absolute; z-index:1;" alt="" width="100%">
                    <img id="img-mundo2" src="./assets/img/inicio/about1_1.png" style="position:absolute; z-index:2;" alt="" width="100%">
                    <img id="img-mundo3" src="./assets/img/inicio/about1_2.png" style="position:absolute; z-index:3;" alt="" width="100%">

                </div>

                <div id="about" class="col-lg-5 my-auto ">
                    <h3 style="color:var(--color7);font-weight:bold;">About Us</h3>
                    <div class="bar-main">
                        <div class="bar bar-big"></div>
                    </div>
                    <p style="text-align:justify;">Sapiens Consulting is a premier consulting firm founded by a group
                        of professionals in technology and management consulting. <br>
                        Our key assets are our talented and skilled resources. We bring great expertise and values to
                        build the capabilities in our clients to achieve sustainable advantage.
                        We provide four business lines: IT Staff Augmentation, Custom Application Development, Mobile Apps Development,
                        and Application Management and Support.

                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Seccion de otros servicios -->
    <div id="particles-js"></div>
    <section id="section-ourservices" class="container-fluid py-5">

        <div>
            <div class="container " style="text-align:center;">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <h2 id="titulo-services">Our Services</h2>
                        <div class="bar-main" style="width:100%;">
                            <div class="bar bar-big"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container__cards">

                <div class="card_style1">
                    <div class="cover">
                        <img src="./assets/img/inicio/p1.png" alt="" />
                        <div class="img__back"></div>
                    </div>
                    <div class="description">
                        <h2 style="color:black;">IT Staff Augmentation</h2>
                        <p>
                            Individual developers and dedicated development teams on demand
                            to expand and support your in-house team or cover specific technical
                            needs and domain expertise.
                        </p>
                        <br>
                        <br>
                        <!-- <a class="" href="" data-bs-toggle="modal" data-bs-target="#modal1"><input type="button" value="More" /></a> -->
                    </div>
                </div>

                <div class="card_style1">
                    <div class="cover">
                        <img src="./assets/img/inicio/p4.png" alt="" />
                        <div class="img__back"></div>
                    </div>
                    <div class="description">
                        <h2 style="color:black;">Application Development</h2>
                        <p>
                            Software tailored to meet your unique demands. Along with full-cycle custom
                            software development, we provide software maintenance and platform-based customization.
                        </p>
                        <br>
                        <br>
                        <!-- <a class="" href="" data-bs-toggle="modal" data-bs-target="#modal2"><input type="button" value="More" /></a> -->
                    </div>
                </div>

                <div class="card_style1 ">
                    <div class="cover">
                        <img src="./assets/img/inicio/p3.png" alt="" />
                        <div class="img__back"></div>
                    </div>
                    <div class="description">
                        <h2 style="color:black;">Mobile Apps Development</h2>
                        <p>Whether you need native apps on iOS, Android, Windows platforms,
                            or a cross-platform solution, we can help you with the appropriate solution.
                            We offer project implementation, integration, and maintenance of mobile applications.

                        </p>
                        <!-- <a class="" href="" data-bs-toggle="modal" data-bs-target="#modal3"><input type="button" value="More" /></a> -->
                    </div>
                </div>

                <div class="card_style1">
                    <div class="cover">
                        <img src="./assets/img/inicio/p2.png" alt="" />
                        <div class="img__back"></div>
                    </div>
                    <div class="description">
                        <h2 style="color:black;">Management and Support</h2>
                        <p>We help clients managing and providing support to their
                            applications and technology infrastructure to get the most
                            out of their investment.
                        </p>
                        <br>
                        <br>
                        <br>
                        <!-- <a class="" href="" data-bs-toggle="modal" data-bs-target="#modal4"><input type="button" value="More" /></a> -->
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- modales para la seccion de otros servicios -->
    <div class="modal fade" id="modal1" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div style="box-shadow: #012e6d 0px 1px 4px, #012e6d 0px 0px 0px 5px;border-radius:5px;">
                        <h4 Style="text-align:center;color:var(--color1);font-weight:bold;" class="px-5 pt-5">IT Staff Augmentation</h4>
                        <p style="text-align:justify;" class="p-5">Sapiens offers individual developers on demand as well as
                            dedicated development teams to expand and support your in-house team or cover specific
                            technical needs and domain expertise. With our specialists located in Peru (Eastern Time Zone)
                            we have a vast resource pool with technical knowledge to meet your ad hoc needs.

                        </p>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal2" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div style="box-shadow: #012e6d 0px 1px 4px, #012e6d 0px 0px 0px 5px;border-radius:5px;">
                        <h4 Style="text-align:center;color:var(--color1);font-weight:bold;" class="px-5 pt-5">Application Development</h4>
                        <p style="text-align:justify;" class="p-5">Sapiens provides business software tailored to meet your unique demands.

                            Our skilled specialists know the game of business and deliver solutions accord with all the specified requirements while invariably staying within time and budget limits.

                            Along with full-cycle custom software development, we provide software maintenance and platform-based customization.

                            Our professionals carefully analyze your needs and help you create a detailed software requirements specification, which is indispensable for implementing the project the way you envision it


                        </p>
                    </div>



                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="modal3" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div style="box-shadow: #012e6d 0px 1px 4px, #012e6d 0px 0px 0px 5px;border-radius:5px;">
                        <h4 Style="text-align:center;color:var(--color1);font-weight:bold;" class="px-5 pt-5">Mobile Apps Development</h4>
                        <p style="text-align:justify;" class="p-5">Sapiens provides intelligent mobile software and offers project implementation, integration and maintenance of mobile applications.

                            Great mobile applications are more than lines of code. Our talented experts in mobile application development rapidly deliver high-performing solutions that satisfy the needs of your company’s staff at all levels – from frontline workers to the higher-ups.

                            Whether you need native apps on iOS, Android, Windows platforms or whether you need a cross-platform solution, we can help you with the appropriate solution.


                        </p>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal4" tabindex="-1" aria-labelledby="modalVideoLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">

                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">

                    <div style="box-shadow: #012e6d 0px 1px 4px, #012e6d 0px 0px 0px 5px;border-radius:5px;">
                        <h4 Style="text-align:center;color:var(--color1);font-weight:bold;" class="px-5 pt-5">Application Management and Support</h4>
                        <p style="text-align:justify;" class="p-5">Sapiens has the technical knowledge and practical experience you need to get the most out of your software applications.

                            We help clients managing and providing support to their applications and technology infrastructure.

                            If you don’t have an in-house team or want to outsource some or all the system management and support tasks, we can you help.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><!--  --> 
    <!-- Seccion de industrias -->

    <section id="div-industrias">
        <div class="container" style="text-align:center;">
            <div class="row justify-content-center">
                <div class="col-lg-12">

                    <h2 style="color:var(--color7);font-weight:bold;">Projects</h2>
                    <div class="bar-main" style="width:100%;">
                        <div class="bar bar-big"></div>
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
                                                <p>Sapiens | </p>
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
                                                    <p>Sapiens | </p>
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
    <!-- seccion de Programming & Technology Expertise -->
    <section id="programing">

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
        <div class="container">
            <div class="row d-flex justify-content-between">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-12 col-lg-4 py-1 px-1">
                            <div class="accordion accordion-flush" id="accordionFlushExample1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush1">
                                        <button class="accordion-button collapsed shadow-lg " style="background: linear-gradient(rgba(41, 55, 66, 0.1), rgba(41, 55, 66, 0.1)), url('./assets/img/inicio/blog1.jpg');border: 2px solid var(--color4);border-radius:5px;background-size: 100%;" type="button" data-bs-toggle="collapse" data-bs-target="#item1" aria-expanded="false" aria-controls="item1">
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
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Power Shell

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Batch

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    ASP Clásico (Nativo)

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    ASP.NET

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    SQL

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    jQuery

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Aplicaciones PWA (Progressive Web Apps)

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Blazor

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Angular JS

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

                                                    Django

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Telerik

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Laravel

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

                                        <div class="w-100 title-pe" style="color:var(--color6);"><i class="fas fa-cloud"></i>&nbsp;Cloud | CMS </div>

                                        <div class="boton-icono"><i class="fas fa-chevron-down"></i></div>

                                    </button>

                                </h2>

                                <div id="item3" class="accordion-collapse collapse" aria-labelledby="flush3" data-bs-parent="#accordionFlushExample">

                                    <div class="accordion-body">


                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    jira

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

                                                    Infor/Mongoose

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
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    OpenShift

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Oracle Cloud

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Google Cloud AI

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
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Swift

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Kotlin

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    MAUI

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Iconic Framework

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Kendo UI

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
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Clean Architecture

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Azure DevOps

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Microsoft Fabric

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Containers

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Docker

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Git

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Kubernetes

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
                                                    TensorFlow
                                                </p>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>
                                            <span>
                                                <p>
                                                    PyTorch
                                                </p>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>
                                            <span>
                                                <p>
                                                    AWS AI
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
                                                    MATLAB
                                                </p>
                                            </span>
                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>
                                            <span>
                                                <p>
                                                    Reporting Services
                                                </p>
                                            </span>
                                        </div>
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
                        <div class="col-12 col-lg-4 py-1  px-1">
                            <div class="accordion-item ">

                                <h2 class="accordion-header" id="flush10">

                                    <button class="accordion-button collapsed shadow-lg  " style="background: linear-gradient(rgba(41, 55, 66, 0.1), rgba(41, 55, 66, 0.1)), url('./assets/img/inicio/blog10.jpg');border: 2px solid var(--color4);border-radius:5px;background-size:100%;" type="button" data-bs-toggle="collapse" data-bs-target="#item10" aria-expanded="false" aria-controls="item10">

                                        <div class="w-100 title-pe" style="color:var(--color6);"><i class="fab fa-node-js"></i>&nbsp;CRM / ERP</div>

                                        <div class="boton-icono"><i class="fas fa-chevron-down"></i></div>

                                    </button>

                                </h2>

                                <div id="item10" class="accordion-collapse collapse" aria-labelledby="flush10" data-bs-parent="#accordionFlushExample">

                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    SAP

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    SAP (ABAP)

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    SAP Business One

                                                </p>

                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 py-1  px-1">
                            <div class="accordion-item ">

                                <h2 class="accordion-header" id="flush11">

                                    <button class="accordion-button collapsed shadow-lg  " style="background: linear-gradient(rgba(41, 55, 66, 0.1), rgba(41, 55, 66, 0.1)), url('./assets/img/inicio/blog11.jpg');border: 2px solid var(--color4);border-radius:5px;background-size:100%;" type="button" data-bs-toggle="collapse" data-bs-target="#item11" aria-expanded="false" aria-controls="item11">
                                        <div class="w-100 title-pe" style="color:var(--color6);"><i class="fab fa-node-js"></i>&nbsp;Cybersecurity</div>
                                        <div class="boton-icono"><i class="fas fa-chevron-down"></i></div>
                                    </button>
                                </h2>
                                <div id="item11" class="accordion-collapse collapse" aria-labelledby="flush11" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>
                                            <span>

                                                <p>

                                                    Okta

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>
                                            <span>
                                                <p>

                                                    Microsoft Azure Active

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Directory

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Fortinet

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                    Ping Identy

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                SonarQube

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                Checkmarx

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                Veracode

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                Microsoft SDL

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                GitHub Advanced Security

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                AWS Security Hub

                                                </p>

                                            </span>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-4 py-1  px-1">
                            <div class="accordion-item ">
                                <h2 class="accordion-header" id="flush12">
                                    <button class="accordion-button collapsed shadow-lg  " style="background: linear-gradient(rgba(41, 55, 66, 0.1), rgba(41, 55, 66, 0.1)), url('./assets/img/inicio/blog12.jpg');border: 2px solid var(--color4);border-radius:5px;background-size:100%;" type="button" data-bs-toggle="collapse" data-bs-target="#item12" aria-expanded="false" aria-controls="item12">

                                        <div class="w-100 title-pe" style="color:var(--color6);"><i class="fab fa-node-js"></i>&nbsp;AI</div>

                                        <div class="boton-icono"><i class="fas fa-chevron-down"></i></div>
                                    </button>
                                </h2>
                                <div id="item12" class="accordion-collapse collapse" aria-labelledby="flush12" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>
                                            <span>
                                                <p>

                                                NLP

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                Machine Learning

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                OpenCV

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                YOLO (You Only Look Once)

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                Scikit-learn

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">

                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                PyTorch

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                Generative AI

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                Deep Learning

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                TensorFlow

                                                </p>

                                            </span>

                                        </div>
                                        <div class="d-flex flex-row">
                                            <span class="me-3"><i class="fas fa-circle"></i></span>

                                            <span>

                                                <p>

                                                OCR

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


    <br><!--  -->
    <br><!--  -->
    <br><!--  -->
    <!-- Seccion de partners -->

    <section id="partners" class="container-fluid px-0">
        <div class="container">
            <div class="container " style="text-align:center;">
                <div class="row justify-content-center">
                    <div class="col-lg-12">

                        <h2 style="color:var(--color7);font-weight:bold;">Partners</h2>
                        <div class="bar-main" style="width:100%;">
                            <div class="bar bar-big"></div>
                        </div>
                    </div>
                    <div class="col-lg-12">

                        <p style="font-size:1.2rem;">Our team has certifications in multiple recognized technologies and professional standards in the industry such as:</p>
                    </div>

                </div>
            </div>
            <br><br>
            <div class="row owl-carousel mx-0" id="owl-one">
                <div class="col-lg  justify-content-center align-content-center">
                    <div>
                        <img src="./assets/img/inicio/exito1.png" width="100%">
                    </div>
                    <p style="text-align:center;">Microsoft Corporation ® – .Net, SQL, System Center, MS Project, Analysis Services, Power BI</p>
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./assets/img/inicio/exito2.png" width="100%">
                    <p style="text-align:center;">Project Management Institute ® PMI– PMP, CAPM, PMI-PBA</p>
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./assets/img/inicio/exito3.png" width="100%">
                    <p style="text-align:center;">Information Technology Infrastructure Library ® ITIL – Foundations</p>
                </div>
                <div class="col justify-content-center align-content-center">
                    <img src="./assets/img/inicio/exito4.png" width="100%">
                    <p style="text-align:center;">In addition, we have a partnership with Truenorth Corporation, a premier Business Consultant in the Caribbean and Puerto Rico.</p>
                </div>
            </div>
        </div>
    </section>
    <?php
    include_once 'floating.php';
    ?>
    <br>
    <br>
    <br>
    <section id="careers">
        <br>
        <br>
        <div class="container " style="text-align:center;">
            <div class="row justify-content-center">
                <div class="col-lg-12">

                    <h2 style="color:white;font-weight:bold;">Work with us</h2>
                    <div class="bar-main" style="width:100%;">
                        <div class="bar bar-big"></div>
                        <!-- <div class="py-5 justify-content-center">
                            <img src="./assets/img/inicio/wk_us.png" width="100%" alt="">
                        </div> -->
                    </div>
                </div>

            </div>
        </div>
        <!-- <section id="lema1" class="py-5">
            <img src="./assets/img/inicio/wk_us.png" width="100%" alt="">
        </section> -->
        <!-- <div class="container"> -->
        <div class="row">
            <div class="col-12 col-lg-12">
                <div style="text-align:center;color:white;font-size:18px;"><span>Sapiens Corporation is continuously in search of
                            resources with technical skills, excellent attitude and self-motivated. Our recruitment process is a demanding
                            and include tests of attitude, technical evaluation, communication skills and validation of professional references.
                            Our team consists only of professionals with university studies. We seek dynamic, results-oriented individuals,
                            interested to work in a thoughtful, collaborative, innovative and friendly environment. We seek resources mainly
                            in the following areas: Developers, Systems analysts, Database administrator, Experts in BPM, Project Managers.</span></div>
                <br>
                <!-- <div style="text-align:center;color:white;font-weight:bold;font-size:20px;"><span>Interested in joining us? </span></div>
                    <br>
                    <div style="text-align:center;color:white;">Contact our Recruitment Team at &nbsp;<a href="mailto:recruitment@awaridigital.com" style="color:var(--color8);font-weight:bold;" target="_blank">recruitment@awaridigital.com</a>&nbsp;with any questions
                    </div> -->


            </div>
        </div>
        <!-- </div> -->
        <!-- <br> -->
        <!-- <br> -->

    </section>
    <section id="div-contact">
        <!-- <div class="container-fluid" id="img-contact">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-lg-12" style="text-align:center;color:white;font-weight:bold;padding-top:12rem;padding-bottom:12rem;">
                        <h1>Contact Us</h1>
                    </div>

                </div>

            </div>

        </div> -->
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row d-flex ">
                <div class="col-12 col-lg-4 py-5 " style="background-color:var(--color1);">
                    <div class="row justify-content-lg-start justify-content-center">
                        <div class="col-2 col-lg-2">
                            <img src="./assets/img/icons/mail.png" class="img-fluid" alt="">
                            <br>
                        </div>
                        <div class="col-6 col-lg-10">
                            <p style="color:white;word-wrap: break-word;">General Inquiry - send an email: <br><a href="mailto:sales@sapiensconsultingperu.com" style="color:var(--color6);" target="_blank">sales@sapiensconsultingperu.com</a></p>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-lg-11 " style="border-style: dashed;border-width: 0px 0px 1px 0px;border-color: #FFFFFF99;padding: 0px 0px 25px 0px;">
                        </div>
                    </div>
                    <div class="row pt-4 justify-content-lg-start justify-content-center">
                        <div class="col-2 col-lg-2">
                            <img src="./assets/img/icons/mail.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 col-lg-8">
                            <p style="color:white;word-wrap: break-word;">Career Inquiry - send an email:<br><a href="mailto:jobs@sapiensconsultingperu.com" style="color:var(--color6);" target="_blank">jobs@sapiensconsultingperu.com</a></p>

                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-lg-11 " style="border-style: dashed;border-width: 0px 0px 1px 0px;border-color: #FFFFFF99;padding: 0px 0px 25px 0px;">

                        </div>
                    </div>
                    <!-- <div class="row pt-4">
                        <div class="col-2 col-lg-2">
                            <img src="./assets/img/icons/gps.png" class="img-fluid" alt="">
                        </div>
                        <div class="col-6 col-lg-8">
                            <p style="color:white;">Perú Office<br>Calle Michigan 230, Rinconada del Lago, La Molina 15026, Lima – Perú.</p>

                        </div>
                    </div> 
                    <div class="row d-flex justify-content-center">
                        <div class="col-11 col-lg-11 " style="border-style: dashed;border-width: 0px 0px 1px 0px;border-color: #FFFFFF99;padding: 0px 0px 25px 0px;">

                        </div>
                    </div>-->

                </div>
                <div class="col-12 col-lg-8 p-5" style="background-color: #EFF2F7;">
                    <form id="formContacto" name="formcontact" onsubmit="enviarCorreo(event)">
                        <div class="row ">
                            <h3 class="fw-bold">Get In Touch</h3>
                            <div class="form-group pt-2">
                                <div class="row d-flex">
                                    <div class="col-6 col-lg-6"> <input type="text" name="nombre" class="form-control mb-3 " placeholder="Name"></div>
                                    <div class="col-6 col-lg-6"><input type="text" name="telefono" class="form-control mb-3 " placeholder="Phone"></div>
                                </div>
                                <div class="row d-flex">
                                    <div class="col-12 col-lg-12"> <input type="text" name="correo" class="form-control mb-3 " placeholder="Email"></div>

                                </div>
                                <textarea class="form-control mb-4 " rows="4" name="consulta" placeholder="Your Message..."></textarea>
                                <div style="text-align:center;">
                                    <center>
                                        <div class="norobot">
                                            <div class="g-recaptcha mb-3" data-sitekey="6LfWVXoeAAAAADpSOlaIhXFrWaCRo69cHw1wOJJR" required></div>
                                        </div>
                                    </center>
                                    <button class="button1 fw-bold py-2" style="background-color:var(--color1);border-color:var(--color2);" type="submit">Send&nbsp; </button>

                                    <br>
                                    <br>
                                    <div>
                                        <span>"By sending this form I confirm that I have read and accept Sapiens Consulting <a href="/policy" style="text-decoration:underline;" target="_blank"> Privacy Policy </a> &nbsp;” </span>
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
    <br>
    <br>


    <?php include_once './views/includes/footer.php'; ?>

</body>




<script type="text/javascript">
    let modal = new bootstrap.Modal(document.getElementById('myModal'), );
    modal.show();
</script>
<script src="<?php echo WEBURL ?>/assets/js/popper.min.js"></script>
<script src="<?php echo WEBURL ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo WEBURL ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo WEBURL ?>/assets/js/bootstrap.pooper.js"></script>

<script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
<script src="<?php echo WEBURL ?>/assets/js/hubslider.min.js"></script>

<!-- Script para cambiar el color del menu cuando te deslizas hacia abajo -->
<script type="text/javascript">
    window.addEventListener("scroll", function() {
        var header = document.querySelector("header");
        header.classList.toggle("abajo", window.scrollY > 150);
    })
</script>
<!-- Script para cambiar el color del menu cuando te deslizas hacia abajo -->
<script>
    $(".hover").mouseleave(
        function() {
            $(this).removeClass("hover");
        }
    );
</script>
<!-- Script de direccion 3D -->
<script src="<?php echo WEBURL ?>/assets/js/desplazamiento.js"></script>

<!-- Script para carousel automatico -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    let owlone = $('#owl-one');
    let owltwo = $('#owl-two');

    owlone.owlCarousel({
        loop: true,
        margin: 50,
        nav: false,
        autoplay: true,
        autoplayTimeout: 2000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            800: {
                items: 2,
            },
            1000: {
                items: 4,
            },
        },
    });

    owltwo.owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        autoplay: true,
        autoplayTimeout: 4000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            800: {
                items: 2,
            },
            1000: {
                items: 3,
            },
        },
    });
</script>



<script>
    function enviarCorreo(e) {
        e.preventDefault();
        const data = new FormData(document.getElementById('formContacto'));
        fetch('./libs/send-mail.php', {
            method: 'POST',
            body: data
        }).then(function(res) {
            return res.text();
        }).then(function(res) {
            alert(res);
        }).then(function(res) {
            e.target.reset();
        });
    }
</script>
<!-- Para iniciar animaciones de div -->
<script>
    AOS.init();
</script>
<!-- scripts para fondo de particulas -->
<script src="<?php echo WEBURL ?>/assets/js/particles.js"></script>
<script src="<?php echo WEBURL ?>/assets/js/app.js"></script>

</html>