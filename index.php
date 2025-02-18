<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AURUM SOLUTIONS</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const palabras = ["Innovamos....", "Conectamos....", "Creamos....", "Desarrollamos....", "Transformamos...."];
            let index = 0;
            let subIndex = 0;
            let isDeleting = false;
            const velocidad = 150;
            const textoElemento = document.getElementById("animacion-texto");

            function escribirTexto() {
                const palabraCompleta = palabras[index];
                textoElemento.textContent = palabraCompleta.substring(0, subIndex);
                
                if (!isDeleting && subIndex < palabraCompleta.length) {
                    subIndex++;
                } else if (isDeleting && subIndex > 0) {
                    subIndex--;
                } else {
                    isDeleting = !isDeleting;
                    if (!isDeleting) {
                        index = (index + 1) % palabras.length;
                    }
                }
                
                setTimeout(escribirTexto, isDeleting ? velocidad / 2 : velocidad);
            }
            
            escribirTexto();
        });
    </script>
    <style>
        .video-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        #background-video {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .video-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        section {
            position: relative;
            z-index: 1;
        }
    </style>
</head>
<body class="bg-gray-900 text-white flex flex-col min-h-screen">

    <header class="p-3 bg-gray-800 text-3xl font-bold">AURUM SOLUTIONS</header>
    
    <nav class="p-2 bg-gray-800 text-center text-xl">
        <ul class="flex justify-center space-x-6">
            <li><a href="index.php" class="text-white hover:text-gray-400">Inicio</a></li>
            <li><a href="conoce.php" class="text-white hover:text-gray-400">Conoce</a></li>
            <li><a href="contacto.php" class="text-white hover:text-gray-400">Contacto</a></li>
        </ul>
    </nav>

    <!-- Contenedor del video de fondo -->
    <div class="video-container">
        <video id="background-video" autoplay muted loop playsinline>
            <source src="MVI_0780.mp4" type="video/mp4">  <!-- Reemplaza con tu archivo de video -->
            Tu navegador no soporta videos en HTML5.
        </video>
    </div>
    <!-- Capa de fondo estático cuando el video termina -->
    <div class="video-overlay" id="video-overlay"></div>

    <!-- Contenedor centrado para el texto -->
    <section class="flex-grow flex items-center justify-center">
        <h1 class="text-6xl font-bold text-center">
            <span id="animacion-texto"></span>
        </h1>
    </section>

    <footer class="text-center p-4 bg-gray-800">
        © 2025 AURUM SOLUTIONS
    </footer>
</body>
</html>
