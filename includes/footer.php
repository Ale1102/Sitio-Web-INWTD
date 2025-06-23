<!-- Pie de página -->
    <footer class="bg-dark text-white pt-5 pb-3">
        <div class="container">
            <div class="row">
                <!-- Información de contacto -->
                <div class="col-lg-4 mb-4">
                    <h3 class="h5 mb-3" style="color: #ffcc00;">Instituto Nacional Walter Thilo Deininger</h3>
                    <address class="mb-0">
                        <p><i class="fas fa-map-marker-alt me-2"></i>Avenida Cuscatlan, Cojutepeque Cuscatlan, El Salvador</p>
                        <p><i class="fas fa-phone me-2"></i> (503) 2372-0220</p>
                        <p><i class="fas fa-fax me-2"></i> (503) 2372-4482</p>
                        <p><i class="fa-brands fa-whatsapp me-2"></i> (503) 7603-4668 (Solo Mensajes)</p>
                        <p><i class="fas fa-envelope me-2"></i> inwtd11792@gmail.com</p>
                    </address>
                </div>
                
                <!-- Enlaces rápidos -->
                <div class="col-lg-2 col-md-4 mb-4">
                    <h4 class="h6 mb-3" style="color: #ffcc00;">Enlaces Rápidos</h4>
                    <ul class="list-unstyled footer-links">
                        <li><a href="<?php echo $root_path; ?>index.php" class="text-white">Inicio</a></li>
                        <li><a href="<?php echo $root_path; ?>pages/nosotros.php" class="text-white">Nosotros</a></li>
                        <li><a href="<?php echo $root_path; ?>pages/oferta-academica.php" class="text-white">Oferta Académica</a></li>
                        <li><a href="<?php echo $root_path; ?>pages/noticias.php" class="text-white">Noticias</a></li>
                        <li><a href="<?php echo $root_path; ?>pages/galeria.php" class="text-white">Nuestro Campus</a></li>
                        <li><a href="<?php echo $root_path; ?>pages/proceso-graduacion.php" class="text-white">Proceso de Graduación</a></li>
                    </ul>
                </div>
                
                <!-- Oferta Academica -->
                <div class="col-lg-3 col-md-4 mb-4">
                    <h4 class="h6 mb-3"  style="color: #ffcc00;">Oferta Academica</h4>
                    <ul class="list-unstyled footer-links">
                        <li><a href="<?php echo $root_path; ?>pages/bachillerato-general.php" class="text-white">Bachillerato General</a></li>
                        <li><a href="<?php echo $root_path; ?>pages/bachillerato-contable.php" class="text-white">Bachillerato en Contabilidad</a></li>
                        <li><a href="<?php echo $root_path; ?>pages/bachillerato-salud.php" class="text-white">Bachillerato en Salud</a></li>
                         <li><a href="<?php echo $root_path; ?>pages/bachillerato-agroindustrias.php" class="text-white">Bachillerato en agroindustria</a></li>
                          <li><a href="<?php echo $root_path; ?>pages/bachillerato-electrico.php" class="text-white">Bachillerato en Sistemas Electricos</a></li>
                           <li><a href="<?php echo $root_path; ?>pages/bachillerato-arquitectura.php" class="text-white">Bachillerato en Arquitectura</a></li>
                            <li><a href="<?php echo $root_path; ?>pages/modalidad-educame.php" class="text-white" >Modalidad Flexible - EDUCAME</a></li>
                        <li><a href="<?php echo $root_path; ?>pages/admisiones.php" class="text-white">Proceso de Admisión</a></li>
                       
                    </ul>
                </div>
                
                <!-- Redes Sociales -->
                <div class="col-lg-3 col-md-4 mb-4">
                    <h4 class="h6 mb-3" style="color: #ffcc00;">Nuestras redes Sociales</h4>
                    
                    <p class="small text-muted"></p>
                    <div class="social-links mt-3">
                         <a href="https://www.facebook.com/share/16ZgXFR6L3/?mibextid=wwXIfr" class="text-white me-2" target="_blank"><i class="fab fa-facebook" rel="noopener noreferrer"></i></a>
                        <a href="https://api.whatsapp.com/send?phone=50376034668 " class="text-white me-2" target="_blank"><i class="fab fa-whatsapp" rel="noopener noreferrer"></i></a>
                         <a href="#" class="text-white me-2" target="_blank"><i class="fa-brands fa-instagram" rel="noopener noreferrer"></i></a>
                    </div>
                </div>
            </div>
            
            <hr class="mt-4 mb-3">
            
            <!-- Copyright y créditos -->
            <div class="row">
                <div class="col-md-6 text-center text-md-start">
                    <p class="small mb-0">&copy; <?php echo date('Y'); ?> Instituto Nacional Walter Thilo Deininger. Todos los derechos reservados.</p>
            </div>
                <div class="col-md-6 text-center text-md-end">
                    <p class="small mb-0">
                        <a href="<?php echo $root_path; ?>pages/privacidad.php" class="text-white">Política de Privacidad</a> | 
                        <a href="<?php echo $root_path; ?>pages/terminos.php" class="text-white">Términos de Uso</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Botón de volver arriba -->
    <button id="back-to-top" class="btn btn-primary btn-sm rounded-circle position-fixed bottom-0 end-0 m-4" style="display: none;">
        <i class="fas fa-arrow-up"></i>
    </button>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Scripts personalizados -->
    <script src="<?php echo $root_path; ?>assets/js/main.js"></script>
</body>
</html>
