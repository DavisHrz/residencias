<link rel="stylesheet" href="css/esperar.css">
<?php echo "<script>document.title = 'Bienvenido';</script>"; ?>

<header>
    <h1>Bienvenido <?php echo $_SESSION['rol'] ?></h1>
</header>

<main>
        <h2>Por favor, espere a que el Administrador acepte su registro.</h2>
        <button class="tareaBtn" onclick="window.location.href = '?operation=1';">Cerrar sesión</button>
</main>

<footer>
    <p>&copy; 2023 Panel de <?php echo $_SESSION['rol'] ?></p>
</footer>