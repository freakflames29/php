<?php
session_start();
$_SESSION["name"]="Sourav";
$_SESSION["age"]=18;

echo "hello your name is "."<b>".$_SESSION["name"]."</b>"." age "."<b>".$_SESSION["age"]."<b/>";
session_destroy();


?>