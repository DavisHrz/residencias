<link rel="stylesheet" href="css/perfilEmpresa.css">
<?php echo "<script>document.title = 'Perfil de Empresa';</script>"; ?>

<header>
    <h1>Perfil de Empresa</h1>
    <nav>
            <a href="home.html">Ofertas</a>
            <a href="alumno.html">Mi cuenta</a>
            <a href="alumnoPostulaciones.html">Mis postulaciones</a>
            <a href="?operation=1">Cerrar sesión</a>
        </nav>
  </header>

  <main>
    <section class="datos-empresa">
      <h2>Datos Generales de la Empresa</h2>
      <div class="info">
        <p><strong>Dirección:</strong> Calle Principal, 123</p>
        <p><strong>Giro:</strong> Tecnología</p>
        <p><strong>Teléfono:</strong> 123-456-7890</p>
        <p><strong>Correo:</strong> empresa@ejemplo.com</p>
      </div>
    </section>

    <section class="contacto">
      <h2>Persona de Contacto</h2>
      <div class="info">
        <p><strong>Nombre:</strong> Nombre de la persona</p>
        <p><strong>Teléfono de Contacto:</strong> 987-654-3210</p>
        <p><strong>Correo de Contacto:</strong> contacto@empresa.com</p>
      </div>
    </section>

    <section class="evaluacion">
      <h2>Evaluación de la Empresa</h2>
      <!-- Formulario para evaluar la empresa -->
      <form id="evaluacionForm">
        <label for="calificacion">Calificación (1-100):</label>
        <input type="number" id="calificacion" name="calificacion" min="1" max="100" required>

        <label for="experiencia">Experiencia con la empresa:</label>
        <textarea id="experiencia" name="experiencia" rows="4" required></textarea>

        <!-- Botón de enviar para evaluar -->
        <button type="submit">Enviar Evaluación</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Perfil de Empresa</p>
  </footer>