<?php include('includes/header.php'); ?>
<header style="padding:140px 20px 40px;text-align:center;">
  <h1 style="font-size:2.5rem;font-weight:700;margin-bottom:16px;">Contáctanos</h1>
  <p style="font-size:1.2rem;max-width:700px;margin:0 auto;color:#3a3a3c;">¿Tienes un proyecto en mente? Cuéntanos y te ayudamos a hacerlo realidad.</p>
</header>
<section style="max-width:700px;margin:0 auto;padding:40px 20px 80px;text-align:center;">
  <form action="https://formsubmit.co/david.desantiago@aurumsolutions.mx" method="POST" style="display:flex;flex-direction:column;gap:20px;background:#fff;padding:40px;border-radius:16px;box-shadow:0 8px 24px rgba(0,0,0,0.05);">
    <input type="text" name="nombre" placeholder="Nombre" required style="font-family:inherit;font-size:1rem;padding:12px;border:1px solid #ccc;border-radius:8px;">
    <input type="email" name="correo" placeholder="Correo Electrónico" required style="font-family:inherit;font-size:1rem;padding:12px;border:1px solid #ccc;border-radius:8px;">
    <input type="tel" name="telefono" placeholder="Teléfono" required style="font-family:inherit;font-size:1rem;padding:12px;border:1px solid #ccc;border-radius:8px;">
    <textarea name="mensaje" placeholder="Descripción del proyecto a cotizar" rows="5" required style="font-family:inherit;font-size:1rem;padding:12px;border:1px solid #ccc;border-radius:8px;"></textarea>
    <input type="hidden" name="_next" value="https://aurumsolutions.mx/gracias.php">
    <input type="hidden" name="_captcha" value="false">
    <button type="submit" style="padding:14px;background:#000;color:white;font-weight:600;font-size:1rem;border:none;border-radius:8px;cursor:pointer;transition:background 0.3s;">Enviar</button>
  </form>
</section>
<?php include('includes/footer.php'); ?>