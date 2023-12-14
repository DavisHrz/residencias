<link rel="stylesheet" href="css/login.css">
<?php echo "<script>document.title = 'Inicio de sesión';</script>"; ?>

<section class="left-form">
    <img class="logo" src="/assets/images/itver-logo.png" alt="">
</section>

<section class="right-form">
    <form action="?operation=1" method="post">

        <h2>Inicio de sesión</h2>

        <label for="usuario">Email: </label>
        <input type="email" name="email" id="usuario">

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password">

        <div class="check">
            <a class="check-register" href="?page=2">Registrarse</a>
        </div>


        <input type="submit" value="Ingresar">
    </form>
</section>