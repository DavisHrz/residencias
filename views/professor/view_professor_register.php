<link rel="stylesheet" href="css/registroProfessor.css">
<?php echo "<script>document.title = 'Registro de profesor';</script>"; ?>

<header>
    <h1>Termina tu Registro: </h1>
    <nav>
        <a href="#">Cerrar Sesión</a>
      </nav>
  </header>

  <main>
    <section class="crear-proyecto">
      <h2>Registro</h2>
      <form id="registerFinish">
        <label for="name">Nombre(s):</label>
        <input type="text" id="name" name="name" required>

        <label for="lastName">Primer Apellido:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="secondSurName">Segundo Apellido:</label>
        <input type="text" id="secondSurName" name="secondSurName" required>

        <label for="phoneNumber">Telefono</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>

        <button type="submit">Enviar</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Registro Profesor</p>
  </footer>