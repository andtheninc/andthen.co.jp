<?php get_header(); ?>

<div class="main">
  <div class="second-layered-ttl">
    <span class="second-layered-ttl-lg">
      <span class="second-layered-ttl-lg-fs">W</span>o<span style="color:#ff8500;">r</span>ks
    </span>
    <!-- second-layered-ttl-lg -->
    <div class="second-layered-ttl-sml">
      実績
    </div>
    <!-- second-layered-ttl-sml -->
  </div>
  <!-- second-layered-ttl -->
  <div class="works-cont">
    <ul class="works-cont-list">
      <?php query_posts('post_type=portfolio'); ?>
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
      <li>
        <a href="<?php echo get_permalink(); ?>">
          <figure>
            <?php the_post_thumbnail(); ?>
            <figcaption>
              <p><?php the_title(); ?></p>
            </figcaption>
          </figure>
        </a>
      </li>
      <?php endwhile; endif; wp_reset_query(); ?>
    </ul>
  </div>
  <!-- works-cont -->
</div>
<!-- main -->

<?php get_footer();
