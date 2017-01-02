<?php
/*
  Template Name: contact
*/
?>

<?php get_header(); ?>

<div class="main">
  <div class="contact-wrapper">
    <div class="contact-ttl third-layered-ttl">
      お問い合わせ
    </div>
    <!-- contact-ttl -->
    <div class="contact-cont">
      <div class="contact-cont-form">
        <?php echo do_shortcode('[contact-form-7 id="96" title="コンタクトフォーム 1"]') ?>      
      </div>
      <!-- contact-cont-form -->
    </div>
    <!-- contact-cont -->
  </div>
  <!-- contact-wrapper -->
</div>
<!-- main -->

<?php get_footer();
