<?php
  include 'templates/header.php'; // incluyendo nuestro header en el archivo index.php
  include 'templates/navbar.php'; // incluyendo nuestro navbar en el archivo index.php
?>

<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="./img/nosotros.jpg" alt="" class="img-fluid">
      <h2 class="d-none d-md-block text-uppercase py-2 pl-5 pr-2">Titulo aquí</h2>
    </div>
  </div>
</div>

<div class="container pt-4">
  <div class="row">
    <main class="col-lg-8 contenido-principal">
      <h2 class="d-block d-md-none text-uppercase text-center">Titulo aquí</h2>
    </main>

    <aside class="col-lg-4 pt-4 pt-lg-0">
      <div class="sidebar">
        <h2 class="text-uppercase text-center">Algo aquí</h2>
      </div>
    </aside>
  </div>
</div>

<?php
  include 'templates/footer.php'; // incluyendo nuestro footer en el archivo index.php
?>