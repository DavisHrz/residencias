<?php
    $semestres = $company->getSemestres();
?>

<link rel="stylesheet" href="css/crearProyecto.css">
<?php echo "<script>document.title = 'Crear Proyecto';</script>"; ?>


  <main>
    <section class="crear-proyecto">
      <h2>Crear Proyecto Nuevo</h2>
      <form id="crearProyectoForm" method="post" action="?operation=3">

        <label for="nombre">Nombre</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="perfilRequerido">Perfil Requerido:</label>
        <input type="text" id="perfilRequerido" name="perfilRequerido" required>

        <label for="descripcion">Descripción Detallada:</label>
        <textarea id="descripcion" name="descripcion" rows="6" required></textarea>

        
        <label for="semestre">Semestre de Asignación:</label>
        <select name="semestre" id="">
          <?php foreach($semestres as $semestre){ ?>
            <option value="<?php echo $semestre[0] ?>"><?php echo $semestre[1] ?></option>
          <?php } ?>
        </select>

        <label for="tipoProyecto">Tipo de Proyecto:</label>
        <input type="text" id="tipoProyecto" name="tipoProyecto" required>

        <!-- Fechas importantes -->
        <label for="fechaAsignacion">Fecha de Asignación de Alumnos:</label>
        <input type="date" id="fechaAsignacion" name="fechaAsignacion" required>

        <label for="fechaTermino">Fecha de Término:</label>
        <input type="date" id="fechaTermino" name="fechaTermino" required>

        <label for="horas">Horas:</label>
        <input type="number" id="horas" name="horas" required>

        <label for="cantidad">Cantodad de residentes requeridos:</label>
        <input type="number" id="cantidad" name="cantidad" required>

        <!-- Botón de enviar para crear el proyecto -->
        <button type="submit">Crear Proyecto</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Crear Proyecto</p>
  </footer>