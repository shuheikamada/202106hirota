<?php
function remove_wp_open_sans() {
	wp_deregister_style( 'open-sans' );
	wp_register_style( 'open-sans', false );
}
add_action('wp_enqueue_scripts', 'remove_wp_open_sans');
add_action('admin_enqueue_scripts', 'remove_wp_open_sans');

add_theme_support( 'post-thumbnails' );
add_image_size('size-news',300,350,true);
add_image_size('size-news0',600,650,true);
add_image_size('size-news1',1600,960,true);
add_image_size('size-news2',750,1095,true);
add_image_size('size-news3',540,170,true);
add_image_size('size-news4',300,300,true);

/**
* get page name
**/
function getPageName(){
	if(is_page('home')||is_page('home2')){
		$pname = 'toppage';
	}
	else if(is_page()){
		$pageId = get_the_ID();
		$curPage = get_page($pageId);
		$curPageParent = $curPage->post_parent;
		if($curPageParent == 0){
			$pname = $curPage->post_name;
		}else{
			$pname = get_page(get_top_parent_page_id())->post_name;
		}
	}
	else if(is_single() || is_category()){
		$pname = 'products';
	}
	return $pname;
}

function get_top_parent_page_id() {
    global $post;
    $ancestors = $post->ancestors;
    if ($ancestors) {
        return end($ancestors);
    } else {
        return $post->ID;
    }
}
	//Add Custom post
	add_action( 'init', 'create_posttype' );
	function create_posttype() {
	  register_post_type('facilities',
	    array(
	      'labels' => array(
	        'name' => 'FACILITIES',
	        'singular_name' => 'FACILITIE',
	      ),
	      'public' => true,
	      'menu_position' => 5,
	      'has_archive' => true,
	      'supports' => array(
	        'title',
	        'thumbnail',
	      ),
	    )
	  );
		register_post_type('exhibits',
			array(
				'labels' => array(
					'name' => 'EXHIBITS',
					'singular_name' => 'EXHIBIT',
				),
				'public' => true,
				'menu_position' => 6,
				'has_archive' => true,
				'supports' => array(
					'title',
					'thumbnail',
				),
			)
		);
}
