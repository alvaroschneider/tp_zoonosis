<?php include 'cabecera.php'; ?>

<main>
  <div class="container mt-4">
    <h1 class="mb-4 text-primary text-center">Tus Mascotas</h1>

    <div class="table-responsive">
      <table class="table table-striped table-bordered table-hover align-middle shadow" id="tablaMascotas">
        <thead class="table-dark">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Tipo</th>
            <th scope="col">Edad</th>
            <th scope="col">Dueño (cliente_id)</th>
            <th scope="col">Creado</th>
            <th scope="col">Actualizado</th>
          </tr>
        </thead>
        <tbody>
          <!-- Aquí se insertan las filas con JS -->
        </tbody>
      </table>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const token = localStorage.getItem('token');
      fetch("http://136.248.93.81/api/mascotas", {
        headers: {
          'Authorization': 'Bearer ' + token
        }
      })
        .then(response => response.json())
        .then(data => {
          const tbody = document.querySelector("#tablaMascotas tbody");
          data.forEach(mascota => {
            const fila = `
              <tr>
                <td>${mascota.id}</td>
                <td>${mascota.nombre}</td>
                <td>${mascota.tipo}</td>
                <td>${mascota.edad}</td>
                <td>${mascota.cliente_id}</td>
                <td>${mascota.creado}</td>
                <td>${mascota.actualizado}</td>
              </tr>
            `;
            tbody.innerHTML += fila;
          });
        })
        .catch(error => console.error("Error al cargar mascotas:", error));
    });
  </script>
</main>

<?php include 'footer.php'; ?>
