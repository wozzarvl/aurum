
<?php include('includes/header.php'); ?>
<header style="padding:120px 20px 40px;text-align:center;">
  <img src="assets/img/Logo_transparent.png" alt="Logo Aurum" style="width:100px;margin-bottom:25px;animation:float 3s ease-in-out infinite;filter:drop-shadow(0 0 5px rgba(212,175,55,0.2));">
  <h1 style="font-size:3rem;font-weight:700;margin-bottom:16px;">AURUM Solutions</h1>
  <h1 style="font-size:2.7rem;font-weight:700;margin-bottom:16px;color:#1c1c1e;">Formulario de Diagnóstico</h1>
  <p style="font-size:1.2rem;max-width:700px;margin:0 auto;color:#555;">
    Queremos conocer mejor tu empresa para ofrecerte la solución digital más adecuada.
  </p>
</header>
<section style="max-width:820px;margin:0 auto;padding:40px 20px 80px;">
  <form action="https://formsubmit.co/david.desantiago@aurumsolutions.mx" method="POST" style="display:flex;flex-direction:column;gap:28px;background:#fff;padding:48px;border-radius:24px;box-shadow:0 12px 32px rgba(0,0,0,0.06);">

    <div>
      <h2 style="font-size:2.3rem;font-weight:700;margin-bottom:16px;color:#1c1c1e;">Perfil de la Empresa</h2>
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">1. Nombre de la empresa</label>
      <input type="text" name="empresa" required style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">2. Año de inicio de operaciones</label>
      <input type="text" name="inicio" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">3. Número de empleados</label>
      <div style="margin-top:10px;display:flex;flex-direction:column;gap:6px;">
        <label><input type="checkbox" name="empleados[]" value="1-10"> 1–10</label>
        <label><input type="checkbox" name="empleados[]" value="11-50"> 11–50</label>
        <label><input type="checkbox" name="empleados[]" value="51-200"> 51–200</label>
        <label><input type="checkbox" name="empleados[]" value="Más de 200"> Más de 200</label>
      </div>
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">4. Sectores a los que venden principalmente (industria/giros)</label>
      <textarea name="sectores" rows="3" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;"></textarea>
    </div>

    <div>
      <h2 style="font-size:2.3rem;font-weight:700;margin-bottom:16px;color:#1c1c1e;">Objetivos del Sitio Web</h2>
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">5. ¿Qué objetivos tienen con su nueva página web?</label>
      <div style="margin-top:10px;display:flex;flex-direction:column;gap:6px;">
        <label><input type="checkbox" name="objetivos[]" value="Dar a conocer"> Dar a conocer la empresa y sus productos</label>
        <label><input type="checkbox" name="objetivos[]" value="Canales de venta"> Abrir nuevos canales de venta</label>
        <label><input type="checkbox" name="objetivos[]" value="Atención a clientes"> Facilitar la atención a clientes actuales</label>
        <label><input type="checkbox" name="objetivos[]" value="Nuevos mercados"> Expandir a nuevos mercados</label>
        <label><input type="checkbox" name="objetivos[]" value="Automatizar procesos"> Automatizar procesos</label>
        <input type="text" name="objetivos_otro" placeholder="Otro: Especifica aquí" style="padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;">
      </div>
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">6. ¿A qué tipo de cliente se dirige la página web?</label>
      <div style="margin-top:10px;display:flex;flex-direction:column;gap:6px;">
        <label><input type="checkbox" name="clientes[]" value="Público general"> Público general</label>
        <label><input type="checkbox" name="clientes[]" value="Empresas compradoras"> Empresas compradoras</label>
        <label><input type="checkbox" name="clientes[]" value="Distribuidores/mayoristas"> Distribuidores/mayoristas</label>
        <label><input type="checkbox" name="clientes[]" value="Gobierno"> Gobierno</label>
        <input type="text" name="clientes_otro" placeholder="Otro: Especifica aquí" style="padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;">
      </div>
    </div>

    <div>
       <label style="font-weight:600;color:#1c1c1e;">7. ¿Qué regiones cubren actualmente y hacia dónde les gustaría expandirse?</label>
       <textarea name="regiones" rows="3" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;"></textarea>
    </div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">8. ¿Tienen ejemplos o páginas web que les gusten? (referencias o inspiración)</label>
  <textarea name="referencias" rows="3" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;"></textarea>
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">9. ¿Qué funcionalidades les gustaría incluir en su portal web?</label>
  <div style="margin-top:10px;display:flex;flex-direction:column;gap:6px;">
    <label><input type="checkbox" name="funcionalidades[]" value="Catálogo digital"> Catálogo digital de productos</label>
    <label><input type="checkbox" name="funcionalidades[]" value="Tienda en línea"> Tienda en línea con carrito de compras</label>
    <label><input type="checkbox" name="funcionalidades[]" value="Portal exclusivo"> Portal exclusivo para clientes/distribuidores</label>
    <label><input type="checkbox" name="funcionalidades[]" value="Alta de clientes"> Registro y alta de clientes</label>
    <label><input type="checkbox" name="funcionalidades[]" value="Carrusel"> Carrusel de promociones o productos destacados</label>
    <label><input type="checkbox" name="funcionalidades[]" value="Formulario"> Formulario de contacto o cotización</label>
    <label><input type="checkbox" name="funcionalidades[]" value="Chat"> Chat en línea / WhatsApp</label>
    <label><input type="checkbox" name="funcionalidades[]" value="Seguimiento pedidos"> Seguimiento de pedidos</label>
    <label><input type="checkbox" name="funcionalidades[]" value="Inventario"> Integración con su sistema actual de inventario</label>
    <label><input type="checkbox" name="funcionalidades[]" value="Marketplaces"> Conexión con marketplaces</label>
    <label><input type="checkbox" name="funcionalidades[]" value="Blog"> Blog / noticias</label>
    <label><input type="checkbox" name="funcionalidades[]" value="Redes sociales"> Integración con redes sociales</label>
    <input type="text" name="funcionalidades_otro" placeholder="Otro: Especifica aquí" style="padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;">
  </div>
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">10. ¿Con qué frecuencia actualizan productos o promociones?</label>
  <div style="margin-top:10px;display:flex;flex-direction:column;gap:6px;">
    <label><input type="radio" name="actualizacion" value="Cada Dia"> Cada Dia</label>
    <label><input type="radio" name="actualizacion" value="Semanal"> Semanal</label>
    <label><input type="radio" name="actualizacion" value="Mensual"> Mensual</label>
    <label><input type="radio" name="actualizacion" value="Ocasional"> Ocasionalmente</label>
    <label><input type="radio" name="actualizacion" value="Nunca"> Casi no se actualizan</label>
  </div>
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">11. ¿Tienen ya un dominio y hosting?</label>
  <select name="dominio" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
    <option value="">Selecciona una opción</option>
    <option value="Sí">Sí</option>
    <option value="No">No</option>
    <option value="Ayuda">Necesitamos ayuda</option>
  </select>
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">12. ¿Cuentan con branding (logo, colores, tipografías)?</label>
  <select name="branding" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
    <option value="">Selecciona una opción</option>
    <option value="Sí">Sí</option>
    <option value="No">No</option>
    <option value="Ayuda">Necesitamos ayuda</option>
  </select>
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">13. ¿Tienen ya imágenes, descripciones y precios de productos?</label>
  <select name="recursos" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
    <option value="">Selecciona una opción</option>
    <option value="Sí">Sí</option>
    <option value="Proceso">En proceso</option>
    <option value="Apoyo">No, necesitamos apoyo</option>
  </select>
</div>

<div>
  <h2 style="font-size:2.3rem;font-weight:700;margin:32px 0 16px;color:#1c1c1e;">Diagnóstico Tecnológico</h2>
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">14. ¿Utilizan actualmente un ERP?</label>
  <div style="display:flex;flex-direction:column;gap:6px;">
    <label><input type="radio" name="erp" value="Sí"> Sí</label>
    <input type="text" name="erp_nombre" placeholder="¿Cuál?" style="padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;">
    <label><input type="radio" name="erp" value="No"> No</label>
    <label><input type="radio" name="erp" value="No seguro"> No estoy seguro</label>
  </div>
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">15. ¿Tienen algún CRM?</label>
  <div style="display:flex;flex-direction:column;gap:6px;">
    <label><input type="radio" name="crm" value="Sí"> Sí</label>
    <input type="text" name="crm_nombre" placeholder="¿Cuál?" style="padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;">
    <label><input type="radio" name="crm" value="No"> No</label>
    <label><input type="radio" name="crm" value="No seguro"> No estoy seguro</label>
  </div>
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">16. ¿Usan sistema para inventario o facturación electrónica (WMS)?</label>
  <div style="display:flex;flex-direction:column;gap:6px;">
    <label><input type="radio" name="facturacion" value="Sí"> Sí</label>
    <input type="text" name="facturacion_nombre" placeholder="¿Cuál?" style="padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;">
    <label><input type="radio" name="facturacion" value="No"> No</label>
    <label><input type="radio" name="facturacion" value="Manual"> Lo hacemos manualmente</label>
  </div>
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">17. ¿Tienen integraciones actuales con marketplaces?</label>
  <div style="display:flex;flex-direction:column;gap:6px;">
    <label><input type="radio" name="marketplace" value="Sí"> Sí</label>
    <input type="text" name="marketplace_nombre" placeholder="¿Cuáles?" style="padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;">
    <label><input type="radio" name="marketplace" value="No"> No</label>
    <label><input type="radio" name="marketplace" value="Interesado"> Estamos interesados</label>
  </div>
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">18. ¿Quién les da soporte tecnológico actualmente?</label>
  <div style="display:flex;flex-direction:column;gap:6px;">
    <label><input type="radio" name="soporte" value="Interno"> Personal interno</label>
    <label><input type="radio" name="soporte" value="Externo"> Empresa externa</label>
    <label><input type="radio" name="soporte" value="Ninguno"> No tenemos soporte dedicado</label>
    <input type="text" name="soporte_otro" placeholder="Otro: Especifica aquí" style="padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;">
  </div>
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">19. ¿Están abiertos a integrar nuevas herramientas tecnológicas?</label>
  <div style="display:flex;flex-direction:column;gap:6px;">
    <label><input type="radio" name="nuevas_herramientas" value="Sí"> Sí</label>
    <label><input type="radio" name="nuevas_herramientas" value="No"> No</label>
    <label><input type="radio" name="nuevas_herramientas" value="Depende"> Depende del costo/beneficio</label>
  </div>
</div>

    <div>
      <h2 style="font-size:2.3rem;font-weight:700;margin-bottom:16px;color:#1c1c1e;">Ventas y Pagos</h2>
    </div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">20. ¿Cómo venden actualmente?</label>
  <input type="text" name="venta_actual" placeholder="Tienda física, redes, sitio web, etc." style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">21. ¿Qué métodos de pago desean implementar?</label>
  <div style="display:flex;flex-direction:column;gap:6px;">
    <label><input type="checkbox" name="pagos[]" value="Transferencia"> Transferencia bancaria</label>
    <label><input type="checkbox" name="pagos[]" value="Tarjeta"> Tarjeta de crédito/débito</label>
    <label><input type="checkbox" name="pagos[]" value="PayPal"> PayPal</label>
    <label><input type="checkbox" name="pagos[]" value="MercadoPago"> MercadoPago</label>
    <label><input type="checkbox" name="pagos[]" value="Depósito"> Depósito en tienda</label>
    <input type="text" name="pagos_otro" placeholder="Otro: Especifica aquí" style="padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;">
  </div>
</div>

    <div>
      <h2 style="font-size:2.3rem;font-weight:700;margin-bottom:16px;color:#1c1c1e;">Proceso y Alcance del Proyecto</h2>
    </div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">22. ¿Qué nivel de participación desean en el desarrollo?</label>
  <select name="participacion" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
    <option value="">Selecciona una opción</option>
    <option value="Solo resultados">Solo resultados</option>
    <option value="Revisión por fases">Revisión por fases</option>
    <option value="Aprender administración">Queremos aprender a administrarlo</option>
  </select>
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">23. ¿Cada cuánto quieren avances o reportes?</label>
  <select name="reportes" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
    <option value="">Selecciona una opción</option>
    <option value="Semanal">Semanal</option>
    <option value="Quincenal">Quincenal</option>
    <option value="Cuando haya algo">Cuando haya algo importante</option>
    <option value="Sobre la marcha">Sobre la marcha</option>
  </select>
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">24. ¿Cuándo les gustaría tener la página web lista?</label>
  <input type="date" name="fecha_entrega" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
</div>

<div>
  <label style="font-weight:600;color:#1c1c1e;">25. ¿Cuentan con un presupuesto estimado?</label>
  <select name="Presupuesto" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
    <option value="">Selecciona una opción</option>
    <option value="si">Si</option>
    <option value="No">No</option>
    <option value="aun no">Aun no definido</option>
  </select>
</div>

    </div>

    <input type="hidden" name="_next" value="https://aurumsolutions.mx/gracias.php">
    <input type="hidden" name="_captcha" value="false">

    <button type="submit" style="padding:16px;background:#000;color:#fff;font-size:1rem;font-weight:600;border:none;border-radius:12px;cursor:pointer;">
      Enviar Diagnóstico
    </button>
  </form>
</section>
<?php include('includes/footer.php'); ?>