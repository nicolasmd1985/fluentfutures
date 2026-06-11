<?php
/**
 * Script to set up bilingual Home pages for Fluent Futures with real assets and premium CSS styling
 */

$custom_css = '<!-- wp:html -->
<style>
@import url(\'https://fonts.googleapis.com/css2?family=Outfit:wght@400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap\');

/* Apply global deep dark navy theme */
body, .wp-site-blocks, .has-background {
    background-color: #060b26 !important;
    color: #f1f5f9 !important;
    font-family: \'Inter\', sans-serif !important;
}

/* Global headings styling */
h1, h2, h3, h4, h5, h6, .wp-block-heading {
    font-family: \'Outfit\', sans-serif !important;
    color: #ffffff !important;
    letter-spacing: -0.5px !important;
}

/* Header styling override - Dark Glassmorphism */
header.wp-block-template-part, .wp-block-template-part header, .site-header {
    background-color: rgba(6, 11, 38, 0.92) !important;
    backdrop-filter: blur(12px) !important;
    -webkit-backdrop-filter: blur(12px) !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08) !important;
    padding-top: 16px !important;
    padding-bottom: 16px !important;
}

/* Site Brand Logo Title */
.wp-block-site-title a {
    color: #ffffff !important;
    font-family: \'Outfit\', sans-serif !important;
    font-weight: 700 !important;
    font-size: 20px !important;
    letter-spacing: -0.5px !important;
}

/* Header Navigation items */
.wp-block-navigation a, .wp-block-navigation-item__content {
    color: #cbd5e1 !important;
    font-family: \'Inter\', sans-serif !important;
    font-size: 15px !important;
    font-weight: 500 !important;
    transition: all 0.3s ease !important;
}

.wp-block-navigation a:hover, .wp-block-navigation-item__content:hover {
    color: #f26419 !important; /* Safety Orange hover */
    text-shadow: 0 0 10px rgba(242, 100, 25, 0.3) !important;
}

/* Footer styling override */
footer.wp-block-template-part, .wp-block-template-part footer, .site-footer {
    background-color: #030616 !important;
    border-top: 1px solid rgba(255, 255, 255, 0.08) !important;
    padding-top: 60px !important;
    padding-bottom: 40px !important;
}

footer p, footer span, footer a {
    color: #94a3b8 !important;
    font-family: \'Inter\', sans-serif !important;
}

footer a:hover {
    color: #f26419 !important;
}

/* Hero section gradient glow styling */
.fluent-hero {
    background: radial-gradient(circle at 85% 25%, rgba(242, 100, 25, 0.07), transparent 45%), 
                radial-gradient(circle at 15% 75%, rgba(0, 180, 216, 0.04), transparent 45%),
                #060b26 !important;
    position: relative;
    overflow: hidden;
    border-bottom: 1px solid rgba(255, 255, 255, 0.04);
}

/* Glowing container for hero image */
.fluent-img-glow {
    border-radius: 20px !important;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.6), 0 0 40px rgba(242, 100, 25, 0.12) !important;
    transition: all 0.5s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
    border: 1px solid rgba(255, 255, 255, 0.06) !important;
}

.fluent-img-glow:hover {
    transform: translateY(-4px) scale(1.01) !important;
    box-shadow: 0 30px 60px -12px rgba(0, 0, 0, 0.7), 0 0 50px rgba(242, 100, 25, 0.22) !important;
}

/* Meet the Founder section styles */
.fluent-founder-section {
    background-color: #0a0f2b !important;
    border-bottom: 1px solid rgba(255, 255, 255, 0.04);
}

.fluent-img-normal {
    border-radius: 20px !important;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4) !important;
    transition: all 0.4s ease !important;
    border: 1px solid rgba(255, 255, 255, 0.06) !important;
}

.fluent-img-normal:hover {
    transform: scale(1.01) !important;
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.5) !important;
}

/* Gallery Section styling */
.fluent-gallery-section {
    background-color: #060b26 !important;
}

/* Premium Glassmorphic Cards */
.fluent-card {
    background-color: #0d1235 !important;
    border: 1px solid rgba(255, 255, 255, 0.06) !important;
    border-radius: 20px !important;
    padding: 28px !important;
    transition: all 0.4s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
    box-shadow: 0 10px 30px -10px rgba(0, 0, 0, 0.5) !important;
}

.fluent-card:hover {
    transform: translateY(-8px) !important;
    border-color: rgba(242, 100, 25, 0.35) !important;
    box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.6), 0 0 30px rgba(242, 100, 25, 0.08) !important;
}

.fluent-card img {
    border-radius: 12px !important;
    transition: transform 0.5s ease !important;
}

.fluent-card:hover img {
    transform: scale(1.03) !important;
}

/* WhatsApp CTA Button */
.fluent-btn-whatsapp a {
    background-color: #25d366 !important;
    border: none !important;
    color: #ffffff !important;
    box-shadow: 0 4px 14px rgba(37, 211, 102, 0.25) !important;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
    border-radius: 8px !important;
    padding: 12px 24px !important;
}

.fluent-btn-whatsapp a:hover {
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 20px rgba(37, 211, 102, 0.4), 0 0 15px rgba(37, 211, 102, 0.2) !important;
}

/* TikTok CTA Button */
.fluent-btn-tiktok a {
    background-color: transparent !important;
    border: 2px solid rgba(255, 255, 255, 0.3) !important;
    color: #ffffff !important;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
    border-radius: 8px !important;
    padding: 10px 22px !important;
}

.fluent-btn-tiktok a:hover {
    background-color: #ffffff !important;
    border-color: #ffffff !important;
    color: #060b26 !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 20px rgba(255, 255, 255, 0.15) !important;
}
</style>
<!-- /wp:html -->';

// Define English content
$en_content = $custom_css . '
<!-- wp:group {"metadata":{"name":"Hero Section"},"align":"full","className":"fluent-hero","style":{"spacing":{"padding":{"top":"90px","bottom":"90px","left":"24px","right":"24px"},"margin":{"top":"0px","bottom":"0px"}},"color":{"background":"#060b26"}},"textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-hero has-white-color has-background-color has-text-color" style="margin-top:0px;margin-bottom:0px;padding-top:90px;padding-bottom:90px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
      <!-- wp:heading {"level":1,"style":{"typography":{"fontSize":"3.5rem","fontWeight":"800","lineHeight":"1.25"}},"textColor":"white"} -->
      <h1 class="wp-block-heading has-white-color has-text-color" style="font-size:3.5rem;font-weight:800;line-height:1.25">Welcome to<br/>Fluent Futures</h1>
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

// Define Spanish content
$es_content = $custom_css . '
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

// Load WordPress context
require_once('wp-load.php');

// Disable KSES filtering to allow <style> tags in post content
kses_remove_filters();

// Find existing pages by slug/path
$en_page = get_page_by_path('home');
$en_post_id = $en_page ? $en_page->ID : 0;

$es_page = get_page_by_path('inicio');
$es_post_id = $es_page ? $es_page->ID : 0;

// 1. Create or Update English Home Page
$en_post_id = wp_insert_post(array(
    'ID'            => $en_post_id,
    'post_title'    => 'Home',
    'post_content'  => $en_content,
    'post_status'   => 'publish',
    'post_type'     => 'page',
));

// 2. Create or Update Spanish Home Page
$es_post_id = wp_insert_post(array(
    'ID'            => $es_post_id,
    'post_title'    => 'Inicio',
    'post_content'  => $es_content,
    'post_status'   => 'publish',
    'post_type'     => 'page',
));

if (is_wp_error($en_post_id) || is_wp_error($es_post_id)) {
    die("Error creating or updating posts.");
}

// 3. Set languages using Polylang
if (function_exists('pll_set_post_language') && function_exists('pll_save_post_translations')) {
    pll_set_post_language($en_post_id, 'en');
    pll_set_post_language($es_post_id, 'es');
    
    pll_save_post_translations(array(
        'en' => $en_post_id,
        'es' => $es_post_id,
    ));
    echo "Bilingual translation link established/updated.\n";
} else {
    echo "Warning: Polylang functions not found.\n";
}

// 4. Set English Home Page as Front Page
update_option('show_on_front', 'page');
update_option('page_on_front', $en_post_id);

echo "Bilingual Home pages set up successfully with real assets and premium CSS! EN ID: $en_post_id, ES ID: $es_post_id\n";
