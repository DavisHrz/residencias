<?php
    $proyectos = $company->getProjects();
?>

<link rel="stylesheet" href="css/empresaProyectos.css">
<?php echo "<script>document.title = 'Proyectos vigentes';</script>"; ?>

    
    <main>
        <section class="proyectos">
            <?php 
                foreach($proyectos as $proyecto){ 
                    $aplicants = $company->getApplicants($proyecto[0]);
            ?>
            <div class="card">
                <h2><?php echo $proyecto[1]; ?></h2>
                <p><strong>Perfil a buscar:</strong><?php echo $proyecto[2]; ?></p>
                <p><?php echo $proyecto[3]; ?></p>
                <div class="botones">
                    <!--- <button class="editar-btn">Editar</button> -->
                    <!--- <button class="eliminar-btn">Eliminar</button> -->
                </div>

                <h3>Aceptados:</h3>
                <?php foreach($aplicants as $aplicant) { ?>
                <div class="botones">
                        <p> <?php echo $aplicant[1]." ".$aplicant[2]." ".$aplicant[3]; ?> </p>
                        <p><a href="?page=5&project=<?php echo $proyecto[0]; ?>&student=<?php echo$aplicant[0]; ?>">ver</a></p>
                    </div>
                <?php } ?>
            </div>
            <?php } ?>

            <!-- Otros proyectos... -->

            <!-- Botón para agregar nuevo proyecto -->
            <div class="agregar-proyecto">
                <a href="?page=2" class="agregar-btn">Agregar Nuevo Proyecto</a>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; 2023</p>
    </footer>