<?php
//カテゴリ情報から関連記事を10個ランダムに呼び出す
$categories = get_the_category($post->ID);
$category_ID = array();
foreach($categories as $category):
  array_push( $category_ID, $category -> cat_ID);
endforeach ;
$args = array(
  'post__not_in' => array($post -> ID),
  'posts_per_page'=> 3,
  'category__in' => $category_ID,
  'orderby' => 'rand',
);
$query = new WP_Query($args); ?>
  <?php if( $query -> have_posts() ): ?>
  <?php while ($query -> have_posts()) : $query -> the_post(); ?>
    <li>
      <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
        <div class="article-recommend-list-overlay">
        </div>
        <!-- article-recommend-list-overlay -->
        <div class="article-recommend-list-top">
          <div class="article-recommend-list-img">
            <?php echo get_the_post_thumbnail(); ?>
          </div>
          <!-- article-recommend-list-img -->
        </div>
        <!-- article-recommend-list-top -->
        <div class="article-recommend-list-bottom">
          <div class="article-recommend-list-ttl">
            <?php
            if(mb_strlen($post->post_title, 'UTF-8')>18){
              $title= mb_substr($post->post_title, 0, 18, 'UTF-8');
              echo $title.'...';
            }else{
              echo $post->post_title;
            }
            ?>
          </div>
          <!-- article-recommend-list-ttl -->
          <div class="article-recommend-list-date">
            <?php the_time('Y.m.d'); ?>
          </div>
          <!-- article-recommend-list-date -->
        </div>
        <!-- article-recommend-list-bottom -->
      </a>
    </li>
  <?php endwhile;?>
  <?php
endif;
wp_reset_postdata();
?>
<br style="clear:both;">
