<?php
  // validando el codigo para evitar xss
  if (isset($_GET['id'])) { // forzosamente debe de existir un id
    if (filter_var($_GET['id'], FILTER_VALIDATE_INT)) { // este if se encargara de verificar que forzosamente sea un entero
      // ya una vez validado el id, creamos una variable para almacenar dicho id
      $product_id = $_GET['id'];
    } else {
      header('Location: 404.html'); // en caso de que no exista un id de tipo int - se reedireccionara a la pagina 404
    }
  }

  include 'templates/header.php'; // incluyendo nuestro header en el archivo index.php
  include 'templates/navbar.php'; // incluyendo nuestro navbar en el archivo index.php
  include 'inc/funciones.php'; // incluyendo las funciones.php en el archivo producto.php

  $result = getProduct($product_id); // se hace uso de la funcion getProduct y se agrega el valor en una variable

  // validando que si exista didcho producto
  if ($result -> num_rows) {
    while ($product = $result -> fetch_assoc()) {
?>

<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="./img/<?php echo $product['full_image'];?>" alt="" class="img-fluid">
      <h2 class="d-none d-md-block text-uppercase py-2 pl-5 pr-2"><?php echo $product['name'];?></h2>
    </div>
  </div>
</div>

<div class="container pt-4">
  <div class="row no-gutters">
    <main class="col-lg-8 contenido-principal">
      <h2 class="d-block d-md-none text-uppercase text-center"><?php echo $product['name'];?></h2>

      <p><?php echo $product['description'];?></p>
    </main>

    <aside class="col-lg-4 pt-4 pt-lg-0">
      <div class="sidebar pt-5 text-center descripcion_producto">
        <h2 class="text-uppercase text-center">Descripción</h2>
        <p><?php echo $product['short_description'];?></p>
        <h3 class="text-uppercase mt-5 mb-0">Precio</h3>
        <p class="display-4">$<?php echo $product['price'];?></p>
      </div>
    </aside>
  </div>
</div>

<?php
    } // end while
  }else{
    echo "<h2 class='py-5 text-uppercase text-center'>Producto No Encontrado</h2>";
  } // end if else
  include 'templates/footer.php'; // incluyendo nuestro footer en el archivo index.php
?>