<?php get_header(); ?>

<!--
<a href="http://hirota-glass.co.jp/eng/contact.html"><img class="btn-float pc" src="<?php bloginfo('url');?>/jpn/shared/images/btn_float.png" alt="Seeking Agents and Distributors"></a> <a href="http://hirota-glass.co.jp/eng/contact.html"><img class="btn-float sp" src="<?php bloginfo('url');?>/jpn/shared/images/btn_float_sp.png" alt="Seeking Agents and Distributors"></a>
-->
<div class="title">
        <div class="title-border"></div>
        <h2><span>News</span></h2>
        <!-- /.title  -->
</div>

<?php if(have_posts()): while(have_posts()):the_post(); ?>

      <section class="content" id="single-news">
        <div class="article-title">
          <div class="inner">
            <h1><?php the_title(); ?></h1>
            <div class="date"><?php the_time('Y.n.j'); ?></div>

          </div>
        </div>
        <?php
          $thumb=get_the_post_thumbnail();
          if($thumb):
        ?>
        <div class="mv">
  				<div class="inner">
  					<?=$thumb; ?>
  				</div>
  			</div>
        <?php endif;?>

  			<article>
          <?php the_content();　?>
      	</article>
<?php endwhile; ?>
<?php endif; ?>

        <div class="pagenation">
  				<div class="inner flexbox">
            <div class="flexbox">
  							<div class="prev">
  	  						<?php previous_post_link('%link','＜前のニュース'); ?>
  	  					</div>
  	  					<div class="next">
  	  						<?php next_post_link('%link','次のニュース＞'); ?>
  	  					</div>
            </div>

  					<div class="back">
                <a href="<?= esc_url( home_url() ) . "/news.html"; ?>">→ ニュース一覧に戻る</a>
            </div>
  			</div>
      </div>

      </section>

<?php get_footer(); ?>
