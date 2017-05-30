<?php get_header(); ?>

<main class="main">

<?php if( is_page('company/company-info') ) : ?>
  <div class="c-company-wrapper">
  <div class="vision-cont">
    <div class="vision-cont-body">
      <div class="third-layered-ttl">
        VISION
      </div>
      <!-- third-layered-ttl -->
      <div class="vision-cont-img">
        <img src="<?php echo get_template_directory_uri(); ?>/library/images/c-vision-img.png">
      </div>
      <!-- vision-cont-img -->
      <div class="vision-cont-sent">
        <div class="vision-cont-sent-main">
          <p>新しい常識を創造する</p>
        </div>
        <!-- vision-cont-sent-main -->
        <div class="vision-cont-sent-sub">
          <p>テクノロジーの台頭により、今まで常識とされていたことが通用しない時代になりました。アンドゼンは、現状の常識に捉われず、新しい社会の在り方を追求し続けます。それと共に、世界で使われるようなサービスを提供し、新しい常識を創造していきます。</p>
        </div>
        <!-- vision-cont-sent-sub -->
      </div>
      <!-- vision-cont-sent -->
    </div>
    <!-- vision-cont-body -->
  </div>
  <!-- vision-cont -->
  <div class="mission-cont">
    <div class="mission-cont-body">
      <div class="third-layered-ttl">
        MISSION
      </div>
      <!-- third-layered-ttl -->
      <div class="mission-cont-inner">
        <div class="mission-cont-img">
          <img src="<?php echo get_template_directory_uri(); ?>/library/images/mission-img.jpeg">
        </div>
        <!-- mission-cont-img -->
        <ul class="mission-cont-sent">
          <li>継続する。</li>
          <li>得意な分野をとことん突き詰める。</li>
          <li>多くの人が使い続けたいオリジナルを生み出していく。</li>
          <li>エイジレスでアットホームなセカンドプレイス。</li>
          <li>謙虚である。</li>
          <li>首尾一貫と朝令暮改を上手く使い分ける。</li>
          <li>「あったらいいな」をデジタルで創造する。</li>
          <li>世界で通用するサービスを生み出す。</li>
          <li>既存の「当たり前」を壊し、新しい「当たり前」を生み出していく。</li>
        </ul>
        <!-- mission-cont-sent -->
      </div>
      <!-- mission-cont-inner -->
    </div>
    <!-- mission-cont-body -->
  </div>
  <!-- mission-cont -->
  <div class="company-cont">
    <div class="third-layered-ttl">
      会社情報
    </div>
    <!-- third-layered-ttl -->
    <div class="company-cont-prof">
    <?php echo do_shortcode('[table id=1 /]'); ?>
    </div>
    <!-- company-cont-prof -->
    <div class="company-accessmap">
      <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.9303207102203!2d139.70332631524434!3d35.65408833906764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188b5b6e7e7213%3A0x74a4a1c554bdf381!2sco-ba+shibuya!5e0!3m2!1sja!2sjp!4v1466409633154"  frameborder="0" style="border:0" allowfullscreen></iframe> -->
      <?php echo do_shortcode('[map address="東京都渋谷区渋谷3-26-16　第5叶ビル　5F" width="100%" height="400px" api="AIzaSyBwxSXthZWDr1LJwrqejmQ5H-2DwrHLSGA" theme="yellowgray" class=" " zoom="18" draggable="true" controls="true"]'); ?>
    </div>
    <!-- c-company-accessmap -->
  </div>
  <!-- company-cont -->
  <div class="contact-link">
    <a href="<?php bloginfo('url') ?>/contact/">
      <span>お問い合わせはこちら</span>
    </a>
  </div>
  <!-- contact-link -->
</div>
<!-- c-company-wrapper -->
<?php endif; ?>

<?php if( is_page('works') ) : ?>
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
<?php endif; ?>


<?php if(have_posts()): while(have_posts()): the_post(); ?>

<?php
// remove_filter('the_content', 'wpautop');
the_content();
// add_filter('the_content', 'wpautop');
 ?>

<?php endwhile; endif; ?>

</div>
<!-- main -->

<?php get_footer();
