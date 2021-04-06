<?php
  $titulo = 'Servicios';

  include 'templates/header.php'; // incluyendo nuestro header en el archivo index.php
  include 'templates/navbar.php'; // incluyendo nuestro navbar en el archivo index.php
?>

<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="./img/servicios.jpg" alt="" class="img-fluid">
      <h2 class="d-none d-md-block text-uppercase py-2 pl-5 pr-2">Servicios</h2>
    </div>
  </div>
</div>

<div class="container py-4">
  <div class="row">
    <main class="pb-4 pb-lg-0 col-lg-8 contenido-principal">
      <h2 class="d-block d-md-none text-uppercase text-center">Servicios</h2>

      <div class="accordion" id="servicios">
        <div class="card">
          <div class="card-header" id="servicios_01">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#descripcion_01" aria-expanded="true" aria-controls="descripcion_01">
                Primer Servicio
              </button>
            </h2>
          </div>
      
          <div id="descripcion_01" class="collapse show" aria-labelledby="servicios_01" data-parent="#servicios">
            <div class="card-body">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore possimus porro expedita, deserunt vel iusto repellat aut vitae minus cumque ipsum similique ad nostrum beatae nihil rem ratione delectus non. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, eligendi. Soluta culpa, commodi minima eveniet quam quidem sed nisi mollitia! Voluptatum nisi labore omnis dolores, magni eligendi accusamus perspiciatis rerum!</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="servicio_02">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#descripcion_02" aria-expanded="false" aria-controls="descripcion_02">
                Segundo Servicio
              </button>
            </h2>
          </div>
          <div id="descripcion_02" class="collapse" aria-labelledby="servicio_02" data-parent="#servicios">
            <div class="card-body">
              <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore possimus porro expedita, deserunt vel iusto repellat aut vitae minus cumque ipsum similique ad nostrum beatae nihil rem ratione delectus non. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, eligendi. Soluta culpa, commodi minima eveniet quam quidem sed nisi mollitia! Voluptatum nisi labore omnis dolores, magni eligendi accusamus perspiciatis rerum!</p>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="servicio_03">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#descripcion_03" aria-expanded="false" aria-controls="descripcion_03">
                Tercer Servicio
              </button>
            </h2>
          </div>
          <div id="descripcion_03" class="collapse" aria-labelledby="servicio_03" data-parent="#servicios">
            <div class="card-body">
              <p class="my-4">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tempore possimus porro expedita, deserunt vel iusto repellat aut vitae minus cumque ipsum similique ad nostrum beatae nihil rem ratione delectus non. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatum, eligendi. Soluta culpa, commodi minima eveniet quam quidem sed nisi mollitia! Voluptatum nisi labore omnis dolores, magni eligendi accusamus perspiciatis rerum!</p>
            </div>
          </div>
        </div>
      </div><!-- acordion -->
    </main>

    <aside class="col-lg-4 py-4">
      <div class="sidebar my-2">
        <h2 class="text-uppercase text-center">Nuevos<br>Clientes</h2>
        <p class="lead text-center my-4">
          Recibe 20% de descuento con este cupón
        </p>
        <div class="cupon px-2 py-5">
          <p class="text-uppercase text-center m-0">
            <span class="display-4">20% De Descuento</span><br>
            En Todos Los Servicios
          </p>
        </div>
      </div>
    </aside>
  </div>
</div>

<?php
  include 'templates/citas.php'; // incluyendo template citas a servicios.php
  include 'templates/footer.php'; // incluyendo nuestro footer en el archivo index.php
?>