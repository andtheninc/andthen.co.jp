
<?php get_header(); ?>

<div class="breadcrumbs">
	<div class="wrap">
		<?php if(function_exists('bcn_display') && !is_home())
		{
				bcn_display();
		}?>
	</div>
</div>
<!-- breadcrumbs -->

<div class="main">
  <div class="second-layered-ttl">
    <span class="second-layered-ttl-lg">
      <span class="second-layered-ttl-lg-fs">B</span>l<span style="color:#ff8500;">o</span>g
    </span>
    <!-- second-layered-ttl-lg -->
    <div class="second-layered-ttl-sml">
      ブログ
    </div>
    <!-- second-layered-ttl-sml -->
  </div>
  <!-- second-layered-ttl -->
  <div class="blog-cont">
    <nav class="blog-cont-nav">
      <?php wp_nav_menu(array('theme_location'=>'cat-nav')); ?>
    </nav>
    <!-- blog-cont-nav -->
    <div class="blog-single-cont">
      <div class="blog-single-cont-main">
        <article class="article">
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <div class="article-top">
              <div class="article-cat">
                <span>
                  <?php $category = get_the_category();
                  $cat_name = $category[0]->cat_name;
                  ?>
                  <?php echo $cat_name; ?>
                </span>
              </div>
              <!-- article-cat -->
              <div class="article-date">
                <?php the_time('Y.m.d'); ?>
              </div>
              <!-- article-date -->
            </div>
            <!-- article-top -->
            <div class="article-ttl">
              <h1><?php the_title(); ?></h1>
            </div>
            <!-- article-ttl -->
            <div class="article-img">
              <?php echo get_the_post_thumbnail(); ?>
            </div>
            <!-- article-img -->
            <div class="article-sent">
              <?php the_content(); ?>
            </div>
            <!-- article-sent -->
          <?php endwhile; endif; ?>
        </article>
        <!-- article -->
        <div class="article-author">
          <div class="article-author-top">
            <div class="article-author-ttl">
              この記事を書いた人
            </div>
            <!-- article-author-ttl -->
          </div>
          <!-- article-author-top -->
          <div class="article-author-main">
            <div class="article-author-main-inner">
              <div class="article-author-main-img">
                <img src="<?php echo site_url(); ?>/wp-content/uploads/avatar/avatar_<?php the_author_meta('ID'); ?>.png" alt="">
              </div>
              <!-- article-author-main-img -->
              <div class="article-author-main-cont">
                <div class="article-author-main-name">
                  <?php the_author(); ?>
                </div>
                <!-- article-author-main-name -->
                <div class="article-author-main-exp">
                  <?php the_author_meta('description'); ?>
                </div>
                <!-- article-author-main-exp -->
              </div>
              <!-- article-author-main-cont -->
            </div>
            <!-- article-author-main-inner -->
          </div>
          <!-- article-author-main -->
        </div>
        <!-- article-author -->
        <div class="article-recommend">
          <div class="article-recommend-top">
            <div class="article-recommend-ttl">
              あなたにオススメの記事
            </div>
            <!-- article-recommend-ttl -->
          </div>
          <!-- artilce-recommend-top -->
          <div class="article-recommend-main">
            <ul class="article-recommend-list">
              <?php get_template_part('related-entries'); ?>
            </ul>
            <!-- article-recommend-list -->
          </div>
          <!-- article-recommend-main -->
        </div>
        <!-- article-recommend -->
      </div>
      <!-- blog-single-cont-main -->
    </div>
    <!-- blog-single-cont -->
  </div>
  <!-- blog-cont -->
</div>
<!-- main -->

<?php get_footer();
