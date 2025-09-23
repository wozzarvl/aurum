
<?php include('includes/header.php'); ?>
<header style="min-height:100vh;display:flex;flex-direction:column;justify-content:center;align-items:center;padding:140px 20px 60px;text-align:center;">
  <img src="assets/img/Logo_transparent.png" alt="Logo Aurum" style="width:200px;margin-bottom:20px;animation:float 3s ease-in-out infinite;filter:drop-shadow(0 0 5px rgba(212,175,55,0.2));">
  <h1 style="font-size:3rem;font-weight:700;margin-bottom:16px;">AURUM Solutions</h1>
  <p style="font-size:1.25rem;max-width:700px;margin:0 auto;color:#3a3a3c;font-weight:400;">Innovación y tecnología para transformar tu negocio.</p>
</header>
<section style="padding:100px 20px;max-width:1100px;margin:0 auto;text-align:center;">
  <h2 style="font-size:2.25rem;color:#1c1c1e;margin-bottom:20px;">¿Qué hacemos?</h2>
  <p>En Aurum impulsamos la transformación digital de las empresas mediante soluciones tecnológicas que conectan, optimizan y automatizan. Nos especializamos en integrar sistemas, digitalizar procesos y desarrollar plataformas que generan eficiencia operativa y valor real para el negocio.</p>

  <div id="slideshow" style="
    position:relative;
    max-width:800px;
    margin:40px auto;
    overflow:hidden;
    border-radius:24px;
    box-shadow:0 10px 20px rgba(0,0,0,0.05);
    background-color:#f9f9f9;
  ">
    <img
      id="slide-img2"
      src=""
      alt="Nuestros proyectos"
      style="
        width:100%;
        display:block;
        opacity:0;
        transition:opacity 1s ease-in-out;
        border-radius:24px;
      ">
  </div>

  <?php
    $imgFiles = glob(__DIR__ . '/assets/img2/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
    $slides = [];
    foreach ($imgFiles as $file) {
      $slides[] = 'assets/img2/' . basename($file);
    }
    echo "<script>const slides = " . json_encode($slides) . ";</script>";
  ?>

  <script>
    (function(){
      if (!slides || !slides.length) return;
      let idx = 0;
      const imgEl = document.getElementById('slide-img2');
      function showNext() {
        imgEl.style.opacity = 0;
        setTimeout(() => {
          idx = (idx + 1) % slides.length;
          imgEl.src = slides[idx];
          imgEl.style.opacity = 1;
        }, 500);
      }
      imgEl.src = slides[0];
      imgEl.onload = () => imgEl.style.opacity = 1;
      setInterval(showNext, 5000);
    })();
  </script>
</section>
</section>
<section style="padding:80px 20px; max-width:1100px; margin:0 auto; auto;text-align:center;">

    <h2 style="font-size:2.25rem; color:#1c1c1e; margin-bottom:10px;">Nuestra Filosofía</h2>
    <div style="width:60px; height:4px; background:#d4af37; margin:20px auto;"></div>
    <p style="font-weight:400; max-width:800px; margin:0 auto 40px; color:#3a3a3c; font-size:1.125rem;">
      En Aurum creemos en la tecnología con propósito: combinamos 
      <strong style="color:#d4af37;">innovación constante</strong>, 
      <strong style="color:#d4af37;">pensamiento estratégico</strong> y 
      <strong style="color:#d4af37;">ejecución precisa</strong> 
      para generar soluciones que marcan la diferencia.
    </p>

    <div style="display:flex; justify-content:center; gap:40px; flex-wrap:wrap; margin-top:20px;">
      <div style="text-align:center; max-width:180px;">
        <img src="assets/img/icon-innovacion.png" alt="Innovación" style="width:48px; margin-bottom:10px;">
        <p style="font-weight:500; color:#1c1c1e;">Innovación constante</p>
      </div>
      <div style="text-align:center; max-width:180px;">
        <img src="assets/img/icon-estrategia.png" alt="Estrategia" style="width:48px; margin-bottom:10px;">
        <p style="font-weight:500; color:#1c1c1e;">Pensamiento estratégico</p>
      </div>
      <div style="text-align:center; max-width:180px;">
        <img src="assets/img/icon-ejecucion.png" alt="Ejecución" style="width:48px; margin-bottom:10px;">
        <p style="font-weight:500; color:#1c1c1e;">Ejecución precisa</p>
      </div>
    </div>
  </div>
</section>

<div style="height:100px;"></div>

<script>
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = 1;
        entry.target.style.transform = "translateY(0)";
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.3 });

  const card = document.querySelector('.filo-card');
  if (card) observer.observe(card);
</script>

<?php include('includes/footer.php'); ?>