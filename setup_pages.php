<?php
/**
 * Script to set up bilingual pages (Home, Academy, Corporate) for Fluent Futures
 */

$custom_css = '';

// -------------------------------------------------------------
// PAGE CONTENT GENERATORS
// -------------------------------------------------------------

// ENGLISH HOME PAGE (With Program Cards added)
$en_home_content = $custom_css . '
<!-- wp:paragraph {"align":"right","className":"fluent-lang-toggle"} -->
<p class="has-text-align-right fluent-lang-toggle"><a href="http://localhost:8080/es/">ES</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Hero Section"},"align":"full","className":"fluent-hero","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"},"margin":{"top":"0px","bottom":"0px"}},"color":{"background":"#060b26"}},"textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-hero has-white-color has-background-color has-text-color" style="margin-top:0px;margin-bottom:0px;padding-top:90px;padding-bottom:90px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
      <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3.5rem","fontWeight":"800","lineHeight":"1.25"}},"textColor":"white"} -->
      <h1 class="wp-block-heading has-white-color has-text-color" style="font-size:3.5rem;font-weight:800;line-height:1.25">Welcome to<br/>Fluent Futures!</h1>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","lineHeight":"1.65"}},"textColor":"slate-300"} -->
      <p style="font-size:1.25rem;line-height:1.65;color:#cbd5e1;margin:24px 0 36px 0">At Fluent Futures, we help students communicate with confidence in everyday English. Our goal is to make English practical, useful, and easy to apply in real life, work, and daily conversations.</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-fill fluent-btn-whatsapp","textColor":"white"} -->
        <div class="wp-block-button is-style-fill fluent-btn-whatsapp"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="https://wa.me/14077605707" style="font-weight:700" target="_blank" rel="noreferrer noopener">Contact via WhatsApp</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"is-style-outline fluent-btn-tiktok","textColor":"white"} -->
        <div class="wp-block-button is-style-outline fluent-btn-tiktok"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="https://www.tiktok.com/@fluentfutures.8" style="font-weight:700" target="_blank" rel="noreferrer noopener">Follow on TikTok</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
      <!-- wp:image {"id":12,"sizeSlug":"large","linkDestination":"none","className":"fluent-img-glow"} -->
      <figure class="wp-block-image size-large fluent-img-glow"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_8347.jpeg" alt="Students studying together" class="wp-image-12" style="width:100%;height:auto"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Our Programs Section"},"align":"full","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color" style="padding-top:90px;padding-bottom:90px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"white"} -->
  <h2 class="wp-block-heading has-text-align-center" style="font-size:2.5rem;font-weight:700;color:#ffffff;margin-bottom:16px">Our Programs</h2>
  <!-- /wp:heading -->
  
  <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"1.125rem"}},"textColor":"slate-300"} -->
  <p class="has-text-align-center" style="font-size:1.125rem;color:#cbd5e1;margin-bottom:56px">Practical English training built for your daily life and career success.</p>
  <!-- /wp:paragraph -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"50%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:50%">
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading" style="font-size:1.75rem;font-weight:700;color:#ffffff;margin-bottom:16px">Fluent Futures Academy</h3>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.65"}},"textColor":"slate-300"} -->
      <p style="font-size:1.05rem;line-height:1.65;color:#cbd5e1;margin-bottom:24px">Interactive English classes for adults looking to improve everyday communication, grammar, confidence, and conversation. Level up your speaking in a supportive environment.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700"}},"textColor":"white"} -->
      <p style="font-size:1.125rem;font-weight:700;color:#ffffff;margin-bottom:28px">Rate: <span style="color:#f26419">$180 per student</span></p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"fluent-btn-orange"} -->
        <div class="wp-block-button fluent-btn-orange"><a class="wp-block-button__link wp-element-button" href="http://localhost:8080/academy/">Learn More</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"50%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:50%">
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading" style="font-size:1.75rem;font-weight:700;color:#ffffff;margin-bottom:16px">Fluent Futures Corporate</h3>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.65"}},"textColor":"slate-300"} -->
      <p style="font-size:1.05rem;line-height:1.65;color:#cbd5e1;margin-bottom:24px">Specialized technical English training for worksites and companies. Focuses on construction crew communication, vocabulary, and safety in partnership with CSC.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700"}},"textColor":"white"} -->
      <p style="font-size:1.125rem;font-weight:700;color:#ffffff;margin-bottom:28px">Rate: <span style="color:#f26419">$210 per student</span></p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"fluent-btn-orange"} -->
        <div class="wp-block-button fluent-btn-orange"><a class="wp-block-button__link wp-element-button" href="http://localhost:8080/corporate/">Learn More</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Meet the Founder Section"},"align":"full","className":"fluent-founder-section","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}},"color":{"background":"#0a0f2b"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-founder-section has-background-color" style="padding-top:90px;padding-bottom:90px;padding-left:24px;padding-right:24px;background-color:#0a0f2b">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
      <!-- wp:image {"id":11,"sizeSlug":"large","linkDestination":"none","className":"fluent-img-normal"} -->
      <figure class="wp-block-image size-large fluent-img-normal"><img src="http://localhost:8080/wp-content/uploads/2026/06/168f3f2f-11c2-415d-b51c-d713d1626e79.jpg" alt="Teacher Angie teaching classroom" class="wp-image-11" style="width:100%;height:auto"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
      <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"white"} -->
      <h2 class="wp-block-heading" style="font-size:2.5rem;font-weight:700;color:#ffffff">Teacher Angie — Founder of Fluent Futures</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.75"}},"textColor":"slate-300"} -->
      <p style="font-size:1.125rem;line-height:1.75;color:#cbd5e1;margin-top:24px">I am passionate about teaching English and helping my students grow. Fluent Futures is more than a school — it is a community where students feel supported, motivated, and confident to improve every day. We also have a bit of fun.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.75"}},"textColor":"slate-300"} -->
      <p style="font-size:1.125rem;line-height:1.75;color:#cbd5e1;margin-top:16px">I give the latino community a voice and bridge the gap between cultures in Austin.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"School Gallery Section"},"align":"full","className":"fluent-gallery-section","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-gallery-section has-background-color" style="padding-top:90px;padding-bottom:90px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"white"} -->
  <h2 class="wp-block-heading has-text-align-center" style="font-size:2.5rem;font-weight:700;color:#ffffff;margin-bottom:56px">Our Community &amp; Learning Space</h2>
  <!-- /wp:heading -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:image {"id":13,"sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_7220.jpg" alt="School campus exterior" class="wp-image-13" style="width:100%;height:240px;object-fit:cover"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}},"textColor":"white"} -->
      <h3 class="wp-block-heading" style="font-size:1.5rem;font-weight:600;color:#ffffff;margin-top:24px;margin-bottom:12px">Our Campus</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.6"}},"textColor":"slate-300"} -->
      <p style="font-size:1rem;line-height:1.6;color:#cbd5e1">A welcoming and modern campus designed to foster collaboration and interactive learning.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:image {"id":14,"sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_3486.jpg" alt="Interactive classroom" class="wp-image-14" style="width:100%;height:240px;object-fit:cover"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}},"textColor":"white"} -->
      <h3 class="wp-block-heading" style="font-size:1.5rem;font-weight:600;color:#ffffff;margin-top:24px;margin-bottom:12px">Interactive Classrooms</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.6"}},"textColor":"slate-300"} -->
      <p style="font-size:1rem;line-height:1.6;color:#cbd5e1">Equipped with comfortable spaces that encourage confidence and active speaking from day one.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:image {"id":15,"sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_8810.jpg" alt="Wide classroom view" class="wp-image-15" style="width:100%;height:240px;object-fit:cover"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}},"textColor":"white"} -->
      <h3 class="wp-block-heading" style="font-size:1.5rem;font-weight:600;color:#ffffff;margin-top:24px;margin-bottom:12px">Dynamic Learning</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.6"}},"textColor":"slate-300"} -->
      <p style="font-size:1rem;line-height:1.6;color:#cbd5e1">Experience practical language training that translates directly into your daily life and career.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->';

// SPANISH HOME PAGE (Inicio - With Program Cards added)
$es_home_content = $custom_css . '
<!-- wp:paragraph {"align":"right","className":"fluent-lang-toggle"} -->
<p class="has-text-align-right fluent-lang-toggle"><a href="http://localhost:8080/">EN</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Hero Section ES"},"align":"full","className":"fluent-hero","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"},"margin":{"top":"0px","bottom":"0px"}},"color":{"background":"#060b26"}},"textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-hero has-white-color has-background-color has-text-color" style="margin-top:0px;margin-bottom:0px;padding-top:90px;padding-bottom:90px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
      <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3.5rem","fontWeight":"800","lineHeight":"1.25"}},"textColor":"white"} -->
      <h1 class="wp-block-heading has-white-color has-text-color" style="font-size:3.5rem;font-weight:800;line-height:1.25">Bienvenidos a<br/>Fluent Futures</h1>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","lineHeight":"1.65"}},"textColor":"slate-300"} -->
      <p style="font-size:1.25rem;line-height:1.65;color:#cbd5e1;margin:24px 0 36px 0">En Fluent Futures ayudamos a nuestros estudiantes a comunicarse con confianza en inglés todos los días. Nuestro objetivo es hacer que el inglés sea práctico, útil y fácil de usar en la vida real, el trabajo y conversaciones diarias.</p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-fill fluent-btn-whatsapp","textColor":"white"} -->
        <div class="wp-block-button is-style-fill fluent-btn-whatsapp"><a class="wp-block-button__link has-white-color has-background-color has-text-color wp-element-button" href="https://wa.me/14077605707" style="font-weight:700" target="_blank" rel="noreferrer noopener">Contactar por WhatsApp</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"is-style-outline fluent-btn-tiktok","textColor":"white"} -->
        <div class="wp-block-button is-style-outline fluent-btn-tiktok"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="https://www.tiktok.com/@fluentfutures.8" style="font-weight:700" target="_blank" rel="noreferrer noopener">Seguir en TikTok</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
      <!-- wp:image {"id":12,"sizeSlug":"large","linkDestination":"none","className":"fluent-img-glow"} -->
      <figure class="wp-block-image size-large fluent-img-glow"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_8347.jpeg" alt="Estudiantes estudiando juntos" class="wp-image-12" style="width:100%;height:auto"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Our Programs Section ES"},"align":"full","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull has-background-color" style="padding-top:90px;padding-bottom:90px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"white"} -->
  <h2 class="wp-block-heading has-text-align-center" style="font-size:2.5rem;font-weight:700;color:#ffffff;margin-bottom:16px">Nuestros Programas</h2>
  <!-- /wp:heading -->
  
  <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"1.125rem"}},"textColor":"slate-300"} -->
  <p class="has-text-align-center" style="font-size:1.125rem;color:#cbd5e1;margin-bottom:56px">Capacitación práctica de inglés diseñada para tu día a día y éxito laboral.</p>
  <!-- /wp:paragraph -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"50%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:50%">
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading" style="font-size:1.75rem;font-weight:700;color:#ffffff;margin-bottom:16px">Fluent Futures Academy</h3>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.65"}},"textColor":"slate-300"} -->
      <p style="font-size:1.05rem;line-height:1.65;color:#cbd5e1;margin-bottom:24px">Clases interactivas de inglés para adultos enfocadas en comunicación cotidiana, gramática, confianza y conversación. Mejora tus habilidades de habla en un ambiente de apoyo.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700"}},"textColor":"white"} -->
      <p style="font-size:1.125rem;font-weight:700;color:#ffffff;margin-bottom:28px">Tarifa: <span style="color:#f26419">$180 por estudiante</span></p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"fluent-btn-orange"} -->
        <div class="wp-block-button fluent-btn-orange"><a class="wp-block-button__link wp-element-button" href="http://localhost:8080/es/academia/">Ver Más</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"50%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:50%">
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.75rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading" style="font-size:1.75rem;font-weight:700;color:#ffffff;margin-bottom:16px">Fluent Futures Corporate</h3>
      <!-- /wp:heading -->
      
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.65"}},"textColor":"slate-300"} -->
      <p style="font-size:1.05rem;line-height:1.65;color:#cbd5e1;margin-bottom:24px">Capacitación de inglés técnico especializado para empresas. Enfocado en la comunicación de equipos en obra, materiales y seguridad, en alianza con CSC.</p>
      <!-- /wp:paragraph -->
      
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","fontWeight":"700"}},"textColor":"white"} -->
      <p style="font-size:1.125rem;font-weight:700;color:#ffffff;margin-bottom:28px">Tarifa: <span style="color:#f26419">$210 por estudiante</span></p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"fluent-btn-orange"} -->
        <div class="wp-block-button fluent-btn-orange"><a class="wp-block-button__link wp-element-button" href="http://localhost:8080/es/corporativo/">Ver Más</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Meet the Founder Section ES"},"align":"full","className":"fluent-founder-section","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}},"color":{"background":"#0a0f2b"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-founder-section has-background-color" style="padding-top:90px;padding-bottom:90px;padding-left:24px;padding-right:24px;background-color:#0a0f2b">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
      <!-- wp:image {"id":11,"sizeSlug":"large","linkDestination":"none","className":"fluent-img-normal"} -->
      <figure class="wp-block-image size-large fluent-img-normal"><img src="http://localhost:8080/wp-content/uploads/2026/06/168f3f2f-11c2-415d-b51c-d713d1626e79.jpg" alt="Teacher Angie enseñando en el aula" class="wp-image-11" style="width:100%;height:auto"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
      <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"white"} -->
      <h2 class="wp-block-heading" style="font-size:2.5rem;font-weight:700;color:#ffffff">Teacher Angie — Fundadora de Fluent Futures</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.75"}},"textColor":"slate-300"} -->
      <p style="font-size:1.125rem;line-height:1.75;color:#cbd5e1;margin-top:24px">Me apasiona enseñar inglés y ayudar a mis estudiantes a crecer. Fluent Futures es más que una escuela; es una comunidad donde los estudiantes se sienten apoyados, motivados y con la confianza necesaria para mejorar cada día. También nos divertimos en el proceso.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.75"}},"textColor":"slate-300"} -->
      <p style="font-size:1.125rem;line-height:1.75;color:#cbd5e1;margin-top:16px">Le damos una voz a la comunidad latina y ayudamos a cerrar la brecha entre culturas en Austin.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"School Gallery Section ES"},"align":"full","className":"fluent-gallery-section","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-gallery-section has-background-color" style="padding-top:90px;padding-bottom:90px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"white"} -->
  <h2 class="wp-block-heading has-text-align-center" style="font-size:2.5rem;font-weight:700;color:#ffffff;margin-bottom:56px">Nuestra Comunidad y Espacios de Aprendizaje</h2>
  <!-- /wp:heading -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:image {"id":13,"sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_7220.jpg" alt="Fachada de la escuela" class="wp-image-13" style="width:100%;height:240px;object-fit:cover"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}},"textColor":"white"} -->
      <h3 class="wp-block-heading" style="font-size:1.5rem;font-weight:600;color:#ffffff;margin-top:24px;margin-bottom:12px">Nuestra Sede</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.6"}},"textColor":"slate-300"} -->
      <p style="font-size:1rem;line-height:1.6;color:#cbd5e1">Un campus acogedor y moderno diseñado para fomentar la colaboración y el aprendizaje interactivo.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:image {"id":14,"sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_3486.jpg" alt="Aula de clase interactiva" class="wp-image-14" style="width:100%;height:240px;object-fit:cover"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}},"textColor":"white"} -->
      <h3 class="wp-block-heading" style="font-size:1.5rem;font-weight:600;color:#ffffff;margin-top:24px;margin-bottom:12px">Aulas Interactivas</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.6"}},"textColor":"slate-300"} -->
      <p style="font-size:1rem;line-height:1.6;color:#cbd5e1">Equipadas con espacios cómodos que fomentan la confianza y la práctica oral desde el primer día.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:image {"id":15,"sizeSlug":"large","linkDestination":"none"} -->
      <figure class="wp-block-image size-large"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_8810.jpg" alt="Clase grupal amplia" class="wp-image-15" style="width:100%;height:240px;object-fit:cover"/></figure>
      <!-- /wp:image -->
      <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}},"textColor":"white"} -->
      <h3 class="wp-block-heading" style="font-size:1.5rem;font-weight:600;color:#ffffff;margin-top:24px;margin-bottom:12px">Aprendizaje Dinámico</h3>
      <!-- /wp:heading -->
      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1rem","lineHeight":"1.6"}},"textColor":"slate-300"} -->
      <p style="font-size:1rem;line-height:1.6;color:#cbd5e1">Experimenta un entrenamiento práctico de inglés que se aplica directamente en tu vida diaria y laboral.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->';

// ENGLISH ACADEMY PAGE
$en_academy_content = $custom_css . '
<!-- wp:paragraph {"align":"right","className":"fluent-lang-toggle"} -->
<p class="has-text-align-right fluent-lang-toggle"><a href="http://localhost:8080/es/academia/">ES</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Academy Hero Section"},"align":"full","className":"fluent-hero","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-hero has-background-color" style="padding-top:80px;padding-bottom:80px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
      <!-- wp:paragraph {"className":"fluent-badge"} -->
      <p class="fluent-badge">Adult English Program</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3rem","fontWeight":"800","lineHeight":"1.2"}},"textColor":"white"} -->
      <h1 class="wp-block-heading" style="font-size:3rem;font-weight:800;line-height:1.2;color:#ffffff">Fluent Futures Academy</h1>
      <!-- /wp:heading -->

      <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}},"textColor":"white"} -->
      <h2 class="wp-block-heading" style="font-size:1.5rem;font-weight:600;color:#ffffff;margin-top:16px;margin-bottom:24px">6-Level Conversational English Program</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.7"}},"textColor":"slate-300"} -->
      <p style="font-size:1.125rem;line-height:1.7;color:#cbd5e1">Interactive English classes designed for adult students who want to improve their everyday communication, confidence, grammar, and pronunciation. We provide a supportive, active learning space where you can practice speaking from day one.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <p style="font-size:1.25rem;font-weight:700;color:#ffffff;margin-top:24px;margin-bottom:32px">Program Rate: <span style="color:#f26419;font-size:1.5rem;font-weight:800">$180 per student</span></p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-fill fluent-btn-whatsapp","textColor":"white"} -->
        <div class="wp-block-button is-style-fill fluent-btn-whatsapp"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="https://wa.me/14077605707?text=Hello%20Teacher%20Angie%2C%20I%20am%20interested%20in%20Fluent%20Futures%20Academy%21" style="font-weight:700" target="_blank" rel="noreferrer noopener">Register via WhatsApp</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"is-style-outline fluent-btn-tiktok","textColor":"white"} -->
        <div class="wp-block-button is-style-outline fluent-btn-tiktok"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="https://www.tiktok.com/@fluentfutures.8" style="font-weight:700" target="_blank" rel="noreferrer noopener">Follow Angie on TikTok</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
      <!-- wp:image {"id":15,"sizeSlug":"large","linkDestination":"none","className":"fluent-img-glow"} -->
      <figure class="wp-block-image size-large fluent-img-glow"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_8810.jpg" alt="Academy classroom learning" class="wp-image-15" style="width:100%;height:auto"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"fluent-curriculum-section","align":"full","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-curriculum-section has-background-color" style="padding-top:90px;padding-bottom:90px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"white"} -->
  <h2 class="wp-block-heading has-text-align-center" style="font-size:2.5rem;font-weight:700;color:#ffffff;margin-bottom:16px">Our Curriculum</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"1.125rem"}},"textColor":"slate-300"} -->
  <p class="has-text-align-center" style="font-size:1.125rem;color:#cbd5e1;margin-bottom:60px">A step-by-step program designed to take you from basics to fluent conversations.</p>
  <!-- /wp:paragraph -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Level 1</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Conversational Basics</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Build a strong foundation. Learn greetings, introductions, numbers, simple present-tense questions, and essential everyday vocabulary.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Level 2</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Daily Interactions</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Get comfortable with daily routines, telling time, talking about hobbies, shopping, ordering food, and navigating basic social situations.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Level 3</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Travel &amp; Sharing</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Expand your horizons. Practice describing past experiences, talking about travel, asking for directions, and sharing simple opinions.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->

  <!-- wp:spacer {"height":"32px"} -->
  <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Level 4</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Discussion &amp; Debate</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Participate in group discussions. Talk in detail about current events, books, movies, future plans, and express thoughts on complex topics.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Level 5</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Workplace &amp; Community</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Communicate effectively in professional and public environments. Learn how to explain situations, speak to supervisors, and connect ideas.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Level 6</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Conversational Fluency</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Speak with native-like confidence. Master advanced idioms, natural phrasing, storytelling, and discuss abstract concepts fluidly.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->';

// SPANISH ACADEMY PAGE (Academia)
$es_academy_content = $custom_css . '
<!-- wp:paragraph {"align":"right","className":"fluent-lang-toggle"} -->
<p class="has-text-align-right fluent-lang-toggle"><a href="http://localhost:8080/academy/">EN</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Academy Hero Section ES"},"align":"full","className":"fluent-hero","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-hero has-background-color" style="padding-top:80px;padding-bottom:80px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
      <!-- wp:paragraph {"className":"fluent-badge"} -->
      <p class="fluent-badge">Programa de Inglés para Adultos</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3rem","fontWeight":"800","lineHeight":"1.2"}},"textColor":"white"} -->
      <h1 class="wp-block-heading" style="font-size:3rem;font-weight:800;line-height:1.2;color:#ffffff">Academia Fluent Futures</h1>
      <!-- /wp:heading -->

      <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}},"textColor":"white"} -->
      <h2 class="wp-block-heading" style="font-size:1.5rem;font-weight:600;color:#ffffff;margin-top:16px;margin-bottom:24px">Programa de Inglés Conversacional de 6 Niveles</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.7"}},"textColor":"slate-300"} -->
      <p style="font-size:1.125rem;line-height:1.7;color:#cbd5e1">Clases interactivas de inglés diseñadas para estudiantes adultos que buscan mejorar su comunicación diaria, gramática, confianza y habilidades de conversación. Ofrecemos un espacio de aprendizaje dinámico donde practicarás desde el primer día.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <p style="font-size:1.25rem;font-weight:700;color:#ffffff;margin-top:24px;margin-bottom:32px">Tarifa del programa: <span style="color:#f26419;font-size:1.5rem;font-weight:800">$180 por estudiante</span></p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-fill fluent-btn-whatsapp","textColor":"white"} -->
        <div class="wp-block-button is-style-fill fluent-btn-whatsapp"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="https://wa.me/14077605707?text=Hola%20Teacher%20Angie%2C%20estoy%20interesado%20en%20la%20Academia%20Fluent%20Futures%21" style="font-weight:700" target="_blank" rel="noreferrer noopener">Registrarse por WhatsApp</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"is-style-outline fluent-btn-tiktok","textColor":"white"} -->
        <div class="wp-block-button is-style-outline fluent-btn-tiktok"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="https://www.tiktok.com/@fluentfutures.8" style="font-weight:700" target="_blank" rel="noreferrer noopener">Seguir a Angie en TikTok</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
      <!-- wp:image {"id":15,"sizeSlug":"large","linkDestination":"none","className":"fluent-img-glow"} -->
      <figure class="wp-block-image size-large fluent-img-glow"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_8810.jpg" alt="Aprendizaje en aula de la academia" class="wp-image-15" style="width:100%;height:auto"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"fluent-curriculum-section","align":"full","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-curriculum-section has-background-color" style="padding-top:90px;padding-bottom:90px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"white"} -->
  <h2 class="wp-block-heading has-text-align-center" style="font-size:2.5rem;font-weight:700;color:#ffffff;margin-bottom:16px">Plan de Estudios</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"1.125rem"}},"textColor":"slate-300"} -->
  <p class="has-text-align-center" style="font-size:1.125rem;color:#cbd5e1;margin-bottom:60px">Un programa progresivo diseñado para llevarte desde las bases hasta una fluidez completa.</p>
  <!-- /wp:paragraph -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Nivel 1</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Bases Conversacionales</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Construye una base sólida. Aprende saludos, presentaciones, números, preguntas sencillas en presente y vocabulario esencial del día a día.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Nivel 2</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Interacciones Diarias</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Gana comodidad con rutinas cotidianas, dar la hora, pasatiempos, compras, ordenar comida y desenvolverte en interacciones sociales básicas.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Nivel 3</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Viajes y Experiencias</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Amplía tus horizontes. Practica describiendo experiencias pasadas, planes de viaje, pedir indicaciones y expresar opiniones sencillas.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->

  <!-- wp:spacer {"height":"32px"} -->
  <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Nivel 4</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Discusión y Debate</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Participa en discusiones grupales. Habla en detalle sobre noticias de actualidad, planes futuros, libros, películas y expresa opiniones complejas.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Nivel 5</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Inglés Laboral y Social</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Comunícate eficazmente en entornos profesionales y públicos. Aprende a explicar situaciones extensas, hablar con supervisores y conectar ideas.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Nivel 6</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Fluidez Conversacional</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Habla con total confianza. Domina modismos avanzados, frases naturales, narración de historias y discusiones abstractas fluidas.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->';

// ENGLISH CORPORATE PAGE
$en_corporate_content = $custom_css . '
<!-- wp:paragraph {"align":"right","className":"fluent-lang-toggle"} -->
<p class="has-text-align-right fluent-lang-toggle"><a href="http://localhost:8080/es/corporativo/">ES</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Corporate Hero Section"},"align":"full","className":"fluent-hero","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-hero has-background-color" style="padding-top:80px;padding-bottom:80px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
      <!-- wp:paragraph {"className":"fluent-badge"} -->
      <p class="fluent-badge">Corporate B2B Program</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3rem","fontWeight":"800","lineHeight":"1.2"}},"textColor":"white"} -->
      <h1 class="wp-block-heading" style="font-size:3rem;font-weight:800;line-height:1.2;color:#ffffff">Fluent Futures Corporate</h1>
      <!-- /wp:heading -->

      <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}},"textColor":"white"} -->
      <h2 class="wp-block-heading" style="font-size:1.5rem;font-weight:600;color:#ffffff;margin-top:16px;margin-bottom:24px">Workplace &amp; Technical Construction English</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.7"}},"textColor":"slate-300"} -->
      <p style="font-size:1.125rem;line-height:1.7;color:#cbd5e1">Specialized workplace English training designed for companies. We focus on construction job-site safety, tools, crew communication, and daily reporting. Build safety awareness, improve site coordination, and give your crew a voice.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <p style="font-size:1.25rem;font-weight:700;color:#ffffff;margin-top:24px;margin-bottom:32px">Program Rate: <span style="color:#f26419;font-size:1.5rem;font-weight:800">$210 per student</span></p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-fill fluent-btn-whatsapp","textColor":"white"} -->
        <div class="wp-block-button is-style-fill fluent-btn-whatsapp"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="https://wa.me/14077605707?text=Hello%20Teacher%20Angie%2C%20I%20am%20interested%20in%20Fluent%20Futures%20Corporate%20Training%21" style="font-weight:700" target="_blank" rel="noreferrer noopener">Inquire via WhatsApp</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"is-style-outline fluent-btn-tiktok","textColor":"white"} -->
        <div class="wp-block-button is-style-outline fluent-btn-tiktok"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="tel:5122159084" style="font-weight:700">Call Partner (CSC)</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
      <!-- wp:image {"id":17,"sizeSlug":"large","linkDestination":"none","className":"fluent-img-glow"} -->
      <figure class="wp-block-image size-large fluent-img-glow"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_5903.jpg" alt="Construction job-site training" class="wp-image-17" style="width:100%;height:auto"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"fluent-curriculum-section","align":"full","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-curriculum-section has-background-color" style="padding-top:90px;padding-bottom:90px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"white"} -->
  <h2 class="wp-block-heading has-text-align-center" style="font-size:2.5rem;font-weight:700;color:#ffffff;margin-bottom:16px">Construction English Curriculum</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"1.125rem"}},"textColor":"slate-300"} -->
  <p class="has-text-align-center" style="font-size:1.125rem;color:#cbd5e1;margin-bottom:60px">6 Levels designed specifically for worksite coordination, safety, and reporting.</p>
  <!-- /wp:paragraph -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Level 1</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Job Site Foundations</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Employees learn basic English for introductions, job titles, tools, materials, locations, safety words, and simple workplace questions.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Level 2</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Daily Work &amp; Instructions</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Employees learn to talk about routines, responsibilities, schedules, instructions, and obligations using phrases like "I need," "I have to," and "Can you?".</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Level 3</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Past Work &amp; Job Reports</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Employees learn to report completed tasks, explain worksite issues, and describe exactly what happened during a shift clearly.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->

  <!-- wp:spacer {"height":"32px"} -->
  <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Level 4</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Problem Solving on Site</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Employees practice asking for help, comparing construction materials, explaining repairs, discussing deadlines, and resolving safety issues.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Level 5</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Workplace Communication</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Employees learn how to explain complex worksite situations, report delays to supervisors, coordinate with subteams, and connect details clearly.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Level 6</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Fluency for Crew Leaders</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Employees practice real job-site conversations, active safety briefings, work orders, inspections, project schedules, and client communication.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Safety Partnership Section"},"align":"full","className":"fluent-founder-section","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}},"color":{"background":"#0a0f2b"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-founder-section has-background-color" style="padding-top:80px;padding-bottom:80px;padding-left:24px;padding-right:24px;background-color:#0a0f2b">
  <!-- wp:columns {"align":"wide","className":"fluent-card csc-partner-card","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide fluent-card csc-partner-card">
    <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
      <!-- wp:image {"id":16,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_5902.jpg" alt="CSC Safety Training Partner Logo" class="wp-image-16" style="width:100%;max-width:200px;height:auto;margin:0 auto;display:block"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
      <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2rem","fontWeight":"700"}},"textColor":"white"} -->
      <h2 class="wp-block-heading" style="font-size:2rem;font-weight:700;color:#ffffff">Safety Training Partnership</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.7"}},"textColor":"slate-300"} -->
      <p style="font-size:1.125rem;line-height:1.7;color:#cbd5e1;margin-top:16px">We offer specialized safety support and OSHA-aligned training through our official partnership with **CSC** (Construction Safety Coalition).</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.65"}},"textColor":"slate-300"} -->
      <p style="font-size:1.05rem;line-height:1.65;color:#cbd5e1;margin-top:12px">Contact CSC: **512-215-9084** or visit <a href="https://csctexas.com" target="_blank" rel="noreferrer noopener" style="color:#f26419;font-weight:600">csctexas.com</a>.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->';

// SPANISH CORPORATE PAGE (Corporativo)
$es_corporate_content = $custom_css . '
<!-- wp:paragraph {"align":"right","className":"fluent-lang-toggle"} -->
<p class="has-text-align-right fluent-lang-toggle"><a href="http://localhost:8080/corporate/">EN</a></p>
<!-- /wp:paragraph -->

<!-- wp:group {"metadata":{"name":"Corporate Hero Section ES"},"align":"full","className":"fluent-hero","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-hero has-background-color" style="padding-top:80px;padding-bottom:80px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
      <!-- wp:paragraph {"className":"fluent-badge"} -->
      <p class="fluent-badge">Programa Corporativo B2B</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3rem","fontWeight":"800","lineHeight":"1.2"}},"textColor":"white"} -->
      <h1 class="wp-block-heading" style="font-size:3rem;font-weight:800;line-height:1.2;color:#ffffff">Fluent Futures Corporate</h1>
      <!-- /wp:heading -->

      <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"1.5rem","fontWeight":"600"}},"textColor":"white"} -->
      <h2 class="wp-block-heading" style="font-size:1.5rem;font-weight:600;color:#ffffff;margin-top:16px;margin-bottom:24px">Inglés Técnico y de Seguridad en Obra</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.7"}},"textColor":"slate-300"} -->
      <p style="font-size:1.125rem;line-height:1.7;color:#cbd5e1">Capacitación de inglés especializada en entornos laborales para empresas. Nos enfocamos en la seguridad de la obra, herramientas, equipos, coordinación y reportes. Reduce riesgos, mejora la comunicación y empodera a tus equipos.</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <p style="font-size:1.25rem;font-weight:700;color:#ffffff;margin-top:24px;margin-bottom:32px">Tarifa del programa: <span style="color:#f26419;font-size:1.5rem;font-weight:800">$210 por estudiante</span></p>
      <!-- /wp:paragraph -->

      <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
      <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-fill fluent-btn-whatsapp","textColor":"white"} -->
        <div class="wp-block-button is-style-fill fluent-btn-whatsapp"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="https://wa.me/14077605707?text=Hola%20Teacher%20Angie%2C%20estoy%20interesado%20en%20la%20Capacitacion%20Corporativa%21" style="font-weight:700" target="_blank" rel="noreferrer noopener">Consultar por WhatsApp</a></div>
        <!-- /wp:button -->

        <!-- wp:button {"className":"is-style-outline fluent-btn-tiktok","textColor":"white"} -->
        <div class="wp-block-button is-style-outline fluent-btn-tiktok"><a class="wp-block-button__link has-white-color has-text-color wp-element-button" href="tel:5122159084" style="font-weight:700">Llamar a CSC (Aliado)</a></div>
        <!-- /wp:button -->
      </div>
      <!-- /wp:buttons -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%">
      <!-- wp:image {"id":17,"sizeSlug":"large","linkDestination":"none","className":"fluent-img-glow"} -->
      <figure class="wp-block-image size-large fluent-img-glow"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_5903.jpg" alt="Entrenamiento técnico de construcción" class="wp-image-17" style="width:100%;height:auto"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"className":"fluent-curriculum-section","align":"full","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-curriculum-section has-background-color" style="padding-top:90px;padding-bottom:90px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:heading {"textAlign":"center","level":2,"style":{"typography":{"fontSize":"2.5rem","fontWeight":"700"}},"textColor":"white"} -->
  <h2 class="wp-block-heading has-text-align-center" style="font-size:2.5rem;font-weight:700;color:#ffffff;margin-bottom:16px">Plan de Estudios de Inglés de Construcción</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"1.125rem"}},"textColor":"slate-300"} -->
  <p class="has-text-align-center" style="font-size:1.125rem;color:#cbd5e1;margin-bottom:60px">6 Niveles diseñados específicamente para la coordinación en obra, seguridad y reportes.</p>
  <!-- /wp:paragraph -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Nivel 1</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Fundamentos de Obra</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Inglés básico para presentaciones, cargos, herramientas, materiales, ubicaciones, términos de seguridad y preguntas laborales sencillas.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Nivel 2</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Trabajo Diario e Instrucciones</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Hablar sobre rutinas, responsabilidades en obra, horarios, pautas de seguridad y frases de obligación como "I need," "I have to," y "Can you?".</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Nivel 3</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Trabajo Pasado y Reportes</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Reportar tareas completadas, explicar incidentes en la obra y aprender vocabulario para reportar lo que sucedió durante el turno.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->

  <!-- wp:spacer {"height":"32px"} -->
  <div style="height:32px" aria-hidden="true" class="wp-block-spacer"></div>
  <!-- /wp:spacer -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Nivel 4</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Resolución de Problemas en Obra</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Pedir ayuda, comparar materiales de construcción, describir reparaciones, discutir plazos y resolver problemas e incidentes en el sitio.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Nivel 5</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Comunicación Laboral</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Explicar situaciones de obra complejas, reportar retrasos a supervisores, coordinar con subcontratistas y conectar detalles con claridad.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:paragraph {"className":"fluent-level-title","style":{"color":{"text":"#f26419"}}} -->
      <p class="fluent-level-title style-color-orange" style="color:#f26419">Nivel 6</p>
      <!-- /wp:paragraph -->

      <!-- wp:heading {"level":3,"className":"fluent-level-title","style":{"typography":{"fontSize":"1.25rem","fontWeight":"700"}},"textColor":"white"} -->
      <h3 class="wp-block-heading fluent-level-title" style="font-size:1.25rem;font-weight:700;color:#ffffff">Fluidez para Líderes de Obra</h3>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"className":"fluent-level-desc"} -->
      <p class="fluent-level-desc">Conversaciones reales en obra, charlas de seguridad activas, órdenes de trabajo, inspecciones, cronogramas de proyectos y comunicación con clientes.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Safety Partnership Section ES"},"align":"full","className":"fluent-founder-section","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}},"color":{"background":"#0a0f2b"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-founder-section has-background-color" style="padding-top:80px;padding-bottom:80px;padding-left:24px;padding-right:24px;background-color:#0a0f2b">
  <!-- wp:columns {"align":"wide","className":"fluent-card csc-partner-card","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide fluent-card csc-partner-card">
    <!-- wp:column {"verticalAlignment":"center","width":"30%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:30%">
      <!-- wp:image {"id":16,"sizeSlug":"medium","linkDestination":"none"} -->
      <figure class="wp-block-image size-medium"><img src="http://localhost:8080/wp-content/uploads/2026/06/IMG_5902.jpg" alt="Logo de CSC Aliado de Seguridad" class="wp-image-16" style="width:100%;max-width:200px;height:auto;margin:0 auto;display:block"/></figure>
      <!-- /wp:image -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%">
      <!-- wp:heading {"level":2,"style":{"typography":{"fontSize":"2rem","fontWeight":"700"}},"textColor":"white"} -->
      <h2 class="wp-block-heading" style="font-size:2rem;font-weight:700;color:#ffffff">Alianza de Capacitación en Seguridad</h2>
      <!-- /wp:heading -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.125rem","lineHeight":"1.7"}},"textColor":"slate-300"} -->
      <p style="font-size:1.125rem;line-height:1.7;color:#cbd5e1;margin-top:16px">Ofrecemos soporte especializado en seguridad y capacitación alineada con OSHA a través de nuestra alianza oficial con **CSC** (Construction Safety Coalition).</p>
      <!-- /wp:paragraph -->

      <!-- wp:paragraph {"style":{"typography":{"fontSize":"1.05rem","lineHeight":"1.65"}},"textColor":"slate-300"} -->
      <p style="font-size:1.05rem;line-height:1.65;color:#cbd5e1;margin-top:12px">Contacto de CSC: **512-215-9084** o visita <a href="https://csctexas.com" target="_blank" rel="noreferrer noopener" style="color:#f26419;font-weight:600">csctexas.com</a>.</p>
      <!-- /wp:paragraph -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->';


// -------------------------------------------------------------
// WORDPRESS EXECUTION
// -------------------------------------------------------------

require_once('wp-load.php');
kses_remove_filters();

function get_or_create_page($slug, $title, $content, $menu_order = 0) {
    $page = get_page_by_path($slug);
    $post_id = $page ? $page->ID : 0;
    
    $post_id = wp_insert_post(array(
        'ID'            => $post_id,
        'post_title'    => $title,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'post_name'     => $slug,
        'menu_order'    => $menu_order,
    ));
    
    if (is_wp_error($post_id)) {
        die("Error creating page $slug: " . $post_id->get_error_message() . "\n");
    }
    
    // Set template meta
    update_post_meta($post_id, '_wp_page_template', 'page-no-title');
    
    return $post_id;
}

// 1. Create or Update English & Spanish Home Pages
$en_home_id = get_or_create_page('home', 'Home', $en_home_content, 1);
$es_home_id = get_or_create_page('inicio', 'Inicio', $es_home_content, 1);

// 2. Create or Update Academy & Academia Pages
$en_academy_id = get_or_create_page('academy', 'Academy', $en_academy_content, 2);
$es_academia_id = get_or_create_page('academia', 'Academia', $es_academy_content, 2);

// 3. Create or Update Corporate & Corporativo Pages
$en_corporate_id = get_or_create_page('corporate', 'Corporate', $en_corporate_content, 3);
$es_corporativo_id = get_or_create_page('corporativo', 'Corporativo', $es_corporate_content, 3);

// 4. Polylang Language Assignments & Links
if (function_exists('pll_set_post_language') && function_exists('pll_save_post_translations')) {
    // Set languages
    pll_set_post_language($en_home_id, 'en');
    pll_set_post_language($es_home_id, 'es');
    pll_set_post_language($en_academy_id, 'en');
    pll_set_post_language($es_academia_id, 'es');
    pll_set_post_language($en_corporate_id, 'en');
    pll_set_post_language($es_corporativo_id, 'es');
    
    // Link home translations
    pll_save_post_translations(array(
        'en' => $en_home_id,
        'es' => $es_home_id,
    ));
    
    // Link academy translations
    pll_save_post_translations(array(
        'en' => $en_academy_id,
        'es' => $es_academia_id,
    ));
    
    // Link corporate translations
    pll_save_post_translations(array(
        'en' => $en_corporate_id,
        'es' => $es_corporativo_id,
    ));
    
    echo "Polylang translations linked successfully!\n";
} else {
    echo "Warning: Polylang functions not found. Please verify Polylang is installed.\n";
}

// 5. Configure English Home Page as front page
update_option('show_on_front', 'page');
update_option('page_on_front', $en_home_id);

echo "All pages created and updated successfully!\n";
echo "EN Home ID: $en_home_id\n";
echo "ES Inicio ID: $es_home_id\n";
echo "EN Academy ID: $en_academy_id\n";
echo "ES Academia ID: $es_academia_id\n";
echo "EN Corporate ID: $en_corporate_id\n";
echo "ES Corporativo ID: $es_corporativo_id\n";
