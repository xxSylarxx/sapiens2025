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
        word-wrap: break-word;
        overflow-wrap: break-word;
        word-break: break-all;
    }
</style>
<footer class="container-fluid p-0 pt-4">
    <div class="container">
        <div class="row d-flex justify-content-center ">
            <div class="col-lg-3 ">
                <div><img src="./assets/img/icons/escudo3.png" class="img-fluid" alt="" width="50%" style="filter: drop-shadow(0 0 5px rgb(246, 252, 251));"></div>
                <br>
                <div>
                    <p style="color:var(--color6);text-align:start; font-weight:none;">Sapiens Consulting is a premier consulting firm with four business lines: IT Staff Augmentation, Custom Application Management and Support, Cybersecurity and Artificial Ingelligence.</p>
                </div>
                <!--<div class="row d-flex ">
                  <div class="col-lg-5" style="font-size:1rem;">Follow Us</div>
                  <div class="col-lg-2"><i class="fab fa-facebook-f"></i></div>
                  <div class="col-lg-2"><i class="fab fa-facebook-f"></i></div>
                  <div class="col-lg-2"><i class="fab fa-facebook-f"></i></div>
              </div>-->
            </div>

            <div class="col-lg-2 px-2 align-items-center">
                <div>
                    <h4 style="color:var(--color6);font-weight:bold;">Our Services</h4>
                </div>
                <div>
                    <p style="color:var(--color6);font-weight:none;" class="m-0"> Home</p>
                </div>
                <div>
                    <p style="color:var(--color6);font-weight:none;" class="m-0"> About us</p>
                </div>
                <div>
                    <p style="color:var(--color6);font-weight:none;" class="m-0"> Services</p>
                </div>
                <div>
                    <p style="color:var(--color6);font-weight:none;" class="m-0"> Partners</p>
                </div>
                <div>
                    <p style="color:var(--color6);font-weight:none;" class="m-0"> Projects</p>
                </div>
                <div>
                    <p style="color:var(--color6);font-weight:none;" class="m-0"> Careers</p>
                </div>



            </div>
            <div class="col-lg-3">
                <div>
                    <h4 style="color:var(--color6);font-weight:bold;">Company Address</h4>
                </div>
                <div>
                    <p style="color:var(--color6); font-weight:none;" class="m-0"><a href="mailto:sales@sapiensconsultingperu.com" style="color:var(--color6);" target="_blank"> General Inquiry: sales@sapiensconsultingperu.com</a></p>
                </div>
                <div>
                    <p style="color:var(--color6); font-weight:none;" class="m-0"><a href="mailto:jobs@sapiensconsultingperu.com" style="color:var(--color6);" target="_blank"> Career Inquiry: jobs@sapiensconsultingperu.com</a></p>
                </div>
                <!-- <div><p style="color:var(--color6);font-weight:none;" class="m-0"> Peru Office: Calle Michigan 230, Rinconada del Lago, La Molina 15026, Lima – Perú.</p></div> -->
                <div>
                    <p style="color:var(--color6);text-align:justify; font-weight:none;" class="m-0"> <a href="https://www.sapiensconsultingperu.com/policy" style="text-decoration:underline;font-weight:bold;color:var(--color4);" target="_blank"> Privacy Policy </a></p>
                </div>
                <div class="row d-flex">
                    <div class="col-lg-5 pt-5">
                        <a href="https://www.google.com/maps/place/Av.+Jos%C3%A9+G%C3%A1lvez+Barrenechea+592,+San+Isidro+15047/@-12.0983168,-77.0155491,17z/data=!3m1!4b1!4m6!3m5!1s0x9105c877abe165a5:0x3af0a34fdf352cc0!8m2!3d-12.0983221!4d-77.0129742!16s%2Fg%2F11snp__skz?entry=ttu&g_ep=EgoyMDI1MDMyNC4wIKXMDSoASAFQAw%3D%3D" target="_blank">
                            <div class="d-flex justify-content-start py-1" style="color:white;font-family: 'Raleway', sans-serif;"><i class="fas fa-map-marker-alt" style="color:white;font-size:1rem;"></i>&nbsp;&nbsp;<p class="text-start" style="margin-top: -5px; margin-bottom:0px;">&nbsp;&nbsp;Lima, Perú</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-5 pt-5">
                        <a href="https://www.linkedin.com/company/perusapiens-consulting/" target="_blank">
                            <div class="d-flex justify-content-start py-1" style="color:white;font-family: 'Raleway', sans-serif;">
                            <i class="fab fa-linkedin" style="color:white;font-size:1rem;"></i>&nbsp;&nbsp;<p class="text-start" style="margin-top: -5px; margin-bottom:0px;">&nbsp;&nbsp;LinkedIn</p>
                            </div>
                        </a>
                    </div>
                </div>

                <br>
            </div>

            <div class="col-lg-3 ">
                <div>
                    <h4 style="color:var(--color6);font-weight:bold;">Popular Posts</h4>
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
            <br>
            <hr class="p-0 m-0">
        </div>
        <div class="row d-flex justify-content-start py-1">
            <div class="col-lg-12 "><span style="color:var(--color6);">Copyright © Sapiens Consulting all rights reserved.</span></div>
        </div>
    </div>


</footer>