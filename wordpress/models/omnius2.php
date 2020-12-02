<?php 
function om_write2(){
    $html = '
    test
    ';
    // $test = get_user_by('id',1);
    // $test = get_user_by('login','admin');
    // // echo $test->user_login;
    // // var_dump($test);
    // $passrst = wp_check_password('1234',$test->user_pass,$test->ID);
    // var_dump($passrst);
    return $html;
}
function om_sc_write2(){
    add_shortcode('om_write2','om_write2');
}
add_action('init','om_sc_write2');
/*
여기까지 숏코드 등록을 위한코드
*/





?>