<?php
if($_POST){
  echo $_POST['wr1'];
}
else{
  echo "nonono";
}
?>
<form class="" action="hack_test.php" method="post">
  <input type="hidden" name="wr1" value="test">
  <input type="submit" name="" value="bt">
</form>
