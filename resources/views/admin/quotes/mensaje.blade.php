<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de VyN Beauty Color</p>
    <p>Hola {{ $mensaje['client'] }} le escribimos para informarle que tiene una cita programada para la fecha {{ \Carbon\Carbon::parse($mensaje['date'])->format('d/m/Y') }}</p><br><br><br><br>Saludos.
</body>
</html>
