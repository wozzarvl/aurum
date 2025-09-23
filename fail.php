<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Prueba ultra-rápida</title>
</head>
<body>

<h2>Test de velocidad – 3 campos</h2>

<form action="https://formsubmit.co/david.desantiago@aurumsolutions.mx" method="POST">
  <label>Nombre:
    <input type="text" name="nombre" required>
  </label><br><br>

  <label>Correo:
    <input type="email" name="correo" required>
  </label><br><br>

  <label>Mensaje:
    <textarea name="mensaje" rows="4" required></textarea>
  </label><br><br>

  <!-- Sin redirección (_next vacío) para no esperar respuesta -->
  <input type="hidden" name="_next" value="">
  <input type="hidden" name="_captcha" value="false">

  <button type="submit">Enviar</button>
</form>

</body>
</html>
