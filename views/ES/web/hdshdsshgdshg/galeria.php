<?php
$model = new GaleriaModel();
if (isset($uri[1]) && is_numeric($uri[1])) {
    $arrGaleria = $model->buscarGaleria(intval($uri[1]));
    $arrGaleria['cuerpo'] = (array) json_decode($arrGaleria['cuerpo'], true);
} else {
    header('Location: /error');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $empresa['metades'] ?>">
    <title><?php echo EMPRESA ?></title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/venobox.css">
    <link rel="stylesheet" href="<?php echo WEBURL ?>/assets/css/web.css">
</head>

<body>

    <script src="<?php echo WEBURL ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo WEBURL ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo WEBURL ?>/assets/js/venobox.js"></script>

    <?php include_once 'includes/header.php'; ?>

    <style>
        #content-grid {
            columns: <?php echo $arrGaleria['ncolum'] ?>;
            column-gap: 6px;
        }

        #content-grid>div.img-links {
            -webkit-column-break-inside: avoid;
            page-break-inside: avoid;
            break-inside: avoid;
            margin-bottom: 6px;
        }
        #content-grid img {
            height: <?php echo $arrGaleria['modo'] == 'A' ? 'auto' : '240px' ?>;
            object-fit: cover;
        }
    </style>

    <br><br><br>

    <section class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                <div class="text-center">
                    <h1 class="fw-bold"><?php echo $arrGaleria['titulo'] ?></h1>
                    <?php echo '<p>' . $arrGaleria['detalle'] .'</p>' ?>
                </div>
                <hr>
                <div id="content-grid" class="pt-4">
                    <?php
                    foreach ($arrGaleria['cuerpo'] as $val) { ?>
                        <a class="img-links" data-gall="gallery01" title="<?php echo $arrGaleria['titulo'] ?>" href="<?php echo $val['path']; ?>"><img src="<?php echo $val['path']; ?>" class="mb-2" width="100%"></a>
                    <?php }  ?>
                </div>
            </div>
        </div>
    </section>

    <br><br><br>

    <script>
        new VenoBox({
            selector: '.img-links',
            numeration: true,
            infinigall: true,
            navSpeed: 300,
        });
    </script>

</body>

</html>