<?php

// setcookie("name","value","time in second","path(by default it ita root path (/) ","domain","security")
$time=time()+86400*30;
setcookie("name","Sourav",$time);
print_r($_COOKIE);
echo "<br/>";
echo $_COOKIE["name"];









?>