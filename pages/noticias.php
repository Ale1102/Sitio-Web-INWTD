<?php
/**
 * Página de Noticias
 * Instituto Nacional Walter Thilo Deininger
 */

$page_title = "Noticias";
$current_page = "noticias";
$root_path = "../";

include '../includes/header.php';

// Cargar noticias desde JSON
$noticias_json = file_get_contents('../config/noticias.json');
$noticias_data = json_decode($noticias_json, true);
$noticias = isset($noticias_data['noticias']) ? $noticias_data['noticias'] : [];

// Configuración de paginación
$noticias_por_pagina = 6;
$pagina_actual = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
$total_noticias = count($noticias);
$total_paginas = ceil($total_noticias / $noticias_por_pagina);
$inicio = ($pagina_actual - 1) * $noticias_por_pagina;
$noticias_pagina = array_slice($noticias, $inicio, $noticias_por_pagina);

// Obtener noticia destacada (la más reciente)
$noticia_destacada = !empty($noticias) ? $noticias[0] : null;
?>

<!-- Hero Section -->
<section class="hero-noticias py-5" style="background: linear-gradient(135deg, #000000 0%, #333333 100%);">
    <div class="container">
        <div class="row align-items-center text-white">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-3">
                    <span style="color: #ffcc00;">Noticias</span>
                </h1>
                <p class="lead mb-4">Mantente informado sobre las últimas noticias, eventos y actividades del Instituto Nacional Walter Thilo Deininger.</p>
               
            </div>
            <div class="col-lg-4 text-center">
                <div class="news-stats bg-white text-dark p-4 rounded shadow">
                    <h3 class="h4 mb-3" style="color: #000000;">Estadísticas</h3>
                    <div class="row text-center">
                        <div class="col-6">
                            <div class="h3 fw-bold" style="color: #ffcc00;"><?php echo $total_noticias; ?></div>
                            <small>Noticias Publicadas</small>
                        </div>
                        <div class="col-6">
                            <div class="h3 fw-bold" style="color: #ffcc00;"><?php echo date('Y'); ?></div>
                            <small>Año Actual</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php if ($noticia_destacada): ?>
<!-- Noticia Destacada -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h2 class="section-title text-center">Noticia Destacada</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <div class="featured-image">
                    <img src="<?php echo $root_path . ($noticia_destacada['imagen'] ?? 'assets/img/Evento.png'); ?>" 
                         alt="<?php echo $noticia_destacada['titulo']; ?>" 
                         class="img-fluid rounded shadow">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="featured-content">
                    <div class="badge mb-3" style="background-color: #e53935; color: #ffffff;">
                        <i class="fas fa-star me-1"></i>DESTACADA
                    </div>
                    <h3 class="h2 mb-3"><?php echo $noticia_destacada['titulo']; ?></h3>
                    <p class="text-muted mb-3">
                        <i class="fas fa-calendar me-2"></i><?php echo date('d/m/Y', strtotime($noticia_destacada['fecha'])); ?>
                        <i class="fas fa-user ms-3 me-2"></i><?php echo $noticia_destacada['autor'] ?? 'Instituto INWTD'; ?>
                    </p>
                    <p class="lead mb-4"><?php echo $noticia_destacada['resumen']; ?></p>
                    <a href="#noticia-<?php echo $noticia_destacada['id']; ?>" class="btn btn-lg" style="background-color: #ffcc00; color: #000000;">
                        <i class="fas fa-arrow-right me-2"></i>Leer Más
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<!-- Todas las Noticias -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="section-title mb-0">Todas las Noticias</h2>
                    <div class="news-filter">
                        <select class="form-select" id="filtroCategoria">
                            <option value="">Todas las categorías</option>
                            <option value="academico">Académico</option>
                            <option value="eventos">Eventos</option>
                            <option value="deportes">Deportes</option>
                            <option value="cultural">Cultural</option>
                            <option value="institucional">Institucional</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        
        <?php if (!empty($noticias_pagina)): ?>
        <div class="row" id="noticiasContainer">
            <?php foreach ($noticias_pagina as $noticia): ?>
            <div class="col-lg-4 col-md-6 mb-4" data-categoria="<?php echo $noticia['categoria'] ?? ''; ?>">
                <div class="card h-100 border-0 shadow-sm news-card">
                    <div class="position-relative">
                        <img src="<?php echo $root_path . ($noticia['imagen'] ?? 'assets/img/Evento.png'); ?>" 
                             class="card-img-top" alt="<?php echo $noticia['titulo']; ?>" style="height: 200px; object-fit: cover;">
                        <div class="position-absolute top-0 end-0 m-2">
                            <span class="badge" style="background-color: <?php echo $noticia['color_categoria'] ?? '#e53935'; ?>;">
                                <?php echo ucfirst($noticia['categoria'] ?? 'General'); ?>
                            </span>
                        </div>
                    </div>
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title"><?php echo $noticia['titulo']; ?></h5>
                        <p class="card-text text-muted small mb-2">
                            <i class="fas fa-calendar me-1"></i><?php echo date('d/m/Y', strtotime($noticia['fecha'])); ?>
                            <i class="fas fa-user ms-2 me-1"></i><?php echo $noticia['autor'] ?? 'Instituto INWTD'; ?>
                        </p>
                        <p class="card-text flex-grow-1"><?php echo substr($noticia['resumen'], 0, 120) . '...'; ?></p>
                        <div class="mt-auto">
                            <button class="btn btn-outline-primary btn-sm w-100" data-bs-toggle="modal" data-bs-target="#noticiaModal" 
                                    onclick="mostrarNoticia(<?php echo htmlspecialchars(json_encode($noticia)); ?>)">
                                <i class="fas fa-eye me-1"></i>Leer Completa
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        
        <!-- Paginación -->
        <?php if ($total_paginas > 1): ?>
        <div class="row">
            <div class="col-12">
                <nav aria-label="Paginación de noticias">
                    <ul class="pagination justify-content-center">
                        <?php if ($pagina_actual > 1): ?>
                        <li class="page-item">
                            <a class="page-link" href="?pagina=<?php echo $pagina_actual - 1; ?>">
                                <i class="fas fa-chevron-left"></i>
                            </a>
                        </li>
                        <?php endif; ?>
                        
                        <?php for ($i = 1; $i <= $total_paginas; $i++): ?>
                        <li class="page-item <?php echo $i == $pagina_actual ? 'active' : ''; ?>">
                            <a class="page-link" href="?pagina=<?php echo $i; ?>"><?php echo $i; ?></a>
                        </li>
                        <?php endfor; ?>
                        
                        <?php if ($pagina_actual < $total_paginas): ?>
                        <li class="page-item">
                            <a class="page-link" href="?pagina=<?php echo $pagina_actual + 1; ?>">
                                <i class="fas fa-chevron-right"></i>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
        </div>
        <?php endif; ?>
        
        <?php else: ?>
        <div class="row">
            <div class="col-12">
                <div class="alert alert-info text-center">
                    <i class="fas fa-info-circle me-2"></i>
                    No hay noticias disponibles en este momento.
                </div>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- Modal para mostrar noticia completa -->
<div class="modal fade" id="noticiaModal" tabindex="-1" aria-labelledby="noticiaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #000000; color: #ffcc00;">
                <h5 class="modal-title" id="noticiaModalLabel">Noticia</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body" id="noticiaModalBody">
                <!-- Contenido de la noticia se carga dinámicamente -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<style>
.news-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.news-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.section-title {
    position: relative;
    padding-bottom: 10px;
}

.section-title::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 3px;
    background-color: #ffcc00;
}

.featured-image img {
    transition: transform 0.3s ease;
}

.featured-image:hover img {
    transform: scale(1.05);
}

@media (max-width: 768px) {
    .news-filter {
        width: 100%;
        margin-top: 1rem;
    }
    
    .d-flex.justify-content-between {
        flex-direction: column;
    }
}
</style>

<script>
function mostrarNoticia(noticia) {
    const modalBody = document.getElementById('noticiaModalBody');
    const modalTitle = document.getElementById('noticiaModalLabel');
    
    modalTitle.textContent = noticia.titulo;
    
    modalBody.innerHTML = `
        <div class="text-center mb-3">
            <img src="<?php echo $root_path; ?>${noticia.imagen || 'assets/img/Evento.png'}" 
                 class="img-fluid rounded" alt="${noticia.titulo}" style="max-height: 300px;">
        </div>
        <div class="mb-3">
            <span class="badge" style="background-color: ${noticia.color_categoria || '#e53935'};">
                ${noticia.categoria ? noticia.categoria.charAt(0).toUpperCase() + noticia.categoria.slice(1) : 'General'}
            </span>
        </div>
        <p class="text-muted mb-3">
            <i class="fas fa-calendar me-2"></i>${new Date(noticia.fecha).toLocaleDateString('es-ES')}
            <i class="fas fa-user ms-3 me-2"></i>${noticia.autor || 'Instituto INWTD'}
        </p>
        <div class="content">
            ${noticia.contenido || noticia.resumen}
        </div>
    `;
}

// Filtro por categoría
document.getElementById('filtroCategoria').addEventListener('change', function() {
    const categoria = this.value;
    const noticias = document.querySelectorAll('[data-categoria]');
    
    noticias.forEach(function(noticia) {
        if (categoria === '' || noticia.dataset.categoria === categoria) {
            noticia.style.display = 'block';
        } else {
            noticia.style.display = 'none';
        }
    });
});
</script>

<?php include '../includes/footer.php'; ?>
