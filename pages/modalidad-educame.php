<?php
/**
 * Página de Modalidad Flexible EDUCAME
 * Instituto Nacional Walter Thilo Deininger
 * Modalidad especial para adultos trabajadores y madres solteras
 */

$page_title = "Modalidad Flexible EDUCAME";
$current_page = "modalidad-educame";
$root_path = "../";

include '../includes/header.php';
?>

<!-- Hero Section Especial para EDUCAME -->
<section class="career-hero text-white py-5" style="background: linear-gradient(rgba(0,0,0,0.8), rgba(0,0,0,0.8)), url('../assets/img/educame-hero.jpg'); background-size: cover; background-position: center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="badge mb-3" style="background-color: #e53935; color: #ffffff; font-size: 1rem;">
                    <i class="fas fa-clock me-2"></i>MODALIDAD ESPECIAL - SOLO SÁBADOS
                </div>
                <h1 class="display-4 fw-bold mb-3">Modalidad Flexible - EDUCAME</h1>
                <p class="lead mb-4">Programa educativo diseñado especialmente para <strong>adultos trabajadores y madres solteras mayores de 18 años</strong> que buscan completar su bachillerato sin abandonar sus responsabilidades laborales y familiares.</p>
                
                <!-- Alertas importantes -->
                <div class="alert alert-warning mb-4" style="background-color: #ffcc00; color: #000000; border: none;">
                    <i class="fas fa-exclamation-triangle me-2"></i>
                    <strong>IMPORTANTE:</strong> Esta modalidad es exclusivamente para mayores de 18 años que desarrollan actividad laboral o son madres solteras.
                </div>
                
                <div class="d-flex flex-wrap gap-3">
                    <a href="#requisitos" class="btn btn-lg" style="background-color: #ffcc00; color: #000000;">
                        <i class="fas fa-clipboard-check me-2"></i>Ver Requisitos
                    </a>
                    <a href="#contacto" class="btn btn-outline-light btn-lg">
                        <i class="fas fa-calendar-alt me-2"></i>Solicitar Información
                    </a>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <div class="career-stats bg-dark p-4 rounded shadow" style="background-color: rgba(229, 57, 53, 0.9) !important;">
                    <div class="row text-center">
                        <div class="col-6 mb-3">
                            <div class="h3 fw-bold" style="color: #ffcc00;">20</div>
                            <small>Meses de duración</small>
                        </div>
                        <div class="col-6 mb-3">
                            <div class="h3 fw-bold" style="color: #ffcc00;">18+</div>
                            <small>Edad mínima</small>
                        </div>
                        <div class="col-6">
                            <div class="h3 fw-bold" style="color: #ffcc00;">Sáb</div>
                            <small>Solo sábados</small>
                        </div>
                        <div class="col-6">
                            <div class="h3 fw-bold" style="color: #ffcc00;">8h</div>
                            <small>Horas semanales</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Información específica de EDUCAME -->
<section class="educame-info py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-4 mb-lg-0">
                <h2 class="section-title">¿Qué es EDUCAME?</h2>
                <p class="lead">EDUCAME (Educación Media para Adultos) es una modalidad flexible del Ministerio de Educación que permite a adultos trabajadores y madres solteras completar su bachillerato de manera presencial los sábados.</p>
                
                <div class="row g-4 mt-4">
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-briefcase fa-2x" style="color: #e53935;"></i>
                            </div>
                            <h4 class="h5">Para Trabajadores</h4>
                            <p>Diseñado para personas que desarrollan actividad laboral de lunes a viernes y necesitan flexibilidad horaria.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-heart fa-2x" style="color: #e53935;"></i>
                            </div>
                            <h4 class="h5">Para Madres Solteras</h4>
                            <p>Oportunidad educativa para madres solteras que buscan mejorar su preparación académica y oportunidades laborales.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-calendar-week fa-2x" style="color: #e53935;"></i>
                            </div>
                            <h4 class="h5">Solo Sábados</h4>
                            <p>Clases presenciales únicamente los días sábados, permitiendo mantener actividades laborales durante la semana.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="feature-item">
                            <div class="feature-icon mb-3">
                                <i class="fas fa-clock fa-2x" style="color: #e53935;"></i>
                            </div>
                            <h4 class="h5">20 Meses</h4>
                            <p>Programa intensivo de 20 meses que equivale a los 2 años del bachillerato tradicional.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-lg" style="border-top: 4px solid #e53935 !important;">
                    <div class="card-body p-4">
                        <h3 class="card-title h4 mb-4" style="color: #e53935;">Información Clave</h3>
                        
                        <div class="info-item mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-clock me-2" style="color: #e53935;"></i>
                                <strong>Duración:</strong>
                            </div>
                            <p class="mb-0 ms-4">20 meses (5 semestres)</p>
                        </div>
                        
                        <div class="info-item mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-calendar me-2" style="color: #e53935;"></i>
                                <strong>Horario:</strong>
                            </div>
                            <p class="mb-0 ms-4">Sábados 7:00 AM - 3:00 PM</p>
                        </div>
                        
                        <div class="info-item mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-user-check me-2" style="color: #e53935;"></i>
                                <strong>Edad mínima:</strong>
                            </div>
                            <p class="mb-0 ms-4">18 años cumplidos</p>
                        </div>
                        
                        <div class="info-item mb-3">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-certificate me-2" style="color: #e53935;"></i>
                                <strong>Título:</strong>
                            </div>
                            <p class="mb-0 ms-4">Bachiller General</p>
                        </div>
                        
                        <div class="info-item">
                            <div class="d-flex align-items-center mb-2">
                                <i class="fas fa-users me-2" style="color: #e53935;"></i>
                                <strong>Cupos:</strong>
                            </div>
                            <p class="mb-0 ms-4">30 estudiantes por sección</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Requisitos específicos -->
<section id="requisitos" class="requirements py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Requisitos de Ingreso</h2>
            <p class="lead">Para ingresar a la modalidad EDUCAME debes cumplir con los siguientes requisitos:</p>
        </div>
        
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow-sm h-100" style="border-left: 4px solid #e53935 !important;">
                    <div class="card-body p-4">
                        <h4 class="card-title" style="color: #e53935;">
                            <i class="fas fa-user-tie me-2"></i>Para Trabajadores
                        </h4>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Ser mayor de 18 años</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Noveno grado aprobado</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Constancia laboral vigente</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Carta de recomendación del empleador</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Certificado de noveno grado</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>DUI y NIT</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Partida de nacimiento</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>2 fotografías tamaño cédula</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6 mb-4">
                <div class="card border-0 shadow-sm h-100" style="border-left: 4px solid #e53935 !important;">
                    <div class="card-body p-4">
                        <h4 class="card-title" style="color: #e53935;">
                            <i class="fas fa-female me-2"></i>Para Madres Solteras
                        </h4>
                        <ul class="list-unstyled mt-3">
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Ser mayor de 18 años</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Noveno grado aprobado</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Partida de nacimiento del/los hijo(s)</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Declaración jurada de madre soltera</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Certificado de noveno grado</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>DUI y NIT</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>Partida de nacimiento</li>
                            <li class="mb-2"><i class="fas fa-check me-2" style="color: #ffcc00;"></i>2 fotografías tamaño cédula</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row mt-4">
            <div class="col-lg-8 mx-auto">
                <div class="alert alert-info text-center">
                    <i class="fas fa-info-circle me-2"></i>
                    <strong>Proceso de Inscripción:</strong> Las inscripciones se realizan en enero y julio de cada año. Se requiere entrevista personal para verificar el cumplimiento de los requisitos.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Horarios y metodología -->
<section class="schedule-methodology py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="section-title">Horario de Clases</h2>
                <div class="schedule-card bg-white p-4 rounded shadow-sm">
                    <div class="text-center mb-4">
                        <i class="fas fa-calendar-day fa-3x" style="color: #e53935;"></i>
                        <h3 class="h4 mt-3" style="color: #e53935;">Solo Sábados</h3>
                    </div>
                    
                    <div class="schedule-details">
                        <div class="schedule-item d-flex justify-content-between align-items-center mb-3 p-3 bg-light rounded">
                            <span><i class="fas fa-clock me-2" style="color: #ffcc00;"></i>Inicio de clases:</span>
                            <strong>7:00 AM</strong>
                        </div>
                        <div class="schedule-item d-flex justify-content-between align-items-center mb-3 p-3 bg-light rounded">
                            <span><i class="fas fa-coffee me-2" style="color: #ffcc00;"></i>Receso:</span>
                            <strong>10:00 - 10:15 AM</strong>
                        </div>
                        <div class="schedule-item d-flex justify-content-between align-items-center mb-3 p-3 bg-light rounded">
                            <span><i class="fas fa-utensils me-2" style="color: #ffcc00;"></i>Almuerzo:</span>
                            <strong>12:00 - 1:00 PM</strong>
                        </div>
                        <div class="schedule-item d-flex justify-content-between align-items-center p-3 bg-light rounded">
                            <span><i class="fas fa-clock me-2" style="color: #ffcc00;"></i>Fin de clases:</span>
                            <strong>3:00 PM</strong>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <h2 class="section-title">Metodología</h2>
                <div class="methodology-list">
                    <div class="methodology-item mb-4">
                        <div class="d-flex align-items-start">
                            <div class="methodology-icon me-3 mt-1">
                                <i class="fas fa-chalkboard-teacher" style="color: #e53935;"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1">Clases Intensivas</h4>
                                <p class="mb-0">8 horas académicas concentradas en un día para optimizar el aprendizaje.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="methodology-item mb-4">
                        <div class="d-flex align-items-start">
                            <div class="methodology-icon me-3 mt-1">
                                <i class="fas fa-laptop" style="color: #e53935;"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1">Apoyo Digital</h4>
                                <p class="mb-0">Plataforma virtual para tareas y materiales de estudio durante la semana.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="methodology-item mb-4">
                        <div class="d-flex align-items-start">
                            <div class="methodology-icon me-3 mt-1">
                                <i class="fas fa-users" style="color: #e53935;"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1">Grupos Reducidos</h4>
                                <p class="mb-0">Máximo 30 estudiantes por sección para atención personalizada.</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="methodology-item">
                        <div class="d-flex align-items-start">
                            <div class="methodology-icon me-3 mt-1">
                                <i class="fas fa-heart" style="color: #e53935;"></i>
                            </div>
                            <div>
                                <h4 class="h6 mb-1">Apoyo Psicosocial</h4>
                                <p class="mb-0">Orientación especializada para adultos con responsabilidades familiares y laborales.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonios específicos -->
<section class="testimonials py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Historias de Éxito</h2>
            <p class="lead">Conoce las experiencias de nuestros estudiantes EDUCAME</p>
        </div>
        
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="testimonial-card bg-white p-4 rounded shadow-sm h-100">
                    <div class="d-flex align-items-center mb-3">
                        <img src="../assets/img/student-ana.jpg" alt="Ana Martínez" class="rounded-circle me-3" width="60">
                        <div>
                            <h5 class="mb-0">Ana Martínez</h5>
                            <small class="text-muted">Madre soltera, Egresada 2023</small>
                        </div>
                    </div>
                    <p class="mb-3">"Como madre soltera, EDUCAME me dio la oportunidad de estudiar sin descuidar a mis hijos. Ahora trabajo en una oficina y tengo mejores ingresos."</p>
                    <div class="rating">
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="testimonial-card bg-white p-4 rounded shadow-sm h-100">
                    <div class="d-flex align-items-center mb-3">
                        <img src="../assets/img/student-roberto.jpg" alt="Roberto Pérez" class="rounded-circle me-3" width="60">
                        <div>
                            <h5 class="mb-0">Roberto Pérez</h5>
                            <small class="text-muted">Trabajador, Egresado 2022</small>
                        </div>
                    </div>
                    <p class="mb-3">"Trabajaba de lunes a viernes y los sábados estudiaba. Fue intenso pero valió la pena. Ahora soy supervisor en mi empresa."</p>
                    <div class="rating">
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="testimonial-card bg-white p-4 rounded shadow-sm h-100">
                    <div class="d-flex align-items-center mb-3">
                        <img src="../assets/img/student-carmen.jpg" alt="Carmen López" class="rounded-circle me-3" width="60">
                        <div>
                            <h5 class="mb-0">Carmen López</h5>
                            <small class="text-muted">Estudiante actual</small>
                        </div>
                    </div>
                    <p class="mb-3">"Los profesores entienden nuestras necesidades como adultos trabajadores. El ambiente es muy comprensivo y motivador."</p>
                    <div class="rating">
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                        <i class="fas fa-star" style="color: #ffcc00;"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<?php include '../includes/footer.php'; ?>

