<?php
  include 'templates/header.php'; // incluyendo nuestro header en el archivo index.php
  include 'templates/navbar.php'; // incluyendo nuestro navbar en el archivo index.php
  include 'inc/funciones.php'; // incluyendo el archivo de funciones.php en index.php
?>

<div class="container">
  <div id="carousel-principal" class="carousel slide my-3" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-principal" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-principal" data-slide-to="1"></li>
      <li data-target="#carousel-principal" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/slide_01.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-uppercase">Nuevas Instalaciones</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide_02.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-uppercase">Conoce Nuestros Servicios</h3>
        </div>
      </div>
      <div class="carousel-item">
        <img src="img/slide_03.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h3 class="text-uppercase">Nuevo Sitio Web, 2x1 En Todos Los Servicios</h3>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carousel-principal" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-principal" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section class="new-site py-5">
  <h1 class="text-center text-uppercase encabezado">
    <span class="text-lowercase d-block">
      bienvenido a nuestro
    </span>
      Sitio Web
  </h1>
  <p class="text-center mt-3 mb-0">Te sentirás como nuevo(a) con nuestros<br>masajistas profesionales</p>
</section>

<div class="container">
  <div class="row mb-5">
    <div class="col-md-6 col-lg-4 mb-3 mb-lg-0 text-center">
      <div class="imagen-servicio">
        <img src="img/servicio_01.jpg" alt="servicio 1" class="img-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-10 pt-3 servicio-info">
            <h2 class="text-uppercase text-center encabezado">
              <span class="text-lowercase d-block">Conoce Sobre</span>
              Nosotros
            </h2>
            <a href="#" class="btn btn-primary btn-block text-uppercase mt-3 py-3">Leer más</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4 mb-3 mb-lg-0 text-center">
      <div class="imagen-servicio">
        <img src="img/servicio_02.jpg" alt="servicio 2" class="img-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-10 pt-3 servicio-info">
            <h2 class="text-uppercase text-center encabezado">
              <span class="text-lowercase d-block">Nuestros</span>
              Servicios
            </h2>
            <a href="#" class="btn btn-primary btn-block text-uppercase mt-3 py-3">Leer más</a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-6 offset-md-3 col-lg-4 offset-lg-0 text-center">
      <div class="imagen-servicio">
        <img src="img/servicio_03.jpg" alt="servicio " class="img-fluid">
        <div class="row no-gutters justify-content-center">
          <div class="col-md-10 pt-3 servicio-info">
            <h2 class="text-uppercase text-center encabezado">
              <span class="text-lowercase d-block">Visita Nuestra</span>
              Tienda
            </h2>
            <a href="#" class="btn btn-primary btn-block text-uppercase mt-3 py-3">Leer más</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="horario">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-center pt-4 text-uppercase">Horarios</h2>
        <p class="text-center lead mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto perferendis ipsam cum dolores, beatae vitae. At suscipit illum amet quod consectetur.</p>

        <table class="table table-hover text-center my-4">
          <thead>
            <tr>
                <th class="text-center">Día</th>
                <th class="text-center">De</th>
                <th class="text-center">Hasta</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Lunes</td>
                <td>09:00</td>
                <td>19:00</td>
            </tr>
            <tr>
                <td>Martes</td>
                <td>09:00</td>
                <td>19:00</td>
            </tr>
            <tr>
                <td>Miércoles</td>
                <td>09:00</td>
                <td>19:00</td>
            </tr>
            <tr>
                <td>Jueves</td>
                <td>09:00</td>
                <td>19:00</td>
            </tr>
            <tr>
                <td>Viernes</td>
                <td>09:00</td>
                <td>19:00</td>
            </tr>
            <tr>
                <td>Sábado</td>
                <td>10:00</td>
                <td>14:00</td>
            </tr>
            <tr>
                <td>Domingo</td>
                <td>Cerrado</td>
                <td>Cerrado</td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="col-md-6 bg-horario"></div>
    </div>
  </div>
</div>

<section class="productos container py-5">
  <h2 class="encabezado text-center text-uppercase">
    <span class="text-lowercase d-block">Nuestros</span>
    Productos
  </h2>

  <div class="row pt-5">
  <?php
    $productos = getProducts(4); // llamado a la funcion getProductos alojada en funciones.php

    // mostrando los productos
    while ($producto = $productos -> fetch_assoc()) {
  ?>
    <div class="col-md-6 mb-3 mb-lg-0 col-lg-3">
      <div class="card">
        <a href="producto.php?id=<?php echo $producto["id"];?>">
          <img src="./img/<?php echo $producto["mini_image"];?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title text-uppercase text-center"><?php echo $producto["name"];?></h4>
            <p class="card-text text-uppercase"><?php echo $producto["short_description"];?></p>
            <p class="precio mb-0 lead text-center">$<?php echo $producto["price"];?></p>
          </div>
        </a>
      </div>
    </div>
  <?php
    }
  ?>
  </div>
</section>

<div class="citas container-fluid py-5">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6 text-center">
      <h3 class="text-uppercase">Realiza Una Cita</h3>
      <p class="my-3">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Recusandae architecto incidunt suscipit reprehenderit accusamus nemo nostrum facere exercitationem dolor, deleniti.</p>
      <a href="#" class="btn btn-primary">Leer Más</a>
    </div>
  </div>
</div>

<?php
  include 'templates/footer.php'; // incluyendo nuestro footer en el archivo index.php
?>