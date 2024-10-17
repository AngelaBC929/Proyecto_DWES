<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
        <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: antiquewhite;
            text-align: center;
        }

        h1 {
            text-decoration:underline 2px brown;
        }
        
        h2,h1 {
            color: brown;
            text-align: center;
        }

        .ejercicio {
            padding: 20px;
            margin: 10px 0;
            border-radius: 5px;
        }

        .dados {
            background-color: #c5f9d1;
            display: flex;
            justify-content: center;/* Centramos horizontalmente */
            flex-wrap: wrap; /* Ajustamos los dados a varias filas */
            max-width: 500px;
            margin: 10px auto;
            padding: 20px;
            border-radius: 5px;
            border: 2px solid brown;
            text-align: center;
            border-radius: 10px;
            box-shadow: 7px 7px 7px #138d75;
        }

        button {
            background-color: antiquewhite; /* Color de fondo del botón */
            color: brown; /* Color del texto del botón */
            border-color: brown;
            border-radius: 5px; 
            padding: 8px 8px; 
            cursor: pointer; /* Cambia el cursor al pasar sobre el botón */
            font-size: 18px;
            transition: background-color 0.3s; /* Transición suave */
        }

        button:hover {
            background-color:darksalmon; /* Color de fondo al pasar el cursor */
        }

    </style>
    </head>
    <body>
    <h1>Ejercicio 1</h1>
    <div class="ejercicio dados">
        <form action="lanzarDados.php" method="POST">
            <h2>¿Cuantos dados quieres lanzar? (1-10):</h2>
            <input type="number" name="numero" required/>
            <button type="submit">Lanzar</button>
        </form>
    </div>
    </body>
</html>