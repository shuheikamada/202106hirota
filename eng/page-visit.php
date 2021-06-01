<?php get_header(); ?>
	<div class="bg">
	  <div class="intro">
        <h1>Visit us</h1>
		<?php
		    if(have_posts()):while(have_posts()):the_post();
			$ff_img = get_field('ff_img');
			$ff_text = get_field('ff_text');
			$ff_map = get_field('ff_map');
			$ff_address = get_field('ff_address');
			$ff_tel = get_field('ff_tel');
			$ff_email = get_field('ff_email');
			$ff_store = get_field('ff_store');
			$ff_site = get_field('ff_site');
		?>
		<?php endwhile;endif; ?>
        <div class="address">
          <div class="title-border"></div>
          <h2>Sumida Edo Kirikokan</h2>
		  <?php if(!empty($ff_img)){ ?>
          <div class="visual"> <img src="<?php echo $ff_img; ?>" alt="画像"> </div>
		  <?php } ?>
          <div class="text">
            <p><?php echo $ff_text; ?></p>
          </div>
          <div class="map">
            <?php echo $ff_map; ?>
            <p><?php echo $ff_address; ?><br>
              TEL <?php echo $ff_tel; ?><br>
              E-mail <a href="mailto:<?php echo $ff_email; ?>"><?php echo $ff_email; ?></a></p>
			<?php if(!empty($ff_store)){ ?>
            <dl>
			  <?php foreach($ff_store as $store){
				echo '<dt>'.$store[ff_title].'</dt><dd>'.$store[ff_detail].'</dd>';
		      } ?>
            </dl>
			<?php } ?>
            <!-- /.map --> 
          </div>
          <!-- /.address --> 
        </div>
		<?php if(!empty($ff_site)){ ?>
        <div class="site">
          <div class="title-border"></div>
          <h2>Global Shopping Site</h2>
          <div class="inner">
            <dl>
			  <?php foreach($ff_site as $site){
				echo '<h3>'.$site[ff_title].'</h3><p><a href="'.$site[ff_detail].'" target="_blank">'.$site[ff_detail].'</a></p>';
		      } ?>
            </dl>
          </div>
          <!-- /.site --> 
        </div>
		<?php } ?>
        
        <!-- /.intro --> 
      </div>
	</div>
<?php get_footer(); ?>