/**
 * Archivo principal de JavaScript para el sitio web del Instituto Nacional Walter Thilo Deininger
 * Autor: [César Avendaño]
 * Fecha: [15/05/2025]
 * Versión: 1.0
 *
 * Este archivo contiene todas las funcionalidades JavaScript del sitio web.
 * Está documentado para facilitar el mantenimiento.
 */

// Esperar a que el DOM esté completamente cargado
document.addEventListener("DOMContentLoaded", () => {
  // Inicializar todos los componentes
  initBackToTop()
  initNewsletterForm()
  initDropdownMenus()
  initImageLazyLoading()

  // Agregar clases de animación a elementos cuando son visibles
  initScrollAnimations()
})

/**
 * Inicializa el botón de volver arriba
 */
function initBackToTop() {
  const backToTopButton = document.getElementById("back-to-top")

  if (backToTopButton) {
    // Mostrar/ocultar el botón según la posición de desplazamiento
    window.addEventListener("scroll", () => {
      if (window.pageYOffset > 300) {
        backToTopButton.style.display = "block"
      } else {
        backToTopButton.style.display = "none"
      }
    })

    // Acción de volver arriba al hacer clic
    backToTopButton.addEventListener("click", (e) => {
      e.preventDefault()
      window.scrollTo({
        top: 0,
        behavior: "smooth",
      })
    })
  }
}

/**
 * Inicializa el formulario de suscripción al boletín
 */
function initNewsletterForm() {
  const newsletterForm = document.getElementById("newsletter-form")

  if (newsletterForm) {
    newsletterForm.addEventListener("submit", function (e) {
      // La validación y el envío se manejan en el servidor con PHP
      // Este código es solo para la interacción del usuario en el cliente

      // Mostrar un indicador de carga
      const submitButton = this.querySelector('button[type="submit"]')
      const originalText = submitButton.innerHTML
      submitButton.innerHTML =
        '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Enviando...'
      submitButton.disabled = true

      // El formulario se enviará normalmente a través de POST
      // No prevenimos el evento predeterminado aquí porque queremos que se envíe al servidor
    })
  }
}

/**
 * Inicializa los menús desplegables para dispositivos móviles
 */
function initDropdownMenus() {
  // Mejorar el comportamiento del dropdown en móviles
  const dropdownToggle = document.querySelector(".dropdown-toggle")
  const dropdownMenu = document.querySelector(".dropdown-menu")

  if (dropdownToggle && dropdownMenu) {
    dropdownToggle.addEventListener("click", (e) => {
      // En móviles, permitir que el dropdown funcione correctamente
      if (window.innerWidth <= 991) {
        e.preventDefault()
        dropdownMenu.classList.toggle("show")
      }
    })

    // Cerrar dropdown al hacer click fuera
    document.addEventListener("click", (e) => {
      if (!dropdownToggle.contains(e.target) && !dropdownMenu.contains(e.target)) {
        dropdownMenu.classList.remove("show")
      }
    })
  }
}

/**
 * Inicializa la carga perezosa de imágenes
 */
function initImageLazyLoading() {
  // Verificar si el navegador soporta IntersectionObserver
  if ("IntersectionObserver" in window) {
    const lazyImages = document.querySelectorAll("img[data-src]")

    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const img = entry.target
          img.src = img.dataset.src
          img.removeAttribute("data-src")
          imageObserver.unobserve(img)
        }
      })
    })

    lazyImages.forEach((img) => {
      imageObserver.observe(img)
    })
  } else {
    // Fallback para navegadores que no soportan IntersectionObserver
    const lazyImages = document.querySelectorAll("img[data-src]")

    lazyImages.forEach((img) => {
      img.src = img.dataset.src
      img.removeAttribute("data-src")
    })
  }
}

/**
 * Inicializa animaciones al hacer scroll
 */
function initScrollAnimations() {
  // Verificar si el navegador soporta IntersectionObserver
  if ("IntersectionObserver" in window) {
    const elements = document.querySelectorAll(".animate-on-scroll")

    const animationObserver = new IntersectionObserver(
      (entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add("animated")
            animationObserver.unobserve(entry.target)
          }
        })
      },
      {
        threshold: 0.1,
      },
    )

    elements.forEach((element) => {
      animationObserver.observe(element)
    })
  } else {
    // Fallback para navegadores que no soportan IntersectionObserver
    const elements = document.querySelectorAll(".animate-on-scroll")

    elements.forEach((element) => {
      element.classList.add("animated")
    })
  }
}

/**
 * Muestra una alerta en la página
 * @param {string} message - El mensaje a mostrar
 * @param {string} type - El tipo de alerta (success, danger, warning, info)
 */
function showAlert(message, type = "info") {
  // Crear el elemento de alerta
  const alertDiv = document.createElement("div")
  alertDiv.className = `alert alert-${type} alert-dismissible fade show position-fixed top-0 start-50 translate-middle-x mt-3`
  alertDiv.style.zIndex = "9999"
  alertDiv.style.maxWidth = "90%"
  alertDiv.style.width = "500px"

  // Agregar el contenido de la alerta
  alertDiv.innerHTML = `
        ${message}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
    `

  // Agregar la alerta al cuerpo del documento
  document.body.appendChild(alertDiv)

  // Eliminar la alerta después de 5 segundos
  setTimeout(() => {
    alertDiv.classList.remove("show")
    setTimeout(() => {
      document.body.removeChild(alertDiv)
    }, 150)
  }, 5000)
}
