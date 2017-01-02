<?php
/*
  Template Name: blog
*/
?>

<?php get_header(); ?>

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
    <div class="blog-cont-main">
      <ul class="blog-cont-list">
        <?php query_posts('cat=1,4'); ?>
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
             <li>
              <a href="<?php echo get_permalink(); ?>">
                <div class="blog-cont-list-overlay">
                </div>
                <!-- blog-cont-list-overlay -->
                <div class="blog-cont-list-inner">
                  <div class="blog-cont-list-img">
                    <?php echo get_the_post_thumbnail(); ?>
                  </div>
                  <!-- port-main-cont-box-img -->
                  <div class="blog-cont-list-inner-top">
                    <div class="blog-cont-list-cat">
                      <?php $category = get_the_category();
                            $cat_name = $category[0]->cat_name;
                      ?>
                      <?php echo $cat_name; ?>
                    </div>
                    <!-- blog-cont-list-cat -->
                    <div class="blog-cont-list-date">
                      <span><?php the_time('Y.m.d'); ?></span>
                    </div>
                    <!-- blog-cont-list-date -->
                  </div>
                  <!-- blog-cont-list-inner-top -->
                  <div class="blog-cont-list-inner-bottom">
                    <div class="blog-cont-list-ttl">
                      <?php
                      if(mb_strlen($post->post_title, 'UTF-8')>18){
                      	$title= mb_substr($post->post_title, 0, 18, 'UTF-8');
                      	echo $title.'...';
                      }else{
                      	echo $post->post_title;
                      }
                      ?>
                    </div>
                    <!-- blog-cont-list-ttl -->
                  </div>
                  <!-- blog-cont-list-inner-bottom -->
                </div>
                <!-- blog-cont-list-inner -->
              </a>
            </li>
          <?php endwhile; endif; ?>
      </ul>
      <!-- blog-cont-list -->
      <div class="pagination">

      </div>
      <!-- pagination -->
    </div>
    <!-- blog-cont-main -->
  </div>
  <!-- blog-cont -->
</div>
<!-- main -->

<?php get_footer();
