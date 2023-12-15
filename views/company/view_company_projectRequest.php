<?php
  $requests = $company->getRequest();
?>

<link rel="stylesheet" href="css/projectRequest.css">
<?php echo "<script>document.title = 'Postulaciones';</script>"; ?>


  <main>
    <section class="postulaciones">
      <?php foreach($requests as $request) { ?>
      <div class="postulacion">
        <h2>Postulación de Estudiante</h2>
        <p>Nombre del Proyecto: <strong><?php echo $request[0]; ?></strong></p>
        <p>Nombre del Estudiante: <strong><?php echo $request[1]." ".$request[2]." ".$request[3]; ?></strong></p>
        <p>Conocimientos: <?php echo $request[4]; ?></p>
        <p>Promedio: <?php echo $request[5]; ?></p>

        <div class="acciones">
          <button class="aceptar" onclick="window.location.href='?operation=5&valor=aceptar&id=<?php echo $request[6]; ?>&idAlumno=<?php echo $request[7] ?>'">Aceptar</button>
          <button class="rechazar" onclick="window.location.href='?operation=5&valor=rechazar&id=<?php echo $request[6]; ?>&idAlumno=<?php echo $request[7] ?>'">Rechazar</button>
        </div>
      </div>
      <?php } ?>

      <!-- Otras postulaciones aquí -->
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Postulaciones en Proyectos</p>
  </footer>