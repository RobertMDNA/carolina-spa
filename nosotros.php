<?php
  include 'templates/header.php'; // incluyendo nuestro header en el archivo index.php
  include 'templates/navbar.php'; // incluyendo nuestro navbar en el archivo index.php
?>

<div class="container pt-4">
  <div class="row no-gutters">
    <div class="col-12 hero">
      <img src="./img/nosotros.jpg" alt="" class="img-fluid">
      <h2 class="d-none d-md-block text-uppercase py-2 pl-5 pr-2">Nosotros</h2>
    </div>
  </div>
</div>

<div class="container pt-4">
  <div class="row">
    <main class="col-lg-8 contenido-principal">
      <h2 class="d-block d-md-none text-uppercase text-center">Nosotros</h2>
      <p class="text-justify">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Explicabo ullam perspiciatis animi distinctio molestiae illo adipisci iste eligendi sapiente mollitia? Dolorum delectus natus fugiat quibusdam numquam quod a nemo quae. Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut expedita vero harum odit sint neque. Quo quas, soluta aspernatur eos ut, incidunt recusandae, illo possimus omnis cupiditate tempora corporis excepturi? Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam aliquam a doloremque nisi alias fuga quo soluta quidem reprehenderit atque molestiae, ullam cum. Quibusdam culpa esse mollitia, voluptas exercitationem quos!</p>

      <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, magnam numquam tempore autem dolorem, nisi vero est distinctio expedita repellat nulla hic iste! Eveniet ea velit natus hic voluptas odio. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Unde dolores, velit dolore provident possimus iure quas eum reiciendis dignissimos at eaque magnam explicabo laboriosam, harum optio, ex architecto maxime laudantium. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus, sit reprehenderit saepe dolores repellat deleniti error id atque voluptate omnis rem quisquam accusamus doloremque eligendi, reiciendis officia mollitia voluptas necessitatibus!</p>

      <h1 class="text-center text-uppercase encabezado">
        <span class="text-lowercase d-block">
          Conoce Nuestras
        </span>
          Instalaciones
      </h1>

      <div class="imagenes pt-4">
        <div class="row justify-content-center">
          <!-- modal para las imagenes -->
          <div class="col-6 col-md-4 mb-2 mb-md-0">
            <a href="#" data-target="#imagen_01" data-toggle="modal">
              <img src="./img/galeria_mini_01.jpg" alt="#" class="img-fluid">
            </a>
          </div>
          <div class="col-6 col-md-4 mb-2 mb-md-0">
            <a href="#" data-target="#imagen_02" data-toggle="modal">
              <img src="./img/galeria_mini_02.jpg" alt="#" class="img-fluid">
            </a>
          </div>
          <div class="col-6 justify-content col-md-4">
            <a href="#" data-target="#imagen_03" data-toggle="modal">
              <img src="./img/galeria_mini_03.jpg" alt="#" class="img-fluid">
            </a>
          </div>
        </div>

        <div class="modal fade" tabindex="-1" id="imagen_01">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <img src="./img/galeria_grande_01.jpg" alt="#" class="img-fluid">
              </div>
            </div>
          </div>
        </div><!-- modal -->
        <div class="modal fade" tabindex="-1" id="imagen_02">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <img src="./img/galeria_grande_02.jpg" alt="#" class="img-fluid">
              </div>
            </div>
          </div>
        </div><!-- modal -->
        <div class="modal fade" tabindex="-1" id="imagen_03">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">
                <img src="./img/galeria_grande_03.jpg" alt="#" class="img-fluid">
              </div>
            </div>
          </div>
        </div><!-- modal -->
      </div>
    </main>

    <aside class="col-lg-4 pt-4 pt-lg-0 align-self-start">
      <div class="sidebar horario container">
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
    </aside>
  </div>
</div>

<?php
  include 'templates/footer.php'; // incluyendo nuestro footer en el archivo index.php
?>