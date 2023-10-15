<?php
$java=90;
$python=70;
$php=50;
$collegemarks=30;
$oral=25;
 $java=$java+$collegemarks;
 $python=$python+$collegemarks;
 $php=$php+$oral;
 $marks=$java+$python+$php;
 echo "java marks :".$java."<br>\n";
 echo "python marks:".$python."<br>\n";
 echo "php marks:".$php."<br>\n";
 echo"----------------------<br>";
 echo "Total marks=".$marks."\n";
 ?>