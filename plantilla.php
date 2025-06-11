<?php
// Configuración básica de la página
$page_title = "Título de la Página";
$current_page = "nombre-pagina"; // Debe coincidir con el nombre del archivo sin .php
$root_path = "../"; // Ajusta según la ubicación del archivo

// Incluir el encabezado
include '../includes/header.php';
?>

<!-- Contenido principal - MODIFICA ESTA SECCIÓN -->
<section class="page-header bg-primary text-white py-5">
    <div class="container">
        <h1 class="display-4 fw-bold"><?php echo $page_title; ?></h1>
        <p class="lead">Descripción de la página</p>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <!-- Contenido específico de la página -->
        <h2 class="section-title">Título de sección</h2>
        <p>Contenido de la página...</p>
    </div>
</section>

<?php
// Incluir el pie de página
include '../includes/footer.php';
?>