<?php
/**
 * Página del Bachillerato Técnico en Contabilidad
 * Instituto Nacional Walter Thilo Deininger
 * Actualizada con la nueva paleta de colores basada en el logo institucional
 */

// Configuración básica de la página
$page_title = "Bachillerato Técnico en Contabilidad";
$current_page = "bachillerato-contabilidad";
$root_path = "../";

// Incluir el encabezado
include '../includes/header.php';
?>

<!-- Hero Section específico de la carrera -->
<section class="career-hero text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('../assets/img/contabilidad-hero.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="badge mb-3" style="background-color: #ffcc00; color: #000000; font-size: 0.9rem;">
                    <i class="fas fa-calculator me-2"></i>Bachillerato Técnico
                </div>
                <h1 class="display-4 fw-bold mb-3">Bachillerato Técnico en Contabilidad</h1>
                <p class="lead mb-4">Forma parte de la nueva generación de profesionales en finanzas y contabilidad. Desarrolla habilidades en gestión financiera, auditoría, impuestos y sistemas contables con equipos y software especializado.</p>
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
                            <div class="h3 fw-bold" style="color: #ffcc00;">3</div>
                            <small>Años de duración</small>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="h3 fw-bold" style="color: #ffcc00;">90%</div>
                            <small>Inserción laboral</small>
                        </div>
                        <div class="col-6">
                            <div class="h3 fw-bold" style="color: #ffcc00;">100+</div>
                            <small>Egresados anuales</small>
                        </div>
                        <div class="col-6">
                            <div class="h3 fw-bold" style="color: #ffcc00;">8</div>
                            <small>Laboratorios contables</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Información general de la carrera -->
<section class="career-overview py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="section-title">¿Por qué estudiar Contabilidad con nosotros?</h2>
                <p class="lead">Nuestro Bachillerato Técnico en Contabilidad te prepara para ser un profesional competente en el mundo de las finanzas, combinando conocimientos teóricos sólidos con experiencia práctica en laboratorios especializados con software contable actualizado.</p>
                
                <div class="row g-4 mt-4">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-file-invoice-dollar fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Contabilidad General</h4>
                            <p>Domina los principios contables, estados financieros y registros contables según normas internacionales.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-chart-line fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Análisis Financiero</h4>
                            <p>Aprende a interpretar estados financieros y realizar análisis de rentabilidad y solvencia.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-landmark fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Legislación Tributaria</h4>
                            <p>Conoce el sistema tributario nacional y los procedimientos de declaración y pago de impuestos.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-laptop fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Software Contable</h4>
                            <p>Maneja programas profesionales como SAP, ContaPlus y otros sistemas de gestión financiera.</p>
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
                            <p class="mb-0 ms-4">Presencial - Matutina/Vespertina</p>
                        </div>
                        
                        <div class="info-item mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-certificate me-2" style="color: #ffcc00;"></i>
                                <strong>Título:</strong>
                            </div>
                            <p class="mb-0 ms-4">Bachiller Técnico en Contabilidad</p>
                        </div>
                        
                        <div class="info-item mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-users me-2" style="color: #ffcc00;"></i>
                                <strong>Cupos:</strong>
                            </div>
                            <p class="mb-0 ms-4">35 estudiantes por sección</p>
                        </div>
                        
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-dollar-sign me-2" style="color: #ffcc00;"></i>
                                <strong>Costo:</strong>
                            </div>
                            <p class="mb-0 ms-4">Educación pública gratuita</p>
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
            <p class="lead">Nuestro plan de estudios está diseñado para formar profesionales competentes en el área contable y financiera.</p>
        </div>
        
        <div class="row">
            <!-- Primer Año -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header text-white text-center py-3" style="background-color: #000000;">
                        <h3 class="h4 mb-0">Primer Año</h3>
                        <small style="color: #ffcc00;">Fundamentos</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Matemáticas I</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Lenguaje y Literatura</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Ciencias Naturales</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Estudios Sociales</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Inglés I</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Introducción a la Contabilidad</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Principios de Economía</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Informática Básica</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Segundo Año -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header text-white text-center py-3" style="background-color: #000000;">
                        <h3 class="h4 mb-0">Segundo Año</h3>
                        <small style="color: #ffcc00;">Desarrollo</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Matemáticas Financieras</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Contabilidad General</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Legislación Laboral</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Inglés II</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Costos y Presupuestos</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Software Contable I</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Impuestos I</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Administración</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Tercer Año -->
            <div class="col-lg-4 mb-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-header text-white text-center py-3" style="background-color: #000000;">
                        <h3 class="h4 mb-0">Tercer Año</h3>
                        <small style="color: #ffcc00;">Especialización</small>
                    </div>
                    <div class="card-body">
                        <ul class="list-unstyled">
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Seminario</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Inglés III</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Contabilidad Avanzada</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Auditoría</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Software Contable II</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Impuestos II</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Proyecto Final</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Práctica Profesional</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Perfil del egresado -->
<section class="graduate-profile py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="section-title">Perfil del Egresado</h2>
                <p class="lead">Al finalizar tus estudios, serás un profesional capacitado para:</p>
                
                <div class="skills-list">
                    <div class="skill-item mb-3">
                        <div class="d-flex align-items-start">
                            <div class="skill-icon me-3 mt-1">
                                <i class="fas fa-book fa-fw" style="color: #ffcc00;"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1">Registros Contables</h4>
                                <p class="mb-0">Llevar registros contables completos y elaborar estados financieros según normas internacionales.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skill-item mb-3">
                        <div class="d-flex align-items-start">
                            <div class="skill-icon me-3 mt-1">
                                <i class="fas fa-calculator fa-fw" style="color: #ffcc00;"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1">Análisis Financiero</h4>
                                <p class="mb-0">Realizar análisis financieros para la toma de decisiones empresariales.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skill-item mb-3">
                        <div class="d-flex align-items-start">
                            <div class="skill-icon me-3 mt-1">
                                <i class="fas fa-file-invoice-dollar fa-fw" style="color: #ffcc00;"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1">Gestión Tributaria</h4>
                                <p class="mb-0">Elaborar declaraciones fiscales y cumplir con obligaciones tributarias.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="skill-item mb-3">
                        <div class="d-flex align-items-start">
                            <div class="skill-icon me-3 mt-1">
                                <i class="fas fa-laptop fa-fw" style="color: #ffcc00;"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1">Software Especializado</h4>
                                <p class="mb-0">Manejar sistemas contables informatizados y herramientas de gestión financiera.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="position-relative">
                    <img src="../assets/img/estudiante-contabilidad.jpg" alt="Estudiante de Contabilidad" class="img-fluid rounded shadow">
                    <div class="position-absolute top-0 end-0 m-3">
                        <div class="badge p-3" style="background-color: #ffcc00; color: #000000;">
                            <i class="fas fa-graduation-cap fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Campo laboral -->
<section class="job-opportunities py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Campo Laboral</h2>
            <p class="lead">Nuestros egresados trabajan en diversas áreas del sector financiero y empresarial</p>
        </div>
        
        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="job-card text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="job-icon mb-3">
                        <i class="fas fa-building fa-3x" style="color: #ffcc00;"></i>
                    </div>
                    <h4 class="h5">Empresas Privadas</h4>
                    <p class="small">Auxiliar contable, analista financiero, auditor interno</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="job-card text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="job-icon mb-3">
                        <i class="fas fa-landmark fa-3x" style="color: #ffcc00;"></i>
                    </div>
                    <h4 class="h5">Sector Público</h4>
                    <p class="small">Contador en instituciones gubernamentales, ministerios, alcaldías</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="job-card text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="job-icon mb-3">
                        <i class="fas fa-file-invoice fa-3x" style="color: #ffcc00;"></i>
                    </div>
                    <h4 class="h5">Consultorías</h4>
                    <p class="small">Asesor contable y fiscal para pequeñas y medianas empresas</p>
                </div>
            </div>
            
            <div class="col-md-6 col-lg-3">
                <div class="job-card text-center p-4 h-100 bg-white rounded shadow-sm">
                    <div class="job-icon mb-3">
                        <i class="fas fa-user-tie fa-3x" style="color: #ffcc00;"></i>
                    </div>
                    <h4 class="h5">Emprendimiento</h4>
                    <p class="small">Contador independiente, servicios de asesoría fiscal</p>
                </div>
            </div>
        </div>
        
        
    </div>
</section>



<!-- Requisitos de ingreso -->
<section class="requirements py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="section-title">Requisitos de Ingreso</h2>
                    <p class="lead">Para formar parte de nuestra comunidad, necesitas:</p>
                </div>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="requirement-card bg-white p-4 rounded shadow-sm h-100">
                            <div class="d-flex align-items-center mb-3">
                                <div class="requirement-icon me-3">
                                    <i class="fas fa-graduation-cap fa-2x" style="color: #ffcc00;"></i>
                                </div>
                                <h4 class="h5 mb-0">Académicos</h4>
                            </div>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Noveno grado aprobado</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Promedio mínimo de 7.0</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Examen de admisión aprobado</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Entrevista personal</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="requirement-card bg-white p-4 rounded shadow-sm h-100">
                            <div class="d-flex align-items-center mb-3">
                                <div class="requirement-icon me-3">
                                    <i class="fas fa-file-alt fa-2x" style="color: #ffcc00;"></i>
                                </div>
                                <h4 class="h5 mb-0">Documentos</h4>
                            </div>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Certificado de noveno grado</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Partida de nacimiento</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>DUI (si es mayor de edad)</li>
                                <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>2 fotografías tamaño cédula</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-4">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Proceso de admisión:</strong> Las inscripciones inician en octubre y el examen de admisión se realiza en noviembre.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Llamada a la acción final -->
<section class="final-cta py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2 class="section-title mb-3">¿Listo para comenzar tu futuro en contabilidad?</h2>
                <p class="lead mb-0">Únete a nuestra comunidad de futuros profesionales en finanzas y desarrolla las habilidades que demanda el mercado laboral.</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="../pages/admisiones.php" class="btn btn-lg" style="background-color: #ffcc00; color: #000000;">
                    <i class="fas fa-rocket me-2"></i>Iniciar Proceso de Admisión
                </a>
            </div>
        </div>
    </div>
</section>

<?php
// Incluir el pie de página
include '../includes/footer.php';
?>

<script>
// Script para el formulario de contacto
document.getElementById('career-contact-form').addEventListener('submit', function(e) {
    e.preventDefault();
    
    // Aquí puedes agregar la lógica para enviar el formulario
    alert('¡Gracias por tu interés! Te contactaremos pronto.');
    
    // Limpiar el formulario
    this.reset();
});

// Smooth scroll para los enlaces internos
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>