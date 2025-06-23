<?php
/**
 * Página de Proceso de Graduación
 * Instituto Nacional Walter Thilo Deininger
 */

$page_title = "Proceso de Graduación";
$current_page = "proceso-graduacion";
$root_path = "../";

include '../includes/header.php';

// Cargar información de graduación desde JSON
$graduacion_json = file_get_contents('../config/graduacion.json');
$graduacion_data = json_decode($graduacion_json, true);

// Verificar si el proceso está activo
$proceso_activo = isset($graduacion_data['proceso_activo']) ? $graduacion_data['proceso_activo'] : false;
$mensaje_inactivo = isset($graduacion_data['mensaje_inactivo']) ? $graduacion_data['mensaje_inactivo'] : "El proceso de graduación estará disponible próximamente.";
$fecha_apertura = isset($graduacion_data['fecha_apertura']) ? $graduacion_data['fecha_apertura'] : "Por confirmar";
?>

<!-- Hero Section -->
<section class="hero-graduacion py-5" style="background: linear-gradient(135deg, #000000 0%, #333333 100%);">
    <div class="container">
        <div class="row align-items-center text-white">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <span style="color: #ffcc00;">Proceso de Graduación</span>
                </h1>
                <p class="lead mb-4">Todo lo que necesitas saber sobre tu graduación en el Instituto Nacional Walter Thilo Deininger</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="graduation-stats bg-white text-dark p-4 rounded shadow">
                    <h3 class="h4 mb-3" style="color: #000000;">Estado del Proceso</h3>
                    <?php if ($proceso_activo): ?>
                        <div class="alert alert-success mb-0">
                            <i class="fas fa-check-circle me-2"></i>
                            <strong>Proceso Activo</strong>
                        </div>
                    <?php else: ?>
                        <div class="alert alert-warning mb-0">
                            <i class="fas fa-clock me-2"></i>
                            <strong>Próximamente</strong>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if (!$proceso_activo): ?>
<!-- Mensaje de proceso inactivo -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-5">
                        <div class="display-1 text-warning mb-4">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h2 class="h3 mb-4">El proceso de graduación estará disponible próximamente</h2>
                        <p class="lead"><?php echo $mensaje_inactivo; ?></p>
                        
                        <div class="alert alert-info mt-4">
                            <i class="fas fa-calendar-alt me-2"></i>
                            <strong>Fecha estimada de apertura:</strong> <?php echo $fecha_apertura; ?>
                        </div>
                        
                        <div class="alert alert-secondary mt-4">
                            <i class="fas fa-info-circle me-2"></i>
                            Para más información sobre graduación, puede contactarnos directamente:
                            <div class="mt-3">
                                <a href="tel:+50323720220" class="btn btn-sm btn-outline-primary me-2">
                                    <i class="fas fa-phone me-1"></i> (503) 2372-0220
                                </a>
                                <a href="mailto:inwtd11792@gmail.com" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-envelope me-1"></i> inwtd11792@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php else: ?>
<!-- Contenido del proceso activo -->

<!-- Requisitos de Graduación -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Requisitos de Graduación</h2>
                <p class="lead text-muted">Cumple con todos estos requisitos para poder graduarte</p>
            </div>
        </div>
        
        <?php if (isset($graduacion_data['requisitos'])): ?>
        <div class="row g-4 justify-content-center">
            <?php foreach ($graduacion_data['requisitos'] as $requisito): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 requirement-card">
                    <div class="card-body text-center p-4">
                        <div class="requirement-icon mb-3">
                            <i class="<?php echo $requisito['icono']; ?> fa-3x" style="color: #ffcc00;"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-3"><?php echo $requisito['titulo']; ?></h4>
                        <p class="text-muted mb-3"><?php echo $requisito['descripcion']; ?></p>
                        <?php if (isset($requisito['estado'])): ?>
                        <span class="badge <?php echo $requisito['estado'] == 'obligatorio' ? 'bg-danger' : 'bg-info'; ?>">
                            <?php echo ucfirst($requisito['estado']); ?>
                        </span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Fechas y Horarios -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Fechas y Horarios de Graduación</h2>
                <p class="lead text-muted">Las ceremonias se realizan en dos turnos para mejor organización</p>
            </div>
        </div>
        
        <?php if (isset($graduacion_data['ceremonias'])): ?>
        <div class="row g-4">
            <?php foreach ($graduacion_data['ceremonias'] as $ceremonia): ?>
            <div class="col-md-6">
                <div class="card border-0 shadow-sm h-100 ceremony-card">
                    <div class="card-header text-white text-center" style="background-color: <?php echo $ceremonia['color']; ?>;">
                        <h3 class="h4 mb-0"><?php echo $ceremonia['nombre']; ?></h3>
                    </div>
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <i class="<?php echo $ceremonia['icono']; ?> fa-4x" style="color: <?php echo $ceremonia['color']; ?>;"></i>
                        </div>
                        
                        <div class="ceremony-details">
                            <div class="detail-item d-flex align-items-center mb-3">
                                <i class="fas fa-calendar-alt me-3" style="color: #ffcc00;"></i>
                                <div>
                                    <strong>Fecha:</strong> <?php echo $ceremonia['fecha']; ?>
                                </div>
                            </div>
                            
                            <div class="detail-item d-flex align-items-center mb-3">
                                <i class="fas fa-clock me-3" style="color: #ffcc00;"></i>
                                <div>
                                    <strong>Hora:</strong> <?php echo $ceremonia['hora']; ?>
                                </div>
                            </div>
                            
                            <div class="detail-item d-flex align-items-center mb-3">
                                <i class="fas fa-map-marker-alt me-3" style="color: #ffcc00;"></i>
                                <div>
                                    <strong>Lugar:</strong> <?php echo $ceremonia['lugar']; ?>
                                </div>
                            </div>
                            
                            <div class="detail-item d-flex align-items-center mb-4">
                                <i class="fas fa-users me-3" style="color: #ffcc00;"></i>
                                <div>
                                    <strong>Secciones:</strong> <?php echo $ceremonia['secciones']; ?>
                                </div>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <span class="badge" style="background-color: <?php echo $ceremonia['color']; ?>; color: white; font-size: 0.9rem;">
                                <?php echo count(explode(', ', $ceremonia['secciones'])); ?> secciones
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Tarjetas de Invitación -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Tarjetas de Invitación</h2>
                <p class="lead text-muted">Invita a tus seres queridos a tu ceremonia de graduación</p>
            </div>
        </div>
        
        <div class="row align-items-center mb-5">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card border-0 shadow-lg">
                    <div class="card-body p-0">
                        <div class="invitation-preview" style="background: linear-gradient(135deg, #000000 0%, #333333 100%); color: white; padding: 2rem; text-align: center; border-radius: 0.5rem;">
                            <div class="mb-3">
                                <img src="<?php echo $root_path; ?>assets/img/logo-walter.png" alt="Logo INWTD" style="height: 60px;">
                            </div>
                            <h4 class="mb-3" style="color: #ffcc00;">Instituto Nacional Walter Thilo Deininger</h4>
                            <h5 class="mb-3">Ceremonia de Graduación</h5>
                            <div class="invitation-details">
                                <p class="mb-2"><strong>Estudiante:</strong> [Nombre del Graduando]</p>
                                <p class="mb-2"><strong>Especialidad:</strong> [Especialidad]</p>
                                <p class="mb-2"><strong>Fecha:</strong> [Fecha de Graduación]</p>
                                <p class="mb-2"><strong>Hora:</strong> [Hora de Ceremonia]</p>
                                <p class="mb-0"><strong>Lugar:</strong> [Lugar de Ceremonia]</p>
                            </div>
                            <div class="mt-3" style="border-top: 2px solid #ffcc00; padding-top: 1rem;">
                                <small>Tu presencia es muy importante para nosotros</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <?php if (isset($graduacion_data['tarjetas'])): ?>
                <div class="row g-3">
                    <?php foreach ($graduacion_data['tarjetas'] as $tarjeta): ?>
                    <div class="col-12">
                        <div class="card border-0 shadow-sm invitation-option">
                            <div class="card-body p-4">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div>
                                        <h5 class="mb-1"><?php echo $tarjeta['tipo']; ?></h5>
                                        <p class="text-muted mb-2"><?php echo $tarjeta['descripcion']; ?></p>
                                        <small class="text-muted">Cantidad: <?php echo $tarjeta['cantidad']; ?> unidades</small>
                                    </div>
                                    <div class="text-end">
                                        <div class="price-tag">
                                            <span class="h4 fw-bold" style="color: #000000;">$<?php echo $tarjeta['precio']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
                
                <div class="mt-4 text-center">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Información:</strong> Las tarjetas se pueden adquirir en la secretaría del instituto.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proceso de Graduación -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Proceso de Graduación</h2>
                <p class="lead text-muted">Pasos a seguir para completar tu proceso de graduación</p>
            </div>
        </div>
        
        <?php if (isset($graduacion_data['proceso'])): ?>
        <div class="row">
            <div class="col-12">
                <div class="timeline-container">
                    <?php foreach ($graduacion_data['proceso'] as $index => $paso): ?>
                    <div class="timeline-item <?php echo $index % 2 == 0 ? 'timeline-left' : 'timeline-right'; ?>">
                        <div class="timeline-content">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="step-number me-3">
                                            <div class="rounded-circle d-flex align-items-center justify-content-center" 
                                                 style="width: 50px; height: 50px; background-color: #ffcc00; color: #000000; font-weight: bold;">
                                                <?php echo $index + 1; ?>
                                            </div>
                                        </div>
                                        <div>
                                            <h4 class="h5 mb-1 fw-bold"><?php echo $paso['titulo']; ?></h4>
                                            <p class="text-muted mb-0"><?php echo $paso['plazo'] ?? ''; ?></p>
                                        </div>
                                    </div>
                                    <p class="mb-0"><?php echo $paso['descripcion']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php endif; ?>

<!-- Estilos CSS -->
<style>
.requirement-card:hover,
.ceremony-card:hover,
.invitation-option:hover {
    transform: translateY(-5px);
    transition: all 0.3s ease;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15) !important;
}

.ceremony-card {
    border-left: 5px solid #ffcc00;
}

.invitation-preview {
    font-family: 'Georgia', serif;
}

.timeline-container {
    position: relative;
    padding: 2rem 0;
}

.timeline-container::before {
    content: '';
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 4px;
    background: linear-gradient(to bottom, #ffcc00, #000000);
    transform: translateX(-50%);
}

.timeline-item {
    position: relative;
    margin-bottom: 3rem;
    width: 50%;
}

.timeline-left {
    left: 0;
    padding-right: 3rem;
}

.timeline-right {
    left: 50%;
    padding-left: 3rem;
}

.timeline-item::before {
    content: '';
    position: absolute;
    width: 20px;
    height: 20px;
    background-color: #ffcc00;
    border: 4px solid #000000;
    border-radius: 50%;
    top: 20px;
}

.timeline-left::before {
    right: -10px;
}

.timeline-right::before {
    left: -10px;
}

@media (max-width: 768px) {
    .timeline-container::before {
        left: 30px;
    }
    
    .timeline-item {
        width: 100%;
        left: 0 !important;
        padding-left: 4rem !important;
        padding-right: 0 !important;
    }
    
    .timeline-item::before {
        left: 20px !important;
    }
}

.price-tag {
    background-color: #ffcc00;
    padding: 0.5rem 1rem;
    border-radius: 25px;
    color: #000000;
}
</style>

<?php include '../includes/footer.php'; ?>
