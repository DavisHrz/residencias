<link rel="stylesheet" href="css/administrador.css">
<?php echo "<script>document.title = 'Panel de Administrador';</script>"; ?>

<header>
    <h1>Bienvenido, Administrador</h1>
</header>

<main>
    <section class="tareas">
        <h2>Tareas de Administrador</h2>
        <ul>
            <!-- Agrega botones o enlaces para realizar estas tareas -->
            <button class="tareaBtn" data-tarea="Cerrar Semestre">Cerrar Semestre</button>
            <button class="tareaBtn" data-tarea="Abrir Nuevo Semestre">Abrir Nuevo Semestre</button>
            <button class="tareaBtn" data-tarea="Emitir Reporte">Emitir Reporte</button>
            <button class="tareaBtn" data-tarea="Asignar Personal">Asignar Personal</button>
            <button class="tareaBtn" data-tarea="Actualizar Datos">Actualizar Datos</button>
            <br><hr>
            <button class="tareaBtn" onclick="window.location.href = '?operation=1';">Cerrar sesión</button>
        </ul>
    </section>
</main>

<footer>
    <p>&copy; 2023 Panel de Administrador</p>
</footer>