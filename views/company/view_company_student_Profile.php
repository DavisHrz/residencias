<?php
$aplicant = ["", "", ""];
if(!empty($_GET["student"])){
    $aplicant = $company->getApplicant($_GET["student"]);
}

if(!empty($_GET["project"])){
    $comments = $company->getComment($_GET["project"], $_GET["student"]);
} 
?>

<link rel="stylesheet" href="css/perfilAlumno.css">
<?php echo "<script>document.title = 'Perfil';</script>"; ?>


  <main>
    <section class="conocimientos">
      <h1 style="text-align: center;" ><?php echo $aplicant[0]." ".$aplicant[1]." ".$aplicant[2] ?></h1>
    </section>
    <section class="evaluacion-residente">
      <h2>Evaluación del Residente</h2>
      <?php if(empty($comments)){ ?>
      <!-- Formulario para evaluar al residente al término de la residencia -->
      <form id="evaluacionForm" action="?operation=4" method="post">
        <label for="comportamiento">Comportamiento general sobre el proyecto:</label>
        <textarea id="comportamiento" name="comportamiento" rows="4" required ></textarea>

        <label for="calificacionAceptacion">Calificación de Aceptación (1-100):</label>
        <input type="number" id="calificacionAceptacion" name="calificacionAceptacion" min="1" max="100" required>

        <input type="text" name="idProyecto" value="<?php echo $_GET["project"]; ?> " hidden>
        <input type="text" name="idAlumno" value="<?php echo $_GET["student"]; ?> " hidden>

        <button type="submit">Enviar Evaluación</button>
      </form>
      <?php }else{ ?>
        <label for="comportamiento"><strong>Comportamiento general sobre el proyecto:</strong>  <?php echo $comments[0] ?> </label>
        <br /> <br />
        <label for="calificacionAceptacion"><strong>Calificación de Aceptación (1-100):</strong>  <?php echo $comments[1] ?> </label>
      <?php } ?>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Perfil de Alumno</p>
  </footer>