<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/perfilAlumno.css">
<?php echo "<script>document.title = 'Portal Alumno';</script>"; ?>

<header>
    <h1>Bienvenido, Estudiante</h1>
    <nav>
        <a href="index.html">Inicio</a>
        <a href="home.html">Proyectos</a>
        <a href="alumno.html">Mi cuenta</a>
        <a href="alumnoPostulaciones.html">Mis postulaciones</a>
        <a href="?operation=1">Cerrar sesión</a>
    </nav>
</header>

<main>
    <section class="conocimientos">
      <h2>Conocimientos de Software y Habilidades Blandas</h2>
      <div class="info">
        <p><strong>Software:</strong> HTML, CSS, JavaScript, Python</p>
        <p><strong>Habilidades Blandas:</strong> Comunicación, Trabajo en equipo, Resolución de problemas</p>
      </div>
      <h2>Promedio</h2>
      <div class="info">
        <p><strong>Promedio:</strong> 90</p>
      </div>
    </section>
    <section class="evaluacion-residente">
      <h2>Evaluación del Residente</h2>
      <!-- Formulario para evaluar al residente al término de la residencia -->
      <form id="evaluacionForm">
        <label for="comportamiento">Comportamiento general sobre el proyecto:</label>
        <textarea id="comportamiento" name="comportamiento" rows="4" required></textarea>

        <label for="calificacionAceptacion">Calificación de Aceptación (1-100):</label>
        <input type="number" id="calificacionAceptacion" name="calificacionAceptacion" min="1" max="100" required>

        <button type="submit">Enviar Evaluación</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Perfil de Alumno</p>
  </footer>