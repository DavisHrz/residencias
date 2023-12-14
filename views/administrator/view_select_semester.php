<?php
    $semestres = $admin->getSemestres();
?>



<?php echo "<script>document.title = 'Seleccionar Periodo';</script>"; ?>


<main>
    <section class="tareas">
        <h2 class="admin-tittle">Seleccione un periodo</h2>
        <!-- Lista de tareas -->
        <!-- Agrega botones o enlaces para realizar estas tareas -->
        <div class="period-section">
            <form method="post" action="?operation=2">
                <select name="periodo" id="">
                  <?php foreach($semestres as $semestre){ ?>
                    <option value="<?php echo $semestre[0] ?>"><?php echo $semestre[1] ?></option>
                  <?php } ?>
                </select>
                <div class="button">
                    <button class="bttn" type="submit">Seleccionar</button>
                </div>
            </form>
        </div>
    </section>
</main>

<footer>
    <p>&copy; 2023 Panel de Administrador</p>
</footer>