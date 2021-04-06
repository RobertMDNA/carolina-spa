<?php
  $titulo = 'Productos';

  include 'templates/header.php'; // incluyendo nuestro header en el archivo productos.php
  include 'templates/navbar.php'; // incluyendo nuestro navbar en el archivo productos.php
  include 'inc/funciones.php'; // incluyendo las funciones.php en el archivo productos.php
?>

<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="./img/productos.jpg" alt="" class="img-fluid">
      <h2 class="d-none d-md-block text-uppercase py-2 pl-5 pr-2">Productos</h2>
    </div>
  </div>
</div>

<div class="container pt-4 productos">
  <div class="row no-gutters">
    <main class="col-lg-12 contenido-principal">
      <h2 class="d-block d-md-none text-uppercase text-center">Productos</h2>
    </main>

    <div class="row no-gutters">
      <div class="card-columns">
      <?php
        $productos = getProducts(8); // llamado a la funcion getProductos alojada en funciones.php

        // mostrando los productos
        while ($producto = $productos -> fetch_assoc()) {
      ?>
        <div class="card">
          <a href="producto.php?id=<?php echo $producto["id"];?>">
            <img src="./img/<?php echo $producto["mini_image"];?>" alt="" class="card-img-top img-fluid">
            <div class="card-body">
              <h3 class="card-title text-center text-uppercase">
              <?php echo $producto["name"];?>
              </h3>
              <p class="card-text text-center"><?php echo $producto["short_description"];?></p>
              <p class="precio lead text-center mb-0">$<?php echo $producto["price"];?></p>
            </div>
          </a>
        </div><!-- card -->
      <?php
        }
      ?>
      </div><!-- card-columns -->
    </div><!-- rows -->
  </div>
</div>

<?php
  include 'templates/footer.php'; // incluyendo nuestro footer en el archivo index.php
?>