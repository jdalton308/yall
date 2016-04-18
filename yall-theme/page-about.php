<?php
/**
 * Template Name: About Page
 *
 * @package WordPress
 * @subpackage Yall Collective
 * @since 1.0
 */

get_header(); ?>

<main class="about">
  
  <section class="quote-callout">
    <h5 class="quote-title">Y<span class="quote">&rsquo;</span>ALL COLLECTIVE</h5>
    <blockquote>Tellin’ the stories of creative New Yorkers with Southern roots—how they live, what they make, &amp; why they’re here.</blockquote>
  </section>

  <section class="founder-photo-section">
    <figure>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/0016_selectMGP_5057@2x.jpg" alt="Stewart Bean: Founder and Creative Director">
      <figcaption>
        <h4>STEWART BEAN</h4>
        <p class="header">Founder and Creative Director</p>
      </figcaption>
    </figure>
    <figure>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/0003_selectMGP_5102@2x.jpg" alt="Lindsay Brown: Photographer">
      <figcaption>
        <h4>LINDSAY BROWN</h4>
        <p class="header">Director of Photography</p>
      </figcaption>
    </figure>
    <div class="photo-credit">Photos by Michael George</div>
  </section>


  <section class="about-content-section">
    <div class="credit-col">
      <h4>Y'ALL COLLECTIVE</h4>
      <p class="header"><em>Founded in 2013</em></p>
      <div class="credits">
        <p>STEWART BEAN, Founder and Creative Director</p>
        <p>LINDSAY BROWN, Director of Photography</p>
        <p>MIRIAM TAYLOR, Contributing Writer and Editor</p>
        <p>CLAIRE BRANDON, Proofreader</p>
        <p>JOE DALTON, Web Developer</p>
      </div>
    </div>

    <div class="in-touch-col">
      <h4>Stay in Touch</h4>
      <p><a href="email:hello@yall.com" class="disabled">hello@yall.co</a></p>
      <p><a href="//www.instagram.com/yallcollective" target="_blank">Instagram</a></p>
      <p><a href="//www.twitter.com/yallcollective" target="_blank">Twitter</a></p>
      <p><a href="//www.pinterest.com/yallcollective" target="_blank">Pinterest</a></p>
      <p><a href="//www.facebook.com/yallcollective" target="_blank">Facebook</a></p>
    </div>

    <section class="come-back-section">
      <h2>Come back to <em>Y<span class="quote">&rsquo;</span>all Collective</em> in a few weeks to see more stories.</h2>
      <h4>Know someone we should interview?</h4>
      <h4>Tag <a href="//www.instagram.com/yallcollective" target="_blank">@yallcollective</a> on Instagram.</h4>

      <div class="social-links">
        <a href="https://www.facebook.com/yallcollective" class="icon-facebook gold-icon" target="_blank"></a>
        <a href="https://www.twitter.com/yallcollective" class="icon-twitter gold-icon" target="_blank"></a>
        <a href="https://www.pinterest.com/yallcollective" class="icon-pinterest gold-icon" target="_blank"></a>
      </div>
    </section>
  </section>
  
</main>


<!-- <?php get_sidebar(); ?> -->
<?php get_footer(); ?>