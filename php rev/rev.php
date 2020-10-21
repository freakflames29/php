<?php //require 'in.php';
//arrays and for loop and foreach loop
$movie=array("Zombieland"=>"Jessie","Now you see me"=>"jack wilder","Deadpool"=>"wilson");
$keys=array_keys($movie);
//echo "By for","\n";
for($i=0;$i<count($keys);$i++)
{
    echo $movie[$keys[$i]],"\n";




}
echo "By forEach","\n";


foreach ($movie as $key=>$data)
{
    echo  $data,"\n";
}


//if else and elseif
$var=20;
if($var>=50)
{
    echo "wow it is too big","\n";
}
elseif($var==20)
{
    echo "yeh to same hai";
}
else
{
    echo "idk";
}


//predefined variables in php
?>



