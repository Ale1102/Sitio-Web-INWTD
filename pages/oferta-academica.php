<?php
// Configuración básica de la página
$page_title = "Oferta Académica - Instituto Walter Thilo Deininger";
$current_page = "oferta-academica"; // Debe coincidir con el nombre del archivo sin .php
$root_path = "../"; // Ajusta según la ubicación del archivo

// Incluir el encabezado
include '../includes/header.php';
?>

<!-- Contenido principal - MODIFICA ESTA SECCIÓN -->
<section class="page-header text-white py-5" style="background-color: #000000;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4 fw-bold">Oferta Académica</h1>
                <p class="lead"> Conoce nuestra oferta académica y las carreras que ofrecemos.  </p>
            </div>
        </div>
    </div>
</section>




<!-- Oferta académica completa -->
<section class="academic-offer py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Nuestra Oferta Académica</h2>
            <p class="lead">Programas educativos diseñados para diferentes necesidades y perfiles estudiantiles</p>
        </div>
        
        <div class="row g-4">
            <!-- Bachillerato General -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card bg-white p-4 rounded shadow-sm h-100" style="border-top: 4px solid #ffcc00;">
                    <div class="program-icon mb-3">
                        <i class="fas fa-graduation-cap fa-2x" style="color: #ffcc00;"></i>
                    </div>
                    <h4 class="h5">Bachillerato General</h4>
                    <p class="small text-muted mb-2">2 años • Presencial</p>
                    <p>Formación integral que prepara para la educación superior con sólidos conocimientos en ciencias y humanidades.</p>
                       <a href="../pages/bachillerato-general.php" class="btn btn-sm btn-outline-primary">Más información</a>
                </div>
            </div>
            
            <!-- Bachillerato Técnico Vocacional Administrativo Contable -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card bg-white p-4 rounded shadow-sm h-100" style="border-top: 4px solid #ffcc00;">
                    <div class="program-icon mb-3">
                        <i class="fas fa-calculator fa-2x" style="color: #ffcc00;"></i>
                    </div>
                    <h4 class="h5">Bachillerato Técnico Vocacional Administrativo Contable</h4>
                    <p class="small text-muted mb-2">3 años • Presencial</p>
                    <p>Formación especializada en contabilidad, administración y finanzas empresariales.</p>
                      <a href="../pages/bachillerato-contable.php" class="btn btn-sm btn-outline-primary">Más información</a>
                </div>
            </div>
            
            <!-- Bachillerato Técnico Productivo Sistemas Eléctricos -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card bg-white p-4 rounded shadow-sm h-100" style="border-top: 4px solid #ffcc00;">
                    <div class="program-icon mb-3">
                        <i class="fas fa-bolt fa-2x" style="color: #ffcc00;"></i>
                    </div>
                    <h4 class="h5">Bachillerato Técnico Productivo Sistemas Eléctricos y Energía Renovable</h4>
                    <p class="small text-muted mb-2">3 años • Presencial</p>
                    <p>Formación en instalaciones eléctricas, energías renovables y sistemas de automatización.</p>
                     <a href="../pages/bachillerato-electrico.php" class="btn btn-sm btn-outline-primary">Más información</a>
                </div>
            </div>
            
            <!-- Bachillerato Técnico Productivo Atención Primaria en Salud -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card bg-white p-4 rounded shadow-sm h-100" style="border-top: 4px solid #ffcc00;">
                    <div class="program-icon mb-3">
                        <i class="fas fa-heartbeat fa-2x" style="color: #ffcc00;"></i>
                    </div>
                    <h4 class="h5">Bachillerato Técnico Productivo Atención Primaria en Salud y Bienestar Social</h4>
                    <p class="small text-muted mb-2">3 años • Presencial</p>
                    <p>Formación en cuidados básicos de salud, primeros auxilios y bienestar comunitario.</p>
                      <a href="../pages/bachillerato-salud.php" class="btn btn-sm btn-outline-primary">Más información</a>
                </div>
            </div>
            
            <!-- Bachillerato Técnico Vocacional en Arquitectura -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card bg-white p-4 rounded shadow-sm h-100" style="border-top: 4px solid #ffcc00;">
                    <div class="program-icon mb-3">
                        <i class="fas fa-drafting-compass fa-2x" style="color: #ffcc00;"></i>
                    </div>
                    <h4 class="h5">Bachillerato Técnico Vocacional en Arquitectura</h4>
                    <p class="small text-muted mb-2">3 años • Presencial</p>
                    <p>Formación en diseño arquitectónico, dibujo técnico y construcción sostenible.</p>
                     <a href="../pages/bachillerato-arquitectura.php" class="btn btn-sm btn-outline-primary">Más información</a>
                </div>
            </div>
            
            <!-- Bachillerato Técnico Vocacional en Agroindustrias -->
            <div class="col-lg-4 col-md-6">
                <div class="program-card bg-white p-4 rounded shadow-sm h-100" style="border-top: 4px solid #ffcc00;">
                    <div class="program-icon mb-3">
                        <i class="fas fa-seedling fa-2x" style="color: #ffcc00;"></i>
                    </div>
                    <h4 class="h5">Bachillerato Técnico Vocacional en Agroindustrias</h4>
                    <p class="small text-muted mb-2">3 años • Presencial</p>
                    <p>Formación en procesamiento de alimentos, agricultura sostenible y gestión agroindustrial.</p>
                      <a href="../pages/bachillerato-agroindustrias.php" class="btn btn-sm btn-outline-primary">Más información</a>
                </div>
                
            </div>
            
            <!-- Modalidad Flexible EDUCAME -->
            <div class="col-lg-8 mx-auto">
                <div class="program-card bg-white p-4 rounded shadow-sm" style="border-top: 4px solid #e53935;">
                    <div class="row align-items-center">
                        <div class="col-md-2 text-center">
                            <div class="program-icon mb-3">
                                <i class="fas fa-clock fa-3x" style="color: #e53935;"></i>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <h4 class="h5" style="color: #e53935;">Modalidad Flexible EDUCAME</h4>
                            <p class="small text-muted mb-2">20 meses • Solo Sábados • Mayores de 18 años</p>
                            <p class="mb-3">Programa especial para <strong>adultos trabajadores y madres solteras</strong> que buscan completar su bachillerato sin abandonar sus responsabilidades laborales y familiares.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-briefcase me-2" style="color: #e53935;"></i>
                                        <span class="small">Para trabajadores activos</span>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="d-flex align-items-center mb-2">
                                        <i class="fas fa-female me-2" style="color: #e53935;"></i>
                                        <span class="small">Para madres solteras</span>
                                    </div>
                                </div>
                            </div>
                            <a href="../pages/modalidad-educame.php" class="btn btn-sm" style="background-color: #e53935; color: white;">Más información</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
// Incluir el pie de página
include '../includes/footer.php';
?>