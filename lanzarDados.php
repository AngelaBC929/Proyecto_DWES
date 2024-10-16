    <?php
    $numero = $_REQUEST["numero"];

    // Mostrar el número de dados
    if ($numero > 1) {
        echo '<h2>' . $numero . ' dados</h2>';
    } else {
        echo '<h2>' . $numero . ' dado</h2>';
    }
    ?>