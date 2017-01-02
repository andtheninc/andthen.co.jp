<?php get_header(); ?>

<div class="main">

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
