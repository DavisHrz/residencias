<?php
    $requests = $admin->getRequestRegister();
?>

<link rel="stylesheet" href="css/usersRequest.css">
<?php echo "<script>document.title = 'Solicitudes de Registro';</script>"; ?>

<main>
    <section class="solicitudes">
        <?php foreach($requests as $request){ ?>
        <div class="solicitud">
            <form action="?operation=4" method="post">
                <input type="hidden" name="idUser" value="<?php echo $request[0]?>" >
                <p>Rol: <strong><?php echo $request[2]; ?></strong></p>
                <p>Correo: <?php echo $request[1]; ?></p>
                <div class="acciones">
                    <button class="aceptar" name="add" value='aceptada'>Aceptar</button>
                    <button class="rechazar" name="add" value='rechazada'>Rechazar</button>
                </div>
            </form>
        </div>
        <?php } ?>

    </section>
</main>

<footer>
    <p>&copy; 2023 Solicitudes de Registro</p>
</footer>