<?php
include 'class.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de clases</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Formulario con clases PHP</h2>
    <div class="container">
        <form method="POST">
            <div class="row">
                <div class="col-25">
                    <label for="fname">Nombre:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="nombre" placeholder="Nombres">
                </div>
            </div>
            <div class="row">
                <div class="col-25">
                    <label for="fname">Apellidos:</label>
                </div>
                <div class="col-75">
                    <input type="text" name="apellidos" placeholder="Apellidos">
                </div>
            </div>
            <div class="row">
                    <input type="submit" value="Enviar">
            </div>
        </form>
    </div>
</body>
</html>
<?php
#Mandamos llamar la clase con el método de validación
$inicial = new Datos();
$inicial->Validacion();
?>