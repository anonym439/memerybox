<?php

$total=$_GET["key3"]*$_GET["key4"];
echo "<font size=\"5\" color=\"green\">Welcome ".$_GET['key1']."</font><br>";
echo "<font size=\"5\" color=\"green\">Your product is ".$_GET['key2']. "</font><br>";
echo "<font size=\"5\" color=\"green\">Your amount is ".$_GET["key4"]. "</font><br>";
echo "<font size=\"5\" color=\"green\">Your price is ".$_GET["key3"]. "</font><br>";
echo "<font size=\"5\" color=\"green\">Your total price = ".$total."</font><br>";
echo "<input type=\"button\" value=\"check\" onclick=\"check()\">";

?>
