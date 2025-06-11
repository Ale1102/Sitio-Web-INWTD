<?php
// Configuración básica de la página
$page_title = "Inicio";
$current_page = "index";
$root_path = "";

// Incluir el encabezado
include 'includes/header.php';
?>

<!-- Banner principal con carrusel -->
<section id="hero-carousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="0" class="active"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="1"></button>
        <button type="button" data-bs-target="#hero-carousel" data-bs-slide-to="2"></button>
    </div>
    
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="assets/img/logo-walter.png" class="d-block w-100" alt="Instituto Walter Thilo Deininger">
            <div class="carousel-caption">
                
                <p>Formando líderes para el futuro de El Salvador</p>
                <a href="pages/admisiones.php" class="btn btn-primary btn-lg">Proceso de Admisión</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/slide2.jpg" class="d-block w-100" alt="Oferta académica">
            <div class="carousel-caption">
                <h2>Excelencia Académica</h2>
                <p>Programas educativos de alta calidad</p>
                <a href="pages/oferta-academica.php" class="btn btn-primary btn-lg">Ver Programas</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/slide3.jpg" class="d-block w-100" alt="Instalaciones">
            <div class="carousel-caption">
                <h2>Instalaciones Modernas</h2>
                <p>Espacios diseñados para el aprendizaje integral</p>
                <a href="pages/instalaciones.php" class="btn btn-primary btn-lg">Conoce Nuestro Campus</a>
            </div>
        </div>
    </div>
    
    <button class="carousel-control-prev" type="button" data-bs-target="#hero-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#hero-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</section>

<!-- Sección de bienvenida -->
<section class="welcome py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title">Bienvenidos al Instituto Nacional Walter Thilo Deininger</h2>
                <p class="lead">Formando profesionales con valores y excelencia académica desde 1965.</p>
                <p>Nuestro instituto se ha destacado por brindar una educación integral, formando estudiantes con sólidos conocimientos académicos, valores éticos y habilidades para enfrentar los desafíos del mundo actual.</p>
                <p>Contamos con un equipo docente altamente calificado y comprometido con la excelencia educativa.</p>
                <a href="pages/nosotros.php" class="btn btn-outline-primary">Conoce Nuestra Historia</a>
            </div>
            <div class="col-lg-6">
                <img src="assets/img/about-image.jpg" alt="Instituto Walter Thilo Deininger" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</section>

<!-- Sección de programas académicos -->
<section class="academic-programs py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Nuestra Oferta Académica</h2>
        
        <div class="row g-4">
            <!-- Bachillerato General -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="assets/img/bachillerato-general.jpg" class="card-img-top" alt="Bachillerato General">
                    <div class="card-body">
                        <h3 class="card-title h5">Bachillerato General</h3>
                        <p class="card-text">Formación integral con énfasis en ciencias, matemáticas y humanidades, preparando a los estudiantes para la educación superior.</p>
                        <a href="pages/bachillerato-general.php" class="btn btn-sm btn-outline-primary">Más información</a>
                    </div>
                </div>
            </div>
            
            <!-- Bachillerato Técnico en Contabilidad -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="assets/img/bachillerato-contabilidad.jpg" class="card-img-top" alt="Bachillerato Técnico en Contabilidad">
                    <div class="card-body">
                        <h3 class="card-title h5">Bachillerato Técnico en Contabilidad</h3>
                        <p class="card-text">Formación especializada en contabilidad, finanzas y administración, con prácticas profesionales en empresas aliadas.</p>
                        <a href="pages/bachillerato-contable.php" class="btn btn-sm btn-outline-primary">Más información</a>
                    </div>
                </div>
            </div>
            
            <!-- Bachillerato Técnico en Informática -->
            <div class="col-md-4">
                <div class="card h-100 shadow-sm">
                    <img src="assets/img/salud.png" class="card-img-top" alt="Bachillerato Tecnico en Salud">
                    <div class="card-body">
                        <h3 class="card-title h5">Bachillerato Técnico en Salud</h3>
                        <p class="card-text">Formación técnica en salud que combina conocimientos teóricos y prácticos en áreas como primeros auxilios y atención al paciente.</p>
                        <a href="pages/bachillerato-        salud.php" class="btn btn-sm btn-outline-primary">Más información</a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="pages/oferta-academica.php" class="btn btn-primary">Ver Todos los Programas</a>
        </div>
    </div>
</section>

<!-- Sección de noticias y eventos -->
<section class="news-events py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Noticias y Eventos</h2>
        
        <div class="row g-4">
            <!-- Noticia 1 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <img src="assets/img/news1.jpg" class="card-img-top" alt="Noticia 1">
                    <div class="card-body">
                        <div class="news-date mb-2">
                            <small class="text-muted">15 de abril, 2023</small>
                        </div>
                        <h3 class="card-title h5">Estudiantes ganan concurso nacional de matemáticas</h3>
                        <p class="card-text">Nuestros estudiantes obtuvieron el primer lugar en el concurso nacional de matemáticas, demostrando su excelencia académica.</p>
                        <a href="pages/noticia1.php" class="btn btn-sm btn-link p-0">Leer más <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Noticia 2 -->
            <div class="col-lg-4 col-md-6">
                <div class="card h-100 shadow-sm">
                    <img src="assets/img/Evento.png" class="card-img-top" alt="Noticia 2">
                    <div class="card-body">
                        <div class="news-date mb-2">
                            <small class="text-muted">3 de mayo, 2023</small>
                        </div>
                        <h3 class="card-title h5">Inauguración del nuevo laboratorio de informática</h3>
                        <p class="card-text">Con el apoyo del Ministerio de Educación, inauguramos un moderno laboratorio de informática con equipos de última generación.</p>
                        <a href="pages/noticia2.php" class="btn btn-sm btn-link p-0">Leer más <i class="fas fa-arrow-right ms-1"></i></a>
                    </div>
                </div>
            </div>
            
            <!-- Evento próximo -->
            <div class="col-lg-4 col-md-12">
                <div class="card h-100 shadow-sm bg-primary text-white">
                    <div class="card-body">
                        <h3 class="card-title h5">Próximos Eventos</h3>
                        
                        <ul class="list-unstyled upcoming-events">
                            <li class="d-flex mb-3">
                                <div class="event-date me-3 text-center">
                                    <span class="d-block fw-bold">20</span>
                                    <small>Mayo</small>
                                </div>
                                <div>
                                    <h4 class="h6 mb-1">Feria Científica Anual</h4>
                                    <p class="small mb-0">9:00 AM - Auditorio Principal</p>
                                </div>
                            </li>
                            
                            <li class="d-flex mb-3">
                                <div class="event-date me-3 text-center">
                                    <span class="d-block fw-bold">05</span>
                                    <small>Junio</small>
                                </div>
                                <div>
                                    <h4 class="h6 mb-1">Jornada de Orientación Vocacional</h4>
                                    <p class="small mb-0">10:00 AM - Salón Multiusos</p>
                                </div>
                            </li>
                            
                            <li class="d-flex">
                                <div class="event-date me-3 text-center">
                                    <span class="d-block fw-bold">15</span>
                                    <small>Junio</small>
                                </div>
                                <div>
                                    <h4 class="h6 mb-1">Competencia Deportiva Intercolegial</h4>
                                    <p class="small mb-0">2:00 PM - Polideportivo</p>
                                </div>
                            </li>
                        </ul>
                        
                        <a href="pages/eventos.php" class="btn btn-outline-light mt-3">Ver Calendario Completo</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de estadísticas -->
<section class="stats py-5 bg-dark text-white">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4 mb-md-0">
                <div class="stat-item">
                    <div class="stat-number h1">1965</div>
                    <div class="stat-label">Año de Fundación</div>
                </div>
            </div>
            <div class="col-md-3 col-6 mb-4 mb-md-0">
                <div class="stat-item">
                    <div class="stat-number h1">1200+</div>
                    <div class="stat-label">Estudiantes</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number h1">85</div>
                    <div class="stat-label">Docentes</div>
                </div>
            </div>
            <div class="col-md-3 col-6">
                <div class="stat-item">
                    <div class="stat-number h1">98%</div>
                    <div class="stat-label">Tasa de Graduación</div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php
// Incluir el pie de página
include 'includes/footer.php';
?>
