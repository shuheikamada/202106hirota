<?php get_header(); ?>

<!--
<a href="http://hirota-glass.co.jp/eng/contact.html"><img class="btn-float pc" src="<?php bloginfo('url');?>/jpn/shared/images/btn_float.png" alt="Seeking Agents and Distributors"></a> <a href="http://hirota-glass.co.jp/eng/contact.html"><img class="btn-float sp" src="<?php bloginfo('url');?>/jpn/shared/images/btn_float_sp.png" alt="Seeking Agents and Distributors"></a>
-->
<div class="title">
        <div class="title-border"></div>
        <h2><span>News</span></h2>
        <!-- /.title  -->
</div>
<div class="news">
  <ul class="list-layout">
  <?php
  global $wp_query;
	$paged = $wp_query->query_vars['page'];

  $args = array(
    'post_type' => array('news'),
    'paged' => $paged,
    'posts_per_page' => '10',
    'post_status' => 'publish',
    'orderby' => 'ASC',
  );
  $the_query = new WP_Query( $args );
  if ( $the_query->have_posts() ) :
  while ( $the_query->have_posts() ) : $the_query->the_post();
  ?>
              <a href="<?php the_permalink();?>">
              <li class="flexbox">

                  <div class="image">
                    <?php
                      $thumb=get_the_post_thumbnail($id,'thumbnail');

                    ?>
                    <?php if(!empty($thumb)):?>
                    <img src="<?=$thumb;?>">
                    <?php else: ?>
                    <img src="<?= get_template_directory_uri() . "/images/"; ?>news-dummy.png">
                    <?php endif;?>
                  </div>
                  <div class="text">
                    <h3>
                      <?php

                        if(mb_strlen($post->post_title)>20) {
                          $title= mb_substr($post->post_title,0,25).'...' ;
                        } else {
                          $title = $post->post_title;
                        }
                        echo $title;
                      ?>

                    </h3>
                    <p><span class="date"><?php the_time('Y.n.j'); ?></span></p>
                  </div>
              </li>
              </a>
<?php endwhile; ?>
<?php endif; wp_reset_postdata(); ?>
    <li class="pagenation">
      <div class="inner flexbox">
        <div class="flexbox num">
          <?php
              if (function_exists("pagination")) {
                pagination($the_query->max_num_pages);
                wp_reset_postdata();
          } ?>
        </div>
      </div>
    </li>
  </ul>
</div>

<?php get_footer(); ?>
