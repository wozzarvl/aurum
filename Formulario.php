<?php include('includes/header.php'); ?>
<header style="padding:120px 20px 40px;text-align:center;">
  <img src="assets/img/Logo_transparent.png" alt="Logo Aurum" style="width:100px;margin-bottom:25px;animation:float 3s ease-in-out infinite;filter:drop-shadow(0 0 5px rgba(212,175,55,0.2));">
  <h1 style="font-size:3rem;font-weight:700;margin-bottom:16px;">AURUM Solutions</h1>
  <h1 style="font-size:2.7rem;font-weight:700;margin-bottom:16px;color:#1c1c1e;">Formulario de Diagnóstico</h1>
  <p style="font-size:1.2rem;max-width:700px;margin:0 auto;color:#555;">
    Queremos conocer mejor tu empresa para ofrecerte la solución ERP/WMS más adecuada.
  </p>
</header>

<section style="max-width:820px;margin:0 auto;padding:40px 20px 80px;">
  <form action="https://formsubmit.co/david.desantiago@aurumsolutions.mx" method="POST" style="display:flex;flex-direction:column;gap:28px;background:#fff;padding:48px;border-radius:24px;box-shadow:0 12px 32px rgba(0,0,0,0.06);">

    <!-- 1) Información general -->
    <div>
      <h2 style="font-size:2.3rem;font-weight:700;margin-bottom:16px;color:#1c1c1e;">Información General de la Empresa</h2>
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">1. Nombre de la empresa</label>
      <input type="text" name="empresa" required style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div>
        <label style="font-weight:600;color:#1c1c1e;">2. Industria / Giro</label>
        <input type="text" name="industria" required style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;" placeholder="Ferretera, alimentos, retail, manufactura…">
      </div>
      <div>
        <label style="font-weight:600;color:#1c1c1e;">3. Número de empleados</label>
        <input type="number" name="empleados" min="1" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;" placeholder="Ej. 50">
      </div>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div>
        <label style="font-weight:600;color:#1c1c1e;">4. Sucursales o plantas</label>
        <input type="number" name="sucursales" min="0" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;" placeholder="Ej. 2">
      </div>
      <div>
        <label style="font-weight:600;color:#1c1c1e;">5. Ubicación principal</label>
        <input type="text" name="ubicacion" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;" placeholder="Ciudad, Estado / País">
      </div>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div>
        <label style="font-weight:600;color:#1c1c1e;">6. Persona de contacto</label>
        <input type="text" name="contacto" required style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
      <div>
        <label style="font-weight:600;color:#1c1c1e;">7. Puesto</label>
        <input type="text" name="puesto" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div>
        <label style="font-weight:600;color:#1c1c1e;">8. Teléfono</label>
        <input type="tel" name="telefono" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;" placeholder="+52 33…">
      </div>
      <div>
        <label style="font-weight:600;color:#1c1c1e;">9. Correo electrónico</label>
        <input type="email" name="correo" required style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
    </div>

    <!-- 2) Volumen operativo (nuevos campos) -->
    <div>
      <h2 style="font-size:2.3rem;font-weight:700;margin:32px 0 16px;color:#1c1c1e;">Volumen Operativo</h2>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div>
        <label style="font-weight:600;color:#1c1c1e;">10. Pedidos mensuales</label>
        <select name="pedidos_mensuales" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>0 – 100</option>
          <option>101 – 500</option>
          <option>501 – 1,500</option>
          <option>1,501 – 5,000</option>
          <option>Más de 5,000</option>
          <option>Prefiero no decir</option>
          <option>Otro</option>
        </select>
        <input type="text" name="pedidos_mensuales_otro" class="otro-select" data-select="pedidos_mensuales" placeholder="Especifica tus pedidos/mes..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
      <div>
        <label style="font-weight:600;color:#1c1c1e;">11. Facturación mensual (MXN)</label>
        <select name="facturacion_mensual" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>&lt; 100 mil</option>
          <option>100 mil – 500 mil</option>
          <option>500 mil – 1 M</option>
          <option>1 M – 5 M</option>
          <option>5 M – 20 M</option>
          <option>Más de 20 M</option>
          <option>Prefiero no decir</option>
          <option>Otro</option>
        </select>
        <input type="text" name="facturacion_mensual_otro" class="otro-select" data-select="facturacion_mensual" placeholder="Especifica el rango o moneda..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div>
        <label style="font-weight:600;color:#1c1c1e;">12. Número de SKU activos</label>
        <select name="sku_count" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>1 – 50</option>
          <option>51 – 200</option>
          <option>201 – 1,000</option>
          <option>1,001 – 5,000</option>
          <option>Más de 5,000</option>
          <option>Otro</option>
        </select>
        <input type="text" name="sku_count_otro" class="otro-select" data-select="sku_count" placeholder="Especifica tus SKU..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
      <div>
        <label style="font-weight:600;color:#1c1c1e;">13. Número de clientes activos</label>
        <select name="clientes_count" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>1 – 50</option>
          <option>51 – 200</option>
          <option>201 – 1,000</option>
          <option>1,001 – 5,000</option>
          <option>Más de 5,000</option>
          <option>Otro</option>
        </select>
        <input type="text" name="clientes_count_otro" class="otro-select" data-select="clientes_count" placeholder="Especifica tus clientes..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
    </div>

    <!-- 3) Uso actual de Compact -->
    <div>
      <h2 style="font-size:2.3rem;font-weight:700;margin:32px 0 16px;color:#1c1c1e;">Uso Actual de Compact</h2>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div>
        <label style="font-weight:600;color:#1c1c1e;">14. ¿Cuánto tiempo llevan con Compact?</label>
        <select name="compact_tiempo" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>Menos de 1 año</option>
          <option>1 - 3 años</option>
          <option>3 - 5 años</option>
          <option>Más de 5 años</option>
          <option>Otro</option>
        </select>
        <input type="text" name="compact_tiempo_otro" class="otro-select" data-select="compact_tiempo" placeholder="Especifica otro tiempo..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
      <div>
        <label style="font-weight:600;color:#1c1c1e;">15. Satisfacción con Compact (1–5)</label>
        <select name="compact_satisf" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>1 - Muy bajo</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5 - Muy alto</option>
          <option>Otro</option>
        </select>
        <input type="text" name="compact_satisf_otro" class="otro-select" data-select="compact_satisf" placeholder="Explica tu escala/criterio..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">16. Módulos que utilizan</label>
      <div style="margin-top:10px;display:flex;flex-direction:column;gap:6px;">
        <?php
          // SIN Nómina ni Inventarios
          $mods = ['Contabilidad','Facturación','Compras','Ventas','Bancos','Tesorería','Reportes'];
          foreach($mods as $m){
            echo '<label><input type="checkbox" name="compact_modulos[]" value="'.$m.'"> '.$m.'</label>';
          }
        ?>
        <label><input id="modulos_otro_chk" type="checkbox" name="compact_modulos[]" value="Otro"> Otro</label>
        <input type="text" name="compact_modulos_otro" data-watch="#modulos_otro_chk" placeholder="Especifica otro módulo..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;">
      </div>
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">17. Principales limitaciones</label>
      <textarea name="compact_limits" rows="3" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;" placeholder="Integración, reporteo, escalabilidad, procesos manuales, etc."></textarea>
    </div>

    <!-- 4) Administración y finanzas -->
    <div>
      <h2 style="font-size:2.3rem;font-weight:700;margin:32px 0 16px;color:#1c1c1e;">Administración y Finanzas</h2>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div>
        <label style="font-weight:600;color:#1c1c1e;">18. ¿Cómo realizan la facturación?</label>
        <select name="facturacion_tipo" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>Automática</option>
          <option>Manual</option>
          <option>Mixta</option>
          <option>Otro</option>
        </select>
        <input type="text" name="facturacion_tipo_otro" class="otro-select" data-select="facturacion_tipo" placeholder="Describe cómo facturan..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
      <div>
        <label style="font-weight:600;color:#1c1c1e;">19. Conciliación bancaria</label>
        <select name="conciliacion" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>Dentro del sistema</option>
          <option>Externa (Excel u otro)</option>
          <option>No realizan</option>
          <option>Otro</option>
        </select>
        <input type="text" name="conciliacion_otro" class="otro-select" data-select="conciliacion" placeholder="Explica tu proceso de conciliación..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">20. Problemas financieros frecuentes</label>
      <div style="margin-top:10px;display:flex;flex-direction:column;gap:6px;">
        <?php
          $pf = ['Reportes financieros tardíos','Dificultad en declaraciones fiscales','Poca visibilidad de flujo de caja','Errores en conciliación','Demasiado trabajo manual'];
          foreach($pf as $p){
            echo '<label><input type="checkbox" name="problemas_fin[]" value="'.$p.'"> '.$p.'</label>';
          }
        ?>
        <label><input id="pf_otro_chk" type="checkbox" name="problemas_fin[]" value="Otro"> Otro</label>
        <input type="text" name="problemas_fin_otro" data-watch="#pf_otro_chk" placeholder="Describe el problema..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;">
      </div>
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">21. Importancia de tener finanzas en tiempo real</label>
      <select name="fin_tiempo_real" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
        <option value="">Selecciona</option>
        <option>Crítica</option>
        <option>Alta</option>
        <option>Media</option>
        <option>Baja</option>
        <option>Otro</option>
      </select>
      <input type="text" name="fin_tiempo_real_otro" class="otro-select" data-select="fin_tiempo_real" placeholder="Explica tu prioridad..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
    </div>

    <!-- 5) Operaciones e inventario -->
    <div>
      <h2 style="font-size:2.3rem;font-weight:700;margin:32px 0 16px;color:#1c1c1e;">Operaciones e Inventario</h2>
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">22. ¿Cómo gestionan actualmente el inventario?</label>
      <textarea name="gestion_inventario" rows="3" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;" placeholder="Entradas, salidas, ajustes, conteos cíclicos, etc."></textarea>
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">23. Controles que manejan</label>
      <div style="margin-top:10px;display:flex;flex-direction:column;gap:6px;">
        <?php
          $ctrl = ['Lotes','Series','Fechas de caducidad','Ubicaciones','Multialmacén','Conteos cíclicos','Ninguno'];
          foreach($ctrl as $c){
            echo '<label><input type="checkbox" name="controles[]" value="'.$c.'"> '.$c.'</label>';
          }
        ?>
        <label><input id="ctrl_otro_chk" type="checkbox" name="controles[]" value="Otro"> Otro</label>
        <input type="text" name="controles_otro" data-watch="#ctrl_otro_chk" placeholder="Especifica otro control..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;">
      </div>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr 1fr;gap:16px;">
      <div>
        <label style="font-weight:600;color:#1c1c1e;">24. ¿Cuentan con trazabilidad?</label>
        <select name="trazabilidad" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>Completa (origen a destino)</option>
          <option>Parcial</option>
          <option>No</option>
          <option>Otro</option>
        </select>
        <input type="text" name="trazabilidad_otro" class="otro-select" data-select="trazabilidad" placeholder="Describe tu trazabilidad..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
      <div>
        <label style="font-weight:600;color:#1c1c1e;">25. Errores en inventario</label>
        <select name="errores_inv" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>Muy frecuentes</option>
          <option>Ocasionales</option>
          <option>Raros</option>
          <option>Otro</option>
        </select>
        <input type="text" name="errores_inv_otro" class="otro-select" data-select="errores_inv" placeholder="Explica la frecuencia/condiciones..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
      <div>
        <label style="font-weight:600;color:#1c1c1e;">26. Eficiencia de surtido y embarque</label>
        <select name="eficiencia_surtido" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>Alta</option>
          <option>Media</option>
          <option>Baja</option>
          <option>Otro</option>
        </select>
        <input type="text" name="eficiencia_surtido_otro" class="otro-select" data-select="eficiencia_surtido" placeholder="Describe la eficiencia/indicadores..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
    </div>

    <!-- 6) Tecnología y sistemas -->
    <div>
      <h2 style="font-size:2.3rem;font-weight:700;margin:32px 0 16px;color:#1c1c1e;">Tecnología y Sistemas</h2>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div>
        <label style="font-weight:600;color:#1c1c1e;">27. Otros sistemas en uso (CRM, e-commerce, etc.)</label>
        <input type="text" name="otros_sistemas" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;" placeholder="Shopify, WooCommerce, Salesforce, Odoo, Excel…">
      </div>
      <div>
        <label style="font-weight:600;color:#1c1c1e;">28. ¿Sus sistemas están integrados?</label>
        <select name="integracion_actual" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>Totalmente integrados</option>
          <option>Parcialmente integrados</option>
          <option>No integrados</option>
          <option>Otro</option>
        </select>
        <input type="text" name="integracion_actual_otro" class="otro-select" data-select="integracion_actual" placeholder="Explica tu esquema de integración..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
    </div>

    <div style="display:grid;grid-template-columns:1fr 1fr;gap:16px;">
      <div>
        <label style="font-weight:600;color:#1c1c1e;">29. Nivel de digitalización</label>
        <select name="digitalizacion" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>Totalmente digitalizados</option>
          <option>Parcialmente digitalizados</option>
          <option>Mayormente manuales</option>
          <option>Otro</option>
        </select>
        <input type="text" name="digitalizacion_otro" class="otro-select" data-select="digitalizacion" placeholder="Describe tu situación actual..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
      <div>
        <label style="font-weight:600;color:#1c1c1e;">30. Infraestructura</label>
        <select name="infraestructura" style="width:100%;padding:14px;border-radius:12px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
          <option value="">Selecciona</option>
          <option>Servidores propios</option>
          <option>Nube</option>
          <option>Híbrido</option>
          <option>Otro</option>
        </select>
        <input type="text" name="infraestructura_otro" class="otro-select" data-select="infraestructura" placeholder="Describe tu infraestructura..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;margin-top:8px;">
      </div>
    </div>

    <!-- 7) Retos actuales -->
    <div>
      <h2 style="font-size:2.3rem;font-weight:700;margin:32px 0 16px;color:#1c1c1e;">Retos Actuales</h2>
    </div>

    <div>
      <label style="font-weight:600;color:#1c1c1e;">31. Selecciona los principales retos</label>
      <div style="margin-top:10px;display:flex;flex-direction:column;gap:6px;">
        <?php
          $retos = [
            'Falta de integración entre sistemas',
            'Errores frecuentes en inventarios',
            'Procesos manuales y retrabajo',
            'Falta de reportes confiables',
            'Escalabilidad limitada',
            'Problemas de trazabilidad',
            'Crecimiento operativo desordenado',
            'Integración e-commerce / CRM limitada',
            'Cumplimiento normativo'
          ];
          foreach($retos as $r){
            echo '<label><input type="checkbox" name="retos[]" value="'.$r.'"> '.$r.'</label>';
          }
        ?>
        <label><input id="retos_otro_chk" type="checkbox" name="retos[]" value="Otro"> Otro</label>
        <input type="text" name="retos_otro" data-watch="#retos_otro_chk" placeholder="Describe otro reto..." style="display:none;width:100%;padding:10px;border-radius:8px;border:1px solid #ccc;font-size:1rem;">
      </div>
    </div>

    <!-- Redirección / Captcha -->
    <input type="hidden" name="_next" value="https://aurumsolutions.mx/gracias.php">
    <input type="hidden" name="_captcha" value="false">

    <button type="submit" style="padding:16px;background:#000;color:#fff;font-size:1rem;font-weight:600;border:none;border-radius:12px;cursor:pointer;">
      Enviar Diagnóstico
    </button>
  </form>
</section>

<script>
/* 
  LÓGICA "OTRO":
  - Para checkboxes: cada input de texto tiene data-watch="#id_del_checkbox_otro"
  - Para selects: cada input de texto tiene data-select="nombre_del_select"
  Se muestran/ocultan automáticamente y limpian su valor al ocultarse.
*/
(function(){
  // Checkboxes / radios que disparan "Otro":
  function bindWatchInputs(){
    document.querySelectorAll('[data-watch]').forEach(txt=>{
      const sel = txt.getAttribute('data-watch');
      const trigger = document.querySelector(sel);
      if(!trigger) return;
      const toggle = ()=>{
        const show = trigger.checked;
        txt.style.display = show ? 'block' : 'none';
        if(!show) txt.value = '';
      };
      trigger.addEventListener('change', toggle);
      toggle();
    });
  }

  // Selects con opción "Otro":
  function bindSelectOtros(){
    document.querySelectorAll('.otro-select[data-select]').forEach(txt=>{
      const name = txt.getAttribute('data-select');
      const sel = document.querySelector(`select[name="${name}"]`);
      if(!sel) return;
      const toggle = ()=>{
        const show = sel.value === 'Otro';
        txt.style.display = show ? 'block' : 'none';
        if(!show) txt.value = '';
      };
      sel.addEventListener('change', toggle);
      toggle();
    });
  }

  bindWatchInputs();
  bindSelectOtros();
})();
</script>

<?php include('includes/footer.php'); ?>
