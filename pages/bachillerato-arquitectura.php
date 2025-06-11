<?php
/**
 * Página del Bachillerato Técnico Vocacional en Arquitectura
 * Instituto Nacional Walter Thilo Deininger
 */

$page_title = "Bachillerato Técnico Vocacional en Arquitectura";
$current_page = "bachillerato-arquitectura";
$root_path = "../";

include '../includes/header.php';
?>

<!-- Hero Section -->
<section class="career-hero text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/img/arquitectura-hero.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="badge mb-3" style="background-color: #ffcc00; color: #000000; font-size: 0.9rem;">
                    <i class="fas fa-drafting-compass me-2"></i>Bachillerato Técnico Vocacional
                </div>
                <h1 class="display-4 fw-bold mb-3">Bachillerato Técnico Vocacional en Arquitectura</h1>
                <p class="lead mb-4">Diseña el futuro construyendo espacios que mejoren la vida de las personas. Aprende diseño arquitectónico, dibujo técnico, construcción sostenible y tecnologías BIM.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#plan-estudios" class="btn btn-lg" style="background-color: #ffcc00; color: #000000;">
                        <i class="fas fa-book me-2"></i>Ver Plan de Estudios
                    </a>
                    <a href="#contacto" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-envelope me-2"></i>Solicitar Información
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="career-stats bg-dark p-4 rounded shadow" style="background-color: rgba(0,0,0,0.8) !important;">
                    <div class="row text-center">
                        <div class="col-6 mb-3">
                            <div class="h3 fw-bold" style="color: #ffcc00;">3</div>
                            <small>Años de duración</small>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="h3 fw-bold" style="color: #ffcc00;">85%</div>
                            <small>Inserción laboral</small>
                        </div>
                        <div class="col-6">
                            <div class="h3 fw-bold" style="color: #ffcc00;">5</div>
                            <small>Estudios de diseño</small>
                        </div>
                        <div class="col-6">
                            <div class="h3 fw-bold" style="color: #ffcc00;">250h</div>
                            <small>Prácticas profesionales</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Información general -->
<section class="career-overview py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="section-title">¿Por qué estudiar Arquitectura?</h2>
                <p class="lead">Esta carrera combina creatividad, tecnología y sostenibilidad para formar profesionales capaces de diseñar espacios funcionales y estéticamente atractivos que respondan a las necesidades actuales.</p>
                
                <div class="row g-4 mt-4">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-pencil-ruler fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Diseño Arquitectónico</h4>
                            <p>Desarrollo de proyectos residenciales, comerciales e institucionales.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-laptop fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Tecnología BIM</h4>
                            <p>AutoCAD, Revit, SketchUp y herramientas de modelado 3D.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-leaf fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Construcción Sostenible</h4>
                            <p>Diseño bioclimático, eficiencia energética y materiales ecológicos.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-hard-hat fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Gestión de Proyectos</h4>
                            <p>Planificación, supervisión y control de obras arquitectónicas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg" style="border-top: 4px solid #ffcc00 !important;">
                    <div class="card-body p-4">
                        <h3 class="card-title h4 mb-4">Información Clave</h3>
                        
                        <div class="info-item mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-clock me-2" style="color: #ffcc00;"></i>
                                <strong>Duración:</strong>
                            </div>
                            <p class="mb-0 ms-4">3 años (6 semestres)</p>
                        </div>
                        
                        <div class="info-item mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar me-2" style="color: #ffcc00;"></i>
                                <strong>Modalidad:</strong>
                            </div>
                            <p class="mb-0 ms-4">Presencial - Matutina</p>
                        </div>
                        
                        <div class="info-item mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-certificate me-2" style="color: #ffcc00;"></i>
                                <strong>Título:</strong>
                            </div>
                            <p class="mb-0 ms-4">Bachiller Técnico Vocacional en Arquitectura</p>
                        </div>
                        
                        <div class="info-item mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-users me-2" style="color: #ffcc00;"></i>
                                <strong>Cupos:</strong>
                            </div>
                            <p class="mb-0 ms-4">25 estudiantes por sección</p>
                        </div>
                        
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-building me-2" style="color: #ffcc00;"></i>
                                <strong>Prácticas:</strong>
                            </div>
                            <p class="mb-0 ms-4">250 horas en estudios de arquitectura</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Plan de estudios -->
<section id="plan-estudios" class="curriculum py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Plan de Estudios</h2>
            <p class="lead">Formación integral en diseño arquitectónico y construcción</p>
        </div>
        
        <div class="row">
            <!-- Primer Año -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header text-white text-center py-3" style="background-color: #000000;">
                        <h3 class="h4 mb-0">Primer Año</h3>
                        <small style="color: #ffcc00;">Fundamentos del Diseño</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Matemáticas I</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Lenguaje y Literatura</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Física I</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Química</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Inglés I</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Dibujo Técnico</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Geometría Descriptiva</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Historia de la Arquitectura</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Segundo Año -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header text-white text-center py-3" style="background-color: #000000;">
                        <h3 class="h4 mb-0">Segundo Año</h3>
                        <small style="color: #ffcc00;">Diseño y Tecnología</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Matemáticas II</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Física II</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Inglés II</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Diseño Arquitectónico I</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>AutoCAD</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Materiales de Construcción</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Estructuras Básicas</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Topografía</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Tercer Año -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header text-white text-center py-3" style="background-color: #000000;">
                        <h3 class="h4 mb-0">Tercer Año</h3>
                        <small style="color: #ffcc00;">Proyectos y Práctica</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Seminario</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Inglés III</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Diseño Arquitectónico II</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Modelado 3D (Revit/SketchUp)</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Construcción Sostenible</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Gestión de Proyectos</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Proyecto Final</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Práctica Profesional</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
