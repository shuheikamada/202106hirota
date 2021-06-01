<?php get_header(); ?>

<!--
<a href="http://hirota-glass.co.jp/eng/contact.html"><img class="btn-float pc" src="<?php bloginfo('url');?>/jpn/shared/images/btn_float.png" alt="Seeking Agents and Distributors"></a> <a href="http://hirota-glass.co.jp/eng/contact.html"><img class="btn-float sp" src="<?php bloginfo('url');?>/jpn/shared/images/btn_float_sp.png" alt="Seeking Agents and Distributors"></a>
-->
    <div id="key-visual">
      <!---->
      <div class="logo">
        <h1>すみだ和ガラス館</h1>
        <img src="<?php bloginfo('url');?>/jpn/shared/images/learn_us.svg">
      </div>
      <?php
  		if(have_posts()):while(have_posts()):the_post();
  	    $ff_visual01 = get_field('ff_visual01');
  	    $ff_visual02 = get_field('ff_visual02');
  	    $ff_visual03 = get_field('ff_visual03');
        $ff_visual04 = get_field('ff_visual04');
        $ff_map = get_field('ff_map');
        $ff_address = get_field('ff_address');
        $ff_tel = get_field('ff_tel');
  			$ff_email = get_field('ff_email');
        $ff_store = get_field('ff_store');
        $ff_link01 = get_field('ff_link01');
        $ff_link02 = get_field('ff_link02');
        $ff_link03 = get_field('ff_link03');
        $ff_link04 = get_field('ff_link04');
        $ff_link_title01 = get_field('ff_link_title01');
        $ff_link_title02 = get_field('ff_link_title02');
        $ff_link_title03 = get_field('ff_link_title03');
        $ff_link_title04 = get_field('ff_link_title04');
        $ff_link_date01 = get_field('ff_link_date01');
        $ff_link_date02 = get_field('ff_link_date02');
        $ff_link_date03 = get_field('ff_link_date03');
        $ff_link_date04 = get_field('ff_link_date04');
  	  ?>
        <ul class="bxslider pc">
  	    <?php foreach($ff_visual01 as $ff_img01){
  			$pcImg = $ff_img01['sizes'];
  			echo '<li><img src="'.$pcImg['size-news1'].'" /></li>';
  	    } ?>
        </ul>
        <ul class="bxslider sp">
  	    <?php foreach($ff_visual02 as $ff_img02){
  			$spImg = $ff_img02['sizes'];
  			echo '<li><img src="'.$spImg['size-news2'].'" /></li>';
  	    } ?>
        </ul>
        <?php endwhile;endif; ?>
        <!-- <img class="main pc" src="<?php bloginfo('url');?>/jpn/shared/images/key_visual.png" alt="画像">
          <img class="main sp" src="<?php bloginfo('url');?>/jpn/shared/images/key_visual_sp.png" alt="画像">-->
    </div>

    <!--<div id="sumida-glass">
      <h2>すみだ和ガラス館</h2>
      <p>すみだ和ガラス館は、廣田硝子が創業より収蔵している和ガラスの貴重な資料展示と、和ガラスの製法が学べるワークショップラボを併設した体験学習スペースです。廣田硝子ショップも併設されており、お買い物にもぜひお立ち寄りください。</p>
    </div>-->

    <div class="intro">

      <div>
        <p>すみだ和ガラス館は、ガラスのための資料室と研究室がひとつになった体験学習スペースです。
          3Fは廣田硝子が創業より収蔵している和ガラスの貴重な資料を展示する「和ガラス資料室」、
          4Fは日本で培われた和のガラスの加工法を体験できる「和ガラス研究室」がございます。
          また1Fには廣田硝子直営ショップも併設しております。お買い物にもぜひお立ち寄りください。</p>
      </div>
    <!-- /.intro -->
    </div>
    <div id="learn-us-news-event">
      <div class="title">
        <div class="title-border"></div>
        <h2>News &amp; Event</h2>
        <!-- /.title  -->
      </div>
      <ul id="instafeed" class="clearfix"></ul>
      <!-- /.learn-us-news-event -->
    </div>


    <div class="learn-us-key-visual">
      <div class="banner-01"></div>
      <!--<img src="<?php bloginfo('url');?>/jpn/shared/images/key_visual_learn_us_01.png" alt="画像">-->
      <!-- /.learn-us-key-visual -->
    </div>

    <div id="learn-us-facilities">
      <div class="title">
        <div class="title-border"></div>
        <h2>Facilities</h2>
        <!-- /.title  -->
      </div>
      <ul class="learn-us-images">
        <?php
                  $args = array(
                    'post_type' => 'facilities',
                  );
                  $query = new WP_Query( $args );
        ?>
        <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
          <li>
            <?php the_post_thumbnail('size-news4'); ?>
            <span>
              <?php echo the_title(); ?>
            </span>
          </li>
        <?php endwhile;endif;wp_reset_query(); ?>
      </ul>
      <!-- learn us images here -->
      <p>そのほかにも割り出し機、ボール盤、グラインダー、焼き付け用オーブンがあります。</p>
      <!-- /.learn-us-facilities  -->
    </div>

    <div id="learn-us-workshop">
      <div class="title">
        <h2><span>Workshop Schedule</span></h2>
        <ul class="learn-us-workshop-box">
          <?php if(!empty($ff_link_title01)){ ?>
          <li><a href="<?php echo $ff_link01 ?>" target="_blank"><span class="workshop-date"><?php echo $ff_link_date01 ?></span><?php echo $ff_link_title01 ?></a></li>
          <?php } ?>
          <?php if(!empty($ff_link_title02)){ ?>
          <li><a href="<?php echo $ff_link02 ?>" target="_blank"><span class="workshop-date"><?php echo $ff_link_date02 ?></span><?php echo $ff_link_title02 ?></a></li>
          <?php } ?>
          <?php if(!empty($ff_link_title03)){ ?>
          <li><a href="<?php echo $ff_link03 ?>" target="_blank"><span class="workshop-date"><?php echo $ff_link_date03 ?></span><?php echo $ff_link_title03 ?></a></li>
          <?php } ?>
          <?php if(!empty($ff_link_title04)){ ?>
          <li><a href="<?php echo $ff_link04 ?>" target="_blank"><span class="workshop-date"><?php echo $ff_link_date04 ?></span><?php echo $ff_link_title04 ?></a></li>
          <?php } ?>
          <?php if(empty($ff_link_title01)){ ?>
            <li><span></span>現在開催予定のワークショップはありません。</li>
          <?php } ?>
        </ul>
        <div class="learn-us-workshop-botton">
          <a href="https://hirotaglass.thebase.in/" target="_blank">お申し込み・詳細はこちら</a>
          <!-- /.learn-us-botton-->
        </div>
        <!-- /.title  workshop-box-->
      </div>
      <!-- /.learn-us-workshop-->
    </div>

    <div class="learn-us-key-visual">
      <div class="banner-02"></div>
      <!--<img src="<?php bloginfo('url');?>/jpn/shared/images/key_visual_learn_us_02.png" alt="画像">-->
      <!-- /.learn-us-key-visual -->
    </div>

    <div id="learn-us-exhibits">
      <div class="title">
        <div class="title-border"></div>
        <h2>Exhibits</h2>
        <!-- /.title  -->
      </div>
      <ul class="learn-us-images">
        <?php
                  $args = array(
                    'post_type' => 'exhibits',
                  );
                  $query = new WP_Query( $args );
        ?>
        <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
          <li>
            <?php the_post_thumbnail('size-news4'); ?>
            <span>
              <?php echo the_title(); ?>
            </span>
          </li>
        <?php endwhile;endif;wp_reset_query(); ?>
      </ul>
      <!-- learn us images here -->
      <p>そのほかにも、アンティーク品、廃盤となったガラス製品など貴重な資料があります。</p>
      <!-- /.learn-us-facilities  -->
    </div>

    <div class="learn-us-key-visual">
      <div class="banner-03"></div>
      <!--<img src="<?php bloginfo('url');?>/jpn/shared/images/key_visual_learn_us_03.png" alt="画像">-->
      <!-- /.learn-us-key-visual -->
    </div>

    <div class="address">
      <div class="title-border"></div>
      <h2>Access</h2>
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

<?php get_footer(); ?>
