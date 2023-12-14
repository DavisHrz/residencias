<link rel="stylesheet" href="css/crearProyecto.css">
<?php echo "<script>document.title = 'Crear Proyecto';</script>"; ?>


  <main>
    <section class="crear-proyecto">
      <h2>Crear Proyecto Nuevo</h2>
      <form id="crearProyectoForm">
        <label for="perfilRequerido">Perfil Requerido:</label>
        <input type="text" id="perfilRequerido" name="perfilRequerido" required>

        <label for="descripcion">Descripción Detallada:</label>
        <textarea id="descripcion" name="descripcion" rows="6" required></textarea>

        <label for="semestre">Semestre de Asignación:</label>
        <input type="text" id="semestre" name="semestre" placeholder="Ejemplo: 2023-1" required>

        <label for="tipoProyecto">Tipo de Proyecto:</label>
        <input type="text" id="tipoProyecto" name="tipoProyecto" required>

        <!-- Fechas importantes -->
        <label for="fechaCreacion">Fecha de Creación:</label>
        <input type="date" id="fechaCreacion" name="fechaCreacion" required>

        <label for="fechaAsignacion">Fecha de Asignación de Alumnos:</label>
        <input type="date" id="fechaAsignacion" name="fechaAsignacion" required>

        <label for="fechaTermino">Fecha de Término:</label>
        <input type="date" id="fechaTermino" name="fechaTermino" required>

        <label for="horas">Horas:</label>
        <input type="number" id="horas" name="horas" required>

        <!-- Botón de enviar para crear el proyecto -->
        <button type="submit">Crear Proyecto</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Crear Proyecto</p>
  </footer>