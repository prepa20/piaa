<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividades libro</title>
    <style>
        /* Estilos generales */
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        /* Cabecera */
        .header {
            text-align: center;
            padding: 20px;
            background-color: #282c34;
        }

        .header img {
            width: 150px;
            height: auto;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Contenido principal */
        .main-content {
            text-align: center;
            margin: 40px;
        }

        .main-content h1 {
            font-size: 2.5rem;
            color: #333;
        }

        .main-content h2 {
            font-size: 1.8rem;
            color: #555;
        }

        .main-content h3 {
            font-size: 1.5rem;
            color: #777;
        }

        /* Sección de actividades */
        .activities {
            background-color: #fff;
            padding: 30px;
            margin: 20px auto;
            max-width: 800px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .activities marquee {
            display: block;
            margin: 20px 0;
            font-size: 1.5rem;
            color: #007bff;
            font-weight: bold;
        }

        /* Estilo para los códigos PHP */
        .activities pre {
            background-color: #f0f0f0;
            padding: 20px;
            border-radius: 10px;
            overflow-x: auto;
            font-size: 1.1rem;
            color: #444;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        /* Estilos para los elementos dentro de las actividades */
        .activities p {
            font-size: 1.2rem;
            line-height: 1.6;
            color: #555;
        }

        /* Estilos para la animación del marquee */
        marquee {
            font-family: 'Arial', sans-serif;
            font-size: 18px;
            color: #3498db;
            font-weight: bold;
        }
        .regresar {
     border: 1px solid #ffffff; 
      padding: 10px 20px;
      background-color: #202020;
      color: #ffffff;
      cursor: pointer;
      border-radius: 5px; 
      width: 100px;
      height: 50px;
      transition: background-color 0.3s ease, transform 0.3s ease;
      position: absolute;
      top: 10px;    
      left: 10px;
    }
    </style>
</head>
<body>
<button class="regresar"onclick="location.href='e2.php'">Regresar</button>
    <div class="header">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ7tlkJiJaA8dIk8lyPa-K3JRMZwUvXL9zZIA&s" alt="Imagen 1">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQoUuTUB8Yw5kox1B7svJesc7OOVgx4VshNSw&s" alt="Imagen 2">
    </div>

    <div class="main-content">
        <h1>Diana Carolina Mier Fernández</h1>
        <h2>Fundamentos de Programación Web</h2>
        <h3>Dra. Hilda Patricia Tamez Villalón</h3>
    </div>

    <div class="activities">
        <marquee behavior="scroll" direction="right" scrollamount="15">DCMF Variable y Comentarios</marquee>
        <?php
            $edad = 15;
            $nombre = "Pepito Conejo";
            echo $edad, $nombre;
        ?>
        
        <marquee behavior="scroll" direction="right" scrollamount="15">DCMF Variables</marquee>
        <?php
            $a = 1;
            $b = 3.34;
            $c = "Hola Mundo";
            echo $a, "<br>", $b, "<br>", $c;
        ?>
        
        <marquee behavior="scroll" direction="right" scrollamount="15">DCMF Constante</marquee>
        <?php
            $m = 60;
            const g = 9.8;
            $w = $m * g;
            echo "La masa es $m, la aceleración de la gravedad es 9.8, entonces el peso es: ", $w, "<br>";
        ?>
        
        <marquee behavior="scroll" direction="right" scrollamount="15">DCMF Operadores Aritmeticos</marquee>
        <?php
            $a = 8;
            $b = 3;
            echo $a + $b, "<br>";
            echo $a - $b, "<br>";
            echo $a * $b, "<br>";
            echo $a / $b, "<br>";
            $a++;
            echo $a, "<br>";
            $b--;
            echo $b, "<br>";
        ?>
        
        <marquee behavior="scroll" direction="right" scrollamount="15">DCMF Operadores de Comparación</marquee>
        <?php
            $a = 8;
            $b = 3;
            $c = 3;
            echo $a == $b, "<br>";
            echo $a != $b, "<br>";
            echo $a < $b, "<br>";
            echo $a > $b, "<br>";
        ?>
        
        <marquee behavior="scroll" direction="right" scrollamount="15">DCMF Operadores lógicos</marquee>
        <?php
            $a = 8;
            $b = 8;
            $c = 10;
            echo ($a == $b) && ($c > $b), "<br>";
            echo ($a == $b) || ($b == $c), "<br>";
            echo !($b <= $c), "<br>";
        ?>
        
        <marquee behavior="scroll" direction="right" scrollamount="15">DCMF Ejemplo de IF</marquee>
        <?php
            $a = 8;
            $b = 3;
            if ($a < $b) {
                echo "a es menor que b";
            } else {
                echo "a NO es menor que b";
            }
        ?>
        
        <marquee behavior="scroll" direction="right" scrollamount="15">DCMF Ejemplo de SWITCH</marquee>
        <?php
            $posicion = "arriba";
            switch($posicion) {
                case "arriba":
                    echo "la variable contiene el valor arriba";
                    break;
                case "abajo":
                    echo "la variable contiene el valor abajo";
                    break;
                default:
                    echo "la variable contiene otro valor distinto de arriba y abajo";
            }
        ?>
        
        <!-- DCMF ejercicio libro pagina 49 -->
        <marquee behavior="scroll" direction="right" scrollamount="15">DCMF #19 ejemplo de WHILE</marquee>
        <?php
            $i = 0;
            while ($i < 5) {
                print "<p>$i</p>\n";
                $i++;
            }
        ?>
        
        <?php
            $i = 0;
            while ($i < 10) {
                echo "el valor de i es ", $i, "<br>";
                $i++;
            }
        ?>
        
        <!-- DCMF ejercicios while -->
        <marquee behavior="scroll" direction="right" scrollamount="15">DCMF #19 ejemplo de DO while 1</marquee>
        <?php 
            $i = 0;
            do {
                print "<p>$i</p>\n";
                $i++;
            } while ($i < 5);
        ?>
        
        <marquee behavior="scroll" direction="right" scrollamount="15">DCMF #19 ejemplo de DO while 2</marquee>
        <?php
            $i = 0;
            do {
                echo "el valor de i es ", $i, "<br>";
                $i++;
            } while ($i < 5);
        ?>
        
        <!-- DCMF ejercicio FOR -->
        <marquee behavior="scroll" direction="right" scrollamount="15">DCMF #19 ejemplo de FOR</marquee>
        <?php
            for ($i = 1; $i <= 10; $i++) {
                echo "el valor de i es ", $i, "<br>";
            }
        ?>
        
        <!-- DCMF ejercicio FOR EACH -->
        <marquee behavior="scroll" direction="right" scrollamount="15">DCMF #19 ejemplo de FOR EACH</marquee>
        <?php
            $matriz = array(0, 1, 10, 100, 1000);
            foreach ($matriz as $valor) {
                print "<p>$valor</p>\n";
            }
        ?>
    </div>
</body>
</html>