<?php include 'cabecera.php'; ?>

<main>
  <!-- Solo el contenido específico de esta página -->
   <section id="inicio" class="hero">
      <h1>Bienvenid@ a ZOONOSIS ITUZAINGÓ</h1>
      <p class="texto-bienvenida">
        Clínica Veterinaria Municipio de Ituzaingó.<br>
        Brindamos a tus mascotas un cuidado profesional y de calidad.
      </p>
    </section>

    <section>
      <div class="services-row uniform">
        <!-- Columna izquierda -->
        <div class="services-col left">
          <a href="Emergencias.html" class="service-card">
            <div class="icon">🚑</div>
            <div class="text-container">
              <span class="title">Emergencia Veterinaria</span>
              <span class="extra-text">Atención inmediata las 24Hs.</span>
            </div>
          </a>
          <a href="vacunacion.html" class="service-card">
            <div class="icon">💉</div>
            <div class="text-container">
              <span class="title">Vacunación</span>
              <span class="extra-text">Calendario completo</span>
            </div>
          </a>
          <a href="preguntas_frecuentes.html" class="service-card">
            <div class="icon">❓</div>
            <div class="text-container">
              <span class="title">Preguntas frecuentes</span>
              <span class="extra-text">¿Tenés dudas? ¡Consultá!</span>
            </div>
          </a>
        </div>
        <!-- Columna derecha -->
        <div class="services-col right">
          <a href="zoonosis.html" class="service-card">
            <div class="icon">🏥</div>
            <div class="text-container">
              <span class="title">Zoonosis</span>
              <span class="extra-text">Clínica Veterinaria Municipio de Ituzaingó</span>
            </div>
          </a>
          <a href="nosotros.html" class="service-card">
            <div class="icon">👨‍⚕️</div>
            <div class="text-container">
              <span class="title">Nosotros</span>
              <span class="extra-text">Conocé nuestro equipo</span>
            </div>
          </a>
          <a href="leyes-animales.html" class="service-card">
            <div class="icon">✒️</div>
            <div class="text-container">
              <span class="title">Leyes de los animales</span>
              <span class="extra-text">Conocé los derechos de tus mascotas</span>
            </div>
          </a>
        </div>
      </div>
    </section>
</main>

<?php include 'footer.php'; ?>