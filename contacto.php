<?php
  $titulo = 'Contacto';

  include 'templates/header.php'; // incluyendo nuestro header en el archivo index.php
  include 'templates/navbar.php'; // incluyendo nuestro navbar en el archivo index.php
?>

<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="./img/contacto.jpg" alt="" class="img-fluid">
      <h2 class="d-none d-md-block text-uppercase py-2 pl-5 pr-2">Contacto</h2>
    </div>
  </div>
</div>

<div class="container pt-4">
  <div class="row justify-content-center">
    <main class="col-lg-8 contenido-principal">
      <h2 class="d-block d-md-none text-uppercase text-center">Contacto</h2>
    
      <form class="py-3 px-5 mt-5 formulario-contacto needs-validation" novalidate>
        <div class="form-group">
          <label for="nombre">Nombre</label>
          <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp" required>
          <div class="invalid-feedback">
            El campo nombre es obligatorio
          </div>
        </div>
        <div class="form-group">
          <label for="email">Correo</label>
          <input type="email" class="form-control" id="email" required>
          <div class="invalid-feedback">
            El campo correo es obligatorio
          </div>
        </div>
        <div class="form-group">
          <label for="mensaje">Mensaje</label>
          <textarea name="mensaje" id="mensaje" class="form-control" required></textarea>
          <div class="invalid-feedback">
            El campo mensaje es obligatorio
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </main>
  </div>
</div>

<?php
  include 'templates/footer.php'; // incluyendo nuestro footer en el archivo index.php
?>
