<?php
$modelA = new BannerModel();
$modelB = new NoticiasesModel();
$modelC = new ModalModel();
$arrBanner = $modelA->obtenerBanner();
$arrBanner['cuerpo'] = (array) json_decode($arrBanner['cuerpo'], true);
$arrNoticias = $modelB->listarNoticiasWeb(0, 6, '%');
$arrModal = $modelC->obtenerModal();
//var_dump($arrModal);
//exit;
?>
<style>
    footer a {
        word-wrap: break-word;
        overflow-wrap: break-word;
        word-break: break-all;
    }

    footer p {
        font-size: 0.9rem !important;
    }

    footer .container span {
        display: block;
        font-size: .9rem !important;
    }
</style>
<footer class="container-fluid p-0 pt-4">
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-3 ">
                <div><a href="#"><img src="<?php echo WEBURL ?>/assets/img/icons/escudo3.png" class="img-fluid" alt="" width="50%" style="filter: drop-shadow(0 0 5px rgb(246, 252, 251));"></a></div>

                <div class="pt-3">
                    <p style="color:var(--color6);text-align:start; font-weight:none;">Sapiens Consulting es una firma de consultoría líder con cuatro líneas de negocio: Ampliacion de Personal de TI, Desarrollo de Aplicaciones a Medida, Desarrollo de Aplicaciones Móviles, Gestión y Soporte de Aplicaciones, Ciberseguridad e Inteligencia Artificial.
                    </p>
                </div>
                <!--<div class="row d-flex ">
                  <div class="col-lg-5" style="font-size:1rem;">Follow Us</div>
                  <div class="col-lg-2"><i class="fab fa-facebook-f"></i></div>
                  <div class="col-lg-2"><i class="fab fa-facebook-f"></i></div>
                  <div class="col-lg-2"><i class="fab fa-facebook-f"></i></div>
              </div>-->
                <br>

            </div>

            <div class="col-lg align-items-center pt-3" style="margin-left: 2rem;">
                <div>
                    <h4 style="color:var(--color6);font-weight:bold;">Nuestros Servicios</h4>
                </div>
                <div class="pt-3">
                    <div>
                        <p style="color:var(--color6);font-weight:none;" class="m-0">Inicio</p>
                    </div>
                    <div>
                        <p style="color:var(--color6);font-weight:none;" class="m-0"><a href="/#div-about" style="color:var(--color6);">Nosotros</a></p>
                    </div>
                    <div>
                        <p style="color:var(--color6);font-weight:none;" class="m-0"><a href="/#section-ourservices" style="color:var(--color6);">Servicios</a></p>
                    </div>
                    <div>
                        <p style="color:var(--color6);font-weight:none;" class="m-0"><a href="/#partners" style="color:var(--color6);">Partners</a></p>
                    </div>
                    <div>
                        <p style="color:var(--color6);font-weight:none;" class="m-0"><a href="/#div-industrias" style="color:var(--color6);">Proyectos</a></p>
                    </div>
                    <div>
                        <p style="color:var(--color6);font-weight:none;" class="m-0"><a href="/#careers" style="color:var(--color6);">Carreras</a></p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 align-items-center pt-3">
                <div>
                    <h4 style="color:var(--color6);font-weight:bold;">Información Corporativa</h4>
                </div>
                <div class="pt-3">
                    <div>
                        <p style="color:var(--color6); font-weight:none;" class="m-0"><a href="mailto:sales@sapiensconsultingperu.com" style="color:var(--color6);" target="_blank"> Consulta General: sales@sapiensconsultingperu.com</a></p>
                    </div>
                    <div>
                        <p style="color:var(--color6); font-weight:none;" class="m-0"><a href="mailto:jobs@sapiensconsultingperu.com" style="color:var(--color6);" target="_blank">Consulta de Carrera: jobs@sapiensconsultingperu.com</a></p>
                    </div>
                    <!-- <div><p style="color:var(--color6);font-weight:none;" class="m-0"> Peru Office: Calle Michigan 230, Rinconada del Lago, La Molina 15026, Lima – Perú.</p></div> -->
                    <br>
                    <div>
                        <p style="color:var(--color6);text-align:justify; font-weight:none;" class="m-0"> <a href="/policy" style="text-decoration:underline;font-weight:bold;color:var(--color4);" target="_blank"> Políticas de Privacidad </a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 pt-3">
                <div>
                    <h4 style="color:var(--color6);font-weight:bold;">Posts Populares</h4>
                    <br>
                    <?php
                    if (count($arrNoticias) > 3) {
                        for ($i = 0; $i <= 1; $i++) :
                            $value = $arrNoticias[$i]; ?>
                            <a href="/entrada/<?php echo $value['tagname'] ?>">
                                <div class="row d-flex justify-content-around">
                                    <div class="col-lg-5"><img src="<?php echo $value['portada'] ?>" style="border-radius:5px;" class="img-fluid" alt=""></div>
                                    <div class="col-lg-7 my-auto"><span style="color:var(--color6);"><?php echo $value['titulo'] ?></span></div>
                                </div>
                            </a>
                            <hr>
                    <?php endfor;
                    }

                    ?>
                </div>
                <br>


            </div>


        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-lg-2 pt-5">
                <div class="d-flex justify-content-center py-1" style="color:white;font-family: 'Raleway', sans-serif;"><i class="fas fa-map-marker-alt" style="color:white;font-size:1rem;"></i>&nbsp;&nbsp;<p class="text-start" style="margin-top: -5px; margin-bottom:0px;">&nbsp;&nbsp;Lima, Perú</p>
                </div>

            </div>
            <div class="col-lg-2 pt-5">
                <a href="https://www.linkedin.com/company/perusapiens-consulting/" target="_blank">
                    <div class="d-flex justify-content-center py-1" style="color:white;font-family: 'Raleway', sans-serif;">
                        <i class="fab fa-linkedin" style="color:white;font-size:1rem;"></i>&nbsp;&nbsp;<p class="text-start" style="margin-top: -5px; margin-bottom:0px;">&nbsp;&nbsp;LinkedIn</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="container">
                <hr class="p-0 m-0">
            </div>
        </div>
        <div class="row d-flex justify-content-center py-2">
            <div class="col-lg-12 "><span style="color:var(--color6);text-align:center;display:block;">© Sapiens Consulting | Todos los derechos reservados.</span></div>
        </div>

    </div>


</footer>