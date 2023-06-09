
<?php
$counter = $_COOKIE['cookie'] ?: 0;
$counter++;
setcookie("cookie", $counter, time()+3600);
echo $counter;
?>

