<link rel="stylesheet" href="css/perfilEmpresa.css">
<?php echo "<script>document.title = 'Panel de Empresa';</script>"; ?>

  <main>
    <section class="datos-empresa">
      <h2>Datos Generales de la Empresa</h2>
      <div class="info">
        <p><strong>Dirección:</strong> <?php echo $_SESSION["direccion"] ?></p>
        <p><strong>Giro:</strong> <?php echo $_SESSION["giro"] ?></p>
        <p><strong>Teléfono:</strong> <?php echo $_SESSION["telefono"] ?></p>
        <p><strong>Correo:</strong> <?php echo $_SESSION["correo"] ?></p>
      </div>
    </section>

    <section class="contacto">
      <h2>Persona de Contacto</h2>
      <div class="info">
        <p><strong>Nombre:</strong> <?php echo $_SESSION["asesor"] ?></p>
        <p><strong>Teléfono de Contacto:</strong> <?php echo $_SESSION["telefonoAsesor"] ?></p>
        <p><strong>Correo de Contacto:</strong> <?php echo $_SESSION["correoAsesor"] ?></p>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Perfil de Empresa</p>
  </footer>
