<?php
$modelA = new BannerModel();
$modelB = new NoticiasModel();
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
        word-break: keep-all;
        overflow-wrap: normal;
    }

    footer p {
        font-size: 0.9rem !important;
    }

    footer .container span {
        /* display: block; */
        font-size: .9rem !important;
    }

    .col-especial {
        margin-left: 2rem;
    }

    .titulo-publicaciones {
        margin-top: -5px;
        color: var(--color6);
        word-break: keep-all;
        overflow-wrap: normal;
        display: block;
        /* text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 1;
        -webkit-box-orient: vertical;
        overflow: hidden; */
    }

    .tooltip-footer {
        width: auto;
        height: auto;
        display: flex;
        align-items: center;
        background-color: #333333;
        border-radius: 5px;
        padding: 10px;
        position: absolute;
        top: -130%;
        text-align: center;
        display: none;
    }

    @media screen and (max-width: 768px) {
        .col-especial {
            margin-left: 0rem;
        }

        footer .container span {
            font-size: .8rem !important;
        }
    }

    @media screen and (max-width: 1400px) {
        .titulo-publicaciones {
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 1;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .content-pub:hover .tooltip-footer {
            display: block;
        }

    }
</style>
<footer class="container-fluid p-0 pt-4">
    <div class="container">

        <div class="row d-flex justify-content-center ">
            <div class="col-lg-3 ">
                <div><a href="#"><img src="./assets/img/icons/escudo3.png" class="img-fluid" alt="" width="50%" style="filter: drop-shadow(0 0 5px rgb(246, 252, 251));"></a></div>

                <div class="pt-3">
                    <p style="color:var(--color6);text-align:start; font-weight:none;">Sapiens Consulting is a premier consulting firm with four business lines: IT Staff Augmentation, Custom Application Management and Support, Cybersecurity and Artificial Ingelligence.</p>
                </div>
                <!--<div class="row d-flex ">
                  <div class="col-lg-5" style="font-size:1rem;">Follow Us</div>
                  <div class="col-lg-2"><i class="fab fa-facebook-f"></i></div>
                  <div class="col-lg-2"><i class="fab fa-facebook-f"></i></div>
                  <div class="col-lg-2"><i class="fab fa-facebook-f"></i></div>
              </div>-->
            </div>
            <div class="col-especial col-lg-2 align-items-center pt-3">
                <div>
                    <h4 style="color:var(--color6);font-weight:bold;">Our Services</h4>
                </div>
                <div class="pt-3">
                    <div>
                        <p style="color:var(--color6);font-weight:none;" class="m-0"><a href="/" style="color:var(--color6);"> Home</a></p>
                    </div>
                    <div>
                        <p style="color:var(--color6);font-weight:none;" class="m-0"><a href="/#div-about" style="color:var(--color6);"> About us</a></p>
                    </div>
                    <div>
                        <p style="color:var(--color6);font-weight:none;" class="m-0"><a href="/#section-ourservices" style="color:var(--color6)"> Services</a></p>
                    </div>
                    <div>
                        <p style="color:var(--color6);font-weight:none;" class="m-0"><a href="/#partners" style="color:var(--color6);"> Partners</a></p>
                    </div>
                    <div>
                        <p style="color:var(--color6);font-weight:none;" class="m-0"><a href="/#div-industrias" style="color:var(--color6);"> Projects</a></p>
                    </div>
                    <div>
                        <p style="color:var(--color6);font-weight:none;" class="m-0"> <a href="/#careers" style="color:var(--color6);">Careers</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 pt-3">

                <div>
                    <h4 style="color:var(--color6);font-weight:bold;">Company Information</h4>
                </div>
                <div class="pt-3">
                    <div>
                        <p style="color:var(--color6); font-weight:none;" class="m-0"><a href="mailto:sales@sapiensconsultingperu.com" style="color:var(--color6);" target="_blank"> General Inquiry: <p>sales@sapiensconsultingperu.com</p></a></p>
                    </div>
                    <div>
                        <p style="color:var(--color6); font-weight:none;" class="m-0"><a href="mailto:jobs@sapiensconsultingperu.com" style="color:var(--color6);" target="_blank"> Career Inquiry: <p>jobs@sapiensconsultingperu.com</p></a></p>
                    </div>
                    <!-- <div><p style="color:var(--color6);font-weight:none;" class="m-0"> Peru Office: Calle Michigan 230, Rinconada del Lago, La Molina 15026, Lima – Perú.</p></div> -->
                    <br>
                    <div>
                        <p style="color:var(--color6);text-align:justify; font-weight:none;word-break: keep-all;overflow-wrap: normal;" class="m-0"> <a href="/policy" style="text-decoration:underline;font-weight:bold;color:var(--color4);" target="_blank"> Privacy Policy </a></p>
                    </div>
                </div>


            </div>
            <div class="col-lg-3 pt-3">
                <div>
                    <h4 style="color:var(--color6);font-weight:bold;">Popular Posts</h4>

                    <div class="pt-3">
                        <?php
                        if (count($arrNoticias) > 3) {
                            for ($i = 0; $i <= 1; $i++) :
                                $value = $arrNoticias[$i]; ?>
                                <a href="/entrada/<?php echo $value['tagname'] ?>">
                                    <div class="row d-flex justify-content-around content-pub" style="position:relative;">
                                        <div class="col-lg-5"><img src="<?php echo $value['portada'] ?>" style="border-radius:5px;" class="img-fluid" alt=""></div>
                                        <div class="col-lg-7"><span class="titulo-publicaciones"><?php echo $value['titulo'] ?></span>
                                        </div>
                                        <div class="tooltip-footer">
                                            <span style="color:white;word-break:keep-all;overflow-wrap:normal;display:block; font-size: .8rem !important;">
                                                <?php echo $value['titulo'] ?>
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <hr>
                        <?php endfor;
                        }

                        ?>
                    </div>
                </div>
                <br>
            </div>
            <br>
        </div>

        <div class="row d-flex justify-content-center">
            <div class="col-lg-2 pt-1">
                <div class="d-flex justify-content-center py-1" style="color:white;font-family: 'Raleway', sans-serif;"><i class="fas fa-map-marker-alt" style="color:white;font-size:1rem;"></i>&nbsp;&nbsp;<p class="text-start" style="margin-top: -5px; margin-bottom:0px;">&nbsp;&nbsp;Lima, Perú</p>
                </div>
            </div>
            <div class="col-lg-2 pt-1">
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
            <div class="col-lg-12 "><span style="font-size:.8rem;color:var(--color6);text-align:center;display:block;">Copyright © Sapiens Consulting all rights reserved.</span></div>
        </div>
    </div>


</footer>