<?php
/**
 * Página de Nuevos Ingresos
 * Instituto Nacional Walter Thilo Deininger
 */

$page_title = "Nuevos Ingresos";
$current_page = "nuevos-ingresos";
$root_path = "../";

// Incluir el encabezado
include '../includes/header.php';

// Verificar si el proceso de nuevos ingresos está activo (archivo separado del proceso de admisión)
$estado_json = file_get_contents('../config/nuevos-ingresos-estado.json');
$estado = json_decode($estado_json, true);
$proceso_activo = isset($estado['proceso_activo']) ? $estado['proceso_activo'] : false;
$mensaje_inactivo = isset($estado['mensaje_inactivo']) ? $estado['mensaje_inactivo'] : "La publicación de listados de nuevos ingresos estará disponible próximamente.";

// Cargar datos de nuevos ingresos si el proceso está activo
$nuevos_ingresos = [];
if ($proceso_activo) {
    $nuevos_ingresos_json = file_get_contents('../config/nuevos-ingresos.json');
    $nuevos_ingresos = json_decode($nuevos_ingresos_json, true);
}

// Definir colores para las especialidades
$colores_especialidades = [
    'Bachillerato General' => '#4CAF50', // Verde
    'Administrativo Contable' => '#2196F3', // Azul
    'Arquitectura' => '#9C27B0', // Púrpura
    'Sistemas Eléctricos' => '#FF9800', // Naranja
    'Atención Primaria en Salud' => '#E91E63', // Rosa
    'Agroindustria' => '#8BC34A' // Verde claro
];
?>

<!-- Hero Section -->
<section class="hero-admisiones py-5" style="background: linear-gradient(135deg, #000000 0%, #333333 100%);">
    <div class="container">
        <div class="row align-items-center text-white">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <span style="color: #ffcc00;">Nuevos Ingresos</span>
                </h1>
                <p class="lead mb-4">Información para estudiantes de nuevo ingreso y asignación de secciones.</p>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $root_path; ?>index.php" class="text-white">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="admisiones.php" class="text-white">Proceso de Admisión</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: #ffcc00;">Nuevos Ingresos</li>
                    </ol>
                </nav>
            </div>
            <div class="col-lg-4 text-center">
                <div class="admission-stats bg-white text-dark p-4 rounded shadow">
                    <h3 class="h4 mb-3" style="color: #000000;">Estado del Proceso</h3>
                    <?php if ($proceso_activo): ?>
                        <div class="alert alert-success mb-0">
                            <i class="fas fa-check-circle me-2"></i>
                            <strong>Listados Publicados</strong>
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
                        <h2 class="h3 mb-4">Listados de nuevos ingresos aún no disponibles</h2>
                        <p class="lead"><?php echo $mensaje_inactivo; ?></p>
                        
                        <div class="alert alert-info mt-4">
                            <i class="fas fa-info-circle me-2"></i>
                            Para más información, puede contactarnos directamente:
                            <div class="mt-3">
                                <a href="tel:+50322282516" class="btn btn-sm btn-outline-primary me-2">
                                    <i class="fas fa-phone me-1"></i> (503) 2372-0220
                                </a>
                                <a href="mailto:admisiones@institutowalterthilo.edu.sv" class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-envelope me-1"></i> inwtd11792@gmail.com
                                </a>
                            </div>
                        </div>
                        
                        <?php if (isset($estado['fecha_publicacion'])): ?>
                        <div class="mt-4">
                            <p><strong>Fecha estimada de publicación:</strong> 
                            <?php 
                                $fecha = new DateTime($estado['fecha_publicacion']);
                                echo $fecha->format('d/m/Y'); 
                            ?>
                            </p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php else: ?>
<!-- Contenido del proceso activo -->
<section class="py-5">
    <div class="container">
        <!-- Información General para Nuevos Ingresos -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header" style="background-color: #000000; color: #ffcc00;">
                        <h3 class="h5 mb-0">Información General para Nuevos Ingresos</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($nuevos_ingresos['informacion_general']) && !empty($nuevos_ingresos['informacion_general'])): ?>
                            <div class="row">
                                <?php foreach ($nuevos_ingresos['informacion_general'] as $documento): ?>
                                <div class="col-md-6 mb-4">
                                    <div class="card h-100 border-0 shadow-sm">
                                        <div class="card-body">
                                            <h4 class="h6 mb-3"><?php echo $documento['titulo']; ?></h4>
                                            <p class="small mb-3"><?php echo $documento['descripcion']; ?></p>
                                            <?php if (isset($documento['archivo'])): ?>
                                            <a href="<?php echo $root_path . $documento['archivo']; ?>" class="btn btn-sm btn-outline-primary" target="_blank">
                                                <i class="fas fa-download me-1"></i>Descargar Documento
                                            </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info mb-0">
                                <i class="fas fa-info-circle me-2"></i>
                                No hay información general disponible actualmente.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Secciones por Especialidad -->
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">Asignación de Secciones</h2>
                <p class="lead">Selecciona tu especialidad para ver las secciones asignadas:</p>
                
                <div class="nav-tabs-container">
                    <ul class="nav nav-tabs" id="especialidadesTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="general-tab" data-bs-toggle="tab" data-bs-target="#general-content" type="button" role="tab" aria-controls="general-content" aria-selected="true">
                                Bachillerato General
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contable-tab" data-bs-toggle="tab" data-bs-target="#contable-content" type="button" role="tab" aria-controls="contable-content" aria-selected="false">
                                Administrativo Contable
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="arquitectura-tab" data-bs-toggle="tab" data-bs-target="#arquitectura-content" type="button" role="tab" aria-controls="arquitectura-content" aria-selected="false">
                                Arquitectura
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="electricos-tab" data-bs-toggle="tab" data-bs-target="#electricos-content" type="button" role="tab" aria-controls="electricos-content" aria-selected="false">
                                Sistemas Eléctricos
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="salud-tab" data-bs-toggle="tab" data-bs-target="#salud-content" type="button" role="tab" aria-controls="salud-content" aria-selected="false">
                                Atención Primaria en Salud
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="agroindustria-tab" data-bs-toggle="tab" data-bs-target="#agroindustria-content" type="button" role="tab" aria-controls="agroindustria-content" aria-selected="false">
                                Agroindustria
                            </button>
                        </li>
                    </ul>
                </div>
                
                <div class="tab-content p-4 border border-top-0 rounded-bottom shadow-sm" id="especialidadesTabContent">
                    <!-- Bachillerato General -->
                    <div class="tab-pane fade show active" id="general-content" role="tabpanel" aria-labelledby="general-tab">
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="alert" style="background-color: <?php echo $colores_especialidades['Bachillerato General']; ?>; color: white;">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Bachillerato General</strong> - Secciones: 1-1, 1-2, 1-3, 1-4, 1-5, 1-6
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-4">
                            <?php 
                            $secciones_general = ['1-1', '1-2', '1-3', '1-4', '1-5', '1-6'];
                            foreach ($secciones_general as $seccion): 
                                if (isset($nuevos_ingresos['secciones'][$seccion])):
                                    $seccion_info = $nuevos_ingresos['secciones'][$seccion];
                            ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-header text-white" style="background-color: <?php echo $colores_especialidades['Bachillerato General']; ?>;">
                                        <h4 class="h5 mb-0">Sección <?php echo $seccion; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3"><strong>Docente:</strong> <?php echo $seccion_info['docente']; ?></p>
                                        <p class="mb-3"><strong>Aula:</strong> <?php echo $seccion_info['aula']; ?></p>
                                        <p class="mb-3"><strong>Horario:</strong> <?php echo $seccion_info['horario']; ?></p>
                                        
                                        <?php if (isset($seccion_info['archivo'])): ?>
                                        <a href="<?php echo $root_path . $seccion_info['archivo']; ?>" class="btn btn-sm btn-outline-primary w-100" target="_blank">
                                            <i class="fas fa-download me-1"></i>Descargar Listado
                                        </a>
                                        <?php else: ?>
                                        <div class="alert alert-info mb-0">
                                            <i class="fas fa-info-circle me-2"></i>
                                            Listado no disponible actualmente.
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                endif;
                            endforeach; 
                            ?>
                        </div>
                    </div>
                    
                    <!-- Administrativo Contable -->
                    <div class="tab-pane fade" id="contable-content" role="tabpanel" aria-labelledby="contable-tab">
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="alert" style="background-color: <?php echo $colores_especialidades['Administrativo Contable']; ?>; color: white;">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Administrativo Contable</strong> - Secciones: 1-7, 1-8, 1-9, 1-10
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-4">
                            <?php 
                            $secciones_contable = ['1-7', '1-8', '1-9', '1-10'];
                            foreach ($secciones_contable as $seccion): 
                                if (isset($nuevos_ingresos['secciones'][$seccion])):
                                    $seccion_info = $nuevos_ingresos['secciones'][$seccion];
                            ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-header text-white" style="background-color: <?php echo $colores_especialidades['Administrativo Contable']; ?>;">
                                        <h4 class="h5 mb-0">Sección <?php echo $seccion; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3"><strong>Docente:</strong> <?php echo $seccion_info['docente']; ?></p>
                                        <p class="mb-3"><strong>Aula:</strong> <?php echo $seccion_info['aula']; ?></p>
                                        <p class="mb-3"><strong>Horario:</strong> <?php echo $seccion_info['horario']; ?></p>
                                        
                                        <?php if (isset($seccion_info['archivo'])): ?>
                                        <a href="<?php echo $root_path . $seccion_info['archivo']; ?>" class="btn btn-sm btn-outline-primary w-100" target="_blank">
                                            <i class="fas fa-download me-1"></i>Descargar Listado
                                        </a>
                                        <?php else: ?>
                                        <div class="alert alert-info mb-0">
                                            <i class="fas fa-info-circle me-2"></i>
                                            Listado no disponible actualmente.
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                endif;
                            endforeach; 
                            ?>
                        </div>
                    </div>
                    
                    <!-- Arquitectura -->
                    <div class="tab-pane fade" id="arquitectura-content" role="tabpanel" aria-labelledby="arquitectura-tab">
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="alert" style="background-color: <?php echo $colores_especialidades['Arquitectura']; ?>; color: white;">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Arquitectura</strong> - Sección: 1-11
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-4">
                            <?php 
                            $seccion = '1-11';
                            if (isset($nuevos_ingresos['secciones'][$seccion])):
                                $seccion_info = $nuevos_ingresos['secciones'][$seccion];
                            ?>
                            <div class="col-md-6 mx-auto">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-header text-white" style="background-color: <?php echo $colores_especialidades['Arquitectura']; ?>;">
                                        <h4 class="h5 mb-0">Sección <?php echo $seccion; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3"><strong>Docente:</strong> <?php echo $seccion_info['docente']; ?></p>
                                        <p class="mb-3"><strong>Aula:</strong> <?php echo $seccion_info['aula']; ?></p>
                                        <p class="mb-3"><strong>Horario:</strong> <?php echo $seccion_info['horario']; ?></p>
                                        
                                        <?php if (isset($seccion_info['archivo'])): ?>
                                        <a href="<?php echo $root_path . $seccion_info['archivo']; ?>" class="btn btn-sm btn-outline-primary w-100" target="_blank">
                                            <i class="fas fa-download me-1"></i>Descargar Listado
                                        </a>
                                        <?php else: ?>
                                        <div class="alert alert-info mb-0">
                                            <i class="fas fa-info-circle me-2"></i>
                                            Listado no disponible actualmente.
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <!-- Sistemas Eléctricos -->
                    <div class="tab-pane fade" id="electricos-content" role="tabpanel" aria-labelledby="electricos-tab">
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="alert" style="background-color: <?php echo $colores_especialidades['Sistemas Eléctricos']; ?>; color: white;">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Sistemas Eléctricos</strong> - Sección: 1-12
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-4">
                            <?php 
                            $seccion = '1-12';
                            if (isset($nuevos_ingresos['secciones'][$seccion])):
                                $seccion_info = $nuevos_ingresos['secciones'][$seccion];
                            ?>
                            <div class="col-md-6 mx-auto">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-header text-white" style="background-color: <?php echo $colores_especialidades['Sistemas Eléctricos']; ?>;">
                                        <h4 class="h5 mb-0">Sección <?php echo $seccion; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3"><strong>Docente:</strong> <?php echo $seccion_info['docente']; ?></p>
                                        <p class="mb-3"><strong>Aula:</strong> <?php echo $seccion_info['aula']; ?></p>
                                        <p class="mb-3"><strong>Horario:</strong> <?php echo $seccion_info['horario']; ?></p>
                                        
                                        <?php if (isset($seccion_info['archivo'])): ?>
                                        <a href="<?php echo $root_path . $seccion_info['archivo']; ?>" class="btn btn-sm btn-outline-primary w-100" target="_blank">
                                            <i class="fas fa-download me-1"></i>Descargar Listado
                                        </a>
                                        <?php else: ?>
                                        <div class="alert alert-info mb-0">
                                            <i class="fas fa-info-circle me-2"></i>
                                            Listado no disponible actualmente.
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <!-- Atención Primaria en Salud -->
                    <div class="tab-pane fade" id="salud-content" role="tabpanel" aria-labelledby="salud-tab">
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="alert" style="background-color: <?php echo $colores_especialidades['Atención Primaria en Salud']; ?>; color: white;">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Atención Primaria en Salud</strong> - Secciones: 1-13, 1-14, 1-15
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-4">
                            <?php 
                            $secciones_salud = ['1-13', '1-14', '1-15'];
                            foreach ($secciones_salud as $seccion): 
                                if (isset($nuevos_ingresos['secciones'][$seccion])):
                                    $seccion_info = $nuevos_ingresos['secciones'][$seccion];
                            ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-header text-white" style="background-color: <?php echo $colores_especialidades['Atención Primaria en Salud']; ?>;">
                                        <h4 class="h5 mb-0">Sección <?php echo $seccion; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3"><strong>Docente:</strong> <?php echo $seccion_info['docente']; ?></p>
                                        <p class="mb-3"><strong>Aula:</strong> <?php echo $seccion_info['aula']; ?></p>
                                        <p class="mb-3"><strong>Horario:</strong> <?php echo $seccion_info['horario']; ?></p>
                                        
                                        <?php if (isset($seccion_info['archivo'])): ?>
                                        <a href="<?php echo $root_path . $seccion_info['archivo']; ?>" class="btn btn-sm btn-outline-primary w-100" target="_blank">
                                            <i class="fas fa-download me-1"></i>Descargar Listado
                                        </a>
                                        <?php else: ?>
                                        <div class="alert alert-info mb-0">
                                            <i class="fas fa-info-circle me-2"></i>
                                            Listado no disponible actualmente.
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php 
                                endif;
                            endforeach; 
                            ?>
                        </div>
                    </div>
                    
                    <!-- Agroindustria -->
                    <div class="tab-pane fade" id="agroindustria-content" role="tabpanel" aria-labelledby="agroindustria-tab">
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="alert" style="background-color: <?php echo $colores_especialidades['Agroindustria']; ?>; color: white;">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Agroindustria</strong> - Sección: 1-16
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-4">
                            <?php 
                            $seccion = '1-16';
                            if (isset($nuevos_ingresos['secciones'][$seccion])):
                                $seccion_info = $nuevos_ingresos['secciones'][$seccion];
                            ?>
                            <div class="col-md-6 mx-auto">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-header text-white" style="background-color: <?php echo $colores_especialidades['Agroindustria']; ?>;">
                                        <h4 class="h5 mb-0">Sección <?php echo $seccion; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3"><strong>Docente:</strong> <?php echo $seccion_info['docente']; ?></p>
                                        <p class="mb-3"><strong>Aula:</strong> <?php echo $seccion_info['aula']; ?></p>
                                        <p class="mb-3"><strong>Horario:</strong> <?php echo $seccion_info['horario']; ?></p>
                                        
                                        <?php if (isset($seccion_info['archivo'])): ?>
                                        <a href="<?php echo $root_path . $seccion_info['archivo']; ?>" class="btn btn-sm btn-outline-primary w-100" target="_blank">
                                            <i class="fas fa-download me-1"></i>Descargar Listado
                                        </a>
                                        <?php else: ?>
                                        <div class="alert alert-info mb-0">
                                            <i class="fas fa-info-circle me-2"></i>
                                            Listado no disponible actualmente.
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Información Adicional -->
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header" style="background-color: #000000; color: #ffcc00;">
                        <h3 class="h5 mb-0">Información Adicional</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($nuevos_ingresos['informacion_adicional']) && !empty($nuevos_ingresos['informacion_adicional'])): ?>
                            <div class="accordion" id="accordionAdicional">
                                <?php foreach ($nuevos_ingresos['informacion_adicional'] as $index => $item): ?>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading-adicional-<?php echo $index; ?>">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse-adicional-<?php echo $index; ?>" aria-expanded="false" aria-controls="collapse-adicional-<?php echo $index; ?>">
                                            <?php echo $item['titulo']; ?>
                                        </button>
                                    </h2>
                                    <div id="collapse-adicional-<?php echo $index; ?>" class="accordion-collapse collapse" aria-labelledby="heading-adicional-<?php echo $index; ?>" data-bs-parent="#accordionAdicional">
                                        <div class="accordion-body">
                                            <p><?php echo $item['descripcion']; ?></p>
                                            <?php if (isset($item['archivo'])): ?>
                                            <a href="<?php echo $root_path . $item['archivo']; ?>" class="btn btn-sm btn-outline-primary" target="_blank">
                                                <i class="fas fa-download me-1"></i>Descargar Documento
                                            </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                                <?php endforeach; ?>
                            </div>
                        <?php else: ?>
                            <div class="alert alert-info mb-0">
                                <i class="fas fa-info-circle me-2"></i>
                                No hay información adicional disponible actualmente.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<style>
/* Estilos específicos para la página de nuevos ingresos */
.nav-tabs .nav-link {
    color: #495057;
    border: 1px solid transparent;
    border-top-left-radius: 0.25rem;
    border-top-right-radius: 0.25rem;
    padding: 0.5rem 1rem;
}

.nav-tabs .nav-link.active {
    color: #000000;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
    font-weight: bold;
}

.nav-tabs .nav-link:hover {
    border-color: #e9ecef #e9ecef #dee2e6;
}

.nav-tabs-container {
    overflow-x: auto;
    white-space: nowrap;
    -webkit-overflow-scrolling: touch;
}

.nav-tabs {
    flex-wrap: nowrap;
}

@media (max-width: 768px) {
    .nav-tabs .nav-link {
        padding: 0.5rem 0.75rem;
        font-size: 0.9rem;
    }
}
</style>

<?php include '../includes/footer.php'; ?>
