<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["password"] == "1234") {
        header("Location: menu.php");
        exit();
    } else {
        echo "<p>Contraseña incorrecta.</p>";
    }
}
?>

<html>
<link rel="stylesheet" href="style.css" >
<html>
<head>
    <title>Login</title>
</head>
<div class="container">
<center>
<body>
    <h2>Ingresa la contraseña</h2>
    <form method="post">
        <br>
        <input type="password" name="password" required>
        <br><br>
        <input type="submit" value="Entrar">
    </form>
</body>
</center>
</div>
</html>
