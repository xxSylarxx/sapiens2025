<?php
$pagina = basename($_SERVER['PHP_SELF']);
$active1 = 'nav-link';
$active2 = 'nav-link';
$active3 = 'nav-link';
$active4 = 'nav-link';
$active5 = 'nav-link';
$active6 = 'nav-link';
switch ($pagina) {
    case 'index.php':
        $active1 .= ' activador';
        break;
    case 'somos.php':
    case 'historia.php':
    case 'reglamento.php':
        $active2 .= ' activador';
        break;

    case 'inicial.php':
    case 'primaria.php':
    case 'secundaria.php':
    case 'tutoria.php':
    case 'pastoral.php':
    case 'piscopedagogia.php':
        $active3 .= ' activador';
        break;

    case 'galerias.php':

        $active4 .= ' activador';
        break;
    case 'noticias.php':

        $active5 .= ' activador';
        break;
    case 'admision.php':


        $active6 .= ' activador';
        break;
}
?>
<style>
    header .navbar-nav .nav-item .activador {

        font-weight: bold;

    }

    #subniveles {
        margin-left: .4rem;
    }

    .dropend .dropdown-toggle::after {
        display: none;
    }

    .dropdown-menu li {

        position: relative;
    }

    .dropdown-menu .submenu {
        display: none;
        position: absolute;
        left: 100%;
        top: -7px;
    }

    .dropdown-menu .submenu-left {
        right: 100%;
        left: auto;
    }

    #cingles,
    #cespanol {
        padding-left: 1rem;
        padding-top: .2rem;

    }
</style>

<div id=" header-top"></div>
<header class="fixed-top" id="header" style="background: var(--color6);-moz-box-shadow: 0 3px 3px rgba(94, 94, 94, 0.75);
            -webkit-box-shadow: 0 3px 3px rgba(94, 94, 94, 0.75);
            box-shadow: 0 3px 3px rgba(94, 94, 94, 0.75);
            ">
    <!-- <div class="bar-sup">
        
        <a href="#" class="me-3" target="_blank">
            <i class="fa fa-facebook-official" aria-hidden="true"></i>
            <span> Facebook</span>
        </a>
        
        <a href="#" class="me-3" target="_blank"><i class="fab fa-youtube "></i><span> Youtube</span></a>
        <div class="ms-auto">
        <a href="#" class="me-3" target="_blank"><i class="fab fa-whatsapp"></i> 923 094 427</span></a>
       
        <a href="#" target="_blank" class="me-3"><i class="fab fa-whatsapp"></i><span>  934 174 740</span></a>
        <a href="#" target="_blank" class="me-3"><i class="fas fa-globe-americas"></i><span> Intranet</span></a>
    
        </div>
    </div>-->

    <nav class="navbar navbar-expand-lg navbar-light py-0">
        <a class="navbar-brand animate__animated animate__zoomIn" href="/">

            <div class="d-flex flex-row align-items-center" id="escudo">

                <img src="<?php echo WEBURL ?>/assets/img/icons/escudo.png" class="mr-3" height="90" id="">

            </div>

        </a>
        <button class="navbar-toggler d-lg-none" type="button" style="background-color:var(--color4);" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" style="background-color:var(--color4);"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item ">
                    <a class="nav-link fw-bold <?= $active1 ?> " style="color:var(--color1);" href="/"><?php echo $lang === 'ES' ? 'INICIO' : 'HOME'; ?></a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link <?= $active2 ?>" style="color:var(--color1);" href="/index.php#div-video1"><?php echo $lang === 'ES' ? 'NOSOTROS' : 'ABOUTS US'; ?></a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link <?= $active3 ?>" style="color:var(--color1);" href="/index.php#section-ourservices"><?php echo $lang === 'ES' ? 'SERVICIOS' : 'SERVICES'; ?></a>
                </li>




                <li class="nav-item fw-bold">
                    <a class="nav-link <?= $active4 ?>" style="color:var(--color1);" href="/index.php#div-about"><?php echo $lang === 'ES' ? 'PARTNERS' : 'PARTNERS'; ?></a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link <?= $active5 ?>" style="color:var(--color1)" href="/index.php#div-industrias"><?php echo $lang === 'ES' ? 'PROYECTOS' : 'PROJECTS'; ?></a>
                </li>
                <li class="nav-item fw-bold">
                    <a class="nav-link <?= $active6 ?>" style="color:var(--color1);" href="/index.php#careers"><?php echo $lang === 'ES' ? 'CARRERAS' : 'CAREERS'; ?></a>
                </li>
                <!-- <li class="nav-item fw-bold" style=" border-radius:5px;background-color: var(--color1);">
                    <a class="nav-link <--?= $active6 ?>" style="color:white;" href="index.php#div-contact"><--?php echo $lang === 'ES' ? 'CONTÁCTANOS' : 'CONTACT US'; ?></a>
                </li> -->
                <!-- <li class="nav-item dropdown ">
                    <div id="cespanol">
                        <a type="button" onclick="cambiarIdioma('EN')"><img src="<//?php echo WEBURL ?>/assets/img/icons/en2.png" alt=""></a>
                    </div>
                </li> -->
            </ul>
        </div>
        </li>
        </ul>
        </div>
    </nav>

</header>

<script>
    var height = document.getElementById('header').clientHeight;
    document.getElementById('header-top').style.height = height + "px";
</script>

<script type="text/javascript">
    //	window.addEventListener("resize", function() {
    //		"use strict"; window.location.reload(); 
    //	});


    document.addEventListener("DOMContentLoaded", function() {


        /////// Prevent closing from click inside dropdown
        document.querySelectorAll('.dropdown-menu').forEach(function(element) {
            element.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        })



        // make it as accordion for smaller screens
        if (window.innerWidth < 992) {

            // close all inner dropdowns when parent is closed
            document.querySelectorAll('.navbar .dropdown').forEach(function(everydropdown) {
                everydropdown.addEventListener('hidden.bs.dropdown', function() {
                    // after dropdown is hidden, then find all submenus
                    this.querySelectorAll('.submenu').forEach(function(everysubmenu) {
                        // hide every submenu as well
                        everysubmenu.style.display = 'none';
                    });
                })
            });

            document.querySelectorAll('.dropdown-menu a').forEach(function(element) {
                element.addEventListener('click', function(e) {

                    let nextEl = this.nextElementSibling;
                    if (nextEl && nextEl.classList.contains('submenu')) {
                        // prevent opening link if link needs to open dropdown
                        e.preventDefault();
                        console.log(nextEl);
                        if (nextEl.style.display == 'block') {
                            nextEl.style.display = 'none';
                        } else {
                            nextEl.style.display = 'block';
                        }

                    }
                });
            })
        }
        // end if innerWidth

    });
    // DOMContentLoaded  end
</script>
<script language="javascript">
    const cambiarIdioma = (lang) => {
        fetch('<?php echo WEBURL ?>/lang.php?set=' + lang, {
            method: 'GET'
        }).then(function(res) {
            return res.text()
        }).then(function(res) {
            location.reload();
        });

        $.ajax({
            type: "method",
            url: "url",
            data: "data",
            success: function(res) {
                location.reload();
            }
        });

    }
</script>