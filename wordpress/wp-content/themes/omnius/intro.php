<?php
echo "the page is intro.";

?>
<br>
<?php
$test = $wpdb->get_results('show tables');
//var_dump($test);
//echo $test[0]->Tables_in_wordpress;
 ?>


<?php
foreach ($test as $key) {
    echo $key->Tables_in_wordpress;
    echo "<br>";
}
?>