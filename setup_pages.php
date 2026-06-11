<?php
/**
 * Script to set up bilingual pages (Home, Academy, Corporate) for Fluent Futures
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
    text-decoration: none !important;
    display: inline-block !important;
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
    text-decoration: none !important;
    display: inline-block !important;
}

.fluent-btn-tiktok a:hover {
    background-color: #ffffff !important;
    border-color: #ffffff !important;
    color: #060b26 !important;
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 20px rgba(255, 255, 255, 0.15) !important;
}

/* Orange CTA Button */
.fluent-btn-orange a {
    background-color: #f26419 !important;
    border: none !important;
    color: #ffffff !important;
    box-shadow: 0 4px 14px rgba(242, 100, 25, 0.25) !important;
    transition: all 0.3s cubic-bezier(0.165, 0.84, 0.44, 1) !important;
    border-radius: 8px !important;
    padding: 12px 24px !important;
    text-decoration: none !important;
    display: inline-block !important;
}

.fluent-btn-orange a:hover {
    transform: translateY(-2px) !important;
    box-shadow: 0 6px 20px rgba(242, 100, 25, 0.4), 0 0 15px rgba(242, 100, 25, 0.2) !important;
}

/* Language Toggle styling */
.fluent-lang-toggle {
    position: fixed !important;
    top: 22px !important;
    right: 40px !important;
    z-index: 100000 !important;
    font-family: \'Inter\', sans-serif !important;
    font-size: 13px !important;
    font-weight: 700 !important;
    color: #cbd5e1 !important;
    text-decoration: none !important;
    background: rgba(13, 18, 53, 0.85) !important;
    border: 1px solid rgba(255, 255, 255, 0.12) !important;
    padding: 6px 14px !important;
    border-radius: 20px !important;
    backdrop-filter: blur(8px) !important;
    -webkit-backdrop-filter: blur(8px) !important;
    transition: all 0.3s ease !important;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15) !important;
}

.fluent-lang-toggle:hover {
    color: #f26419 !important;
    border-color: rgba(242, 100, 25, 0.4) !important;
    background: rgba(242, 100, 25, 0.08) !important;
    box-shadow: 0 0 15px rgba(242, 100, 25, 0.2) !important;
}

/* Badge styling */
.fluent-badge {
    background-color: rgba(242, 100, 25, 0.1) !important;
    color: #f26419 !important;
    border: 1px solid rgba(242, 100, 25, 0.2) !important;
    padding: 6px 14px !important;
    border-radius: 30px !important;
    font-size: 13px !important;
    font-weight: 600 !important;
    display: inline-block !important;
    letter-spacing: 0.5px !important;
    text-transform: uppercase !important;
    margin-bottom: 16px !important;
}

/* Curriculum Section Layout */
.fluent-curriculum-section {
    background-color: #060b26 !important;
    padding-top: 80px !important;
    padding-bottom: 80px !important;
    border-top: 1px solid rgba(255, 255, 255, 0.04) !important;
}

/* Level details */
.fluent-level-title {
    font-size: 1.25rem !important;
    font-weight: 700 !important;
    color: #ffffff !important;
    margin-bottom: 12px !important;
}

.fluent-level-desc {
    font-size: 0.95rem !important;
    line-height: 1.6 !important;
    color: #94a3b8 !important;
}

/* CSC Partner box */
.csc-partner-card {
    background: linear-gradient(135deg, #0e1538 0%, #060b26 100%) !important;
    border: 1px solid rgba(242, 100, 25, 0.15) !important;
}
</style>
<!-- /wp:html -->';

// -------------------------------------------------------------
// PAGE CONTENT GENERATORS
// -------------------------------------------------------------

// ENGLISH HOME PAGE (With Program Cards added)
$en_home_content = $custom_css . '
<!-- wp:html -->
<a href="http://localhost:8080/es/" class="fluent-lang-toggle">ES</a>
<!-- /wp:html -->

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
<!-- wp:html -->
<a href="http://localhost:8080/" class="fluent-lang-toggle">EN</a>
<!-- /wp:html -->

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
<!-- wp:html -->
<a href="http://localhost:8080/es/academia/" class="fluent-lang-toggle">ES</a>
<!-- /wp:html -->

<!-- wp:group {"metadata":{"name":"Academy Hero Section"},"align":"full","className":"fluent-hero","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-hero has-background-color" style="padding-top:80px;padding-bottom:80px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
      <!-- wp:html -->
      <span class="fluent-badge">Adult English Program</span>
      <!-- /wp:html -->

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
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Level 1</div>
      <div class="fluent-level-title">Conversational Basics</div>
      <p class="fluent-level-desc">Build a strong foundation. Learn greetings, introductions, numbers, simple present-tense questions, and essential everyday vocabulary.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Level 2</div>
      <div class="fluent-level-title">Daily Interactions</div>
      <p class="fluent-level-desc">Get comfortable with daily routines, telling time, talking about hobbies, shopping, ordering food, and navigating basic social situations.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Level 3</div>
      <div class="fluent-level-title">Travel &amp; Sharing</div>
      <p class="fluent-level-desc">Expand your horizons. Practice describing past experiences, talking about travel, asking for directions, and sharing simple opinions.</p>
      <!-- /wp:html -->
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
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Level 4</div>
      <div class="fluent-level-title">Discussion &amp; Debate</div>
      <p class="fluent-level-desc">Participate in group discussions. Talk in detail about current events, books, movies, future plans, and express thoughts on complex topics.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Level 5</div>
      <div class="fluent-level-title">Workplace &amp; Community</div>
      <p class="fluent-level-desc">Communicate effectively in professional and public environments. Learn how to explain situations, speak to supervisors, and connect ideas.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Level 6</div>
      <div class="fluent-level-title">Conversational Fluency</div>
      <p class="fluent-level-desc">Speak with native-like confidence. Master advanced idioms, natural phrasing, storytelling, and discuss abstract concepts fluidly.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->';

// SPANISH ACADEMY PAGE (Academia)
$es_academy_content = $custom_css . '
<!-- wp:html -->
<a href="http://localhost:8080/academy/" class="fluent-lang-toggle">EN</a>
<!-- /wp:html -->

<!-- wp:group {"metadata":{"name":"Academy Hero Section ES"},"align":"full","className":"fluent-hero","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-hero has-background-color" style="padding-top:80px;padding-bottom:80px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
      <!-- wp:html -->
      <span class="fluent-badge">Programa de Inglés para Adultos</span>
      <!-- /wp:html -->

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
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Nivel 1</div>
      <div class="fluent-level-title">Bases Conversacionales</div>
      <p class="fluent-level-desc">Construye una base sólida. Aprende saludos, presentaciones, números, preguntas sencillas en presente y vocabulario esencial del día a día.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Nivel 2</div>
      <div class="fluent-level-title">Interacciones Diarias</div>
      <p class="fluent-level-desc">Gana comodidad con rutinas cotidianas, dar la hora, pasatiempos, compras, ordenar comida y desenvolverte en interacciones sociales básicas.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Nivel 3</div>
      <div class="fluent-level-title">Viajes y Experiencias</div>
      <p class="fluent-level-desc">Amplía tus horizontes. Practica describiendo experiencias pasadas, planes de viaje, pedir indicaciones y expresar opiniones sencillas.</p>
      <!-- /wp:html -->
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
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Nivel 4</div>
      <div class="fluent-level-title">Discusión y Debate</div>
      <p class="fluent-level-desc">Participa en discusiones grupales. Habla en detalle sobre noticias de actualidad, planes futuros, libros, películas y expresa opiniones complejas.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Nivel 5</div>
      <div class="fluent-level-title">Inglés Laboral y Social</div>
      <p class="fluent-level-desc">Comunícate eficazmente en entornos profesionales y públicos. Aprende a explicar situaciones extensas, hablar con supervisores y conectar ideas.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Nivel 6</div>
      <div class="fluent-level-title">Fluidez Conversacional</div>
      <p class="fluent-level-desc">Habla con total confianza. Domina modismos avanzados, frases naturales, narración de historias y discusiones abstractas fluidas.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->
  </div>
  <!-- /wp:columns -->
</div>
<!-- /wp:group -->';

// ENGLISH CORPORATE PAGE
$en_corporate_content = $custom_css . '
<!-- wp:html -->
<a href="http://localhost:8080/es/corporativo/" class="fluent-lang-toggle">ES</a>
<!-- /wp:html -->

<!-- wp:group {"metadata":{"name":"Corporate Hero Section"},"align":"full","className":"fluent-hero","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-hero has-background-color" style="padding-top:80px;padding-bottom:80px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
      <!-- wp:html -->
      <span class="fluent-badge">Corporate B2B Program</span>
      <!-- /wp:html -->

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
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Level 1</div>
      <div class="fluent-level-title">Job Site Foundations</div>
      <p class="fluent-level-desc">Employees learn basic English for introductions, job titles, tools, materials, locations, safety words, and simple workplace questions.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Level 2</div>
      <div class="fluent-level-title">Daily Work &amp; Instructions</div>
      <p class="fluent-level-desc">Employees learn to talk about routines, responsibilities, schedules, instructions, and obligations using phrases like "I need," "I have to," and "Can you?".</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Level 3</div>
      <div class="fluent-level-title">Past Work &amp; Job Reports</div>
      <p class="fluent-level-desc">Employees learn to report completed tasks, explain worksite issues, and describe exactly what happened during a shift clearly.</p>
      <!-- /wp:html -->
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
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Level 4</div>
      <div class="fluent-level-title">Problem Solving on Site</div>
      <p class="fluent-level-desc">Employees practice asking for help, comparing construction materials, explaining repairs, discussing deadlines, and resolving safety issues.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Level 5</div>
      <div class="fluent-level-title">Workplace Communication</div>
      <p class="fluent-level-desc">Employees learn how to explain complex worksite situations, report delays to supervisors, coordinate with subteams, and connect details clearly.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Level 6</div>
      <div class="fluent-level-title">Fluency for Crew Leaders</div>
      <p class="fluent-level-desc">Employees practice real job-site conversations, active safety briefings, work orders, inspections, project schedules, and client communication.</p>
      <!-- /wp:html -->
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
<!-- wp:html -->
<a href="http://localhost:8080/corporate/" class="fluent-lang-toggle">EN</a>
<!-- /wp:html -->

<!-- wp:group {"metadata":{"name":"Corporate Hero Section ES"},"align":"full","className":"fluent-hero","style":{"spacing":{"padding":{"top":"80px","bottom":"80px","left":"24px","right":"24px"}},"color":{"background":"#060b26"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignfull fluent-hero has-background-color" style="padding-top:80px;padding-bottom:80px;padding-left:24px;padding-right:24px;background-color:#060b26">
  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"48px","left":"48px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"verticalAlignment":"center","width":"55%"} -->
    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:55%">
      <!-- wp:html -->
      <span class="fluent-badge">Programa Corporativo B2B</span>
      <!-- /wp:html -->

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
  <h2 class="wp-block-heading has-text-align-center" style="font-size:2.5rem;font-weight:700;color:#ffffff;margin-bottom:16px">Currícula de Inglés de Construcción</h2>
  <!-- /wp:heading -->

  <!-- wp:paragraph {"textAlign":"center","style":{"typography":{"fontSize":"1.125rem"}},"textColor":"slate-300"} -->
  <p class="has-text-align-center" style="font-size:1.125rem;color:#cbd5e1;margin-bottom:60px">6 Niveles diseñados específicamente para la coordinación en obra, seguridad y reportes.</p>
  <!-- /wp:paragraph -->

  <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"32px","left":"32px"}}}} -->
  <div class="wp-block-columns alignwide">
    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Nivel 1</div>
      <div class="fluent-level-title">Fundamentos de Obra</div>
      <p class="fluent-level-desc">Inglés básico para presentaciones, cargos, herramientas, materiales, ubicaciones, términos de seguridad y preguntas laborales sencillas.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Nivel 2</div>
      <div class="fluent-level-title">Trabajo Diario e Instrucciones</div>
      <p class="fluent-level-desc">Hablar sobre rutinas, responsabilidades en obra, horarios, pautas de seguridad y frases de obligación como "I need," "I have to," y "Can you?".</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Nivel 3</div>
      <div class="fluent-level-title">Trabajo Pasado y Reportes</div>
      <p class="fluent-level-desc">Reportar tareas completadas, explicar incidentes en la obra y aprender vocabulario para reportar lo que sucedió durante el turno.</p>
      <!-- /wp:html -->
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
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Nivel 4</div>
      <div class="fluent-level-title">Resolución de Problemas en Obra</div>
      <p class="fluent-level-desc">Pedir ayuda, comparar materiales de construcción, describir reparaciones, discutir plazos y resolver problemas e incidentes en el sitio.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Nivel 5</div>
      <div class="fluent-level-title">Comunicación Laboral</div>
      <p class="fluent-level-desc">Explicar situaciones de obra complejas, reportar retrasos a supervisores, coordinar con subcontratistas y conectar detalles con claridad.</p>
      <!-- /wp:html -->
    </div>
    <!-- /wp:column -->

    <!-- wp:column {"width":"33.33%","className":"fluent-card"} -->
    <div class="wp-block-column fluent-card" style="flex-basis:33.33%">
      <!-- wp:html -->
      <div class="fluent-level-title" style="color:#f26419">Nivel 6</div>
      <div class="fluent-level-title">Fluidez para Líderes de Obra</div>
      <p class="fluent-level-desc">Conversaciones reales en obra, charlas de seguridad activas, órdenes de trabajo, inspecciones, cronogramas de proyectos y comunicación con clientes.</p>
      <!-- /wp:html -->
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

function get_or_create_page($slug, $title, $content) {
    $page = get_page_by_path($slug);
    $post_id = $page ? $page->ID : 0;
    
    $post_id = wp_insert_post(array(
        'ID'            => $post_id,
        'post_title'    => $title,
        'post_content'  => $content,
        'post_status'   => 'publish',
        'post_type'     => 'page',
        'post_name'     => $slug,
    ));
    
    if (is_wp_error($post_id)) {
        die("Error creating page $slug: " . $post_id->get_error_message() . "\n");
    }
    
    // Set template meta
    update_post_meta($post_id, '_wp_page_template', 'page-no-title');
    
    return $post_id;
}

// 1. Create or Update English & Spanish Home Pages
$en_home_id = get_or_create_page('home', 'Home', $en_home_content);
$es_home_id = get_or_create_page('inicio', 'Inicio', $es_home_content);

// 2. Create or Update Academy & Academia Pages
$en_academy_id = get_or_create_page('academy', 'Academy', $en_academy_content);
$es_academia_id = get_or_create_page('academia', 'Academia', $es_academy_content);

// 3. Create or Update Corporate & Corporativo Pages
$en_corporate_id = get_or_create_page('corporate', 'Corporate', $en_corporate_content);
$es_corporativo_id = get_or_create_page('corporativo', 'Corporativo', $es_corporate_content);

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
