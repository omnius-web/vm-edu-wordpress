<?php

$path = $_SERVER['DOCUMENT_ROOT'];

define( 'WP_USE_THEMES', false );

/** Loads the WordPress Environment and Template */
require $path . '/wordpress/wp-blog-header.php';
// echo __DIR__;
//include_once $path . '/wordpress/wp-load.php';


if(have_posts()){
    while(have_posts()){
        the_post();
        the_content();

    }
}

$omlogin = array(
    'user_login' => 'admin',
    'user_password' => 'omnius12',
    'remember' => true
);
//wp_signon($omlogin);






/*
require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
global $wpdb;
$tablename = "myTable"; 
$main_sql_create = "(wr1 varchar(255), wr2 int)";
maybe_create_table( $wpdb->prefix . $tablename, $main_sql_create );
*/
/*

// $test = $wpdb->get_results('show tables');
// var_dump($test);

$test = $wpdb->get_results('select * from wp_test');
// var_dump($test);

$html = '
    <form method="post" action="'.esc_url( admin_url( 'admin-post.php' ) ).'" enctype="multipart/form-data">
        <input type="text" name="wr1">
        <input type="text" name="wr2">
        <input type="file" name="file">
        <input type="file" name="file2">
        <input type="hidden" name="action" value="omnius_post">'.
        wp_nonce_field( 'omnius_post', 'omnius_post_field' )
        .'<input type="submit" value="submit">
    </form>
    ';


echo $html;

*/

    ?>