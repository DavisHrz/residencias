<link rel="stylesheet" href="css/registroAlumno.css">
<?php echo "<script>document.title = 'Registro de Alumno';</script>"; ?>

<header>
    <h1>Termina tu Registro</h1>
    <nav>
        <a href="?operation=1">Cerrar Sesión</a>
      </nav>
  </header>

  <main>
    <section class="crear-proyecto">
      <h2>Registro</h2>
      <form id="registerFinish" method="post" action="?operation=2">
        <label for="controlNumber">Número de Control:</label>
        <input type="text" id="controlNumber" name="controlNumber" required>

        <label for="name">Nombre(s)</label>
        <input type="text" id="name" name="name" required></input>

        <label for="lastName">Primer Apellido:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="secondSurName">Segundo Apellido:</label>
        <input type="text" id="secondSurName" name="secondSurName" required>

        <label for="phoneNumber">Telefono</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>

        <label for="average">Promedio</label>
        <input type="number" id="average" name="average" required>

        <button type="submit">Enviar</button>
      </form>

    </section>
  </main>

  <footer>
    <p>&copy; 2023 Crear Proyecto</p>
  </footer>