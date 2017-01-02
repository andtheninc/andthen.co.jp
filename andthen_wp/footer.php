<footer class="footer">
  <div class="footer-inner">
    <div class="footer-cont">
      <ul class="site-map">
        <li>
          <dl>
            <dt class="footer-home-link"><a href="<?php echo home_url(); ?>"><span>Home</span></a></dt>
          </dl>
          <dl>
            <dt>Company</dt>
            <dd><a href="<?php echo home_url(); ?>/company/company-info/"><span>会社情報</span></a></dd>
            <dd><a href="<?php echo home_url(); ?>/company/member/"><span>メンバー紹介</span></a></dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>Service</dt>
            <dd><a href="<?php echo home_url(); ?>/service/web/"><span>Web制作</span></a></dd>
            <dd><a href="<?php echo home_url(); ?>/service/app/"><span>サービス開発</span></a></dd>
          </dl>
          <dl>
            <dt>Works</dt>
            <dd><a href="<?php echo home_url(); ?>/works/"><span>制作実績</span></a></dd>
          </dl>
        </li>
        <li>
          <dl>
            <dt>Blog</dt>
            <dd><a href="<?php echo home_url(); ?>/blog/"><span>ブログ一覧</span></a></dd>
          </dl>
          <dl>
            <dt>News</dt>
            <dd><a href="<?php echo home_url(); ?>/category/news/"><span>ニュース一覧</span></a></dd>
          </dl>
        </li>
      </ul>
      <!-- site-map -->
      <div class="company-info">
        <div class="footer-logo">
          <img src="<?php echo get_template_directory_uri(); ?>/images/andthen_logo.png">
        </div>
        <!-- footer-logo -->
        <div class="footer-contact-link">
          <a href="<?php echo home_url(); ?>/contact/">
            <span>Contact</span>
          </a>
        </div>
        <!-- footer-contact-link -->
        <dl class="social-link">
          <dt>Social Link</dt>
          <dd>
            <ul>
              <li>
                <a href="https://www.facebook.com/andthenInc0704/?fref=ts" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/fb-icon.png">
                </a>
              </li>
              <li>
                <a href="https://twitter.com/andthen_inc" target="_blank">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/tw-icon.png">
                </a>
              </li>
            </ul>
          </dd>
        </dl>
        <!-- social-link -->
      </div>
      <!-- company-info -->
    </div>
    <!-- footer-cont -->
    <div class="cp">
      copyright © 2016 Andthen, Inc. All Rights Reserved.
    </div>
    <!-- cp -->
  </div>
  <!-- footer-inner -->
</footer>
<!-- footer -->

</div>
<!-- animsition -->

<script>
//アイキャッチ背景
jQuery(document).ready(function() {
  jQuery('.particles').particleground({//キャンバスを挿入する要素を指定
    dotColor:  '#fff',           //ドットの色
    lineColor: '#df6604',        //線の色
    particleRadius: 3,           //ドットのサイズ
    density: 5000,               //粒の数
    lineWidth: 1.3,              //点をつなぐ線の太さ
    proximity: 5,                //点同士がどのくらい近づいたら線が出るか
    parallax: true,              //マウスの動きに合わせるかどうか
    parallaxMultiplier: 10000,      //パララックスによる動きの大きさ指定
    maxSpeedX: 0.2,              //最大スピード（横）
    maxSpeedY: 0.2               //最大スピード（縦）
  });
});
</script>
<script>
//ハンバーガーナビ
(function($) {
    $(function() {
        var $header = $('#top-head');
        // Nav Toggle Button
        $('#nav-toggle').click(function(){
            $header.toggleClass('open');
        });
        $('#global-nav ul li').click(function() {
            $header.toggleClass('open');
        });
    });
})(jQuery);

//ページTOPへ
$(function() {
    var topBtn = $('.footer-logo');
    topBtn.click(function () {
        $('body,html').animate({
            scrollTop: 0
        }, 500);
        return false;
    });
});

// ページ遷移エフェクト
$(document).ready(function() {
  $(".animsition").animsition({
    inClass               :   'fade-in', // ロード時のエフェクト
    outClass              :   'fade-out', //離脱時のエフェクト
    inDuration            :    1500, //ロード時の演出時間
    outDuration           :    800, //離脱時の演出時間
    linkElement           :   '.animsition-link', //アニメーションを行う要素
    // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
    loading               :    true, //ローディングの有効/無効
    loadingParentElement  :   'body' //ローディング要素のラッパー
  });
});

// $(function(){
//      $('.c-member-cont-main-list-img img').hover(function(){
//         $(this).attr('src', $(this).attr('src').replace('.', '-mouseover.'));
//           }, function(){
//              if (!$(this).hasClass('c-member-cont-main-list-img-hover')) {
//              $(this).attr('src', $(this).attr('src').replace('-mouseover', ''));
//         }
//    });
// });
</script>
<script>
// モーダル
$(function() {
  $('#m-modal-show1').click(function(){
    $('#member-modal1').fadeIn();
  });
  $('#m-modal-show2').click(function(){
    $('#member-modal2').fadeIn();
  });
  $('#m-modal-show3').click(function(){
    $('#member-modal3').fadeIn();
  });
  $('#m-modal-show4').click(function(){
    $('#member-modal4').fadeIn();
  });

  // 「.member-modal」要素にclickイベントを設定してください
  $('.member-close-modal').click(function() {
    $('#member-modal1, #member-modal2, #member-modal3, #member-modal4').fadeOut();
  });
});
</script>
<script>
// モーダル
$(function() {
  $('#w-modal-show1').click(function(){
    $('#works-modal1').fadeIn();
  });
  $('#w-modal-show2').click(function(){
    $('#works-modal2').fadeIn();
  });
  // $('#w-modal-show3').click(function(){
  //   $('#works-modal3').fadeIn();
  // });
  // $('#w-modal-show3').click(function(){
  //   $('#works-modal3').fadeIn();
  // });
  // $('#w-modal-show4').click(function(){
  //   $('#works-modal4').fadeIn();
  // });
  $('#w-modal-show5').click(function(){
    $('#works-modal5').fadeIn();
  });
  $('#w-modal-show6').click(function(){
    $('#works-modal6').fadeIn();
  });
  $('#w-modal-show7').click(function(){
    $('#works-modal7').fadeIn();
  });
  $('#w-modal-show8').click(function(){
    $('#works-modal8').fadeIn();
  });
  $('#w-modal-show9').click(function(){
    $('#works-modal9').fadeIn();
  });
  $('#w-modal-show10').click(function(){
    $('#works-modal10').fadeIn();
  });

  // 「.member-modal」要素にclickイベントを設定してください
  $('.works-close-modal, .works-modal-wrapper').click(function() {
    $('#works-modal1').fadeOut();
    $('#works-modal2').fadeOut();
    $('#works-modal3').fadeOut();
    $('#works-modal4').fadeOut();
    $('#works-modal5').fadeOut();
    $('#works-modal6').fadeOut();
    $('#works-modal7').fadeOut();
    $('#works-modal8').fadeOut();
    $('#works-modal9').fadeOut();
    $('#works-modal10').fadeOut();
  });
});
</script>
<?php wp_footer(); ?>
</body>

</html>
