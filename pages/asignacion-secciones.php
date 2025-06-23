<?php
/**
 * Página de Asignación de Secciones
 * Instituto Nacional Walter Thilo Deininger
 */

$page_title = "Asignación de Secciones";
$current_page = "asignacion-secciones";
$root_path = "../";

// Incluir el encabezado
include '../includes/header.php';

// Verificar si el proceso de asignación está activo
$estado_json = file_get_contents('../config/asignacion-secciones-estado.json');
$estado = json_decode($estado_json, true);
$proceso_activo = isset($estado['proceso_activo']) ? $estado['proceso_activo'] : false;
$mensaje_inactivo = isset($estado['mensaje_inactivo']) ? $estado['mensaje_inactivo'] : "La asignación de secciones estará disponible próximamente.";

// Cargar datos de secciones si el proceso está activo
$secciones = [];
if ($proceso_activo) {
    $secciones_json = file_get_contents('../config/asignacion-secciones.json');
    $secciones = json_decode($secciones_json, true);
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
                    <span style="color: #ffcc00;">Asignación de Secciones</span>
                </h1>
                <p class="lead mb-4">Listados de estudiantes asignados a cada sección para el proceso de admisión.</p>
                <nav aria-label="breadcrumb">   
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $root_path; ?>index.php" class="text-white">Inicio</a></li>
                        <li class="breadcrumb-item"><a href="admisiones.php" class="text-white">Proceso de Admisión</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: #ffcc00;">Asignación de Secciones</li>
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
                        <h2 class="h3 mb-4">Listados de asignación no disponibles</h2>
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
<section class="py-5">
    <div class="container">
        <!-- Información General -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header" style="background-color: #000000; color: #ffcc00;">
                        <h3 class="h5 mb-0">Información General</h3>
                    </div>
                    <div class="card-body">
                        <?php if (isset($secciones['informacion_general'])): ?>
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>
                                <?php echo $secciones['informacion_general']; ?>
                            </div>
                            
                            <?php if (isset($secciones['documentos_generales']) && !empty($secciones['documentos_generales'])): ?>
                                <div class="row mt-4">
                                    <?php foreach ($secciones['documentos_generales'] as $documento): ?>
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
                            <?php endif; ?>
                        <?php else: ?>
                            <div class="alert alert-info mb-0">
                                <i class="fas fa-info-circle me-2"></i>
                                Consulta los listados de asignación de secciones para el proceso de admisión.
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Buscador de Secciones -->
        <div class="row mb-5">
            <div class="col-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header" style="background-color: #000000; color: #ffcc00;">
                        <h3 class="h5 mb-0">Buscar Sección</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8 mx-auto">
                                <div class="input-group mb-3">
                                    <input type="text" id="buscarSeccion" class="form-control" placeholder="Buscar por número de sección (ej: 1-10)" aria-label="Buscar sección">
                                    <button class="btn btn-outline-secondary" type="button" id="btnBuscar">
                                        <i class="fas fa-search"></i> Buscar
                                    </button>
                                </div>
                                <div class="form-text text-center">
                                    Ingresa el número de sección para filtrar los resultados
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Secciones por Especialidad -->
        <div class="row mb-4">
            <div class="col-12">
                <h2 class="section-title">Listados por Especialidad</h2>
                
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
                                    <strong>Bachillerato General</strong> - Secciones disponibles
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-4 seccion-container">
                            <?php 
                            if (isset($secciones['especialidades']['Bachillerato General']) && !empty($secciones['especialidades']['Bachillerato General'])):
                                foreach ($secciones['especialidades']['Bachillerato General'] as $seccion): 
                            ?>
                            <div class="col-md-6 col-lg-4 seccion-item" data-seccion="<?php echo $seccion['numero']; ?>">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-header text-white" style="background-color: <?php echo $colores_especialidades['Bachillerato General']; ?>;">
                                        <h4 class="h5 mb-0">Sección <?php echo $seccion['numero']; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3"><strong>Aula:</strong> <?php echo $seccion['aula']; ?></p>
                                        <p class="mb-3"><strong>Capacidad:</strong> <?php echo $seccion['capacidad']; ?> estudiantes</p>
                                        <p class="mb-3"><strong>Turno:</strong> <?php echo $seccion['turno']; ?></p>
                                        <p class="mb-3"><strong>Hora: </strong><?php echo $seccion['hora']; ?></p>
                                        
                                        <?php if (isset($seccion['archivo'])): ?>
                                        <a href="<?php echo $root_path . $seccion['archivo']; ?>" class="btn btn-sm btn-outline-primary w-100" target="_blank">
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
                                endforeach;
                            else:
                            ?>
                            <div class="col-12">
                                <div class="alert alert-info mb-0">
                                    <i class="fas fa-info-circle me-2"></i>
                                    No hay secciones disponibles para esta especialidad.
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <!-- Administrativo Contable -->
                    <div class="tab-pane fade" id="contable-content" role="tabpanel" aria-labelledby="contable-tab">
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="alert" style="background-color: <?php echo $colores_especialidades['Administrativo Contable']; ?>; color: white;">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Administrativo Contable</strong> - Secciones disponibles
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-4 seccion-container">
                            <?php 
                            if (isset($secciones['especialidades']['Administrativo Contable']) && !empty($secciones['especialidades']['Administrativo Contable'])):
                                foreach ($secciones['especialidades']['Administrativo Contable'] as $seccion): 
                            ?>
                            <div class="col-md-6 col-lg-4 seccion-item" data-seccion="<?php echo $seccion['numero']; ?>">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-header text-white" style="background-color: <?php echo $colores_especialidades['Administrativo Contable']; ?>;">
                                        <h4 class="h5 mb-0">Sección <?php echo $seccion['numero']; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3"><strong>Aula:</strong> <?php echo $seccion['aula']; ?></p>
                                        <p class="mb-3"><strong>Capacidad:</strong> <?php echo $seccion['capacidad']; ?> estudiantes</p>
                                        <p class="mb-3"><strong>Turno:</strong> <?php echo $seccion['turno']; ?></p>
                                        <p class="mb-3"><strong>Hora:</strong> <?php echo $seccion['hora']; ?></p>
                                        
                                        <?php if (isset($seccion['archivo'])): ?>
                                        <a href="<?php echo $root_path . $seccion['archivo']; ?>" class="btn btn-sm btn-outline-primary w-100" target="_blank">
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
                                endforeach;
                            else:
                            ?>
                            <div class="col-12">
                                <div class="alert alert-info mb-0">
                                    <i class="fas fa-info-circle me-2"></i>
                                    No hay secciones disponibles para esta especialidad.
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <!-- Arquitectura -->
                    <div class="tab-pane fade" id="arquitectura-content" role="tabpanel" aria-labelledby="arquitectura-tab">
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="alert" style="background-color: <?php echo $colores_especialidades['Arquitectura']; ?>; color: white;">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Arquitectura</strong> - Secciones disponibles
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-4 seccion-container">
                            <?php 
                            if (isset($secciones['especialidades']['Arquitectura']) && !empty($secciones['especialidades']['Arquitectura'])):
                                foreach ($secciones['especialidades']['Arquitectura'] as $seccion): 
                            ?>
                            <div class="col-md-6 col-lg-4 seccion-item" data-seccion="<?php echo $seccion['numero']; ?>">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-header text-white" style="background-color: <?php echo $colores_especialidades['Arquitectura']; ?>;">
                                        <h4 class="h5 mb-0">Sección <?php echo $seccion['numero']; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3"><strong>Aula:</strong> <?php echo $seccion['aula']; ?></p>
                                        <p class="mb-3"><strong>Capacidad:</strong> <?php echo $seccion['capacidad']; ?> estudiantes</p>
                                        <p class="mb-3"><strong>Turno:</strong> <?php echo $seccion['turno']; ?></p>
                                        <p class="mb-3"><strong>Hora:</strong> <?php echo $seccion['hora']; ?></p>
                                        
                                        <?php if (isset($seccion['archivo'])): ?>
                                        <a href="<?php echo $root_path . $seccion['archivo']; ?>" class="btn btn-sm btn-outline-primary w-100" target="_blank">
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
                                endforeach;
                            else:
                            ?>
                            <div class="col-12">
                                <div class="alert alert-info mb-0">
                                    <i class="fas fa-info-circle me-2"></i>
                                    No hay secciones disponibles para esta especialidad.
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
                                    <strong>Sistemas Eléctricos</strong> - Secciones disponibles
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-4 seccion-container">
                            <?php 
                            if (isset($secciones['especialidades']['Sistemas Eléctricos']) && !empty($secciones['especialidades']['Sistemas Eléctricos'])):
                                foreach ($secciones['especialidades']['Sistemas Eléctricos'] as $seccion): 
                            ?>
                            <div class="col-md-6 col-lg-4 seccion-item" data-seccion="<?php echo $seccion['numero']; ?>">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-header text-white" style="background-color: <?php echo $colores_especialidades['Sistemas Eléctricos']; ?>;">
                                        <h4 class="h5 mb-0">Sección <?php echo $seccion['numero']; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3"><strong>Aula:</strong> <?php echo $seccion['aula']; ?></p>
                                        <p class="mb-3"><strong>Capacidad:</strong> <?php echo $seccion['capacidad']; ?> estudiantes</p>
                                        <p class="mb-3"><strong>Turno:</strong> <?php echo $seccion['turno']; ?></p>
                                        
                                        <?php if (isset($seccion['archivo'])): ?>
                                        <a href="<?php echo $root_path . $seccion['archivo']; ?>" class="btn btn-sm btn-outline-primary w-100" target="_blank">
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
                                endforeach;
                            else:
                            ?>
                            <div class="col-12">
                                <div class="alert alert-info mb-0">
                                    <i class="fas fa-info-circle me-2"></i>
                                    No hay secciones disponibles para esta especialidad.
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
                                    <strong>Atención Primaria en Salud</strong> - Secciones disponibles
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-4 seccion-container">
                            <?php 
                            if (isset($secciones['especialidades']['Atención Primaria en Salud']) && !empty($secciones['especialidades']['Atención Primaria en Salud'])):
                                foreach ($secciones['especialidades']['Atención Primaria en Salud'] as $seccion): 
                            ?>
                            <div class="col-md-6 col-lg-4 seccion-item" data-seccion="<?php echo $seccion['numero']; ?>">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-header text-white" style="background-color: <?php echo $colores_especialidades['Atención Primaria en Salud']; ?>;">
                                        <h4 class="h5 mb-0">Sección <?php echo $seccion['numero']; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3"><strong>Aula:</strong> <?php echo $seccion['aula']; ?></p>
                                        <p class="mb-3"><strong>Capacidad:</strong> <?php echo $seccion['capacidad']; ?> estudiantes</p>
                                        <p class="mb-3"><strong>Turno:</strong> <?php echo $seccion['turno']; ?></p>
                                        <p class="mb-3"><strong>Hora:</strong> <?php echo $seccion['hora']; ?></p>
                                        
                                        <?php if (isset($seccion['archivo'])): ?>
                                        <a href="<?php echo $root_path . $seccion['archivo']; ?>" class="btn btn-sm btn-outline-primary w-100" target="_blank">
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
                                endforeach;
                            else:
                            ?>
                            <div class="col-12">
                                <div class="alert alert-info mb-0">
                                    <i class="fas fa-info-circle me-2"></i>
                                    No hay secciones disponibles para esta especialidad.
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    
                    <!-- Agroindustria -->
                    <div class="tab-pane fade" id="agroindustria-content" role="tabpanel" aria-labelledby="agroindustria-tab">
                        <div class="row mb-4">
                            <div class="col-12">
                                <div class="alert" style="background-color: <?php echo $colores_especialidades['Agroindustria']; ?>; color: white;">
                                    <i class="fas fa-info-circle me-2"></i>
                                    <strong>Agroindustria</strong> - Secciones disponibles
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-4 seccion-container">
                            <?php 
                            if (isset($secciones['especialidades']['Agroindustria']) && !empty($secciones['especialidades']['Agroindustria'])):
                                foreach ($secciones['especialidades']['Agroindustria'] as $seccion): 
                            ?>
                            <div class="col-md-6 col-lg-4 seccion-item" data-seccion="<?php echo $seccion['numero']; ?>">
                                <div class="card h-100 border-0 shadow-sm">
                                    <div class="card-header text-white" style="background-color: <?php echo $colores_especialidades['Agroindustria']; ?>;">
                                        <h4 class="h5 mb-0">Sección <?php echo $seccion['numero']; ?></h4>
                                    </div>
                                    <div class="card-body">
                                        <p class="mb-3"><strong>Aula:</strong> <?php echo $seccion['aula']; ?></p>
                                        <p class="mb-3"><strong>Capacidad:</strong> <?php echo $seccion['capacidad']; ?> estudiantes</p>
                                        <p class="mb-3"><strong>Turno:</strong> <?php echo $seccion['turno']; ?></p>
                                        <p class="mb-3"><strong>Hora:</strong> <?php echo $seccion['hora']; ?></p>
                                        
                                        <?php if (isset($seccion['archivo'])): ?>
                                        <a href="<?php echo $root_path . $seccion['archivo']; ?>" class="btn btn-sm btn-outline-primary w-100" target="_blank">
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
                                endforeach;
                            else:
                            ?>
                            <div class="col-12">
                                <div class="alert alert-info mb-0">
                                    <i class="fas fa-info-circle me-2"></i>
                                    No hay secciones disponibles para esta especialidad.
                                </div>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Enlace a Proceso de Admisión -->
        <div class="text-center mb-5">
            <a href="admisiones.php" class="btn btn-lg" style="background-color: #ffcc00; color: #000000;">
                <i class="fas fa-arrow-left me-2"></i>Volver al Proceso de Admisión
            </a>
        </div>
    </div>
</section>
<?php endif; ?>

<style>
/* Estilos específicos para la página de asignación de secciones */
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

<script>
// Script para el buscador de secciones
document.addEventListener('DOMContentLoaded', function() {
    const buscarInput = document.getElementById('buscarSeccion');
    const btnBuscar = document.getElementById('btnBuscar');
    const seccionItems = document.querySelectorAll('.seccion-item');
    
    function filtrarSecciones() {
        const textoBusqueda = buscarInput.value.trim().toLowerCase();
        
        if (textoBusqueda === '') {
            // Mostrar todas las secciones si no hay texto de búsqueda
            seccionItems.forEach(item => {
                item.style.display = 'block';
            });
            return;
        }
        
        seccionItems.forEach(item => {
            const numeroSeccion = item.getAttribute('data-seccion').toLowerCase();
            
            if (numeroSeccion.includes(textoBusqueda)) {
                item.style.display = 'block';
                
                // Activar la pestaña correspondiente
                const tabPane = item.closest('.tab-pane');
                const tabId = tabPane.id;
                const tab = document.querySelector(`[data-bs-target="#${tabId}"]`);
                
                if (tab) {
                    const tabInstance = new bootstrap.Tab(tab);
                    tabInstance.show();
                }
                
                // Hacer scroll a la sección encontrada
                setTimeout(() => {
                    item.scrollIntoView({ behavior: 'smooth', block: 'center' });
                }, 300);
            } else {
                item.style.display = 'none';
            }
        });
    }
    
    btnBuscar.addEventListener('click', filtrarSecciones);
    
    buscarInput.addEventListener('keyup', function(event) {
        if (event.key === 'Enter') {
            filtrarSecciones();
        }
    });
});
</script>

<?php include '../includes/footer.php'; ?>
