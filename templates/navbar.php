<div class="navegacion py-1">
    <nav class="navegacion_principal navbar navbar-expand-md navbar-light bg-faded">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand d-lg-none" href="#">Carolina Spa</a>
        <div class="container">
            <div class="collapse navbar-collapse w-100" id="navbarNav">
                <ul class="navbar-nav nav-justified w-100 flex-column flex-sm-row">
                    <?php
                        // mostrandole al usuario en que parte de nuestra navegacion se encuentra
                        $archivo = basename($_SERVER['PHP_SELF']);
                        $pagina = str_replace('.php', '', $archivo);
                    ?>
                    <li class="nav-item <?php echo 'index' === $pagina ? 'activo' : '';?>">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item <?php echo 'nosotros' === $pagina ? 'activo' : '';?>">
                        <a class="nav-link" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item <?php echo 'servicios' === $pagina ? 'activo' : '';?>">
                        <a class="nav-link" href="servicios.php">Servicios</a>
                    </li>
                    <li class="nav-item <?php echo 'productos' === $pagina ? 'activo' : '';?>">
                        <a class="nav-link" href="productos.php">Productos</a>
                    </li>
                    <li class="nav-item <?php echo 'contacto' === $pagina ? 'activo' : '';?>">
                        <a class="nav-link" href="contacto.php">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>