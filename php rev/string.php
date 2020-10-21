<?php
$a="Rule no 1 Cardio";
$n=array(1,"Rule","of","magic","always be the smartest guy in the room");
//echo $a."<br/>";
//explode convert a string into an array
//print_r( chop($a,"Cardio"));
$bc=(explode(" ",$a));
//print_r ($bc);
//echo "<br/>";
//implode convert a array into a string
//echo implode(" ",$n);
//$str='';
//foreach ($n as $val)
//{
//    $str.=$val." ";
//
//}
//echo $str;
//date in php
//echo "Today is : ".date("l")."<br/>";
// echo "Today is date is  : ".date("d/m/y")." and day is :".date("l");
echo srand(mktime());
echo rand(100,1);


?>


