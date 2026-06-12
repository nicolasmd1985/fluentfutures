<?php
if (php_sapi_name() !== 'cli') {
    header('HTTP/1.0 403 Forbidden');
    die('Forbidden: This script can only be run from the command line.');
}

/**
 * Script to set up bilingual Home pages for Fluent Futures with real assets and premium CSS styling
 */

$custom_css = '';

// Define English content
$en_content = $custom_css . '
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
    'menu_order'    => 1,
));

// 2. Create or Update Spanish Home Page
$es_post_id = wp_insert_post(array(
    'ID'            => $es_post_id,
    'post_title'    => 'Inicio',
    'post_content'  => $es_content,
    'post_status'   => 'publish',
    'post_type'     => 'page',
    'menu_order'    => 1,
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
