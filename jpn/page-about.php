<?php get_header(); ?>
  <div class="bg">
      <div class="intro">
        <h1>Our Story</h1>
        <div class="column-right">
          <p>廣田硝子は1899年に東京で創業。東京で最も歴史のある硝子メーカーの一つです。
            近代にヨーロッパから伝わったガラス製造は、日本の美意識と融合し、日本独自のデザインを開花させました。
            廣田硝子は、創業より社に伝わる貴重なデザイン資料を元に、江戸切子や吹き硝子など脈々と受け継がれる手仕事による伝統的製造を継承し、
            現代のインテリアに調和するプロダクトを作り続けています。</p>
        </div>
      <?php
        if(have_posts()):while(have_posts()):the_post();
      $ff_history = get_field('ff_history');
      $ff_movie = get_field('ff_yt');
      $ff_staff = get_field('ff_staff');
      $ff_press = get_field('ff_press');
      $ff_award = get_field('ff_award');
      $ff_works = get_field('ff_works');
      $i = 0;
      foreach($ff_history as $history){
        if($i%2 == 0){
          $classname = 'left';
          echo '<div class="year clearfix">';
        }else{
          $classname = 'right';
        }
        echo '<div class="'.$classname.'"><div class="item"><h3>'.$history[ff_time].'</h3>';
        if(!empty($history[ff_img])){
          $img = $history[ff_img];
          $sizeImg = $img['sizes'];
          echo '<img src="'.$sizeImg['size-news3'].'" alt="画像">';
        }
        echo '<p>'.$history[ff_text].'</p></div></div>';
        if($i%2 == 1 || $i == count($ff_history)-1){
          echo '</div>';
        }
        $i++;
      }
      ?>
      <?php endwhile;endif; ?>
        <!-- /.intro -->
      </div>
      <div id="philosophy">
        <div class="title">
          <div class="title-border"></div>
          <h2>Videos</h2>
          <!-- /.title -->
        </div>
    <?php foreach($ff_movie as $movie){
      echo '<div class="youtube">'.$movie[ff_oembed].'</div>';
    } ?>
        <!-- /.youtube -->
      </div>
      <!--171122 added by yasuda -->

      <div id="info">
        <div class="title">
          <div class="title-border"></div>
          <h2>Info</h2>
          <!-- /.title -->
        </div>
        <div class="profile clearfix">
          <dl class="clearfix">
            <dt>社 名</dt>
            <dd>廣田硝子株式会社　HIROTA　GLASS　co,.ltd</dd>
          </dl>
          <dl class="clearfix">
            <dt>創業</dt>
            <dd> 明治32年5月1日</dd>
          </dl>
          <dl class="clearfix">
            <dt>会社設立</dt>
            <dd> 昭和25年3月1日</dd>
          </dl>
            <dl class="clearfix">
            <dt>所在地</dt>
          <dd>
            <strong>&#9679; 本 社</strong><br>
            〒130-0013　東京都墨田区錦糸2－6－5<br>
            TEL 03-3623-4145　FAX 03-3623-8892<br>E-mail hirota-g@hirota-glass.co.jp<br><br>
            <strong>&#9679; 商品センター</strong><br>
            〒959-1273　新潟県燕市杉名811－1<br>
            TEL 0256-64-2770　　FAX　 0256-64-4171<br>E-mail tsubame@hirota-glass.co.jp</dd>
          </dl>
          <dl class="clearfix">
            <dt>資本金</dt>
            <dd> 1500万円</dd>
          </dl>
          <dl class="clearfix">
            <dt>営業品目</dt>
            <dd> 和洋ガラス食器・インテリアガラス・ガラス小物・業務用食器・江戸切子・その他・特注OEM制作</dd>
          </dl>
          <dl class="clearfix">
            <dt>取引銀行</dt>
            <dd> 三菱東京ＵＦＪ銀行　錦糸町支社<br>
            みずほ銀行　亀戸支店<br>
            商工中金押上支店<br>
            中小公庫本店<br>
            第四銀行燕支店</dd>
          </dl>
          <dl class="clearfix">
            <dt>加入団体</dt>
            <dd> 東京硝子製品協同組合・東京商工会議所</dd>
          </dl>
        </div>
      </div>

      <div id="team">
        <div class="title">
          <div class="title-border"></div>
          <h2>Our Team</h2>
          <!-- /.title -->
        </div>
      <?php
        $i = 0;
        foreach($ff_staff as $staff){
          if($i%4 == 0){
            echo '<div class="member clearfix">';
          }
          echo '<div class="item">';
          if(!empty($staff[ff_img])){
            $img2 = $staff[ff_img];
            $sizeImg2 = $img2['sizes'];
            echo '<img src="'.$sizeImg2['size-news4'].'" alt="写真">';
          }
          echo '<h3>'.$staff[ff_name].'</h3><p>'.$staff[ff_text].'</p></div>';
          if(($i-3)%4 == 0){
            echo '</div>';
          }
          $i++;
        }
        if($i%4 != 0){
          echo '</div>';
        }
      ?>
        <!-- /.team -->
      </div>

      <div id="press">
        <div class="title">
          <div class="title-border"></div>
          <h2>Press</h2>
          <!-- /.title -->
        </div>
        <div class="item clearfix">
          <ul>
        <?php
        $j = 0;
        foreach($ff_press as $press){
        echo '<li><a href="';
        if($press[ff_blank] == 0){
          $j++;
          echo '#image-'.$j.'">'.$press[ff_name].'</a></li><div class="lb-overlay" id="image-'.$j.'"><img src="'.$press[ff_url].'" alt="image" /><a href="#page" class="lb-close"><img src="'.get_bloginfo('url').'/jpn/shared/images/empty.png" alt=""></a></div>';
        }else{
          echo $press[ff_url].'" target="_blank">'.$press[ff_name].'</a></li>';
        }
        }?>
          </ul>
        </div>
        <!-- /#press -->
      </div>

    <?php if(!empty($ff_award)){ ?>
      <div id="award">
        <div class="title">
          <div class="title-border"></div>
          <h2>Awards</h2>
          <!-- /.title -->
        </div>
        <ul>
      <?php
        foreach($ff_award as $award){
          echo '<li>';
          if(!empty($award[ff_url])){
            echo '<a href="'.$award[ff_url].'"';
          }
          if($award[ff_blank] == 1){
            echo ' target="_blank"';
          }
          echo '>';
          echo $award[ff_title];
          if(!empty($award[ff_url])){
            echo '</a>';
          }
        }
      ?>
        </ul>
        <!-- /.award -->
      </div>
    <?php } ?>
    <?php if(!empty($ff_works)){ ?>
      <div id="performance">
        <div class="title">
          <div class="title-border"></div>
          <h2>Performance</h2>
          <!-- /.title -->
        </div>
        <ul>
      <?php
        foreach($ff_works as $works){
          echo '<li>';
          if(!empty($works[ff_url])){
            echo '<a href="'.$works[ff_url].'"';
          }
          if($works[ff_blank] == 1){
            echo ' target="_blank"';
          }
          echo '>';
          echo $works[ff_title];
          if(!empty($works[ff_url])){
            echo '</a>';
          }
        }
      ?>
        </ul>
        <!-- /.performance -->
      </div>
    <?php } ?>

      <!-- /.wrapper -->
  </div>
<?php get_footer(); ?>
