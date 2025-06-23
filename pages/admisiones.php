<?php
/**
 * Página de Proceso de Admisión
 * Instituto Nacional Walter Thilo Deininger
 */

$page_title = "Proceso de Admisión";
$current_page = "proceso-admision";
$root_path = "../";

// Incluir el encabezado
include '../includes/header.php';

// Verificar si el proceso está activo
$estado_json = file_get_contents('../config/admisiones-estado.json');
$estado = json_decode($estado_json, true);
$proceso_activo = isset($estado['proceso_activo']) ? $estado['proceso_activo'] : false;
$mensaje_inactivo = isset($estado['mensaje_inactivo']) ? $estado['mensaje_inactivo'] : "El proceso de admisión comenzará próximamente.";

// Cargar datos de secciones si el proceso está activo
$secciones = [];
if ($proceso_activo) {
    $secciones_json = file_get_contents('../config/admisiones-secciones.json');
    $secciones = json_decode($secciones_json, true);
}
?>

<!-- Hero Section -->
<section class="hero-admisiones py-5" style="background: linear-gradient(135deg, #000000 0%, #333333 100%);">
    <div class="container">
        <div class="row align-items-center text-white">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <span style="color: #ffcc00;">Proceso de Admisión 2026</span>
                </h1>
                <p class="lead mb-4">Tu futuro académico comienza aquí. Conoce todo sobre nuestro proceso de admisión.</p>
            </div>
            <div class="col-lg-4 text-center">
                <div class="admission-stats bg-white text-dark p-4 rounded shadow">
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
                            <i class="fas fa-hourglass-half"></i>
                        </div>
                        <h2 class="h3 mb-4">El proceso de admisión comenzará próximamente</h2>
                        <p class="lead"><?php echo $mensaje_inactivo; ?></p>
                        
                        <div class="alert alert-info mt-4">
                            <i class="fas fa-info-circle me-2"></i>
                            Para más información, puede contactarnos directamente:
                            <div class="mt-3">
                                <a href="tel:+50322282516" class="btn btn-sm btn-outline-primary me-2">
                                    <i class="fas fa-phone me-1"></i> (503) 2228-2516
                                </a>
                                <a href="mailto:admisiones@institutowalterthilo.edu.sv" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-envelope me-1"></i> admisiones@institutowalterthilo.edu.sv
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

<!-- Cronología del Proceso -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Cronología del Proceso</h2>
                <p class="lead text-muted">Sigue estos pasos para completar tu proceso de admisión</p>
            </div>
        </div>
        
        <?php if (isset($secciones['fechas_importantes']) && !empty($secciones['fechas_importantes'])): ?>
        <div class="row">
            <div class="col-12">
                <div class="timeline-container">
                    <?php foreach ($secciones['fechas_importantes'] as $index => $evento): ?>
                    <div class="timeline-item <?php echo $index % 2 == 0 ? 'timeline-left' : 'timeline-right'; ?>">
                        <div class="timeline-content">
                            <div class="card border-0 shadow-sm h-100">
                                <div class="card-body p-4">
                                    <div class="d-flex align-items-center mb-3">
                                        <div class="timeline-icon me-3">
                                            <i class="fas fa-calendar-check fa-2x" style="color: #ffcc00;"></i>
                                        </div>
                                        <div>
                                            <h4 class="h5 mb-1 fw-bold"><?php echo $evento['evento']; ?></h4>
                                            <p class="text-primary mb-0 fw-semibold"><?php echo $evento['fecha']; ?></p>
                                        </div>
                                    </div>
                                    <p class="mb-2"><strong>Lugar:</strong> <?php echo $evento['lugar']; ?></p>
                                    <p class="mb-3"><?php echo $evento['detalles']; ?></p>
                                    <?php if (isset($evento['archivo'])): ?>
                                    
                                    <?php endif; ?>
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

<!-- Requisitos de Admisión -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Requisitos de Admisión</h2>
                <p class="lead text-muted">Documentos y requisitos necesarios para tu aplicación</p>
            </div>
        </div>
        
        <?php if (isset($secciones['requisitos']) && !empty($secciones['requisitos'])): ?>
        <div class="row g-4">
            <?php foreach ($secciones['requisitos'] as $index => $requisito): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 requirement-card">
                    <div class="card-body text-center p-4">
                        <div class="requirement-icon mb-3">
                            <i class="<?php echo isset($requisito['icono']) ? $requisito['icono'] : 'fas fa-file-alt'; ?> fa-3x" style="color: #ffcc00;"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-3"><?php echo $requisito['titulo']; ?></h4>
                        <p class="text-muted mb-3"><?php echo $requisito['descripcion']; ?></p>
                        <?php if (isset($requisito['archivo'])): ?>
                        <a href="<?php echo $root_path . $requisito['archivo']; ?>" class="btn btn-outline-primary btn-sm" target="_blank">
                            <i class="fas fa-download me-1"></i>Descargar
                        </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Información General -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Documentos Importantes</h2>
                <p class="lead text-muted">Descarga toda la información que necesitas</p>
            </div>
        </div>
        
        <?php if (isset($secciones['informacion_general']) && !empty($secciones['informacion_general'])): ?>
        <div class="row justify-content-center g-4">
            <?php foreach ($secciones['informacion_general'] as $documento): ?>
            <div class="col-lg-4 col-md-6 col-sm-8">
                <div class="card border-0 shadow-sm h-100 document-card">
                    <div class="card-body text-center p-4">
                        <div class="document-icon mb-3">
                            <i class="fas fa-file-pdf fa-3x text-danger"></i>
                        </div>
                        <h4 class="h5 fw-bold mb-3"><?php echo $documento['titulo']; ?></h4>
                        <p class="text-muted mb-4"><?php echo $documento['descripcion']; ?></p>
                        <a href="<?php echo $root_path . $documento['archivo']; ?>" 
                           class="btn btn-warning btn-lg w-100" target="_blank">
                            <i class="fas fa-download me-2"></i>Descargar PDF
                        </a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="alert alert-info text-center">
                    <i class="fas fa-info-circle fa-2x mb-3"></i>
                    <h5>Documentos en Preparación</h5>
                    <p class="mb-0">Los documentos importantes estarán disponibles próximamente. Mantente atento a nuestras actualizaciones.</p>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Especialidades Disponibles -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Especialidades Disponibles</h2>
                <p class="lead text-muted">Conoce las opciones académicas que tenemos para ti</p>
            </div>
        </div>
        
        <?php if (isset($secciones['especialidades']) && !empty($secciones['especialidades'])): ?>
        <div class="row g-4">
            <?php foreach ($secciones['especialidades'] as $especialidad): ?>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm h-100 specialty-card">
                    <div class="card-body p-4">
                        <div class="specialty-icon mb-3 text-center">
                            <i class="<?php echo isset($especialidad['icono']) ? $especialidad['icono'] : 'fas fa-graduation-cap'; ?> fa-3x" style="color: #ffcc00;"></i>
                        </div>
                        <h4 class="h5 fw-bold text-center mb-3"><?php echo $especialidad['nombre']; ?></h4>
                        <p class="text-muted text-center mb-3"><?php echo $especialidad['descripcion']; ?></p>
                        <div class="text-center">
                            <span class="badge bg-primary">Duración: <?php echo $especialidad['duracion']; ?></span>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Listados para Exámenes -->
<?php if (isset($secciones['listados_examenes']) && !empty($secciones['listados_examenes'])): ?>
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold mb-3">Listados para Exámenes</h2>
                <p class="lead text-muted">Consulta si estás incluido en los listados de examen</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="accordion" id="accordionExamenes">
                    <?php foreach ($secciones['listados_examenes'] as $index => $categoria): ?>
                    <div class="accordion-item border-0 shadow-sm mb-3">
                        <h2 class="accordion-header" id="heading-examenes-<?php echo $index; ?>">
                            <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-examenes-<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse-examenes-<?php echo $index; ?>">
                                <i class="fas fa-clipboard-list me-2" style="color: #ffcc00;"></i>
                                <?php echo $categoria['nombre']; ?>
                            </button>
                        </h2>
                        <div id="collapse-examenes-<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="heading-examenes-<?php echo $index; ?>" data-bs-parent="#accordionExamenes">
                            <div class="accordion-body">
                                <?php if (!empty($categoria['listados'])): ?>
                                <div class="row g-3">
                                    <?php foreach ($categoria['listados'] as $listado): ?>
                                    <div class="col-md-6">
                                        <div class="card border-0 bg-light">
                                            <div class="card-body p-3">
                                                <h5 class="h6 fw-bold mb-2"><?php echo $listado['titulo']; ?></h5>
                                                <p class="small text-muted mb-2"><?php echo $listado['descripcion']; ?></p>
                                                <a href="<?php echo $root_path . $listado['archivo']; ?>" class="btn btn-primary btn-sm" target="_blank">
                                                    <i class="fas fa-download me-1"></i>Descargar
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                                <?php else: ?>
                                <div class="alert alert-info mb-0">
                                    <i class="fas fa-info-circle me-2"></i>
                                    No hay listados disponibles para esta categoría.
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Botones de Navegación -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-column flex-md-row justify-content-center gap-3">
                    <a href="asignacion-secciones.php" class="btn btn-lg px-4 py-3" style="background-color: #ffcc00; color: #000000; border-radius: 50px;">
                        <i class="fas fa-users me-2"></i>Ver Asignación de Secciones
                    </a>
                    <a href="nuevos-ingresos.php" class="btn btn-lg px-4 py-3" style="background-color: #000000; color: #ffcc00; border-radius: 50px;">
                        <i class="fas fa-user-graduate me-2"></i>Información para Nuevos Ingresos
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif; ?>

<!-- Estilos CSS personalizados -->
<style>
/* Timeline Styles */
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

/* Card Hover Effects */
.requirement-card:hover,
.document-card:hover,
.specialty-card:hover {
    transform: translateY(-5px);
    transition: all 0.3s ease;
}

.requirement-card:hover {
    box-shadow: 0 10px 25px rgba(255, 204, 0, 0.2) !important;
}

.document-card:hover {
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15) !important;
}

.specialty-card:hover {
    box-shadow: 0 10px 25px rgba(255, 204, 0, 0.2) !important;
}

/* Responsive Timeline */
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

/* Button Animations */
.btn {
    transition: all 0.3s ease;
}

.btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

/* Accordion Improvements */
.accordion-button:not(.collapsed) {
    background-color: #ffcc00;
    color: #000000;
}

.accordion-button:focus {
    box-shadow: 0 0 0 0.25rem rgba(255, 204, 0, 0.25);
}

/* Estilos para documentos importantes */
.document-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    border-radius: 15px;
}

.document-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}

.document-icon {
    background: linear-gradient(135deg, #fff5f5 0%, #fee2e2 100%);
    width: 80px;
    height: 80px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto;
}

.btn-warning {
    background-color: #ffcc00;
    border-color: #ffcc00;
    color: #000000;
    font-weight: 600;
    border-radius: 10px;
    transition: all 0.3s ease;
}

.btn-warning:hover {
    background-color: #e6b800;
    border-color: #e6b800;
    color: #000000;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(255, 204, 0, 0.4);
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .document-card .card-body {
        padding: 2rem 1.5rem;
    }
    
    .document-icon {
        width: 60px;
        height: 60px;
    }
    
    .document-icon i {
        font-size: 2rem !important;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
