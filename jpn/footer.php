    <!-- /.contents -->
  </div>
  <div class="footer">
    <div class="footer-logo">
      <img src="<?php bloginfo('url');?>/jpn/shared/images/hirota-glass.svg" alt="廣田硝子株式会社">
    </div>
    <p>〒130-0013 東京都墨田区錦糸2-6-5<br>
      TEL +81-3-3623-4145　FAX +81-3-3623-8892</p>
    <ul class="sns">
      <li><a href="https://www.facebook.com/hirotaglass/" target="_blank"><img src="<?php bloginfo('url');?>/jpn/shared/images/icon_facebook.png" alt="facebook"></a></li>
      <li><a href="https://www.instagram.com/hirotaglass/" target="_blank"><img src="<?php bloginfo('url');?>/jpn/shared/images/icon_instagram.png" alt="instagram"></a></li>
    </ul>
    <p class="link"><a href="/privacy.html">Privacy policy</a> | <a href="/sitemap.html">Sitemap</a></p>
    <p class="browser">Supported browsers<br>
      Windows ：Internet Explorer 10 (or later) / Mozilla Firefox 3 (or later) <br>
      Mac：Safari 5 (or later)</p>
    <p class="copyright">Copyright &copy;<?php echo date('Y'); ?> Hirota Glass Co.,Ltd All Rights Reserved.</p>
  </div>

  <!-- /.container -->
</div>

<!-- body fadein -->
<script src="<?php bloginfo('url');?>/jpn/shared/js/jquery.1.10.2.js"></script>
<?php if(is_page('about') || is_page('home')){ ?>
<script>
$(function(){
  $('.youtube iframe').each(function(){
    $(this).attr('src',$(this).attr('src')+'&rel=0');
  });
});
</script>
<?php } ?>
<script>
$(document).ready(function() {
$('body').fadeIn(2000);
});
</script>
<!-- header fix -->
<script>
$(document).ready(function() {
  $(window).on('scroll', function() {
    if ($(this).scrollTop() > 35) {
      $('.header').addClass('fixed');
    } else {
      $('.header').removeClass('fixed');
    }
  });
});
</script>
<?php if(is_page('home')||is_page('home2')){ ?>
<!--<script type="text/javascript">
jQuery(function($) {

var nav    = $('.btn-float'),
    offset = nav.offset();

$(window).scroll(function () {
  if($(window).scrollTop() > offset.top - 480) {
    nav.addClass('fixed');
  } else {
    nav.removeClass('fixed');
  }
});

});
</script>-->
<?php } ?>
<!-- smoothscroll -->
<!-- <script src="<?php bloginfo('url');?>/jpn/shared/js/smoothscroll.js"></script>  -->
<!-- nav -->
<script src="<?php bloginfo('url');?>/jpn/shared/js/nav.js"></script>
<script>
      var navigation = responsiveNav("#nav", {
        customToggle: "#nav-toggle"
      });
</script>
<!-- footerfix -->
<script src="<?php bloginfo('url');?>/jpn/shared/js/footerfix.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php bloginfo('url');?>/jpn/shared/js/slick/slick.min.js"></script>
<script>
//複数表示（レスポンシブ）
$(function() {
<?php if(is_page('home')||is_page('home2')){ ?>
  $('.multiple-item').slick({
    infinite: true,
    dots:true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 750,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
      }
    }
    ]
  });
<?php }else{ ?>
  $('.multiple-item').slick({
    infinite: true,
    dots:true,
    slidesToShow: 3,
    slidesToScroll: 1,
    responsive: [{
      breakpoint: 768,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
      }
    },{
      breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
        }
      }
    ]
  });
<?php } ?>
});
</script>
<?php if(is_page('home')||is_page('home2')){ ?>
<script src="<?php bloginfo('url');?>/jpn/shared/js/slide/jquery.bxslider.min.js"></script>
<link href="<?php bloginfo('url');?>/jpn/shared/js/slide/jquery.bxslider.css" rel="stylesheet" />
<script type="text/javascript" src="<?php bloginfo('url');?>/jpn/shared/js/instafeed.min.js"></script>
<script>
var userFeed = new Instafeed({
	get: 'user',
	sortBy: 'most-recent',
	links: true ,
	limit: 8,
  resolution: 'low_resolution', //thumbnail - 150x150 ,low_resolution - 306x306 ,standard_resolution - 612x612
	template: '<li><a href="{{link}}" target="_blank"><img src="{{image}}"></a><span>{{caption}}</span> </li>',
	userId: '4317112705',
	accessToken: '4317112705.43c39d8.8e3617d90cb4479385603d519e4ed7d2'
});
userFeed.run();
</script>
<script>
$(document).ready(function(){
$('.bxslider').bxSlider({
    auto: true,
    speed: 2000,
    mode: 'fade',
    controls: false,
    pager: false
  });
});
</script>
<?php } ?>

<?php if(is_page('learn-us')){ ?>
<script src="<?php bloginfo('url');?>/jpn/shared/js/slide/jquery.bxslider.min.js"></script>
<link href="<?php bloginfo('url');?>/jpn/shared/js/slide/jquery.bxslider.css" rel="stylesheet" />
<script type="text/javascript" src="<?php bloginfo('url');?>/jpn/shared/js/instafeed.min.js"></script>
<script>
var userFeed = new Instafeed({
	get: 'user',
	sortBy: 'most-recent',
	links: true ,
	limit: 4,
  resolution: 'low_resolution', //thumbnail - 150x150 ,low_resolution - 306x306 ,standard_resolution - 612x612
	template: '<li><a href="{{link}}" target="_blank"><img src="{{image}}"></a><span>{{caption}}</span> </li>',
	userId: '6713865136',
	accessToken: '6713865136.dbd5d56.250bbb7bd5ae4ab4b47031fcdd8d2bd7'
});
userFeed.run();
</script>
<script>
$(document).ready(function(){
$('.bxslider').bxSlider({
    auto: true,
    speed: 2000,
    mode: 'fade',
    controls: false,
    pager: false
  });
});
</script>
<?php } ?>
<?php wp_footer(); ?>
<section class="footer-banner">
  <!-- SnapWidget -->
  <script src="https://snapwidget.com/js/snapwidget.js"></script>
  <iframe src="https://snapwidget.com/embed/931626" class="snapwidget-widget" allowtransparency="true" frameborder="0" scrolling="no" style="border:none; overflow:hidden;  width:100%; "></iframe>
</section>
</body>
</html>
