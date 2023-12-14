<link rel="stylesheet" href="css/administrador.css">
<?php echo "<script>document.title = 'Panel de Administrador';</script>"; ?>


  <main>
    <section class="tareas">
      <h2 class="admin-tittle">Tareas de Administrador</h2>
      <h2 class="admin-period" ><?php echo $_SESSION["semestre"] ?></h2>
      <ul>
        <!-- Agrega botones o enlaces para realizar estas tareas -->
        </div>
        <button class="tareaBtn" data-tarea="Emitir Reporte">Emitir Reporte</button>
        <button class="tareaBtn" data-tarea="Asignar Personal">Asignar Personal</button>
        <button class="tareaBtn" data-tarea="Actualizar Datos">Actualizar Datos</button>
      </ul>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Panel de Administrador</p>
  </footer>