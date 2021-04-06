<footer class="footer-site pt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3 class="text-center text-uppercase mb-4">Nosotros</h3>
            <p class="text-justify">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Maiores quasi veritatis perspiciatis, voluptas odio consectetur minus eum hic. Sequi libero fugiat quod fuga necessitatibus.</p>
          </div>
          <div class="col-md-4">
            <h3 class="text-center text-uppercase mb-4">Horario</h3>
            <p class="text-center">Lun - Vie: 09:00am - 07:00pm</p>
            <p class="text-center">Sab: 10:00am - 02:00pm</p>
            <p class="text-center">Domingo: Cerrado</p>
          </div>
          <div class="col-md-4">
            <h3 class="text-center text-uppercase mb-4">Contacto</h3>
            <p class="text-center text-lg-left">66 East Sunnyslope Avenue</p>
            <p class="text-center text-lg-left">Lansdowne, PA 19050</p>
            <nav class="sociales text-center text-lg-left">
              <ul>
                <li><a href="#"><i class="fab fa-facebook-f"></i><span class="sr-only">Facebook</span></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i><span class="sr-only">Twitter</span></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i><span class="sr-only">Instagram</span></a></li>
                <li><a href="#"><i class="fab fa-pinterest-p"></i><span class="sr-only">Pinterest</span></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i><span class="sr-only">Youtube</span></a></li>
              </ul>
            </nav>
          </div>
          <hr class="w-100">
          <p class="text-center copyright w-100">Carolina Spa & Salon 2020. Todos Los Derechos Reservados</p>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
<?php
	// Guarda todo el contenido a un archivo
	$fp = fopen($archivoCache, 'w');
	fwrite($fp, ob_get_contents());
	fclose($fp);
	
  // Enviar al navegador
	ob_end_flush();
?>