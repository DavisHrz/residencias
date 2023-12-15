<?php 
  $residencias = $student->getResident();

  if(!empty( $residencias )){
    $comentarios = $student->getComment($residencias[0]);
  }

?>
<link rel="stylesheet" href="css/perfilEmpresa.css">
<?php echo "<script>document.title = 'Perfil de Empresa';</script>"; ?>


  <main>
    <?php if (!empty($residencias)) { ?>
    <section class="datos-empresa">
      <h2>Datos Generales de la Empresa</h2>
      <div class="info">
        <p><strong>Dirección:</strong> <?php echo $residencias[4]; ?></p>
        <p><strong>Giro:</strong> <?php echo $residencias[3]; ?></p>
        <p><strong>Teléfono:</strong> <?php echo $residencias[5]; ?></p>
        <p><strong>Correo:</strong> <?php echo $residencias[6]; ?></p>
      </div>
    </section>

    <section class="contacto">
      <h2>Persona de Contacto</h2>
      <div class="info">
        <p><strong>Nombre:</strong> <?php echo $residencias[7]; ?></p>
        <p><strong>Teléfono de Contacto:</strong> <?php echo $residencias[9]; ?></p>
        <p><strong>Correo de Contacto:</strong> <?php echo $residencias[8]; ?></p>
      </div>
    </section>

    <?php if( $comentarios[0] == "" ){ ?>
    <section class="evaluacion">
      <h2>Evaluación de la Empresa</h2>
      <!-- Formulario para evaluar la empresa -->
      <form id="evaluacionForm" action="?operation=5" method="post">
        <label for="calificacion">Calificación (1-100):</label>
        <input type="number" id="calificacion" name="calificacion" min="1" max="100" required>

        <label for="experiencia">Experiencia con la empresa:</label>
        <textarea id="experiencia" name="experiencia" rows="4" required></textarea>

        <input type="text" name="proyectoAsignado" value="<?php echo $residencias[0]; ?>" hidden>

        <!-- Botón de enviar para evaluar -->
        <button type="submit">Enviar Evaluación</button>
      </form>
    </section>
    <?php } else{ ?>
      <section class="evaluacion">
        <label for="comportamiento"><strong>Comportamiento general sobre el proyecto:</strong>  <?php echo $comentarios[0] ?> </label>
        <br /> <br />
        <label for="calificacionAceptacion"><strong>Calificación de Aceptación (1-100):</strong>  <?php echo $comentarios[1] ?> </label>
      </section>
        <?php }}else{
          ?> <h2>Aun no tienes proyecto de residencias</h2> <?php
        } ?>
  </main>

  <footer>
    <p>&copy; 2023 Perfil de Empresa</p>
  </footer>