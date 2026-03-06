<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de secion</title>
</head>
<body>
      <h1>Inicia secion en nuestra tienda online gluten-free.</h1>
  @if ($errors->any())
    <div style="color: red; background: #fee; padding: 10px; margin-bottom: 10px;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
      <form action="/recibe-formulario" method="POST">
    @csrf

    <label>Nombre:</label><br>
    <input type="text" name="nombre" value="{{ old('nombre') }}" required><br><br>

    <label>Correo:</label><br>
    <input type="email" name="correo" value="{{ old('correo') }}" required><br><br>

    <label>Mensaje:</label><br>
    <textarea name="mensaje" rows="4" cols="30" value="{{ old('mensaje') }}"required></textarea><br><br>

    
    <button type="submit">Enviar</button>
</form>

    <hr>
<footer>
        <p>AlvGLuten © 2026</p>
    </footer>
</body  >
</html> 