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
                <p>Oferta educativa de alta calidad</p>
                <a href="pages/oferta-academica.php" class="btn btn-primary btn-lg">Ver Oferta Academica</a>
            </div>
        </div>
        <div class="carousel-item">
            <img src="assets/img/slide3.jpg" class="d-block w-100" alt="Instalaciones">
            <div class="carousel-caption">
                <h2>Instalaciones Modernas</h2>
                <p>Espacios diseñados para el aprendizaje integral</p>
                <a href="pages/nuestro-campus.php" class="btn btn-primary btn-lg">Conoce Nuestro Campus</a>
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
    <div class="container" >
        <div class="row align-items-center"  >
            <div class="col-lg-6" style="text-align: justify; line-height: 1.6; " >
                <h2 class="section-title">Bienvenidos al Instituto Nacional Walter Thilo Deininger</h2>
                <p class="lead">Formando profesionales con valores y excelencia académica desde 1965.</p>
                <p>Nuestro instituto se ha destacado por brindar una educación integral, formando estudiantes con sólidos conocimientos académicos, valores éticos y habilidades para enfrentar los desafíos del mundo actual.</p>
                <p>Contamos con un equipo docente altamente calificado y comprometido con la excelencia educativa.</p>
                <a href="pages/nosotros.php" class="btn btn-outline-primary">Conoce Nuestra Historia</a>
            </div>
            <div class="col-lg-6">
                <img src="assets/img/Aniversario-walter-2025-1.png" alt="Instituto Walter Thilo Deininger" class="img-fluid rounded shadow" style="max-height: 500px; width: 100%;">
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
                        <a href="pages/bachillerato-salud.php" class="btn btn-sm btn-outline-primary">Más información</a>
                    </div>      
                </div>
            </div>
        </div>
        
        <div class="text-center mt-4">
            <a href="pages/oferta-academica.php" class="btn btn-primary">Ver la Oferta Academica</a>
        </div>
    </div>
</section>

<?php
// Cargar noticias y eventos desde JSON para mostrar en el index
$noticias_json_path = 'config/noticias.json';
$noticias_recientes = [];
$proximos_eventos = [];

if (file_exists($noticias_json_path)) {
    $noticias_json = file_get_contents($noticias_json_path);
    $noticias_data = json_decode($noticias_json, true);
    
    // Obtener las 2 noticias más recientes
    if (isset($noticias_data['noticias']) && !empty($noticias_data['noticias'])) {
        $noticias_recientes = array_slice($noticias_data['noticias'], 0, 2);
    }
    
    // Obtener los próximos eventos (máximo 3)
    if (isset($noticias_data['eventos']) && !empty($noticias_data['eventos'])) {
        // Filtrar eventos futuros y ordenar por fecha
        $eventos_futuros = array_filter($noticias_data['eventos'], function($evento) {
            return strtotime($evento['fecha']) >= strtotime('today');
        });
        
        // Ordenar por fecha más próxima
        usort($eventos_futuros, function($a, $b) {
            return strtotime($a['fecha']) - strtotime($b['fecha']);
        });
        
        $proximos_eventos = array_slice($eventos_futuros, 0, 3);
    }
}
?>

<!-- Sección de noticias y eventos -->
<section class="news-events py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Noticias y Eventos</h2>
        
        <div class="row g-4">
            <?php if (!empty($noticias_recientes)): ?>
                <?php foreach ($noticias_recientes as $index => $noticia): ?>
                <!-- Noticia <?php echo $index + 1; ?> -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm news-card-home">
                        <img src="<?php echo $noticia['imagen'] ?? 'assets/img/Evento.png'; ?>" 
                             class="card-img-top" alt="<?php echo $noticia['titulo']; ?>"
                             style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <div class="news-date mb-2">
                                <small class="text-muted">
                                    <i class="fas fa-calendar me-1"></i>
                                    <?php echo date('d \d\e F, Y', strtotime($noticia['fecha'])); ?>
                                </small>
                            </div>
                            <div class="mb-2">
                                <span class="badge" style="background-color: <?php echo $noticia['color_categoria'] ?? '#e53935'; ?>; font-size: 0.7rem;">
                                    <?php echo ucfirst($noticia['categoria'] ?? 'General'); ?>
                                </span>
                            </div>
                            <h3 class="card-title h5"><?php echo $noticia['titulo']; ?></h3>
                            <p class="card-text"><?php echo substr($noticia['resumen'], 0, 100) . '...'; ?></p>
                            <a href="pages/noticias.php#noticia-<?php echo $noticia['id']; ?>" class="btn btn-sm btn-link p-0">
                                Leer más <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php else: ?>
                <!-- Noticias por defecto si no hay JSON -->
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img/Evento.png" class="card-img-top" alt="Noticia por defecto" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <div class="news-date mb-2">
                                <small class="text-muted">Próximamente</small>
                            </div>
                            <h3 class="card-title h5">Noticias del Instituto</h3>
                            <p class="card-text">Mantente informado sobre las últimas noticias y eventos del Instituto Nacional Walter Thilo Deininger.</p>
                            <a href="pages/noticias.php" class="btn btn-sm btn-link p-0">Ver noticias <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6">
                    <div class="card h-100 shadow-sm">
                        <img src="assets/img/Evento.png" class="card-img-top" alt="Eventos por defecto" style="height: 200px; object-fit: cover;">
                        <div class="card-body">
                            <div class="news-date mb-2">
                                <small class="text-muted">Próximamente</small>
                            </div>
                            <h3 class="card-title h5">Eventos Institucionales</h3>
                            <p class="card-text">Conoce los próximos eventos, actividades y fechas importantes de nuestra institución educativa.</p>
                            <a href="pages/noticias.php" class="btn btn-sm btn-link p-0">Ver eventos <i class="fas fa-arrow-right ms-1"></i></a>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            
            <!-- Próximos Eventos -->
            <div class="col-lg-4 col-md-12">
                <div class="card h-100 shadow-sm text-white" style="background: linear-gradient(135deg, #000000 0%, #333333 100%);">
                    <div class="card-body">
                        <h3 class="card-title h5 mb-4">
                            <i class="fas fa-calendar-alt me-2" style="color: #ffcc00;"></i>
                            Próximos Eventos
                        </h3>
                        
                        <?php if (!empty($proximos_eventos)): ?>
                            <ul class="list-unstyled upcoming-events">
                                <?php foreach ($proximos_eventos as $evento): ?>
                                <li class="d-flex mb-3">
                                    <div class="event-date me-3 text-center" style="color: #ffcc00;">
                                        <span class="d-block fw-bold"><?php echo date('d', strtotime($evento['fecha'])); ?></span>
                                        <small><?php echo date('M', strtotime($evento['fecha'])); ?></small>
                                    </div>
                                    <div>
                                        <h4 class="h6 mb-1"><?php echo $evento['titulo']; ?></h4>
                                        <p class="small mb-1"><?php echo $evento['descripcion'] ? substr($evento['descripcion'], 0, 60) . '...' : $evento['lugar']; ?></p>
                                        <small class="text-muted">
                                            <i class="fas fa-clock me-1"></i><?php echo $evento['hora'] ?? 'Por confirmar'; ?>
                                        </small>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else: ?>
                            <!-- Eventos por defecto -->
                            <ul class="list-unstyled upcoming-events">
                                <li class="d-flex mb-3">
                                    <div class="event-date me-3 text-center" style="color: #ffcc00;">
                                        <span class="d-block fw-bold">15</span>
                                        <small>Oct</small>
                                    </div>
                                    <div>
                                        <h4 class="h6 mb-1">Proceso de Admisión 2026</h4>
                                        <p class="small mb-0">Inicio del proceso de admisión</p>
                                    </div>
                                </li>
                                
                                <li class="d-flex mb-3">
                                    <div class="event-date me-3 text-center" style="color: #ffcc00;">
                                        <span class="d-block fw-bold">01</span>
                                        <small>Nov</small>
                                    </div>
                                    <div>
                                        <h4 class="h6 mb-1">Charlas Informativas</h4>
                                        <p class="small mb-0">Información sobre especialidades</p>
                                    </div>
                                </li>
                                
                                <li class="d-flex">
                                    <div class="event-date me-3 text-center" style="color: #ffcc00;">
                                        <span class="d-block fw-bold">15</span>
                                        <small>Dic</small>
                                    </div>
                                    <div>
                                        <h4 class="h6 mb-1">Festival Cultural</h4>
                                        <p class="small mb-0">Celebración anual del instituto</p>
                                    </div>
                                </li>
                            </ul>
                        <?php endif; ?>
                        
                        <div class="text-center mt-4">
                            <a href="pages/noticias.php?tab=eventos" class="btn btn-outline-light">
                                <i class="fas fa-calendar me-2"></i>Ver Todos los Eventos
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Botón para ver todas las noticias -->
        <div class="text-center mt-5">
            <a href="pages/noticias.php" class="btn btn-lg" style="background-color: #ffcc00; color: #000000;">
                <i class="fas fa-newspaper me-2"></i>Ver Todas las Noticias y Eventos
            </a>
        </div>
    </div>
</section>

<style>
.news-card-home {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.news-card-home:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.upcoming-events li {
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding-bottom: 0.75rem;
}

.upcoming-events li:last-child {
    border-bottom: none;
    padding-bottom: 0;
}

.event-date {
    min-width: 50px;
    background: rgba(255, 204, 0, 0.1);
    border-radius: 8px;
    padding: 0.5rem;
}

/* Estilo para la hora de los eventos */
.upcoming-events .text-muted {
    color: #ffcc00 !important; /* Color amarillo institucional */
    opacity: 0.9;
}

.upcoming-events .fas.fa-clock {
    color: #ffcc00 !important; /* Color amarillo para el ícono del reloj */
}

/* Alternativa: si prefieres un color más claro */
.upcoming-events small.text-muted {
    color: rgba(255, 255, 255, 0.8) !important; /* Blanco semi-transparente */
}

@media (max-width: 768px) {
    .upcoming-events {
        font-size: 0.9rem;
    }
    
    .event-date {
        min-width: 40px;
        padding: 0.25rem;
    }
}
</style>

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
