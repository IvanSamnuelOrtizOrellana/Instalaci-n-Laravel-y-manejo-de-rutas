<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de secion</title>
</head>
<body>
      <h1>Inicia secion en nuestra tienda online gluten-free.</h1>
  <form action="/recibe-formulario" method="POST">
    @csrf

    <label>Nombre:</label><br>
    <input type="text" name="nombre" required><br><br>

    <label>Correo:</label><br>
    <input type="email" name="correo" required><br><br>

    <label>Mensaje:</label><br>
    <textarea name="mensaje" rows="4" cols="30" required></textarea><br><br>

    <input type="submit" value="Enviar">
</form>

    <hr>
<footer>
        <p>AlvGLuten © 2026</p>
    </footer>
</body>
</html>