<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - AURUM SOLUTIONS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 text-white">
<header class="p-3 bg-gray-800 text-3xl font-bold">AURUM SOLUTIONS</header>
    
    <nav class="p-2 bg-gray-800 text-center text-xl">
        <ul class="flex justify-center space-x-6">
            <li><a href="index.php" class="text-white hover:text-gray-400">Inicio</a></li>
            <li><a href="conoce.php" class="text-white hover:text-gray-400">Conoce</a></li>
            <li><a href="contacto.php" class="text-white hover:text-gray-400">Contacto</a></li>
        </ul>
    </nav>

    <section class="p-10">
        <h2 class="text-3xl font-bold text-center mb-6">Contáctanos</h2>
        <form class="max-w-lg mx-auto bg-gray-800 p-6 rounded-lg">
            <input type="text" placeholder="Nombre" class="w-full p-2 mb-4 rounded bg-gray-700 text-white" required>
            <input type="email" placeholder="Correo Electrónico" class="w-full p-2 mb-4 rounded bg-gray-700 text-white" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required>
            <input type="tel" placeholder="Teléfono" class="w-full p-2 mb-4 rounded bg-gray-700 text-white" pattern="\+(1|52|1[0-9]{2})[0-9]{10}" required>
            <textarea placeholder="Descripción del proyecto a cotizar" class="w-full p-2 mb-4 rounded bg-gray-700 text-white" required></textarea>
            <button type="submit" class="w-full p-2 bg-blue-600 rounded hover:bg-blue-700">Enviar</button>
        </form>
    </section>
    
    <footer class="text-center p-4 bg-gray-800">© 2025 AURUM SOLUTIONS</footer>
</body>
</html>