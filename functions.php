<?php
// ウィジェットエリア
register_sidebar( array(
     'name' => __( 'Top Widget' ),
     'id' => 'top-widget',
     'before_widget' => '<div class="widget-container">',
     'after_widget' => '</div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>',
) );
// サイドバーのウィジェット
register_sidebar( array(
     'name' => __( 'Side Widget' ),
     'id' => 'side-widget',
     'before_widget' => '<div class="widget-container">',
     'after_widget' => '</div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>',
) );
// フッターエリアのウィジェット
register_sidebar( array(
     'name' => __( 'Footer Widget' ),
     'id' => 'footer-widget',
     'before_widget' => '<div class="widget-container">',
     'after_widget' => '</div>',
     'before_title' => '<h3>',
     'after_title' => '</h3>',
) );
// フッターエリアのウィジェット
register_sidebar( array(
     'name' => __( 'Front Widget' ),
     'id' => 'front-widget',
     'before_widget' => '<div class="widget-container2">',
     'after_widget' => '</div>',
     'before_title' => '<h3 class="lsf-icon" title="list">',
     'after_title' => '</h3>',
) );




// アイキャッチ画像
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(100, 100, true ); // 幅 220px、高さ 165px、切り抜きモード

// カスタムナビゲーションメニュー
add_theme_support('menus');


register_nav_menus(
	array(
		'place_global'=>'グルーバル',
		'place_utility'=>'ユーティリティ',
	)
);

add_image_size( 'large-smartphone', 520);
add_image_size( 'large', 1440);
add_image_size( 'large', 960);
add_image_size( 'medium', 720);
add_image_size( 'small', 360);

function remove_hwstring_from_image_tag( $html, $id, $caption, $title, $align, $url, $size ) {
    list( $img_src, $width, $height ) = image_downsize($id, $size);
    $hwstring = image_hwstring( $width, $height );
    $html = str_replace( $hwstring, '', $html );
    return $html;
}
add_filter( 'image_send_to_editor', 'remove_hwstring_from_image_tag', 10, 7 );

function custom_wp_link_pages() {

$defaults = array(
 'before' => '<div class="pagesprit"><div class="page-numbers">',
 'after' => '</div>',
 'link_before' => '',
 'link_after' => '',
 'next_or_number' => 'number',
 'separator' => ' ',
 'nextpagelink' => __( 'Next page' ),
 'previouspagelink' => __( 'Previous page' ),
 'pagelink' => '<span class="numbers">%</span>',
 'echo' => 1
 );
 return $defaults;
}
add_filter( 'wp_link_pages_args', 'custom_wp_link_pages');
?>