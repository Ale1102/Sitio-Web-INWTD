<?php
/**
 * Página del Bachillerato General
 * Instituto Nacional Walter Thilo Deininger
 */

$page_title = "Bachillerato General";
$current_page = "bachillerato-general";
$root_path = "../";

include '../includes/header.php';
?>

<!-- Hero Section -->
<section class="career-hero text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/img/bachillerato-general-hero.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="badge mb-3" style="background-color: #ffcc00; color: #000000; font-size: 0.9rem;">
                    <i class="fas fa-graduation-cap me-2"></i>Bachillerato General
                </div>
                <h1 class="display-4 fw-bold mb-3">Bachillerato General</h1>
                <p class="lead mb-4">Formación integral que te prepara para la educación superior con sólidos conocimientos en ciencias, matemáticas, humanidades y desarrollo del pensamiento crítico.</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="#plan-estudios" class="btn btn-lg" style="background-color: #ffcc00; color: #000000;">
                        <i class="fas fa-book me-2"></i>Ver Plan de Estudios
                    </a>
                     <a href="admisiones.php"  class="btn btn-lg" style="background-color: #f7f7f7; color: #000000;">
                       <i class="fas fa-user me-2"></i>Proceso de Admisión
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="career-stats bg-dark p-4 rounded shadow" style="background-color: rgba(0,0,0,0.8) !important;">
                    <div class="row text-center">
                        <div class="col-6 mb-3">
                            <div class="h3 fw-bold" style="color: #ffcc00;">2</div>
                            <small>Años de duración</small>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="h3 fw-bold" style="color: #ffcc00;">98%</div>
                            <small>Ingreso universitario</small>
                        </div>
                        <div class="col-6">
                            <div class="h3 fw-bold" style="color: #ffcc00;">200+</div>
                            <small>Estudiantes anuales</small>
                        </div>
                        <div class="col-6">
                            <div class="h3 fw-bold" style="color: #ffcc00;">12</div>
                            <small>Materias por año</small>
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
                <h2 class="section-title">¿Por qué elegir Bachillerato General?</h2>
                <p class="lead">Nuestro Bachillerato General te brinda una formación académica sólida y versátil, preparándote para ingresar a cualquier carrera universitaria con las competencias necesarias para el éxito.</p>
                
                <div class="row g-4 mt-4">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-brain fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Pensamiento Crítico</h4>
                            <p>Desarrolla habilidades de análisis, síntesis y evaluación crítica de la información.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-flask fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Ciencias Exactas</h4>
                            <p>Sólida formación en matemáticas, física, química y biología.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-book-open fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Humanidades</h4>
                            <p>Comprensión profunda de literatura, historia, filosofía y ciencias sociales.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-globe fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Idiomas</h4>
                            <p>Dominio del inglés y bases sólidas para aprender otros idiomas.</p>
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
                            <p class="mb-0 ms-4">2 años (4 semestres)</p>
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
                            <p class="mb-0 ms-4">Bachiller General</p>
                        </div>
                        
                        <div class="info-item mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-users me-2" style="color: #ffcc00;"></i>
                                <strong>Cupos:</strong>
                            </div>
                            <p class="mb-0 ms-4">45 estudiantes por sección</p>
                        </div>
                        
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-university me-2" style="color: #ffcc00;"></i>
                                <strong>Continuidad:</strong>
                            </div>
                            <p class="mb-0 ms-4">Acceso a todas las carreras universitarias</p>
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
            <p class="lead">Formación académica integral que te prepara para la educación superior</p>
        </div>
        
        <div class="row">
            <!-- Primer Año -->
            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header text-white text-center py-3" style="background-color: #000000;">
                        <h3 class="h4 mb-0">Primer Año</h3>
                        <small style="color: #ffcc00;">Fundamentos Académicos</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Matemática I</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Lenguaje y Literatura</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Ciencias Naturales (Física)</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Ciencias Naturales (Química)</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Ciencias Naturales (Biología)</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Estudios Sociales y Cívica</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Inglés I</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Informática</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Educación Física</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Educación Artística</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Orientación para la Vida</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Filosofía</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Segundo Año -->
            <div class="col-lg-6 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header text-white text-center py-3" style="background-color: #000000;">
                        <h3 class="h4 mb-0">Segundo Año</h3>
                        <small style="color: #ffcc00;">Profundización y Especialización</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Matemática II</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Lenguaje y Literatura</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Física</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Química</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Biología</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Estudios Sociales y Cívica</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Inglés II</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Psicología</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Educación Física</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Educación Artística</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Seminario</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Investigación</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Perfil del egresado y continuidad académica -->
<section class="graduate-profile py-5" >
    <div class="container" >
        <div class="row">
           
                <div class="col-lg-6 mb-4 mb-lg-0" >
                <h2 class="section-title">Perfil del Egresado</h2>
                <p class="lead">Al finalizar el Bachillerato General serás capaz de:</p>
                
                <div class="skills-list" >
                    <div class="skill-item mb-3" >
                        <div class="d-flex" >
                            <div class="skill-icon me-3 d-flex align-items-center" style="min-width: 24px;">
                                <i class="fas fa-university fa-fw" style="color: #ffcc00;"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1">Continuar Estudios Superiores</h4>
                                <p class="mb-0">Ingresar a cualquier carrera universitaria con sólida preparación académica.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skill-item mb-3">
                        <div class="d-flex">
                            <div class="skill-icon me-3 d-flex align-items-center" style="min-width: 24px;">
                                <i class="fas fa-lightbulb fa-fw" style="color: #ffcc00;"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1">Pensamiento Crítico</h4>
                                <p  class="mb-0">Analizar, evaluar y resolver problemas de manera sistemática</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skill-item mb-3">
                        <div class="d-flex">
                            <div class="skill-icon me-3 d-flex align-items-center" style="min-width: 24px;">
                                <i class="fas fa-comments fa-fw" style="color: #ffcc00;"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1">Comunicación Efectiva</h4>
                                <p class="mb-0">Expresarte con claridad en forma oral y escrita en español e inglés.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skill-item mb-3">
                        <div class="d-flex">
                            <div class="skill-icon me-3 d-flex align-items-center" style="min-width: 24px;">
                                <i class="fas fa-search fa-fw" style="color: #ffcc00;"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1">Investigación</h4>
                                <p class="mb-0">Realizar investigaciones académicas con metodología científica.</p>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
            <div class="col-lg-6">
                <h2 class="section-title">Carreras Universitarias Populares</h2>
                <p class="lead">Nuestros egresados han ingresado exitosamente a:</p>
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="university-career p-3 bg-light rounded">
                            <i class="fas fa-stethoscope me-2" style="color: #ffcc00;"></i>
                            <strong>Medicina</strong>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="university-career p-3 bg-light rounded">
                            <i class="fas fa-gavel me-2" style="color: #ffcc00;"></i>
                            <strong>Derecho</strong>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="university-career p-3 bg-light rounded">
                            <i class="fas fa-calculator me-2" style="color: #ffcc00;"></i>
                            <strong>Ingeniería</strong>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="university-career p-3 bg-light rounded">
                            <i class="fas fa-chart-line me-2" style="color: #ffcc00;"></i>
                            <strong>Administración</strong>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="university-career p-3 bg-light rounded">
                            <i class="fas fa-chalkboard-teacher me-2" style="color: #ffcc00;"></i>
                            <strong>Educación</strong>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="university-career p-3 bg-light rounded">
                            <i class="fas fa-palette me-2" style="color: #ffcc00;"></i>
                            <strong>Artes</strong>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>
