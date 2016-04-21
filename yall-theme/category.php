<?php get_header(); ?>

<main>
    
  <h2><?php single_cat_title(); ?></h2>

   <section class="more-section">
      <div class="more-grid">


        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>

            <?php $id = get_the_ID(); ?>

            <div class="more-item">
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

          <?php endwhile; ?>
        <?php endif; ?>

      </div>
    </section>


</main>



<?php get_footer(); ?>