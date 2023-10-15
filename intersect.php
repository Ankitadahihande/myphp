<?php
$name1=array("Ankita","Deepa","Ambika","Priya");
$name2=array("Ankita","Deepa","vabhi","Apurva");
$name3=array("Ankita","methi","mundi","deepi");
$name4=array_intersect($name1,$name2,$name3);
foreach($name4 as $n){
    echo"$n<br/>";
}
?>