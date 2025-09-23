<?php include('includes/header.php'); ?>

<!-- Estilos específicos para Gracias con check animado -->
<style>
  /* —— Animación pop-in para la tarjeta —— */
  @keyframes popIn {
    from { transform: scale(0.9); opacity: 0; }
    to   { transform: scale(1);   opacity: 1; }
  }

  /* —— Animación de trazo de check —— */
  @keyframes drawCheck {
    to { stroke-dashoffset: 0; }
  }

  .thank-card {
    background: #ffffff;
    border-radius: 32px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    max-width: 480px;
    width: 100%;
    padding: 60px 40px;
    text-align: center;
    margin: 0 auto;
    animation: popIn 0.5s ease-out forwards;
    opacity: 0;
  }

  .thank-card svg circle {
    opacity: 0.2;
  }

  .thank-card svg .checkmark {
    stroke-dasharray: 40;
    stroke-dashoffset: 40;
    animation: drawCheck 0.5s ease-out 0.3s forwards;
  }

  .thank-card h1 {
    font-family: 'Inter', sans-serif;
    font-size: 2rem;
    font-weight: 700;
    color: #1c1c1e;
    margin-bottom: 16px;
  }

  .thank-card p {
    font-family: 'Inter', sans-serif;
    font-size: 1rem;
    color: #666666;
    line-height: 1.6;
    margin-bottom: 40px;
  }

  .btn-return {
    display: inline-block;
    font-family: 'Inter', sans-serif;
    font-size: 1rem;
    font-weight: 500;
    color: #ffffff;
    background-color: #1c1c1e;
    padding: 14px 32px;
    border-radius: 999px;
    text-decoration: none;
    transition: background-color 0.2s, transform 0.2s;
  }
  .btn-return:hover {
    background-color: #000000;
    transform: translateY(-2px);
  }

  body {
    padding-top: 80px;
    background: #f4f4f6;
  }

  main {  
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: calc(100vh - 64px - 200px);
    padding: 40px 20px;
  }
</style>

<main>
  <div class="thank-card">
    <!-- SVG animado de check -->
    <svg
      width="120"
      height="120"
      viewBox="0 0 52 52"
      style="display:block; margin:0 auto 24px;"
    >
      <circle
        cx="26"
        cy="26"
        r="25"
        fill="none"
        stroke="#1c1c1e"
        stroke-width="2"
      />
      <path
        d="M14 27 L22 35 L38 19"
        fill="none"
        stroke="#1c1c1e"
        stroke-width="4"
        stroke-linecap="round"
        stroke-linejoin="round"
        class="checkmark"
      />
    </svg>

    <h1>Gracias por tu confianza</h1>
    <p>
      Hemos recibido tu información correctamente.<br>
      Muy pronto uno de nuestros expertos se pondrá en contacto contigo.
    </p>
    <a href="index.php" class="btn-return">Regresar al inicio</a>
  </div>
</main>

<?php include('includes/footer.php'); ?>
