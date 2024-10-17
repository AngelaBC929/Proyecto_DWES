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