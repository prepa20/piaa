<html>
    <head>
        <title>Promedio de calificaciones</title>
    <link rel="stylesheet" href="style_promedio.css">
</head>
<body>
    <h2>Calcular promedio de calificación</h2>
    <!--JAHH creando form-->
    <button class="regresar"onclick="location.href='e4.php'">Regresar</button>
    <form method="post">
        
        <label for="Nombre">Nombre:</label>
        <input type="text" name="Nombre" required><br><br>

        <label for="matricula">Matricula:</label>
        <input type="number" name="matricula" required><br><br>

        <label for="calif1">calificación 1:</label>
        <input type="number" name="calif1" max="100" required><br><br>
 
        <label for="calif2">Calificación 2:</label>
        <input type="number" name="calif2" max="100" required><br><br>

        <label for="calif3">Calificación 3:</label>
        <input type="number" name="calif3" max="100" required><br><br>
 
        <input type="submit" value="Calcular Promedio de 3 calificaciones">
        <!--JAHH codigo php para calcukar calificación-->
        <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["Nombre"];
    $matricula = $_POST["matricula"];
    $calif1 = $_POST["calif1"];
    $calif2 = $_POST["calif2"];
    $calif3 = $_POST["calif3"];

    function promediotres($calif1, $calif2, $calif3) {
        return ($calif1 + $calif2 + $calif3) / 3;
    }

    $promedio = promediotres($calif1, $calif2, $calif3);

    echo "<br>Nombre: $nombre";
    echo "<br>Matrícula: $matricula";
    echo "<br>Promedio: $promedio";

    if ($promedio >= 70) {
        echo "<br>El alumno aprobó la materia.";
    } if ($promedio <70) {
        echo "<br>El alumno no aprobó la materia.";
        echo '<br><img src="gato.jfif" alt="Imagen de gato">';
    }
    
}
?>

    </form>
    <p>Juan Angel Hernandez Hurtado || 2203856 || Grupo 407 || N.L 15</p>
</body>
</html>