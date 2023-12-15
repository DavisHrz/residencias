<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Krub:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="css/alumno.css">
<?php echo "<script>document.title = 'Portal Alumno';</script>"; ?>



<main>
    <section class="perfil">
        <h2>Crear Perfil de Alumno</h2>
        <!-- Formulario para crear el perfil -->
        <form id="perfilForm">
            <label for="conocimientos">Conocimientos de software:</label>
            <input type="text" id="conocimientos" name="conocimientos" required>

            <label for="habilidades">Habilidades blandas:</label>
            <input type="text" id="habilidades" name="habilidades" required>

            <label for="promedio">Promedio:</label>
            <input type="number" id="promedio" name="promedio" min="0" max="100" required>

            <!-- Botón de enviar para crear el perfil -->
            <button type="submit">Crear Perfil</button>
        </form>
    </section>

    <section class="postulacion">
        <h2>Postularse a Proyectos</h2>
        <!-- Lista de proyectos disponibles -->
        <ul>
            <li>Proyecto 1</li>
            <button class="postularBtn" data-proyecto="Proyecto 1">Postularse</button>

            <li>Proyecto 2</li>
            <button class="postularBtn" data-proyecto="Proyecto 2">Postularse</button>

            <li>Proyecto 3</li>
            <button class="postularBtn" data-proyecto="Proyecto 3">Postularse</button>
        </ul>
    </section>

    <section class="evaluacion">
        <h2>Evaluación de la Empresa</h2>
        <!-- Formulario para evaluar la empresa -->
        <form id="evaluacionForm">
            <label for="calificacion">Calificación (1-100):</label>
            <input type="number" id="calificacion" name="calificacion" min="1" max="100" required>

            <label for="experiencia">Experiencia con la empresa:</label>
            <textarea id="experiencia" name="experiencia" rows="4" required></textarea>

            <!-- Botón de enviar para evaluar -->
            <button type="submit">Enviar Evaluación</button>
        </form>
    </section>
</main>

<footer>
    <p>&copy; 2023 Portal de Alumnos</p>
</footer>