<?php echo "<script>document.title = 'Añadir Periodo';</script>"; ?>

<main>
    <section class="tareas">
        <h2 class="admin-tittle">Añadir Periodo</h2>
        <!-- Lista de tareas -->
        <!-- Agrega botones o enlaces para realizar estas tareas -->
        <div class="period-section">
            <form action="?operation=3" method="post">
                <input class="period-input" type="text" name="periodo" placeholder="Ejemplo: Agosto-Diciembre" required>
                <button class="bttn" type="submit">Añadir</button>
            </form>
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2023 Panel de Administrador</p>
</footer>