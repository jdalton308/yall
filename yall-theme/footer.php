
  <div class="to-top-btn">
    <span class="icon-feather-arrow"></span>
    <h6>TOP</h6>
  </div>

  <footer>
    <!-- <div class="subscribe-bar">
      <label for="subscribe-email">
        Subscribe to get the latest post in your inbox
        <input type="text" id="subscribe-email" name="subscribe-email">
      </label>
    </div> -->

    <div class="footer-body">
      <div class="footer-col">
        <a href="/" class="footer-title">Y'all Collective  &copy;</a>
        <div class="footer-copy">
          <p>We're tellin' the stories of creative New Yorkers with Southern roots &mdash; how they live, what they make, and why they're here.</p>
        </div>
      </div>
      <div class="footer-col">
        <div class="footer-title">States</div>

        <?php
          $tags = get_tags();
          $html = '<div class="footer-list post_tags">';
          foreach ( $tags as $tag ) {
            $tag_link = get_tag_link( $tag->term_id );
                
            $html .= "<a href='{$tag_link}' class='{$tag->slug} list-item'>";
            $html .= "{$tag->name}</a>";
          }
          $html .= '</div>';
          echo $html;
        ?>

      </div>
      <div class="footer-col">
        <div class="footer-title">Stay in Touch</div>
        <div class="footer-list">
          <div class="list-item top"><a href="mailto:hello
            @yall.co" class="disabled">hello@yall.co</a>
          </div>
          <div class="list-item">
            <a href="#" class="disabled">Subscribe</a>
          </div>
          <div class="list-item">
            <a href="//www.instagram.com/yallcollective" target="_blank">Instagram</a>
          </div>
          <div class="list-item">
            <a href="//www.twitter.com/yallcollective" target="_blank">Twitter</a>
          </div>
          <div class="list-item">
            <a href="//www.pinterest.com/yallcollective" target="_blank">Pinterest</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/app.js"></script>

  <?php wp_footer(); ?>

</body>
</html>