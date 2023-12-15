<?php 
    $proyectos = $student->getProjects();
?>


<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <?php echo "<script>document.title = 'Ofertas';</script>"; ?>

    <main>
        <section class="vacantes">
            <h2>Vacantes</h2>

            <?php foreach($proyectos as $proyecto){ ?>

            <div class="card">
                <h3><?php echo $proyecto[1]; ?></h3>
                <p>Perfil requerido: <?php echo $proyecto[2]; ?></p>
                <p><?php echo $proyecto[3]; ?></p>
                <button onclick="window.location.href='?operation=3&idProyecto=<?php echo $proyecto[0] ?>'" >Postularse</button>
            </div>

            <?php } ?>
            <!-- Más cards de vacantes... -->
        </section>
    </main>
    <footer>
        <p>&copy; 2023 Todos los derechos reservados</p>
    </footer>