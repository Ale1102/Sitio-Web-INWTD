<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title . ' - Instituto Walter Thilo Deininger' : 'Instituto Walter Thilo Deininger'; ?></title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome para iconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Estilos personalizados -->
    <link rel="stylesheet" href="<?php echo $root_path; ?>assets/css/styles.css">
    
    <style>
    /* Ocultar texto del instituto en móviles */
    @media (max-width: 991.98px) {
        .navbar-brand span {
            display: none;
        }
        
        /* Dropdown para móviles */
        .dropdown-menu {
            display: none;
        }
        
        .dropdown-menu.show {
            display: block;
            position: static !important;
            float: none;
            width: 100%;
            margin-top: 0;
            background-color: #f8f9fa;
            border: none;
            border-radius: 0;
            box-shadow: none;
            padding-left: 20px;
        }
        
        .dropdown-item {
            padding: 8px 16px;
            color: #495057;
        }
        
        .dropdown-item:hover {
            background-color: #e9ecef;
        }
    }
    </style>
</head>
<body>
    <!-- Barra superior con información de contacto -->
    <div class="top-bar bg-dark text-white py-2">
        <div class="container">
         
                <div class="col-md-6 text-end">
                    <a href="https://www.facebook.com/share/16ZgXFR6L3/?mibextid=wwXIfr" class="text-white me-2" target="_blank"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-white me-2"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Cabecera con logo y menú de navegación -->
    <header class="bg-white shadow-sm sticky-top">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Logo del instituto -->
                <a class="navbar-brand" href="<?php echo $root_path; ?>index.php">
                    <img src="<?php echo $root_path; ?>assets/img/logo-walter.png" alt="Logo Instituto Walter Thilo Deininger" height="60">
                    <span>Instituto Nacional Walter Thilo Deininger</span>
                </a>
                
                <!-- Botón hamburguesa para móviles -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMain">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Menú de navegación -->
                <div class="collapse navbar-collapse" id="navbarMain">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'index') ? 'active' : ''; ?>" href="<?php echo $root_path; ?>index.php">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'nosotros') ? 'active' : ''; ?>" href="<?php echo $root_path; ?>pages/nosotros.php">Nosotros</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle <?php echo ($current_page == 'oferta-academica') ? 'active' : ''; ?>" href="<?php echo $root_path ?>pages/oferta-academica.php" role="button" data-bs-toggle="dropdown" onclick="toggleDropdownMobile(event)">
                                Oferta Académica
                            </a>
                            <ul class="dropdown-menu" id="ofertaMenu">
                                <li><a class="dropdown-item" href="<?php echo $root_path; ?>pages/bachillerato-general.php">Bachillerato General</a></li>
                                <li><a class="dropdown-item" href="<?php echo $root_path; ?>pages/bachillerato-tecnico.php">Bachillerato Técnico</a></li>
                                <li><a class="dropdown-item" href="<?php echo $root_path; ?>pages/modalidad-educame.php">Modalidad Flexible - EDUCAME </a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'noticias') ? 'active' : ''; ?>" href="<?php echo $root_path; ?>pages/noticias.php">Noticias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php echo ($current_page == 'galeria') ? 'active' : ''; ?>" href="<?php echo $root_path; ?>pages/galeria.php">Nuestros Campus</a>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <script>
    // Toggle del dropdown solo en móviles
    function toggleDropdownMobile(event) {
        if (window.innerWidth <= 991) {
            event.preventDefault();
            const menu = document.getElementById('ofertaMenu');
            if (menu.classList.contains('show')) {
                menu.classList.remove('show');
            } else {
                menu.classList.add('show');
            }
        }
    }
    
    // Limpiar dropdown al redimensionar
    window.addEventListener('resize', function() {
        const menu = document.getElementById('ofertaMenu');
        if (window.innerWidth > 991) {
            menu.classList.remove('show');
        }
    });
    </script>
</body>
</html>
