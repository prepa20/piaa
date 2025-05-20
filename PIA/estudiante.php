<?php
function filtrado($dato) {
    // MJFG - Eliminar espacios en blanco al inicio y final
    $dato = trim($dato);
    // MJFG - Eliminar barras invertidas
    $dato = stripslashes($dato);
    // MJFG - Convertir caracteres especiales a entidades HTML
    $dato = htmlspecialchars($dato, ENT_QUOTES, 'UTF-8');
    return $dato;
}

// MJFG - Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errores = [];
    
    // MJFG - Validación del campo nombre
    $nombre = isset($_POST["nombre"]) ? filtrado($_POST["nombre"]) : '';
    if (empty($nombre)) {
        $errores[] = "El nombre es requerido";
    }
    
    // MJFG - Validación de la contraseña
    $password = $_POST["password"] ?? '';
    if (empty($password) || strlen($password) < 5) {
        $errores[] = "La contraseña es requerida y debe tener al menos 5 caracteres";
    }
    
    // MJFG - Validación del correo electrónico
    $email = isset($_POST["email"]) ? filtrado($_POST["email"]) : '';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errores[] = "El correo electrónico es inválido";
    }
    
    // MJFG - Validación del sitio web (campo opcional)
    $sitio_web = isset($_POST["sitio_web"]) ? filtrado($_POST["sitio_web"]) : '';
    if (!empty($sitio_web) && !filter_var($sitio_web, FILTER_VALIDATE_URL)) {
        $errores[] = "El sitio web no tiene un formato válido";
    }
    
    // MJFG - Validación del nivel de educación
    $educacion = isset($_POST["educacion"]) ? filtrado($_POST["educacion"]) : '';
    if (empty($educacion)) {
        $errores[] = "Debe seleccionar un nivel de educación";
    }
    
    // MJFG - Validación de idiomas seleccionados
    $idiomas = [];
    if (isset($_POST["idioma"]) && is_array($_POST["idioma"])) {
        $idiomas = array_map('filtrado', $_POST["idioma"]);
    }
    if (empty($idiomas)) {
        $errores[] = "Debe seleccionar al menos un idioma";
    }
    
    // MJFG - Manejo de resultados de validación
    if (!empty($errores)) {
        // MJFG - Mostrar todos los errores encontrados
        foreach ($errores as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        // MJFG - Mostrar datos del formulario procesado correctamente
        echo "<h3>Registro exitoso</h3>";
        echo "<p>Nombre: " . $nombre . "</p>";
        echo "<p>Email: " . $email . "</p>";
        echo "<p>Sitio Web: " . (!empty($sitio_web) ? $sitio_web : "No especificado") . "</p>";
        echo "<p>Nivel de educación: " . $educacion . "</p>";
        echo "<p>Idiomas: " . implode(", ", $idiomas) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="style_carreras.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario de Registro</title>
</head>
<body>
    <h2>Formulario de Registro</h2>
    <button class="regresar"onclick="location.href='e3.php'">Regresar</button>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <!-- MJFG - Campos del formulario -->
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>

        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required>

        <label for="educacion">Nivel de Educación:</label>
        <select id="educacion" name="educacion" required>
            <option value="sin_educacion">Sin educación</option>
            <option value="educacion_obligatoria">Educación obligatoria</option>
            <option value="formacion_profesional">Formación profesional</option>
            <option value="universidad">Universidad</option>
        </select>

        <fieldset>
            <legend>Idiomas:</legend>
            <?php /* MJFG - Opciones de idiomas */ ?>
            <label><input type="checkbox" name="idioma[]" value="espanol"> Español</label>
            <label><input type="checkbox" name="idioma[]" value="ingles"> Inglés</label>
            <label><input type="checkbox" name="idioma[]" value="frances"> Francés</label>
            <label><input type="checkbox" name="idioma[]" value="aleman"> Alemán</label>
            <label><input type="checkbox" name="idioma[]" value="otro"> Otro</label>
        </fieldset>

        <label for="email">Correo Electrónico:</label>
        <input type="email" id="email" name="email" required>

        <label for="sitio_web">Sitio Web:</label>
        <input type="url" id="sitio_web" name="sitio_web">

        <button type="submit">Enviar</button>
    </form>
    
    <?php /* MJFG - Sección de visualización de errores */ ?>
    <ul>
        <?php
        if (isset($errores)) {
            foreach ($errores as $error) {
                echo "<li>$error</li>";
            }
        }
        ?>
    </ul>
</body>
</html>