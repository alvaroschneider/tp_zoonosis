<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Veterinaria integral para el cuidado de tus mascotas. Servicios de consultas, vacunas, cirugías.">
  <meta name="keywords" content="veterinaria, mascotas, perros, gatos, salud animal, vacunas, consultas, cirugias">
  <title>ZOONOSIS ITUZAINGÓ - Cuidando para tus mascotas</title>
  <!-- Bootstrap CSS CDN -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="icon" href="/imagenes/logo_4.png" type="image/png">
  <link rel="stylesheet" href="style.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@200;300;400&display=swap');
    html, body { font-family: 'Fira Sans', Arial, Helvetica, sans-serif; }
  </style>
</head>
<body>
<!-- Apartado superior de contacto -->
  <div class="contact-info-top">
    <span>
      <a href="https://www.google.com/maps/place/Cl%C3%ADnica+Veterinaria+-+Municipio+de+Ituzaing%C3%B3/@-34.6488157,-58.7091161,17z/data=!4m15!1m8!3m7!1s0x95bcbfbda4dbedd7:0x117bba3fb64448e1!2sRep%C3%BAblica+del+Salvador+2885,+B1714IQU+Ituzaing%C3%B3,+Provincia+de+Buenos+Aires!3b1!8m2!3d-34.6488201!4d-58.7065412!16s%2Fg%2F11y5tmpbzk!3m5!1s0x95bcbfff9c02b46b:0xc6032369ed2cfbf4!8m2!3d-34.6487657!4d-58.7066174!16s%2Fg%2F11rv1mbyr6?entry=ttu&g_ep=EgoyMDI1MDcyMS4wIKXMDSoASAFQAw%3D%3D"
        target="_blank" aria-label="Ubicación">
        <i class="fas fa-map-marker-alt"></i> República del Salvador 2885
      </a>
    </span>
    <span><i class="fas fa-phone"></i> 011 2120 1960</span>
    <span><i class="fas fa-envelope"></i> zoonosis2015ituzaingo@gmail.com</span>
    <span>
      <a href="https://www.facebook.com/municipalidadituzaingo" target="_blank" aria-label="Facebook"><i
          class="fab fa-facebook-f"></i></a>
      <a href="https://www.instagram.com/municipioituzaingo/" target="_blank" aria-label="Instagram"><i
          class="fab fa-instagram"></i></a>
    </span>
  </div>
  <header>
    <div class="header-top">
      <div class="logo">
        <a href="index.html" style="text-decoration:none; color:inherit; display:flex; align-items:center;">
          <img src="./imagenes/logo_4.png" width="60" height="60" alt="Logo">
          <h1 style="font-size: 2.1em; font-weight: 700; letter-spacing: 1px; margin-left: 0.5em;">ZOONOSIS ITUZAINGÓ
          </h1>
        </a>
      </div>
      <nav>
        <ul>
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Inicio</a>
          </li>
          <!-- Solo el botón Servicios con el menú desplegable -->
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="serviciosDropdown">Servicios</a>
            <ul class="dropdown-menu">
              <li><a href="emergencias.php">Emergencia Veterinaria</a></li>
              <li><a href="zoonosis.html">Zoonosis</a></li>
              <li><a href="vacunacion.html">Vacunación</a></li>
              <li><a href="nosotros.html">Nosotros</a></li>
              <li><a href="preguntas_frecuentes.html">Preguntas frecuentes</a></li>
              <li><a href="leyes-animales.html">Leyes de los animales</a></li>
            </ul>
          </li>
          <li class="nav-item"><a class="nav-link" href="#formularios">Tus Turnos</a></li>
          <li class="nav-item"><a class="nav-link" href="mascotas.php">Tus mascotas</a></li>
          <button id="accountBtn" class="btn btn-outline-dark">Mi Cuenta</button>
        </ul>
      </nav>
      <form class="search-form" action="#" method="get">
        <input type="search" name="q" placeholder="Buscador...">
        <button type="submit">Buscar</button>
      </form>
    </div>
  </header>

  <!-- Modal de cuenta -->
  <div id="authModal" class="modal">
    <div class="modal-content">
      <span class="close"></span>

      <!-- Cambia el enlace y agrega el JS para mostrar el formulario de registro -->
      <div id="loginForm" class="auth-form">
        <h2>Mi Cuenta</h2>
        <div id="nombreUsuario" style="font-weight:bold; margin-bottom:10px;"></div>
        <form id="loginFormElement">
          <input type="text" id="dni" placeholder="Ingrese su número de DNI" required />
          <input type="password" id="password" placeholder="Contraseña" required />
          <div class="boton-container">
            <button class="boton" type="submit">Ingresar</button>
          </div>
        </form>
        <div id="loginMensaje"></div>
        <button id="logoutBtn" class="boton" style="display:none; margin-top:10px;">Cerrar sesión</button>
        <p>Personal <a href="#" id="showRegister">ZOONOSIS</a></p>
      </div>

      <div id="registerForm" class="auth-form" style="display: none;">
        <h2>Personal ZOONOSIS</h2>
        <form>
          <input type="text" placeholder="usuario" required />
          <input type="password" placeholder="Contraseña" required />
          <button type="submit">Ingresar</button>
        </form>
        <p>No Personal <a href="#" id="showLogin"> Mi Cuenta </a></p>
      </div>

    </div>
  </div>

  <script src="script.js"></script>
    <script>
      function mostrarNombreUsuario() {
        const nombre = localStorage.getItem('usuario');
        const nombreDiv = document.getElementById('nombreUsuario');
        const logoutBtn = document.getElementById('logoutBtn');
        if (nombre) {
          nombreDiv.textContent = `Bienvenido, ${nombre}`;
          logoutBtn.style.display = 'block';
          document.getElementById('loginFormElement').style.display = 'none';
          document.getElementById('showRegister').style.display = 'none';
        } else {
          nombreDiv.textContent = '';
          logoutBtn.style.display = 'none';
          document.getElementById('loginFormElement').style.display = 'block';
          document.getElementById('showRegister').style.display = 'inline';
        }
      }

      // Mostrar el nombre cuando se abre el modal
      document.getElementById('accountBtn').addEventListener('click', function() {
        mostrarNombreUsuario();
        document.getElementById('authModal').style.display = 'block';
      });

      document.getElementById('loginFormElement').addEventListener('submit', async function(e) {
        e.preventDefault();
        const username = document.getElementById('dni').value;
        const password = document.getElementById('password').value;
        const resp = await fetch('http://136.248.93.81/api/usuarios/login', {
          method: 'POST',
          headers: { 'Content-Type': 'application/json' },
          body: JSON.stringify({ username, password })
        });
        const result = await resp.json();
        const mensajeDiv = document.getElementById('loginMensaje');
        if (resp.ok) {
          mensajeDiv.textContent = result.message || 'Login exitoso';
          mensajeDiv.style.color = 'green';
          if (result.token) {
            localStorage.setItem('token', result.token);
          }
          if (result.usuario) {
            // Usa nombre y apellido si existen, si no muestra username
            let nombreUsuario = '';
            if (typeof result.usuario === 'object') {
              if (result.usuario.nombre && result.usuario.apellido) {
                nombreUsuario = `${result.usuario.nombre} ${result.usuario.apellido}`;
              } else if (result.usuario.nombre) {
                nombreUsuario = result.usuario.nombre;
              } else if (result.usuario.username) {
                nombreUsuario = result.usuario.username;
              } else {
                nombreUsuario = 'Usuario';
              }
            } else {
              nombreUsuario = result.usuario;
            }
            localStorage.setItem('usuario', nombreUsuario);
          }
          actualizarBotonCuenta(); // Actualiza el texto del botón
          document.getElementById('authModal').style.display = 'none'; // Cierra el modal
          // Redirigir o cerrar modal si es necesario
        } else {
          mensajeDiv.textContent = result.error || result.message || 'Error en el login';
          mensajeDiv.style.color = 'red';
        }
      });

      document.getElementById('logoutBtn').addEventListener('click', function() {
        localStorage.removeItem('usuario');
        localStorage.removeItem('token');
        actualizarBotonCuenta();
        mostrarNombreUsuario();
        document.getElementById('authModal').style.display = 'none'; // Cierra el modal
      });

      function actualizarBotonCuenta() {
        const usuario = localStorage.getItem('usuario');
        const btn = document.getElementById('accountBtn');
        btn.textContent = usuario ? usuario : 'Mi Cuenta';
      }

      // Llama a la función al cargar la página
      actualizarBotonCuenta();
    </script>