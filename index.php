<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario de Suscripción</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

  <div class="bg-white p-8 rounded-lg shadow-lg max-w-md w-full">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-4">¡Suscríbete a nuestro boletín!</h2>
    <p class="text-gray-600 text-center mb-6">Recibe las últimas actualizaciones y contenido exclusivo directamente en tu bandeja de entrada.</p>

    <?php
    if (isset($_GET['success']) && $_GET['success'] == 1) {
        echo '<p class="text-green-600 text-center mb-6">¡Gracias por suscribirte!</p>';
    } elseif (isset($_GET['error']) && $_GET['error'] == 1) {
        echo '<p class="text-red-600 text-center mb-6">Error al suscribirse. Inténtalo de nuevo.</p>';
    }
    ?>
    
    <form action="subscribe.php" method="POST">
      <div class="mb-4">
        <input type="email" name="email" placeholder="Ingresa tu correo electrónico" class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500" required>
      </div>
      <button type="submit" class="w-full bg-blue-600 text-white p-3 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-300">Suscribirse</button>
    </form>
  </div>

</body>
</html>
