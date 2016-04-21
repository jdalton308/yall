<?php
/**
 * Template Name: Home Page Template
 */

get_header(); ?>


<main>

  <div class="back-letter letter-1">Y<span class="quote">&rsquo;</span></div>
  <div class="back-letter letter-2">A</div>
  <div class="back-letter letter-3">L</div>
  <div class="back-letter letter-4">L</div>
  <div class="back-letter letter-5">C</div>
  <div class="back-letter letter-6">O</div>
  <div class="back-letter letter-7">L</div>
  <div class="back-letter letter-8">L</div>
  <div class="back-letter letter-9">E</div>
  <div class="back-letter letter-10">C</div>
  <div class="back-letter letter-11">T</div>
  <div class="back-letter letter-12">I</div>
  <div class="back-letter letter-13">V</div>
  <div class="back-letter letter-14">E</div>


  <div class="hero feature-item essay">
    <a href="/deenie-hartzog-mislock.html" class="img-container">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/Deenie-LB-5494@2x.jpg" alt="#" class="item-image">
    </a>
    <div class="item-copy">
      <h4 class="item-type">ESSAY<span class="divider">|</span><p class="date">04.11.16</p></h4>
      <a href="/deenie-hartzog-mislock.html" class="item-title">The Great Migration</a>
      <h3 class="item-author">Deenie Hartzog-Mislock</h3>
      <h5 class="item-route">Mississippi <span class="icon-feather-arrow"></span> Brooklyn</h5>
    </div>
  </div>


<!-- Get the lastest post: -->
<?php
  $the_query = new WP_Query(); 

  if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

  <?php $id = get_the_ID(); 
    echo $current_post;
  ?>

  <div class="hero feature-item">
    <a href="<?php the_permalink() ?>" class="img-container">
      <?php if ( has_post_thumbnail() ) {
          the_post_thumbnail();
      } ?>
    </a>
    <div class="item-copy">
      <h4 class="item-type"><?php the_category(', ') ?><span class="divider">|</span><p class="date"><?php the_time('F jS, Y') ?></p></h4>

      <a href="<?php the_permalink() ?>" class="item-title"><?php the_title(); ?></a>
      <h3 class="item-author"><?php echo get_post_meta( $id, 'Subtitle', true); ?></h3>

      <h5 class="item-route"><?php echo get_post_meta( $id, 'Start', true); ?> <span class="icon-feather-arrow"></span> <?php echo get_post_meta( $id, 'End', true); ?></h5>
    </div>

  </div>

<?php wp_reset_postdata(); ?>
<?php endwhile; endif; ?>




  <section class="quote-callout">
    <h5 class="quote-title">Y<span class="quote">&rsquo;</span>ALL COLLECTIVE</h5>
    <blockquote>Tellin’ the stories of creative New Yorkers with Southern roots—how they live, what they make, &amp; why they’re here.</blockquote>
  </section>


  <div class="featured-items">




    <div class="feature-item portrait">
      <div class="float-cont">
        <a href="/kirby-brown.html" class="img-container">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/KB-WEB-9680@2x.jpg" alt="#" class="item-image">
        </a>
        <div class="item-copy">
          <h4 class="item-type">PROFILE<span class="divider">|</span><p class="date">08.21.15</p></h4>
          <a href="/kirby-brown.html" class="item-title">Kirby Brown</a>
          <h3 class="item-author">Singer/Songwriter</h3>
          <h5 class="item-route">Texas <span class="icon-feather-arrow"></span> Manhattan</h5>
        </div>
      </div>
    </div>

    <div class="feature-item landscape">
      <div class="float-cont">
        <a href="/michael-george.html" class="img-container">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/MG-web-2678@2x.jpg" alt="#" class="item-image">
        </a>
        <div class="item-copy">
          <h4 class="item-type">Q&amp;A<span class="divider">|</span><p class="date">06.08.15</p></h4>
          <a href="/michael-george.html" class="item-title">Micheal George</a>
          <h3 class="item-author">Photographer</h3>
          <h5 class="item-route">Florida <span class="icon-feather-arrow"></span> Brooklyn</h5>
        </div>
      </div>
    </div>

  </div>


 <!--  <section class="come-back-section">
    <h2>Come back to <em>Y<span class="quote">&rsquo;</span>all Collective</em> in a few weeks to see more stories.</h2>
    <h4>Know someone we should interview?</h4>
    <h4>Tag <a href="//www.instagram.com/yallcollective" target="_blank">@yallcollective</a> on Instagram.</h4>

    <div class="social-links">
      <a href="https://www.facebook.com/yallcollective" class="icon-facebook gold-icon" target="_blank"></a>
      <a href="https://www.twitter.com/yallcollective" class="icon-twitter gold-icon" target="_blank"></a>
      <a href="https://www.pinterest.com/yallcollective" class="icon-pinterest gold-icon" target="_blank"></a>
    </div>
  </section> -->

    <section class="more-section">
      <h3><span class="italic">More from</span> Y'all Collective</h3>
      <div class="more-grid">

        <div class="more-item">
          <img src="/assets/img/michael.jpg" alt="">
          <div class="item-copy">
            <h4 class="item-type">Q&amp;A<span class="divider">|</span><p class="date">06.06.13</p></h4>
            <h2 class="item-title">Michael George</h2>
            <h3 class="item-author">Photographer</h3>
            <h5 class="item-route">South Carolina > Brooklyn</h5>
          </div>
        </div>

      </div>
    </section>
    

</main>
	
<?php get_footer(); ?>