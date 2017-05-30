<?php
$args = array(
  'posts_per_page' => 3,
  'post_type' => 'portfolio',
  'orderby' => 'rand',
  'post__not_in' => array($post->ID)
);
$query = new WP_Query($args); ?>
  <?php if( $query -> have_posts() ): ?>
  <?php while ($query -> have_posts()) : $query -> the_post(); ?>
    <li>
      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
        <figure>
          <?php echo get_the_post_thumbnail(); ?>
          <figcaption>
            <p>Show More</p>
          </figcaption>
        </figure>
        <div class="article-recommend-list-ttl">
          <?php the_title(); ?>
        </div>
        <!-- article-recommend-list-ttl -->
        <div class="article-recommend-list-date">
          <time><?php the_time('Y.m.d'); ?></time>
        </div>
        <!-- article-recommend-list-date -->
      </a>
    </li>
  <?php endwhile;?>
  <?php
endif;
wp_reset_postdata();
?>
<br style="clear:both;">
