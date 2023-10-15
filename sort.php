<html>
<b<!DOCTYPE html>
<body>
<?php
$names = array("Ankita", "Deepa", "Priyanka");
sort($names);
$clength = count($names);
for($x=0; $x<$clength; $x++) {
  echo $names[$x];
  echo "<br>";
}
?>
</body>
</html>
