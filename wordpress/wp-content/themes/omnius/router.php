<?php
if($_GET['p']){
    $om_get = $_GET['p'];
}
else{
    $om_get = 'm';
}

$om_pages['m'] = 'main.php';
$om_pages['i'] = 'intro.php';

include_once(get_template_directory()."/".$om_pages[$om_get]);

?>