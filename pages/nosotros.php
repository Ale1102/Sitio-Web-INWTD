<?php
/**
 * Página de Nosotros del Instituto Nacional Walter Thilo Deininger
 * Actualizada con Saludo a la Comunidad Educativa
 */

$page_title = "Nosotros";
$current_page = "nosotros";
$root_path = "../";

include '../includes/header.php';
?>

<!-- Encabezado de página -->
<section class="page-header text-white py-5" style="background-color: #000000;">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="display-4 fw-bold">Nosotros</h1>
                <p class="lead">Conoce nuestra historia, misión, visión y valores que nos definen como institución educativa.</p>
            </div>
        </div>
    </div>
</section>

<!-- Saludo a la Comunidad Educativa -->
<section class="community-greeting py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="text-center mb-5">
                    <h2 class="section-title">Saludo a la Comunidad Educativa</h2>
                    <div class="decorative-line mx-auto mb-4" style="width: 100px; height: 3px; background-color: #ffcc00;"></div>
                </div>
                
               
                    
                    <div class="col-lg-8" style="text-align: justify; line-height: 1.6; font-size: 16px;>
                        <div class="greeting-content">
                            <div class="quote-icon mb-3">
                                <i class="fas fa-quote-left fa-2x" style="color: #ffcc00;"></i>
                            </div>
                            
                            <div class="greeting-text">
                                <p class="lead mb-4">Estimada comunidad educativa del Instituto Nacional Walter Thilo Deininger:</p>
                                
                               <p>El Consejo Directivo Escolar, la Dirección, el Personal Docente, Administrativo y de Servicio del Instituto Nacional "Walter Thilo Deininger", saluda a la comunidad educativa, deseándole el mayor de los éxitos y satisfacciones para este año escolar.</p>


                               <br>
                               <p>Además, se da a conocer que la institución cuenta con un manual de convivencia que tiene información conductual e informativa requerida.</p>
                                <div class="signature">
                                    
                                    <p class="text-muted small">Instituto Nacional Walter Thilo Deininger</p>
                                </div>
                            </div>
                            
                            <div class="quote-icon text-end mt-3">
                                <i class="fas fa-quote-right fa-2x" style="color: #ffcc00;"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Historia del instituto -->
<section class="history py-5 bg-light">
    <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-4 mb-lg-0">
                <h2 class="section-title text-center mb-4">Nuestra Historia</h2>
             <div class="history-content" style="text-align: justify; line-height: 1.6; font-size: 16px; margin-right: 20px; margin-left: 20px;">
                    <p style="margin-bottom: 1.2em;">El Instituto Nacional Walter Thilo Deininger fue fundado en 1947 gracias a la visión filantrópica de Walter Thilo Deininger, quien donó los terrenos para su construcción en Cojutepeque. Desde sus inicios, el instituto se consolidó como un referente educativo, ofreciendo formación integral desde primaria hasta bachillerato.</p>
        
                    <p style="margin-bottom: 1.2em;">A lo largo de más de siete décadas, hemos formado a generaciones de profesionales en áreas técnicas y académicas, destacando por ser el único instituto público que imparte el Bachillerato Técnico en Arquitectura. Nuestra trayectoria incluye logros en competencias nacionales, innovación educativa y proyectos productivos como la planta procesadora de lácteos y cárnicos.</p>
        
                    <p style="margin-bottom: 1.2em;">En 2004, ampliamos nuestra oferta académica con especialidades en Sistemas, Salud y Agroindustria, respondiendo a las demandas del mercado laboral. Actualmente, contamos con 1,500 estudiantes y una infraestructura moderna que incluye laboratorios, talleres especializados y tecnología educativa.</p>
        
                    <p>Hoy, el Instituto Nacional Walter Thilo Deininger sigue comprometido con su misión: formar jóvenes competentes y ciudadanos responsables, honrando el legado de su benefactor y contribuyendo al desarrollo sostenible de El Salvador.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <!-- Timeline actualizada con colores amarillo/dorado -->
                <div class="history-timeline"  id="Historia" style="border-left: 2px solid #ffcc00;">
                    <div class="timeline-item">
                        <div class="timeline-year" style="background-color: #ffcc00; color: #000000;">1965</div>
                        <div class="timeline-content">
                            <h3 class="h5">Fundación del Instituto</h3>
                            <p>El instituto abre sus puertas con una matrícula inicial de 120 estudiantes. </p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year" style="background-color: #ffcc00; color: #000000;">1975</div>
                        <div class="timeline-content">
                            <h3 class="h5">Ampliación de Oferta Académica</h3>
                            <p>Se incorporan los bachilleratos técnicos en Contabilidad y Secretariado.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year" style="background-color: #ffcc00; color: #000000;">1985</div>
                        <div class="timeline-content">
                            <h3 class="h5">Reconocimiento Nacional</h3>
                            <p>El Ministerio de Educación reconoce al instituto por su excelencia académica.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year" style="background-color: #ffcc00; color: #000000;">1995</div>
                        <div class="timeline-content">
                            <h3 class="h5">Nuevas Instalaciones</h3>
                            <p>Inauguración del actual campus con modernas instalaciones educativas.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year" style="background-color: #ffcc00; color: #000000;">2005</div>
                        <div class="timeline-content">
                            <h3 class="h5">Incorporación de Tecnología</h3>
                            <p>Se implementa el bachillerato técnico en Informática y se modernizan los laboratorios.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-year" style="background-color: #ffcc00; color: #000000;">2020</div>
                        <div class="timeline-content">
                            <h3 class="h5">Expansión de Programas</h3>
                            <p>Se añaden nuevos bachilleratos técnicos y la modalidad EDUCAME.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Misión, Visión y Valores -->
<section class="mission-vision py-5">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-6 mb-4 mb-md-0">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-center mb-3">
                            <div class="icon-box me-3" style="background-color: #ffcc00; color: #000000; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                                <i class="fas fa-bullseye"></i>
                            </div>
                            <h2 class="card-title h3 mb-0">Misión</h2>
                        </div>
                        <p class="card-text">Formar integralmente a jóvenes y adultos con sólidos conocimientos académicos, habilidades técnicas y valores éticos, capaces de continuar estudios superiores o integrarse al mundo laboral, contribuyendo al desarrollo sostenible de El Salvador.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6" style="text-align: justify; line-height: 1.6; font-size: 16px;">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body p-4" >
                        <div class="d-flex align-items-center mb-3" >
                            <div class="icon-box me-3" style="background-color: #ffcc00; color: #000000; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem;">
                                <i class="fas fa-eye"></i>
                            </div  >
                            <h2 class="card-title h3 mb-0">Visión</h2>
                        </div>
                        <p class="card-text" >Ser una institución educativa de referencia nacional, reconocida por su excelencia académica, innovación pedagógica y formación de ciudadanos íntegros, comprometidos con el desarrollo sostenible y la transformación positiva de la sociedad.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Valores institucionales -->
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-center mb-5">Nuestros Valores</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="value-card text-center p-4 h-100">
                            <div class="value-icon mb-3">
                                <i class="fas fa-heart fa-3x" style="color: #e53935;"></i>
                            </div>
                            <h4 class="h5">Respeto</h4>
                            <p>Valoramos la dignidad de cada persona y promovemos un ambiente de convivencia armoniosa.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="value-card text-center p-4 h-100">
                            <div class="value-icon mb-3">
                                <i class="fas fa-star fa-3x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Excelencia</h4>
                            <p>Buscamos la calidad en todos nuestros procesos educativos y administrativos.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="value-card text-center p-4 h-100">
                            <div class="value-icon mb-3">
                                <i class="fas fa-handshake fa-3x" style="color: #000000;"></i>
                            </div>
                            <h4 class="h5">Responsabilidad</h4>
                            <p>Asumimos nuestros compromisos con dedicación y cumplimos con nuestras obligaciones.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="value-card text-center p-4 h-100">
                            <div class="value-icon mb-3">
                                <i class="fas fa-lightbulb fa-3x" style="color: #ffcc00;"></i>
                            </div>
                            <h4 class="h5">Innovación</h4>
                            <p>Adoptamos nuevas metodologías y tecnologías para mejorar continuamente nuestros procesos.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="value-card text-center p-4 h-100">
                            <div class="value-icon mb-3">
                                <i class="fas fa-users fa-3x" style="color: #e53935;"></i>
                            </div>
                            <h4 class="h5">Solidaridad</h4>
                            <p>Fomentamos el apoyo mutuo y el trabajo colaborativo en nuestra comunidad educativa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de ubicación - Adaptada a la paleta de colores del proyecto -->
<section class="location py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Nuestra Ubicación</h2>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="card h-100 shadow-sm">
                    <div class="card-body">
                        <div class="location-info">
                            <div class="mb-4">
                                <h5 class="d-flex align-items-center">
                                    <i class="fas fa-map-marker-alt me-3" style="color: #ffcc00;"></i>
                                    Dirección
                                </h5>
                                <p class="mb-0 ps-4">Avenida Cuscatlan, Cojutepeque<br>
                                Cuscatlan, El Salvador</p>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="d-flex align-items-center">
                                    <i class="fas fa-phone me-3" style="color: #ffcc00;"></i>
                                    Teléfonos
                                </h5>
                                <p class="mb-0 ps-4">
                                    <strong>Numeros de Administración:</strong>  2372-0220  - 2372-4482 <br>
                                    <strong>Wathsapp:</strong>       7603-4668  (Solo Mensajes)
                                </p>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="d-flex align-items-center">
                                    <i class="fas fa-envelope me-3" style="color: #ffcc00;"></i>
                                    Correo Electrónico
                                </h5>
                                <p class="mb-0 ps-4">inwtd11792@gmail.com</p>
                            </div>
                            
                            <div class="mb-4">
                                <h5 class="d-flex align-items-center">
                                    <i class="fas fa-clock me-3" style="color: #ffcc00;"></i>
                                    Horarios de Atención
                                </h5>
                                <p class="mb-0 ps-4">
                                    <strong>Lunes a Viernes:</strong> 7:00 AM - 3:30 PM<br>
                                    <strong>Sábados:</strong> 7:00 AM - 11:00 PM
                                </p>
                            </div>
                            
                            <div class="mt-4">
                                <h5 class="mb-3">Referencias:</h5>
                                <ul class="list-unstyled ps-4">
                                    <li class="mb-2"><i class="fas fa-chevron-right me-2" style="color: #ffcc00;"></i>A una cuadra de Galvanissa    </li>
                                   
                                    <li class="mb-2"><i class="fas fa-chevron-right me-2" style="color: #ffcc00;"></i>Ruta de buses: 113, 116, 111</li>
                                 
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-6">
                <div class="card h-100 shadow-sm">
                    <div class="card-body p-0">
                        <div class="map-container" style="height: 450px; overflow: hidden;">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.444365871903!2d-88.95204342544173!3d13.727390297859246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f634557c2b6bf37%3A0xf46e77c69d912ebd!2sInstituto%20Nacional%20%22Walter%20Thilo%20Deininger%22!5e1!3m2!1ses!2ssv!4v1749671468912!5m2!1ses!2ssv" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                width="100%" 
                                height="100%" 
                                style="border:0;" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<!-- Resto del contenido existente (Equipo directivo, Instalaciones, etc.) -->
    
<?php include '../includes/footer.php'; ?>
