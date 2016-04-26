<?php get_header(); ?>

<main>

  <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

      <?php $id = get_the_ID(); ?>
      <?php $isPortraitHero = ( get_post_meta( $id, 'Portrait Hero', true) == 'true' ); ?>


      <section class="hero-title-section <?php if ( $isPortraitHero ) { echo 'portrait'; } ?>">

        <?php if ( get_field('hero_image') ) : ?>
          <img src="<?php the_field('hero_image'); ?>" alt="hero image" class="hero">
        <?php endif; ?>

        <div class="title-copy">
          <div class="icon-logo"></div>
          <h4 class="article-type-date">
            <?php the_category(', ') ?><span class="divider">|</span> <span class="date"><?php the_time('m.d.y') ?></span>
          </h4>
          <h1 class="article-title">
            <?php the_title(); ?>
          </h1>
          <h3 class="article-author">
            <?php echo get_post_meta( $id, 'Subtitle', true); ?>
          </h3>
          <h5 class="article-route">
            <?php echo get_post_meta( $id, 'Start', true); ?> <span class="icon-feather-arrow"></span> <?php echo get_post_meta( $id, 'End', true); ?>
          </h5>

          <?php if ( get_field('intro_paragraph') ) : ?>
            <p class="intro"><?php the_field('intro_paragraph'); ?></p>
          <?php endif; ?>

        </div>
      </section>


      <section class="article-section">
        <?php the_content(); ?>
      </section>


      <section class="credits-section">
        <div class="divider-line"></div>
          <p><?php echo get_post_meta( $id, 'Credits', true); ?></p>

        <!-- <p>Deenie is an Advertising Copy Director at Vogue magazine by day and creative writer at <a href="//www.bourbonandgloss.com" target="_blank">bourbonandgloss.com</a></p>
        <p>Photographs by Lindsay Brown</p> -->
      </section>


      <section class="come-back-section">
        <h4>Know someone we should interview?</h4>
        <h4>Tag <a href="//www.instagram.com/yallcollective" target="_blank">@yallcollective</a> on Instagram.</h4>

        <div class="social-links">
          <a href="https://www.facebook.com/yallcollective" class="icon-facebook gold-icon" target="_blank"></a>
          <a href="https://www.twitter.com/yallcollective" class="icon-twitter gold-icon" target="_blank"></a>
          <a href="https://www.pinterest.com/yallcollective" class="icon-pinterest gold-icon" target="_blank"></a>
        </div>
      </section>


    <?php endwhile; ?>
  <?php endif; ?>

  


</main>

<?php get_footer(); ?>