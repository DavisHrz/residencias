<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/perfilAlumno.css">
<?php echo "<script>document.title = 'Portal Alumno';</script>"; ?>


<main>
    <section class="conocimientos">
      <h2 style="text-align: center;"><?php echo $_SESSION["nombre"]." ".$_SESSION["primerApellido"]." ".$_SESSION["segundoApellido"]; ?></h2>
      <div class="info">
        <p><strong>Telefono:</strong> <?php echo $_SESSION["telefono"] ?></p>
        <p><strong>Conocimientos:</strong> <?php echo $_SESSION["conocimiento"] ?> </p>
        <p><strong>Promedio:</strong> <?php echo $_SESSION["promedio"] ?> </p>
      </div>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Perfil de Alumno</p>
  </footer>