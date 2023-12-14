<script src="https://kit.fontawesome.com/6b729ec49e.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inria+Sans&family=Montserrat&family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/registro.css">
<?php echo "<script>document.title = 'Registro';</script>"; ?>

<form action="?operation=2" class="form" method="post">
    <h1>Registrate</h1>

    <div class="container">
        <div class="container-input">
            <i class="fa-solid fa-globe icon"></i>
            <select name="rol" id="rol">
                <option value="" disabled selected>¿Quien eres?</option>
                <option value="4">Alumno</option>
                <option value="3">Maestro</option>
                <option value="2">Empresa</option>
            </select>
        </div>
        <div class="container-input">
            <i class="fa-solid fa-envelope icon"></i>
            <input type="email" name="email" id="email" placeholder="Correo">
        </div>
        <div class="container-input">
            <i class="fa-solid fa-key icon"></i>
            <input type="password" name="password" id="pass" placeholder="Contraseña">
        </div>
        <div class="button">
            <input type="submit" value="Registrate">
            <p>Volver a <a class="link" href="?page=1">Inicio</a></p>
        </div>
    </div>
</form>