<!DOCTYPE html>

<html lang="ja">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title><?php
  /*
   * Print the <title> tag based on what is being viewed.
   */
  global $page, $paged;

  wp_title( '|', true, 'right' );

  // Add the blog name.
  bloginfo( 'name' );

  // Add the blog description for the home/front page.
  $site_description = get_bloginfo( 'description', 'display' );
  if ( $site_description && ( is_home() || is_front_page() ) )
    echo " | $site_description";

  // Add a page number if necessary:
  if ( $paged >= 2 || $page >= 2 )
    echo ' | ' . sprintf( __( 'Page %s', '' ), max( $paged, $page ) );

  ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Style-Type" content="text/css">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta http-equiv="Content-Language" content="ja">
<meta name="viewport" content="width=1024">
<meta name="format-detection" content="telephone=no">
<meta name="Robots" content="INDEX, FOLLOW">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('url');?>/jpn/shared/css/root.css" media="all">
<?php if(is_page_template('page-mainproduct.php')):?>
<link rel="stylesheet" href="<?php bloginfo('url');?>/jpn/shared/css/mainproductlp.css" media="all">
<?php endif; ?>
<?php // 現在使用しているテンプレートファイル名を表示
  global $template; // テンプレートファイルのパスを取得
  $temp_name = basename($template); // パスの最後の名前（ファイル名）を取得
?>
<?php if($temp_name == 'page-news.php'):?>
<link rel="stylesheet" href="<?php bloginfo('url');?>/jpn/shared/css/news.css" media="all">
<?php endif; ?>
<?php if($temp_name == 'single-news.php'):?>
<link rel="stylesheet" href="<?php bloginfo('url');?>/jpn/shared/css/single-news.css" media="all">
<?php endif; ?>

<!--[if lt IE 9]>
<script src="<?php bloginfo('url');?>/jpn/shared/js/html5shiv.min.js"></script>
<script src="<?php bloginfo('url');?>/jpn/shared/js/respond.min.js"></script>
<![endif]-->
<!-- carousel -->
<link rel="stylesheet" href="<?php bloginfo('url');?>/jpn/shared/js/slick/slick-theme.css">
<link rel="stylesheet" href="<?php bloginfo('url');?>/jpn/shared/js/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php bloginfo('url');?>/jpn/shared/css/lightbox.css" />
<?php wp_head(); ?>
</head>
<?php if($temp_name == 'single-news.php'):?>
<body id="single-news">
<?php else: ?>
<body id="<?php echo getPageName(); ?>"<?php if(is_single()){ echo ' class="main"'; } ?>>
<?php endif;?>
<div id="pagetop" class="container">
  <div class="header">
    <div class="inner clearfix">
      <div id="logo"><a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('url');?>/jpn/shared/images/logo.png" alt="廣田硝子"></a>
        <button id="nav-toggle">Menu</button>
      </div>
      <div id="nav">
        <ul>
          <li class="menu01"><a href="<?php bloginfo('url');?>/about.html">ABOUT US</a></li>
          <li class="menu02"><a href="<?php bloginfo('url');?>/products.html">PRODUCTS</a></li>
          <li class="menu03"><a href="<?php bloginfo('url');?>/inspirations.html">INSPIRATIONS</a></li>
          <li class="menu04"><a href="https://hirota-glass.co.jp/sumida-waglasskan/">SHOP</a></li>
          <li class="menu05"><a href="<?php bloginfo('url');?>/visit.html">VISIT US</a></li>
          <li class="menu06"><a href="http://hirotaglass.shop-pro.jp" target="_blank">ONLINE SHOP</a></li>
          <li class="menu07"><a href="<?php bloginfo('url');?>/contact.html">CONTACT US</a></li>
          <li class="menu08"><a href="<?php bloginfo('url');?>">|JP|</a></li>
          <li class="menu09"><a href="/eng/">|EN|</a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- .contents -->
  <div class="contents">
