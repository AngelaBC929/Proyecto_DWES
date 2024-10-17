<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: antiquewhite;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-decoration:underline 2px brown;        
        }

        h2,h1 {
            color: brown;
            text-align: center;
        }

        .dados {
            background-color: #c5f9d1;
            display: flex;
            justify-content: center; /* Centramos horizontalmente */
            flex-wrap: wrap;/* Ajustamos los dados a varias filas */
            max-width: 500px;
            margin: 10px auto;
            padding: 20px;
            border-radius: 5px;
            border: 2px solid brown;
            text-align: center;
            border-radius: 10px;
            box-shadow: 7px 7px 7px #138d75;
        }

        .dados img {
            width: 100px;
            height: 100px;
            margin: 5px;
        }

        .resultado-texto {
            text-align: center;
            margin-top: 20px;
        }
        
    </style>
</head>

<body>
    <h1>Resultado</h1>

    <?php
    $numero = $_REQUEST["numero"];

    // Mostrar el número de dados
    if ($numero > 1) {
        echo '<h2>' . $numero . ' dados</h2>';
    } else {
        echo '<h2>' . $numero . ' dado</h2>';
    }
    ?>

    <div class="dados">
        <?php
        $img = ['img/1.svg', 'img/2.svg', 'img/3.svg', 'img/4.svg', 'img/5.svg', 'img/6.svg'];
        $impares = 0;
        $pares = 0;

        // Comprobar si el número es válido
        if (is_numeric($numero) && ($numero >= 1 && $numero <= 10)) {
            for ($i = 0; $i < $numero; $i++) {
                $numAleatorio = rand(0, count($img) - 1);
                echo '<img src="' . $img[$numAleatorio] . '">';

                // Extraemos el número de la imagen (1 a 6)
                $numeroDado = $numAleatorio + 1; // +1 porque el índice empieza en 0
        
                // Comprobamos si es par o impar
                if ($numeroDado % 2 != 0) {
                    $impares++;
                } else {
                    $pares++;
                }
            }
        } else {
            print "<div class='resultado-texto'>Número inválido</div>";
        }
        ?>
    </div>

    <!-- Mostrar resultados de pares e impares -->
    <div class="resultado-texto">
        <h3>
            <font color=brown>Han salido <?php echo $impares; ?> números impares y <?php echo $pares; ?> números pares.</font>
        </h3>
    </div>
</body>

</html>