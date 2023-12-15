<?php 
    $miProyectos = $student->getMyProjects();
?>

<link rel="stylesheet" href="css/alumnoPostulaciones.css">
<?php echo "<script>document.title = 'Perfil';</script>"; ?>


  <main>
    <section class="proyectos-postulados">

      <?php foreach($miProyectos as $proyecto){ ?>

      <div class="proyecto">
        <h2><?php echo $proyecto[1]; ?></h2>
        <p>Descripción: <?php echo $proyecto[2]; ?></p>
        <button onclick="window.location.href='?operation=4&idProyecto=<?php echo $proyecto[0] ?>'">Quitar</button>
      </div>

      <?php } ?>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Proyectos Postulados</p>
  </footer>
