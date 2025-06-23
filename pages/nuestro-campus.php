<?php
/**
 * Página de Nuestro Campus
 * Instituto Nacional Walter Thilo Deininger
 */

$page_title = "Nuestro Campus";
$current_page = "nuestro-campus";
$root_path = "../";

include '../includes/header.php';

// Cargar información del campus desde JSON
$campus_json = file_get_contents('../config/campus.json');
$campus_data = json_decode($campus_json, true);
?>

<!-- Hero Section -->
<section class="hero-campus py-5" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/img/Evento.png'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center text-white">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <span style="color: #ffcc00;">Nuestro Campus</span>
                </h1>
                <p class="lead mb-4">Conoce nuestras instalaciones, laboratorios especializados y espacios diseñados para tu formación académica integral.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="campus-stats bg-white text-dark p-4 rounded shadow">
                    <h3 class="h4 mb-3" style="color: #000000;">Nuestras Cifras</h3>
                    <div class="row text-center">
                        <div class="col-6 mb-2">
                            <div class="h3 fw-bold" style="color: #ffcc00;"><?php echo $campus_data['estadisticas']['aulas'] ?? '40'; ?></div>
                            <small>Aulas</small>
                        </div>
                        <div class="col-6 mb-2">
                            <div class="h3 fw-bold" style="color: #ffcc00;"><?php echo $campus_data['estadisticas']['laboratorios'] ?? '5'; ?></div>
                            <small>Laboratorios</small>
                        </div>
                        <div class="col-6">
                            <div class="h3 fw-bold" style="color: #ffcc00;"><?php echo $campus_data['estadisticas']['estudiantes'] ?? '1850'; ?></div>
                            <small>Estudiantes</small>
                        </div>
                        <div class="col-6">
                            <div class="h3 fw-bold" style="color: #ffcc00;"><?php echo $campus_data['estadisticas']['docentes'] ?? '52'; ?></div>
                            <small>Docentes</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Información General del Campus -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="section-title">Acerca de Nuestro Campus</h2>
                <p class="lead"><?php echo $campus_data['descripcion_general'] ?? 'El Instituto Nacional Walter Thilo Deininger cuenta con instalaciones diseñadas para brindar una educación de calidad.'; ?></p>
                
                <div class="campus-features mt-4">
                    <?php if (isset($campus_data['caracteristicas'])): ?>
                        <?php foreach ($campus_data['caracteristicas'] as $caracteristica): ?>
                        <div class="feature-item d-flex align-items-start mb-3">
                            <div class="feature-icon me-3">
                                <i class="<?php echo $caracteristica['icono']; ?> fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1"><?php echo $caracteristica['titulo']; ?></h4>
                                <p class="mb-0"><?php echo $caracteristica['descripcion']; ?></p>
                            </div>
                        </div>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="campus-image-gallery">
                    <div class="main-image mb-3">
                        <img src="<?php echo $root_path; ?>assets/img/Evento.png" alt="Campus Principal" class="img-fluid rounded shadow">
                    </div>
                    <div class="row g-2">
                        <div class="col-4">
                            <img src="<?php echo $root_path; ?>assets/img/salud.png" alt="Laboratorio" class="img-fluid rounded shadow-sm">
                        </div>
                        <div class="col-4">
                            <img src="<?php echo $root_path; ?>assets/img/logo-walter.png" alt="Aula" class="img-fluid rounded shadow-sm">
                        </div>
                        <div class="col-4">
                            <img src="<?php echo $root_path; ?>assets/img/Evento.png" alt="Biblioteca" class="img-fluid rounded shadow-sm">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Lugares Importantes del Campus -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Lugares Importantes del Campus</h2>
            <p class="lead">Conoce los espacios más importantes de nuestro instituto y los servicios que ofrecen.</p>
        </div>
        
        <div class="row justify-content-center">
            <?php if (isset($campus_data['lugares_importantes'])): ?>
                <?php foreach ($campus_data['lugares_importantes'] as $lugar): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm location-card">
                        <div class="card-img-container position-relative">
                            <img src="<?php echo $root_path . ($lugar['imagen'] ?? 'assets/img/Evento.png'); ?>" 
                                 class="card-img-top" alt="<?php echo $lugar['nombre']; ?>" style="height: 200px; object-fit: cover;">
                            <div class="card-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                <i class="<?php echo $lugar['icono']; ?> fa-3x text-white"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000000;"><?php echo $lugar['nombre']; ?></h5>
                            <p class="card-text"><?php echo $lugar['descripcion']; ?></p>
                            
                            <div class="location-details">
                                <div class="mb-2">
                                    <small class="text-muted">
                                        <i class="fas fa-map-marker-alt me-1" style="color: #ffcc00;"></i>
                                        <?php echo $lugar['ubicacion']; ?>
                                    </small>
                                </div>
                                
                                <?php if (isset($lugar['horario'])): ?>
                                <div class="mb-3">
                                    <small class="text-muted">
                                        <i class="fas fa-clock me-1" style="color: #ffcc00;"></i>
                                        <?php echo $lugar['horario']; ?>
                                    </small>
                                </div>
                                <?php endif; ?>
                                
                                <?php if (isset($lugar['servicios']) && !empty($lugar['servicios'])): ?>
                                <div class="services-list">
                                    <h6 class="small fw-bold mb-2">Servicios:</h6>
                                    <ul class="list-unstyled small">
                                        <?php foreach (array_slice($lugar['servicios'], 0, 3) as $servicio): ?>
                                        <li><i class="fas fa-check me-2" style="color: #ffcc00;"></i><?php echo $servicio; ?></li>
                                        <?php endforeach; ?>
                                        <?php if (count($lugar['servicios']) > 3): ?>
                                        <li><small class="text-muted">Y más servicios...</small></li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Instalaciones por Especialidad -->
<section class="py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Laboratorios Especializados</h2>
            <p class="lead">Cada especialidad cuenta con espacios y equipos especializados para tu formación práctica.</p>
        </div>
        
        <div class="row justify-content-center">
            <?php if (isset($campus_data['instalaciones_especialidad'])): ?>
                <?php foreach ($campus_data['instalaciones_especialidad'] as $instalacion): ?>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100 border-0 shadow-sm facility-card">
                        <div class="card-img-container position-relative">
                            <img src="<?php echo $root_path . ($instalacion['imagen'] ?? 'assets/img/Evento.png'); ?>" 
                                 class="card-img-top" alt="<?php echo $instalacion['nombre']; ?>" style="height: 200px; object-fit: cover;">
                            <div class="card-overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                <i class="<?php echo $instalacion['icono']; ?> fa-3x text-white"></i>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="color: #000000;"><?php echo $instalacion['nombre']; ?></h5>
                            <p class="card-text"><?php echo $instalacion['descripcion']; ?></p>
                            
                            <?php if (isset($instalacion['equipos'])): ?>
                            <div class="equipment-list">
                                <h6 class="small fw-bold mb-2">Equipos Disponibles:</h6>
                                <ul class="list-unstyled small">
                                    <?php foreach ($instalacion['equipos'] as $equipo): ?>
                                    <li><i class="fas fa-check me-2" style="color: #ffcc00;"></i><?php echo $equipo; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<!-- Servicios del Campus -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Servicios del Campus</h2>
            <p class="lead">Servicios adicionales que complementan tu experiencia educativa.</p>
        </div>
        
        <div class="row justify-content-center">
            <?php if (isset($campus_data['servicios'])): ?>
                <?php foreach ($campus_data['servicios'] as $servicio): ?>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="service-item text-center">
                        <div class="service-icon mb-3">
                            <div class="icon-circle mx-auto d-flex align-items-center justify-content-center" 
                                 style="width: 80px; height: 80px; background-color: #ffcc00; border-radius: 50%;">
                                <i class="<?php echo $servicio['icono']; ?> fa-2x" style="color: #000000;"></i>
                            </div>
                        </div>
                        <h4 class="h5 mb-3"><?php echo $servicio['nombre']; ?></h4>
                        <p class="text-muted"><?php echo $servicio['descripcion']; ?></p>
                        
                        <?php if (isset($servicio['horario'])): ?>
                        <div class="service-schedule mt-3">
                            <small class="text-muted">
                                <i class="fas fa-clock me-1"></i><?php echo $servicio['horario']; ?>
                            </small>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
    </div>
</section>



<style>
.section-title {
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 2rem;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 50px;
    height: 3px;
    background-color: #ffcc00;
}

.location-card,
.facility-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    overflow: hidden;
}

.location-card:hover,
.facility-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.card-overlay {
    background: rgba(0,0,0,0.7);
    opacity: 0;
    transition: opacity 0.3s ease;
}

.location-card:hover .card-overlay,
.facility-card:hover .card-overlay {
    opacity: 1;
}

.service-item {
    transition: transform 0.3s ease;
}

.service-item:hover {
    transform: translateY(-5px);
}

.campus-image-gallery img {
    transition: transform 0.3s ease;
}

.campus-image-gallery img:hover {
    transform: scale(1.05);
}

.contact-item {
    transition: transform 0.3s ease;
}

.contact-item:hover {
    transform: translateY(-3px);
}

@media (max-width: 768px) {
    .cta-buttons .btn {
        display: block;
        width: 100%;
        margin-bottom: 1rem;
    }
    
    .cta-buttons .btn:last-child {
        margin-bottom: 0;
    }
    
    .section-title::after {
        left: 0;
        transform: none;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
