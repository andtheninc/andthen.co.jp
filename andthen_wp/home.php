<?php get_header(); ?>

<div class="eyecatch">
  <div class="eyecatch-inner">
    <div class="particles"></div>
    <div class="catch-copy">
      <h1>Be the Original<br>Create the Things...<span class="blinking">_</span></h1>
      <h2>独創性を重んじる。</h2>
    </div>
    <!-- catch-copy -->
  </div>
  <!-- eyecatch-inner -->
</div>
<!-- eyecatch -->

<div class="main">
  <div class="top-service-wrapper">
    <div class="top-sc-cont top-service-cont">
      <div class="top-sc-cont-body">
        <div class="top-main-ttl top-main-sc-ttl">
          <span style="font-size:2.5rem;">S</span>ER<span style="color:#ff8f21;">V</span>ICE
        </div>
        <!-- top-sc-cont-ttl -->
        <div class="sp-top-sc-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/service-link-bg.jpg">
        </div>
        <!-- sp-top-sc-img -->
        <div class="top-main-sc-sent">
          <p>Web制作とWebサービス開発をメインに事業を行っております。常に顧客目線を意識し、質の高いプロダクトを提供します。</p>
        </div>
        <!-- top-main-sc-sent -->
        <div class="top-main-sc-detail">
          <a href="<?php echo home_url(); ?>/service/">
            <span>→MORE</span>
          </a>
        </div>
        <!-- top-main-sc-detail -->
      </div>
      <!-- top-sc-cont-body -->
    </div>
    <!-- top-sc-cont -->
    <div class="top-sc-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/service-link-bg.jpg">
    </div>
    <!-- top-sc-img -->
  </div>
  <!-- top-service-wrapper -->

  <div class="top-company-wrapper">
    <div class="top-sc-img">
      <img src="<?php echo get_template_directory_uri(); ?>/images/company-link-bg.png">
    </div>
    <!-- top-sc-cont-img -->
    <div class="top-sc-cont top-company-cont">
      <div class="top-sc-cont-body">
        <div class="top-main-ttl top-main-sc-ttl">
          <span style="font-size:2.5rem;">C</span>O<span style="color:#ff8f21;">M</span>PANY
        </div>
        <!-- top-sc-cont-ttl -->
        <div class="sp-top-sc-img">
          <img src="<?php echo get_template_directory_uri(); ?>/images/company-link-bg.png">
        </div>
        <!-- sp-top-sc-img -->
        <div class="top-main-sc-sent">
          <p>株式会社アンドゼンは渋谷区を拠点として活動しております。色とりどりのメンバーがそれぞれの個性を生かして仕事に取り組んでいます。</p>
        </div>
        <!-- top-main-sc-sent -->
        <div class="top-main-sc-detail">
          <a href="<?php echo home_url(); ?>/company/">
            <span>→MORE</span>
          </a>
        </div>
        <!-- top-main-sc-detail -->
      </div>
      <!-- top-sc-cont-body -->
    </div>
    <!-- top-sc-cont -->
  </div>
  <!-- top-company-wrapper -->

  <div class="top-works-wrapper">
    <div class="top-main-ttl">
      <span style="font-size:2.5rem;">W</span>O<span style="color:#ff8f21;">R</span>KS
    </div>
    <!-- top-main-ttl -->
    <div class="top-works-cont">
      <ul class="top-works-cont-list">
        <li>
          <a href="<?php echo home_url(); ?>/works/">
            <div class="top-works-cont-list-overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/works-img1.png">
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/works/">
            <div class="top-works-cont-list-overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/works-img2.png">
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/works/">
            <div class="top-works-cont-list-overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/works-img3.png">
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/works/">
            <div class="top-works-cont-list-overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/works-img4.png">
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/works/">
            <div class="top-works-cont-list-overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/works-img5.png">
          </a>
        </li>
        <li>
          <a href="<?php echo home_url(); ?>/works/">
            <div class="top-works-cont-list-overlay"></div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/works-img6.png">
          </a>
        </li>
      </ul>
      <!-- top-works-cont-list -->
    </div>
    <!-- top-works-cont -->
  </div>
  <!-- top-works-wrapper -->

  <div class="news-wrapper">
    <div class="top-main-ttl">
      <span style="color:#ff8f21; font-size:2.5rem;">N</span>EWS
    </div>
    <!-- top-main-ttl -->
    <div class="top-news-cont">
      <ul class="top-news-cont-list">
        <?php query_posts('cat=1,4'); ?>
          <?php if(have_posts()): while(have_posts()): the_post(); ?>
            <li>
              <a href="<?php echo get_permalink(); ?>">
                <div class="top-news-cont-list-cat">
                  <?php $category = get_the_category();
                        $cat_name = $category[0]->cat_name;
                  ?>
                  <?php echo $cat_name; ?>
                </div>
                <!-- top-news-cont-list-cat -->
                <div class="top-news-cont-list-date">
                  <?php the_time('Y.m.d'); ?>
                </div>
                <!-- top-news-cont-list-date -->
                <div class="top-news-cont-list-ttl">
                  <?php if(mb_strlen($post->post_title)>32) { $title= mb_substr($post->post_title,0,32) ; echo $title. ･･･ ;
} else {echo $post->post_title;}?>
                </div>
                <!-- top-news-cont-list-ttl -->
              </a>
            </li>
          <?php endwhile; endif; ?>
      </ul>
      <!-- top-news-cont-list -->
    </div>
    <!-- top-news-cont -->
  </div>
  <!-- news-wrapper -->
</div>
<!-- main -->

<?php get_footer();
