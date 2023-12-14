<link rel="stylesheet" href="css/registroEmpresa.css">
<?php echo "<script>document.title = 'Registro de Empresa';</script>"; ?>

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
        <label for="companyName">Razón social:</label>
        <input type="text" id="companyName" name="companyName" required>

        <label for="giro">Giro de la empresa:</label>
        <input type="text" id="giro" name="giro" required></input>

        <label for="phoneCompany">Telefono de la empresa:</label>
        <input type="tel" id="phoneCompany" name="phoneCompany" required>

        <h3>Persona de Contacto</h3>
        <label for="namePerson">Nombre Completo:</label>
        <input type="text" id="namePerson" name="namePerson" required>
        <label for="phoneNumber">Telefono:</label>
        <input type="tel" id="phoneNumber" name="phoneNumber" required>
        <label for="emailPerson">Correo:</label>
        <input type="email" id="emailPerson" name="emailPerson" required>

        <button type="submit">Enviar</button>
      </form>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Crear Proyecto</p>
  </footer>