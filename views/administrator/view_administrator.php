<link rel="stylesheet" href="css/administrador.css">
<?php echo "<script>document.title = 'Panel de Administrador';</script>"; ?>

<header>
    <h1>Bienvenido, Administrador</h1>
    <nav>
      <a href="administrador.html">Seleccionar Periodo</a>
      <a href="home.html">Añadir Periodo</a>
      <a href="usersRequest.html">Solicitudes</a>
    </nav>
  </header>

  <main>
    <section class="tareas">
      <h2 class="admin-tittle">Tareas de Administrador</h2>
      <!-- Lista de tareas -->
      <ul>
        <!-- Agrega botones o enlaces para realizar estas tareas -->
        <div class="period-section">
          <form method="post" action="">
            <select name="Periodo" id="">
                <option value="2023-2">Agosto-Diciembre 2023</option>
                <option value="2023-1">Enero-Junio 2023</option>
                <option value="2022-2">Agosto-Diciembre 2022</option>
                <option value="2022-1">Enero-Junio 2022</option>
                <option value="2021-2">Agosto-Diciembre 2021</option>
                <option value="2021-1">Enero-Junio 2021</option>
            </select>
            <div class="button">
              <button class="bttn" type="submit">Seleccionar</button>
          </div>
              </form>
          </div>
        </div>
      </ul>
    </section>
  </main>

  <footer>
    <p>&copy; 2023 Panel de Administrador</p>
  </footer>