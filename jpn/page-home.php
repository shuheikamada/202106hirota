<?php get_header(); ?>

<!--
<a href="http://hirota-glass.co.jp/eng/contact.html"><img class="btn-float pc" src="<?php bloginfo('url');?>/jpn/shared/images/btn_float.png" alt="Seeking Agents and Distributors"></a> <a href="http://hirota-glass.co.jp/eng/contact.html"><img class="btn-float sp" src="<?php bloginfo('url');?>/jpn/shared/images/btn_float_sp.png" alt="Seeking Agents and Distributors"></a>
-->
    <div id="key-visual">
      <div class="message">
        <h1>Authentic<br>
          Tokyo<br>
          Glassware <span class="name">Hirota Glass</span><span class="explanation">Made with only the finest materials <br>
          by highly skilled artisans in Tokyo.</span> </h1>
      </div>
	  <?php
		if(have_posts()):while(have_posts()):the_post();
	    $ff_visual01 = get_field('ff_visual01');
	    $ff_visual02 = get_field('ff_visual02');
		$ff_movie = get_field('ff_movie');
		$ff_info = get_field('ff_info');
		$ff_news = get_field('ff_news');
	  ?>
      <ul class="bxslider pc">
	    <?php foreach($ff_visual01 as $ff_img01){
  			$pcImg = $ff_img01['sizes'];
        $pcUrl = $ff_img01['caption'];
        $pcTarget = $ff_img01['description'];
			echo '<li><a href="'.$pcUrl.'" target="'.$pcTarget.'"><img src="'.$pcImg['size-news1'].'" /></a></li>';
	    } ?>
      </ul>
      <ul class="bxslider sp">
	    <?php foreach($ff_visual02 as $ff_img02){
        $spImg = $ff_img02['sizes'];
        $spUrl = $ff_img02['caption'];
        $spTarget = $ff_img02['description'];
			echo '<li><a href="'.$spUrl.'" target="'.$spTarget.'"><img src="'.$spImg['size-news2'].'" /></a></li>';
	    } ?>
      </ul>
      <?php endwhile;endif; ?>
      <!-- <img class="main pc" src="<?php bloginfo('url');?>/jpn/shared/images/key_visual.png" alt="画像">
        <img class="main sp" src="<?php bloginfo('url');?>/jpn/shared/images/key_visual_sp.png" alt="画像">-->
    </div>

    <div id="top-news">
      <div class="title">
        <div class="title-border"></div>
        <h2><span>News</span></h2>
        <!-- /.title  -->
      </div>
      <ul id="instafeed" class="clearfix"></ul>
      <div class="title-button-area">
        <a href="https://www.instagram.com/hirotaglass/" class="title-button" target="_blank">Instagram &gt;</a>
      </div>
      <!-- /#title-button-area -->
    </div>

    <div id="collection">
      <div class="title">
        <div class="title-border"><img src="<?php bloginfo('url');?>/jpn/shared/images/top_h1_img.png" alt="画像"></div>
        <h2><span>Collection</span> Lineup</h2>
        <!-- /.title  -->
      </div>
      <div class="carousel">
        <ul class="slider multiple-item">
		  <?php
			$mainPro = false;
			$i = 0;
		    query_posts('showposts=-1&post_type=post');
			if(have_posts()):while(have_posts()):the_post();
			$i++;
			foreach(get_the_category($post->ID) as $category){
				if($category->cat_name == 'MAIN PRODUCTS'){
					$mainPro = true;
				};
			}
		  ?>
          <li><a href="<?php if($mainPro){ the_permalink(); }else{ echo get_bloginfo('url').'/products#image-'.$i; } ?>"><?php the_post_thumbnail(); ?></a></li>
		  <?php endwhile;endif;wp_reset_query(); ?>
        </ul>
        <!-- /.carousel -->
      </div>
      <!-- /#collection -->
    </div>

    <div class="top-banner">
      <a href="http://hirotaglass.shop-pro.jp" target="_blank">
        <div class="banner-01"></div>
      </a>

      <a href="https://hirota-glass.co.jp/sumida-waglasskan/" target="_blank">
        <div class="banner-04"></div>
      </a>

      <a href="http://hirota-glass.co.jp/products/mainproducts/1050.html" target="_blank">
        <div class="banner-05"></div>
      </a>

      <a href="http://hirota-glass.co.jp/diamante/" target="_blank">
        <div class="banner-02"></div>
      </a>

      <a href="http://hirota-glass.co.jp/products/mainproducts/1107.html" target="_blank">
        <div class="banner-03"></div>
      </a>

      <!-- /#top-banner -->
    </div>

    <div id="top-youtube">
      <div class="title">
        <div class="title-border title-border-white"></div>
        <h2><span class="white">Youtube</span></h2>
        <!-- /.title  -->
      </div>
      <ul>
      <?php foreach($ff_movie as $movie){
      echo '<li>'.$movie[ff_oembed].'</li>';
    } ?>
      </ul>
        <!-- /.youtube -->
    </div>


    </div>




<?php get_footer(); ?>
