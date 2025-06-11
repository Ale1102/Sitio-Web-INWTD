<?php
/**
 * Página principal de Carreras Técnicas
 * Instituto Nacional Walter Thilo Deininger
 */

$page_title = "Carreras Técnicas";
$current_page = "carreras-tecnicas";
$root_path = "../";

include '../includes/header.php';
?>

<!-- Hero Section para Carreras Técnicas -->
<section class="technical-careers-hero text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('../assets/img/carreras-tecnicas-hero.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="badge mb-3" style="background-color: #ffcc00; color: #000000; font-size: 1rem;">
                    <i class="fas fa-tools me-2"></i>FORMACIÓN TÉCNICA ESPECIALIZADA
                </div>
                <h1 class="display-4 fw-bold mb-3">Carreras Técnicas</h1>
                <p class="lead mb-4">Prepárate para el mundo laboral con nuestros programas técnicos especializados. Formación práctica, tecnología de punta y vinculación directa con el sector empresarial.</p>
                
                <div class="row mt-4">
                    <div class="col-md-3 col-6 text-center mb-3">
                        <div class="stat-item">
                            <div class="h2 fw-bold" style="color: #ffcc00;">6</div>
                            <small>Carreras Técnicas</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center mb-3">
                        <div class="stat-item">
                            <div class="h2 fw-bold" style="color: #ffcc00;">95%</div>
                            <small>Inserción Laboral</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center mb-3">
                        <div class="stat-item">
                            <div class="h2 fw-bold" style="color: #ffcc00;">50+</div>
                            <small>Empresas Aliadas</small>
                        </div>
                    </div>
                    <div class="col-md-3 col-6 text-center mb-3">
                        <div class="stat-item">
                            <div class="h2 fw-bold" style="color: #ffcc00;">3</div>
                            <small>Años de Duración</small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="hero-image">
                    <img src="../assets/img/estudiantes-tecnicos.jpg" alt="Estudiantes de carreras técnicas" class="img-fluid rounded shadow">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Introducción a las carreras técnicas -->
<section class="technical-intro py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title">¿Por qué elegir una Carrera Técnica?</h2>
                <p class="lead">Nuestras carreras técnicas te brindan las competencias específicas que demanda el mercado laboral actual, combinando teoría y práctica para una formación integral.</p>
            </div>
        </div>
        
        <div class="row g-4 mt-4">
            <div class="col-md-4">
                <div class="benefit-card text-center p-4 h-100">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-briefcase fa-3x" style="color: #ffcc00;"></i>
                    </div>
                    <h4 class="h5">Inserción Laboral Inmediata</h4>
                    <p>95% de nuestros egresados encuentra empleo en los primeros 6 meses después de graduarse.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="benefit-card text-center p-4 h-100">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-cogs fa-3x" style="color: #ffcc00;"></i>
                    </div>
                    <h4 class="h5">Formación Práctica</h4>
                    <p>Laboratorios especializados y prácticas profesionales en empresas del sector.</p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="benefit-card text-center p-4 h-100">
                    <div class="benefit-icon mb-3">
                        <i class="fas fa-university fa-3x" style="color: #ffcc00;"></i>
                    </div>
                    <h4 class="h5">Continuidad Académica</h4>
                    <p>Posibilidad de continuar estudios superiores en universidades con convenios.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Carreras Técnicas Disponibles -->
<section class="technical-programs py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Nuestras Carreras Técnicas</h2>
            <p class="lead">Elige la carrera que mejor se adapte a tus intereses y proyección profesional</p>
        </div>
        
        <div class="row g-4">
            <!-- Bachillerato Técnico Vocacional Administrativo Contable -->
            <div class="col-lg-6 mb-4">
                <div class="career-card bg-white rounded shadow-sm overflow-hidden h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-4">
                            <img src="../assets/img/contabilidad-card.jpg" alt="Administrativo Contable" class="img-fluid h-100 object-cover">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4 h-100 d-flex flex-column">
                                <div class="career-badge mb-2">
                                    <span class="badge" style="background-color: #ffcc00; color: #000000;">
                                        <i class="fas fa-calculator me-1"></i>Técnico Vocacional
                                    </span>
                                </div>
                                <h3 class="h5 card-title">Bachillerato Técnico Vocacional Administrativo Contable</h3>
                                <p class="card-text flex-grow-1">Formación especializada en contabilidad, administración y finanzas empresariales. Prepárate para el mundo de los negocios.</p>
                                
                                <div class="career-highlights mb-3">
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <small class="text-muted">Duración</small>
                                            <div class="fw-bold">3 años</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Inserción</small>
                                            <div class="fw-bold">90%</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Prácticas</small>
                                            <div class="fw-bold">200h</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="career-skills mb-3">
                                    <small class="text-muted d-block mb-1">Competencias clave:</small>
                                    <div class="d-flex flex-wrap gap-1">
                                        <span class="badge bg-light text-dark">Contabilidad</span>
                                        <span class="badge bg-light text-dark">Finanzas</span>
                                        <span class="badge bg-light text-dark">Administración</span>
                                        <span class="badge bg-light text-dark">Tributación</span>
                                    </div>
                                </div>
                                
                                <a href="bachillerato-contabilidad.php" class="btn btn-outline-primary mt-auto">
                                    Ver Detalles <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
           
            
            <!-- Bachillerato Técnico Productivo Sistemas Eléctricos -->
            <div class="col-lg-6 mb-4">
                <div class="career-card bg-white rounded shadow-sm overflow-hidden h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-4">
                            <img src="../assets/img/electrico-card.jpg" alt="Sistemas Eléctricos" class="img-fluid h-100 object-cover">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4 h-100 d-flex flex-column">
                                <div class="career-badge mb-2">
                                    <span class="badge" style="background-color: #ffcc00; color: #000000;">
                                        <i class="fas fa-bolt me-1"></i>Técnico Productivo
                                    </span>
                                </div>
                                <h3 class="h5 card-title">Bachillerato Técnico Productivo Sistemas Eléctricos y Energía Renovable</h3>
                                <p class="card-text flex-grow-1">Especialízate en instalaciones eléctricas, energías renovables y sistemas de automatización industrial.</p>
                                
                                <div class="career-highlights mb-3">
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <small class="text-muted">Duración</small>
                                            <div class="fw-bold">3 años</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Inserción</small>
                                            <div class="fw-bold">92%</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Talleres</small>
                                            <div class="fw-bold">8</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="career-skills mb-3">
                                    <small class="text-muted d-block mb-1">Competencias clave:</small>
                                    <div class="d-flex flex-wrap gap-1">
                                        <span class="badge bg-light text-dark">Electricidad</span>
                                        <span class="badge bg-light text-dark">Solar</span>
                                        <span class="badge bg-light text-dark">Automatización</span>
                                        <span class="badge bg-light text-dark">Mantenimiento</span>
                                    </div>
                                </div>
                                
                                <a href="bachillerato-electrico.php" class="btn btn-outline-primary mt-auto">
                                    Ver Detalles <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bachillerato Técnico Productivo Atención Primaria en Salud -->
            <div class="col-lg-6 mb-4">
                <div class="career-card bg-white rounded shadow-sm overflow-hidden h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-4">
                            <img src="../assets/img/salud-card.jpg" alt="Atención Primaria en Salud" class="img-fluid h-100 object-cover">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4 h-100 d-flex flex-column">
                                <div class="career-badge mb-2">
                                    <span class="badge" style="background-color: #ffcc00; color: #000000;">
                                        <i class="fas fa-heartbeat me-1"></i>Técnico Productivo
                                    </span>
                                </div>
                                <h3 class="h5 card-title">Bachillerato Técnico Productivo Atención Primaria en Salud y Bienestar Social</h3>
                                <p class="card-text flex-grow-1">Formación en cuidados básicos de salud, primeros auxilios y promoción del bienestar comunitario.</p>
                                
                                <div class="career-highlights mb-3">
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <small class="text-muted">Duración</small>
                                            <div class="fw-bold">3 años</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Inserción</small>
                                            <div class="fw-bold">88%</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Clínicas</small>
                                            <div class="fw-bold">12</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="career-skills mb-3">
                                    <small class="text-muted d-block mb-1">Competencias clave:</small>
                                    <div class="d-flex flex-wrap gap-1">
                                        <span class="badge bg-light text-dark">Primeros Auxilios</span>
                                        <span class="badge bg-light text-dark">Enfermería</span>
                                        <span class="badge bg-light text-dark">Promoción</span>
                                        <span class="badge bg-light text-dark">Comunitario</span>
                                    </div>
                                </div>
                                
                                <a href="bachillerato-salud.php" class="btn btn-outline-primary mt-auto">
                                    Ver Detalles <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bachillerato Técnico Vocacional en Arquitectura -->
            <div class="col-lg-6 mb-4">
                <div class="career-card bg-white rounded shadow-sm overflow-hidden h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-4">
                            <img src="../assets/img/arquitectura-card.jpg" alt="Arquitectura" class="img-fluid h-100 object-cover">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4 h-100 d-flex flex-column">
                                <div class="career-badge mb-2">
                                    <span class="badge" style="background-color: #ffcc00; color: #000000;">
                                        <i class="fas fa-drafting-compass me-1"></i>Técnico Vocacional
                                    </span>
                                </div>
                                <h3 class="h5 card-title">Bachillerato Técnico Vocacional en Arquitectura</h3>
                                <p class="card-text flex-grow-1">Desarrolla habilidades en diseño arquitectónico, dibujo técnico y construcción sostenible.</p>
                                
                                <div class="career-highlights mb-3">
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <small class="text-muted">Duración</small>
                                            <div class="fw-bold">3 años</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Inserción</small>
                                            <div class="fw-bold">85%</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Estudios</small>
                                            <div class="fw-bold">5</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="career-skills mb-3">
                                    <small class="text-muted d-block mb-1">Competencias clave:</small>
                                    <div class="d-flex flex-wrap gap-1">
                                        <span class="badge bg-light text-dark">Diseño</span>
                                        <span class="badge bg-light text-dark">AutoCAD</span>
                                        <span class="badge bg-light text-dark">Construcción</span>
                                        <span class="badge bg-light text-dark">Sostenible</span>
                                    </div>
                                </div>
                                
                                <a href="bachillerato-arquitectura.php" class="btn btn-outline-primary mt-auto">
                                    Ver Detalles <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Bachillerato Técnico Vocacional en Agroindustrias -->
            <div class="col-lg-6 mb-4">
                <div class="career-card bg-white rounded shadow-sm overflow-hidden h-100">
                    <div class="row g-0 h-100">
                        <div class="col-md-4">
                            <img src="../assets/img/agroindustrias-card.jpg" alt="Agroindustrias" class="img-fluid h-100 object-cover">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body p-4 h-100 d-flex flex-column">
                                <div class="career-badge mb-2">
                                    <span class="badge" style="background-color: #ffcc00; color: #000000;">
                                        <i class="fas fa-seedling me-1"></i>Técnico Vocacional
                                    </span>
                                </div>
                                <h3 class="h5 card-title">Bachillerato Técnico Vocacional en Agroindustrias</h3>
                                <p class="card-text flex-grow-1">Especialízate en procesamiento de alimentos, agricultura sostenible y gestión agroindustrial.</p>
                                
                                <div class="career-highlights mb-3">
                                    <div class="row text-center">
                                        <div class="col-4">
                                            <small class="text-muted">Duración</small>
                                            <div class="fw-bold">3 años</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Inserción</small>
                                            <div class="fw-bold">87%</div>
                                        </div>
                                        <div class="col-4">
                                            <small class="text-muted">Plantas</small>
                                            <div class="fw-bold">3</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="career-skills mb-3">
                                    <small class="text-muted d-block mb-1">Competencias clave:</small>
                                    <div class="d-flex flex-wrap gap-1">
                                        <span class="badge bg-light text-dark">Procesamiento</span>
                                        <span class="badge bg-light text-dark">Agricultura</span>
                                        <span class="badge bg-light text-dark">Calidad</span>
                                        <span class="badge bg-light text-dark">Sostenible</span>
                                    </div>
                                </div>
                                
                                <a href="bachillerato-agroindustrias.php" class="btn btn-outline-primary mt-auto">
                                    Ver Detalles <i class="fas fa-arrow-right ms-1"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Proceso de admisión para carreras técnicas -->
<section class="admission-process py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Proceso de Admisión</h2>
            <p class="lead">Pasos para ingresar a nuestras carreras técnicas</p>
        </div>
        
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="process-timeline">
                    <div class="process-step">
                        <div class="step-number" style="background-color: #ffcc00; color: #000000;">1</div>
                        <div class="step-content">
                            <h4 class="h5">Requisitos Básicos</h4>
                            <p>Noveno grado aprobado con promedio mínimo de 7.0</p>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number" style="background-color: #ffcc00; color: #000000;">2</div>
                        <div class="step-content">
                            <h4 class="h5">Examen de Admisión</h4>
                            <p>Evaluación de conocimientos básicos y aptitudes técnicas</p>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number" style="background-color: #ffcc00; color: #000000;">3</div>
                        <div class="step-content">
                            <h4 class="h5">Entrevista Personal</h4>
                            <p>Evaluación de motivación e interés por la carrera elegida</p>
                        </div>
                    </div>
                    
                    <div class="process-step">
                        <div class="step-number" style="background-color: #ffcc00; color: #000000;">4</div>
                        <div class="step-content">
                            <h4 class="h5">Matrícula</h4>
                            <p>Presentación de documentos y formalización de inscripción</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-5">
            <div class="alert alert-info d-inline-block">
                <i class="fas fa-calendar-alt me-2"></i>
                <strong>Fechas importantes:</strong> Inscripciones en octubre • Examen en noviembre • Inicio de clases en febrero
            </div>
        </div>
    </div>
</section>

<!-- Empresas aliadas -->
<section class="partner-companies py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Empresas Aliadas</h2>
            <p class="lead">Nuestros estudiantes realizan prácticas profesionales en empresas líderes del sector</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-3 col-6 text-center">
                <div class="partner-logo bg-white p-3 rounded shadow-sm">
                    <img src="../assets/img/empresa1-logo.png" alt="Empresa 1" class="img-fluid" style="max-height: 60px;">
                </div>
            </div>
            <div class="col-md-3 col-6 text-center">
                <div class="partner-logo bg-white p-3 rounded shadow-sm">
                    <img src="../assets/img/empresa2-logo.png" alt="Empresa 2" class="img-fluid" style="max-height: 60px;">
                </div>
            </div>
            <div class="col-md-3 col-6 text-center">
                <div class="partner-logo bg-white p-3 rounded shadow-sm">
                    <img src="../assets/img/empresa3-logo.png" alt="Empresa 3" class="img-fluid" style="max-height: 60px;">
                </div>
            </div>
            <div class="col-md-3 col-6 text-center">
                <div class="partner-logo bg-white p-3 rounded shadow-sm">
                    <img src="../assets/img/empresa4-logo.png" alt="Empresa 4" class="img-fluid" style="max-height: 60px;">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Llamada a la acción -->
<section class="cta-section py-5" style="background-color: #000000;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 text-white">
                <h2 class="section-title text-white mb-3">¿Listo para comenzar tu carrera técnica?</h2>
                <p class="lead mb-0">Únete a miles de egresados exitosos que han transformado su futuro con nuestras carreras técnicas.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="../pages/contacto.php" class="btn btn-lg me-3" style="background-color: #ffcc00; color: #000000;">
                    <i class="fas fa-envelope me-2"></i>Solicitar Información
                </a>
                <a href="../pages/admisiones.php" class="btn btn-outline-light btn-lg">
                    <i class="fas fa-graduation-cap me-2"></i>Proceso de Admisión
                </a>
            </div>
        </div>
    </div>
</section>

<?php include '../includes/footer.php'; ?>

<style>
/* Estilos específicos para la página de carreras técnicas */
.career-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.career-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.15) !important;
}

.object-cover {
    object-fit: cover;
}

.process-timeline {
    position: relative;
}

.process-step {
    display: flex;
    align-items: center;
    margin-bottom: 2rem;
    position: relative;
}

.process-step:not(:last-child)::after {
    content: '';
    position: absolute;
    left: 25px;
    top: 50px;
    width: 2px;
    height: 40px;
    background-color: #ffcc00;
}

.step-number {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: bold;
    font-size: 1.2rem;
    margin-right: 1rem;
    flex-shrink: 0;
}

.step-content {
    flex-grow: 1;
}

.partner-logo {
    transition: transform 0.3s ease;
}

.partner-logo:hover {
    transform: scale(1.05);
}

.benefit-card {
    transition: transform 0.3s ease;
}

.benefit-card:hover {
    transform: translateY(-5px);
}

@media (max-width: 768px) {
    .career-card .row {
        flex-direction: column;
    }
    
    .career-card .col-md-4 {
        max-width: 100%;
    }
    
    .career-card img {
        height: 200px;
        width: 100%;
    }
}
</style>
