# Portal Web Institucional - Instituto Nacional Walter Thilo Deininger

![Estado](https://img.shields.io/badge/Estado-Finalizado-success)
![Versión](https://img.shields.io/badge/Versión-1.0.0-blue)
![PHP](https://img.shields.io/badge/PHP-8.x-purple)
![Licencia](https://img.shields.io/badge/Licencia-Uso_Institucional-lightgrey)

Plataforma web informativa desarrollada para modernizar la presencia digital del **Instituto Nacional Walter Thilo Deininger**. El sistema gestiona la difusión de la oferta académica, noticias, y procesos de admisión, optimizado mediante una arquitectura **Flat-File (JSON)** para garantizar velocidad y facilidad de mantenimiento sin bases de datos complejas.

## 🚀 Características Principales

* **Arquitectura Híbrida:** Lógica en PHP nativo con gestión de datos en archivos JSON.
* **Control de Estados Dinámico:** Sistema de "interruptores" para habilitar/deshabilitar módulos (como el proceso de admisión) sin tocar el código fuente.
* **Repositorio de Documentos:** Estructura organizada para descarga de archivos por especialidad.
* **Diseño Responsivo:** Interfaz adaptada a móviles utilizando Bootstrap, con componentes interactivos (Líneas de tiempo, Acordeones).
* **Optimización:** Carga rápida en servidores compartidos (InfinityFree/Cpanel).

## 🛠️ Tecnologías (Tech Stack)

* **Backend:** PHP 8.x (Sin frameworks pesados).
* **Frontend:** HTML5, CSS3, JavaScript, Bootstrap 5.
* **Persistencia de Datos:** JSON (JavaScript Object Notation).
* **Iconografía:** FontAwesome.

## 🚀 Instalación y Despliegue
Este proyecto no requiere instalación de dependencias complejas ni configuración de bases de datos SQL.

Requisitos: Servidor web con soporte PHP (XAMPP local o Hosting Cpanel).

Despliegue:

Copie todos los archivos a la carpeta pública del servidor (public_html o htdocs).

Verificación: Acceda a través del navegador (ej. localhost/inwtd-web o su dominio).

## ⚙️ Sistema de Configuración Dinámica (JSON)

Este proyecto implementa un patrón **"Configuration as Code"** utilizando archivos JSON en el directorio `/config`. Esto permite modificar el comportamiento del sitio sin alterar el código fuente PHP.

**Funcionalidades controladas por archivos:**

* **Control de Estados (`*-estado.json`):** Permite habilitar o deshabilitar módulos completos (ej. si el periodo de admisión termina, se cambia `estado: false` en `admisiones-estado.json` y el sitio oculta automáticamente los formularios).
* **Gestión de Contenido:** Las noticias, eventos y datos del campus se cargan desde sus respectivos JSON, facilitando la actualización de textos.
* **Gestión de Documentos:** La estructura de carpetas en `assets/docs` se mapea automáticamente para ofrecer descargas organizadas por bachillerato.

## ⚙️ Guía de Mantenimiento (Actualización de Noticias)
El sistema no utiliza panel administrativo para mantener la seguridad y ligereza. Para agregar una nueva noticia o evento, edite el archivo config/noticias.json.

Ejemplo de estructura JSON:
```text
{
  "noticias": [
    {
      "id": 1,
      "titulo": "Inicio de Matrícula 2026",
      "fecha": "2025-11-20",
      "resumen": "Ya se encuentran abiertas las inscripciones...",
      "imagen": "assets/img/noticia1.jpg",
      "categoria": "Académico",
      "color_categoria": "#0d6efd"
    }
  ],
  "eventos": [
    {
      "titulo": "Feria de Logros",
      "fecha": "2025-10-30",
      "hora": "08:00 AM",
      "lugar": "Auditorio Principal"
    }
  ]
}
```
## 📋 Manual del Módulo de Admisiones

El archivo `pages/proceso-admision.php` contiene la lógica para gestionar la campaña de matrícula anual. Este módulo tiene dos estados controlados por archivos de configuración:

### 1. Activar/Desactivar el Proceso
Para "abrir" o "cerrar" las admisiones, edite el archivo `config/admisiones-estado.json`. No es necesario modificar el código PHP.

**Ruta:** `config/admisiones-estado.json`
```json
{
    "proceso_activo": true,  // Cambiar a false para cerrar el proceso
    "mensaje_inactivo": "El proceso de admisión 2026 iniciará en el mes de Octubre. Mantente pendiente de nuestras redes sociales."
}
```
## 2. Configurar el Contenido (Fechas y Requisitos)
Toda la información visual se carga desde config/admisiones-secciones.json. Esto permite corregir fechas o requisitos rápidamente.

Estructura requerida (config/admisiones-secciones.json):
```text
{
    "fechas_importantes": [
        {
            "evento": "Entrega de Prospectos",
            "fecha": "15 de Octubre, 2025",
            "lugar": "Secretaría Académica",
            "detalles": "Costo del prospecto: $5.00"
        }
    ],
    "requisitos": [
        {
            "titulo": "Certificado de Noveno Grado",
            "descripcion": "Original y copia reciente.",
            "icono": "fas fa-file-certificate" // Icono de FontAwesome
        }
    ],
    "especialidades": [
        {
            "nombre": "Bachillerato General",
            "duracion": "2 años",
            "descripcion": "Formación integral para educación superior."
        }
    ],
    "listados_examenes": [
        {
            "nombre": "Primera Fecha de Examen",
            "listados": [
                {
                    "titulo": "Resultados Grupo A",
                    "descripcion": "Estudiantes aceptados",
                    "archivo": "assets/docs/admision/resultados-a.pdf"
                }
            ]
        }
    ]
}
```
## 📂 Estructura del Proyecto

El proyecto sigue una arquitectura modular para separar la lógica, la configuración y los recursos.

```text
/
├── assets/
│   ├── css/                # Hojas de estilo personalizadas
│   ├── docs/               # Repositorio digital de documentos
│   │   ├── agroindustrias/
│   │   ├── arquitectura/
│   │   ├── contabilidad/
│   │   ├── general/
│   │   └── salud/
│   ├── img/                # Recursos gráficos
│   └── js/                 # Scripts de interacción
├── config/                 # NÚCLEO: Archivos de configuración y datos
│   ├── admisiones-estado.json   # Control de activación del módulo de admisión
│   ├── admisiones-secciones.json # Contenido del módulo de admisión
│   ├── noticias.json            # Base de datos de noticias
│   ├── nuevos-ingresos.json
│   └── ...
├── includes/               # Componentes reutilizables (Header, Footer)
├── pages/                  # Vistas del sistema (Admisiones, Oferta, etc.)
│   ├── index.php
│   └── proceso-admision.php
└── index.php               # Punto de entrada principal

```
## 🎓 Créditos del Proyecto
* **Este desarrollo fue realizado como parte del Proyecto de Servicio Social Estudiantil.**
* **Desarrollador:** César Alejandro Avendaño Guevara.
* **Carnet:** AG230680.
* **Carrera:** Técnico en Ingeniería en Computación.
* **Institución Académica:** Universidad Don Bosco (UDB).
* **Institución Beneficiaria:** Instituto Nacional Walter Thilo Deininger.
