<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Dados</title>
</head>

<body>
    <h1>Ejercicio 1</h1>
    <div class="ejercicio dados">
    <form action="lanzarDados.php" method="POST">
        <h2>¿Cuantos dados quieres lanzar? (1-10):</h2>
        <input type="number" name="numero" required />
        <button type="submit">Lanzar</button>
        </form>
    </div>
</body>

</html>