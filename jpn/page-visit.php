<?php get_header(); ?>
	<div class="bg">
	  <div class="intro">
        <h1>Visit us</h1>


		<?php
			$ff_img = get_field('ff_img');
			$ff_text = get_field('ff_text');
			$ff_map = get_field('ff_map');
			$ff_address = get_field('ff_address');
			$ff_tel = get_field('ff_tel');
			$ff_email = get_field('ff_email');
			$ff_store = get_field('ff_store');
			$ff_site = get_field('ff_site');
			$ff_map_sumida = get_field('ff_map_sumida');
			$ff_img_sumida = get_field('ff_img_sumida');
			$ff_address_sumida = get_field('ff_address_sumida');
			$ff_tel_sumida = get_field('ff_tel_sumida');
			$ff_email_sumida = get_field('ff_email_sumida');
			$ff_store_sumida = get_field('ff_store_sumida');
			$ff_site_sumida = get_field('ff_site_sumida');

		?>

		<div class="address">
			<div class="title-border"></div>
			<h2><a href="/learn-us.html"><span>すみだ和ガラス館</span> Sumida Waglasskan</a></h2>
			<?php if(!empty($ff_img_sumida)){ ?>
				<div class="visual"> <img src="<?php echo $ff_img_sumida; ?>" alt="画像"> </div>
			<?php } ?>

						<div class="map">
							<?php echo $ff_map_sumida; ?>
							<p><?php echo $ff_address_sumida; ?><br>
								TEL <?php echo $ff_tel_sumida; ?><br>
								E-mail <a href="mailto:<?php echo $ff_email_sumida; ?>"><?php echo $ff_email_sumida; ?></a></p>
				<?php if(!empty($ff_store_sumida)){ ?>
							<dl>
					<?php foreach($ff_store_sumida as $store_sumida){
					echo '<dt>'.$store_sumida[ff_title_sumida].'</dt><dd>'.$store_sumida[ff_detail_sumida].'</dd>';
						} ?>
							</dl>
				<?php } ?>
				<!-- /.map -->
			</div>
			<!-- /.address-sumida -->
		</div>
	</div>

	<div class="top-banner">
		<a href="https://hirotaglass.thebase.in/" target="_blank">
		        <div class="banner-04"></div>
		</a>
	</div>

	<div class="intro">

				<div class="address">
					<div class="title-border"></div>
					<h2><a href="http://www.edokiriko.net/" target="_blank"><span>すみだ江戸切子館</span> Sumida Edo Kirikokan</a></h2>
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

<!--
		<div id="shops">
			<div class="title-border"></div>
			<h2>Shops</h2>
			<div class="inner">
				<a name="hokkaido_tohoku" id="hokkaido_tohoku"></a>
				<div class="prefecture-list">
					<ul>
						<li><a href="#hokkaido_tohoku">北海道・東北</a></li>
						<li><a href="#kanto">関東</a></li>
						<li><a href="#central">信越・東海・北陸</a></li>
						<li><a href="#kansai">近畿</a></li>
						<li><a href="#chugoku_shikoku">中国・四国</a></li>
						<li><a href="#kyusyu_okinawa">九州・沖縄</a></li>
					</ul>
				</div>
				<div class="shops-wrap">
					<div class="prefecture">北海道</div>
					<div class="shop-list">
						<?php	if( have_rows('hokkaido') ):
									while ( have_rows('hokkaido') ) : the_row();
										$store_name = get_sub_field('store_name');
										$store_address = get_sub_field('store_address');
										$store_phone = get_sub_field('store_phone');
										echo("<ul>
														<li>$store_name</li>
														<li>$store_address</li>
														<li>$store_phone</li>
														</ul>");
						    	endwhile;
									else : echo("<ul>
																<li>現在、北海道で廣田硝子を扱っている店舗がありません。</li>
															</ul>");
									endif;?>
					</div>
				</div>
					<div class="shops-wrap">
						<div class="prefecture">青森</div>
						<div class="shop-list">
							<?php	if( have_rows('aomori') ):
										while ( have_rows('aomori') ) : the_row();
											$store_name = get_sub_field('store_name');
											$store_address = get_sub_field('store_address');
											$store_phone = get_sub_field('store_phone');
											echo("<ul>
															<li>$store_name</li>
															<li>$store_address</li>
															<li>$store_phone</li>
															</ul>");
							    	endwhile;
										else : echo("<ul>
																	<li>現在、青森県で廣田硝子を扱っている店舗がありません。</li>
																</ul>");
										endif;?>
						</div>
					</div>
						<div class="shops-wrap">
							<div class="prefecture">岩手</div>
							<div class="shop-list">
								<?php	if( have_rows('iwate') ):
											while ( have_rows('iwate') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
								    	endwhile;
											else : echo("<ul>
																		<li>現在、岩手県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
							</div>
						</div>
						<div class="shops-wrap">
							<div class="prefecture">宮城</div>
							<div class="shop-list">
								<?php	if( have_rows('miyagi') ):
											while ( have_rows('miyagi') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
								    	endwhile;
											else : echo("<ul>
																		<li>現在、宮城県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
							</div>
						</div>

						<div class="shops-wrap">
							<div class="prefecture">秋田</div>
							<div class="shop-list">
								<?php	if( have_rows('akita') ):
											while ( have_rows('akita') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
								    	endwhile;
											else : echo("<ul>
																		<li>現在、秋田県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
							</div>
						</div>

						<div class="shops-wrap">
							<div class="prefecture">山形</div>
							<div class="shop-list">
							<?php	if( have_rows('yamagata') ):
										while ( have_rows('yamagata') ) : the_row();
											$store_name = get_sub_field('store_name');
											$store_address = get_sub_field('store_address');
											$store_phone = get_sub_field('store_phone');
											echo("<ul>
															<li>$store_name</li>
															<li>$store_address</li>
															<li>$store_phone</li>
															</ul>");
										endwhile;
										else : echo("<ul>
																	<li>現在、山形県で廣田硝子を扱っている店舗がありません。</li>
																</ul>");
										endif;?>
							</div>
						</div>
						<a name="kanto" id="kanto"></a>
						<div class="shops-wrap">
								<div class="prefecture">福島</div>
								<div class="shop-list">
								<?php	if( have_rows('fukushima') ):
											while ( have_rows('fukushima') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、福島県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">茨城</div>
								<div class="shop-list">
								<?php	if( have_rows('ibaraki') ):
											while ( have_rows('ibaraki') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、茨城県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">栃木</div>
								<div class="shop-list">
								<?php	if( have_rows('tochigi') ):
											while ( have_rows('tochigi') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、栃木県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">群馬</div>
								<div class="shop-list">
								<?php	if( have_rows('gunma') ):
											while ( have_rows('gunma') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、群馬県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">埼玉</div>
								<div class="shop-list">
								<?php	if( have_rows('saitama') ):
											while ( have_rows('saitama') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、埼玉県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">千葉</div>
								<div class="shop-list">
								<?php	if( have_rows('chiba') ):
											while ( have_rows('chiba') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、千葉県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">東京</div>
								<div class="shop-list">
								<?php	if( have_rows('tokyo') ):
											while ( have_rows('tokyo') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、東京都で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<a name="central" id="central"></a>
						<div class="shops-wrap">
								<div class="prefecture">神奈川</div>
								<div class="shop-list">
								<?php	if( have_rows('kanagawa') ):
											while ( have_rows('kanagawa') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、神奈川県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">山梨</div>
								<div class="shop-list">
								<?php	if( have_rows('yamanashi') ):
											while ( have_rows('yamanashi') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、山梨県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">新潟</div>
								<div class="shop-list">
								<?php	if( have_rows('niigata') ):
											while ( have_rows('niigata') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、新潟県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">長野</div>
								<div class="shop-list">
								<?php	if( have_rows('nagano') ):
											while ( have_rows('nagano') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、長野県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">富山</div>
								<div class="shop-list">
								<?php	if( have_rows('toyama') ):
											while ( have_rows('toyama') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、富山県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">石川</div>
								<div class="shop-list">
								<?php	if( have_rows('ishikawa') ):
											while ( have_rows('ishikawa') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、石川県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">福井</div>
								<div class="shop-list">
								<?php	if( have_rows('fukui') ):
											while ( have_rows('fukui') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、福井県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">静岡</div>
								<div class="shop-list">
								<?php	if( have_rows('shizuoka') ):
											while ( have_rows('shizuoka') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、静岡県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">愛知</div>
								<div class="shop-list">
								<?php	if( have_rows('aichi') ):
											while ( have_rows('aichi') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、愛知県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">岐阜</div>
								<div class="shop-list">
								<?php	if( have_rows('gifu') ):
											while ( have_rows('gifu') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、岐阜県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<a name="kansai" id="kansai"></a>
						<div class="shops-wrap">
								<div class="prefecture">三重</div>
								<div class="shop-list">
								<?php	if( have_rows('mie') ):
											while ( have_rows('mie') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、三重県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">奈良</div>
								<div class="shop-list">
								<?php	if( have_rows('nara') ):
											while ( have_rows('nara') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、奈良県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">滋賀</div>
								<div class="shop-list">
								<?php	if( have_rows('shiga') ):
											while ( have_rows('shiga') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、滋賀県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">京都</div>
								<div class="shop-list">
								<?php	if( have_rows('kyoto') ):
											while ( have_rows('kyoto') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、京都府で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">大阪</div>
								<div class="shop-list">
								<?php	if( have_rows('osaka') ):
											while ( have_rows('osaka') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、大阪府で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">兵庫</div>
								<div class="shop-list">
								<?php	if( have_rows('hyougo') ):
											while ( have_rows('hyougo') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、兵庫県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<a name="chugoku_shikoku" id="chugoku_shikoku"></a>
						<div class="shops-wrap">
								<div class="prefecture">和歌山</div>
								<div class="shop-list">
								<?php	if( have_rows('wakayama') ):
											while ( have_rows('wakayama') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、和歌山県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">岡山</div>
								<div class="shop-list">
								<?php	if( have_rows('okayama') ):
											while ( have_rows('okayama') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、岡山県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">広島</div>
								<div class="shop-list">
								<?php	if( have_rows('hiroshima') ):
											while ( have_rows('hiroshima') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、広島県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">鳥取</div>
								<div class="shop-list">
								<?php	if( have_rows('tottori') ):
											while ( have_rows('tottori') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、鳥取県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">島根</div>
								<div class="shop-list">
								<?php	if( have_rows('shimane') ):
											while ( have_rows('shimane') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、島根県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">山口</div>
								<div class="shop-list">
								<?php	if( have_rows('yamaguchi') ):
											while ( have_rows('yamaguchi') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、山口県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">徳島</div>
								<div class="shop-list">
								<?php	if( have_rows('tokushima') ):
											while ( have_rows('tokushima') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、徳島県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">香川</div>
								<div class="shop-list">
								<?php	if( have_rows('kagawa') ):
											while ( have_rows('kagawa') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、香川県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">愛媛</div>
								<div class="shop-list">
								<?php	if( have_rows('ehime') ):
											while ( have_rows('ehime') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、愛媛県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<a name="kyusyu_okinawa" id="kyusyu_okinawa"></a>
						<div class="shops-wrap">
								<div class="prefecture">高知</div>
								<div class="shop-list">
								<?php	if( have_rows('kouchi') ):
											while ( have_rows('kouchi') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、高知県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">福岡</div>
								<div class="shop-list">
								<?php	if( have_rows('fukuoka') ):
											while ( have_rows('fukuoka') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、福岡県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">佐賀</div>
								<div class="shop-list">
								<?php	if( have_rows('saga') ):
											while ( have_rows('saga') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、佐賀県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">長崎</div>
								<div class="shop-list">
								<?php	if( have_rows('nagasaki') ):
											while ( have_rows('nagasaki') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、長崎県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">熊本</div>
								<div class="shop-list">
								<?php	if( have_rows('kumamoto') ):
											while ( have_rows('kumamoto') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、熊本県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">大分</div>
								<div class="shop-list">
								<?php	if( have_rows('ooita') ):
											while ( have_rows('ooita') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo"<ul>
																		<li>現在、大分県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>";
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">宮崎</div>
								<div class="shop-list">
								<?php	if( have_rows('miyazaki') ):
											while ( have_rows('miyazaki') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、宮崎県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">鹿児島</div>
								<div class="shop-list">
								<?php	if( have_rows('kagoshima') ):
											while ( have_rows('kagoshima') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、鹿児島県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
						<div class="shops-wrap">
								<div class="prefecture">沖縄</div>
								<div class="shop-list">
								<?php	if( have_rows('okinawa') ):
											while ( have_rows('okinawa') ) : the_row();
												$store_name = get_sub_field('store_name');
												$store_address = get_sub_field('store_address');
												$store_phone = get_sub_field('store_phone');
												echo("<ul>
																<li>$store_name</li>
																<li>$store_address</li>
																<li>$store_phone</li>
																</ul>");
											endwhile;
											else : echo("<ul>
																		<li>現在、沖縄県で廣田硝子を扱っている店舗がありません。</li>
																	</ul>");
											endif;?>
								</div>
						</div>
				</div>
			</div>
-->
	</div>

			</div>

<?php get_footer(); ?>
