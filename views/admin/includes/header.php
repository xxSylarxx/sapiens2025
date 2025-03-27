<header class="fixed-top" id="header">
    <div style="width: 190px; display: flex; align-items: center; padding-left: 28px;">
<a href="/" target="_blank"><img src="/assets/img/icons/escudo.png" height="45" style="filter: drop-shadow(0 0 5px rgb(246, 252, 251));"></a>
       <!--  <span class="fw-bold ms-2" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden;"><?php echo EMPRESA ?></span> -->
    </div>
    <button id="btnMenu">
        <i class="fas fa-bars"></i>
    </button>
    <div class="ms-auto d-flex">
        <div class="me-4">
            <i class="fas fa-calendar-alt"></i>
            <span>&nbsp;<?php echo Funciones::getFechaActual() ?></span>
        </div>
        <a href="<?php echo WEBURL ?>/admin/login/logout" class="ms-1 text-white">
            <i class="fas fa-sign-out-alt"></i>
            <span>&nbsp;Cerrar sesión</span>
        </a>
    </div>
</header>