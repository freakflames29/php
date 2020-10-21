<?php
    $username=$_POST["user"];
    $pass=$_POST["pass"];
    if (isset($username)||isset($pass)!=="") {
        echo "your username: " . $username . "\n";
    }
    else
    {
        echo "you  haven't username","\n";
    }
    echo "your password: ".$pass."\n";
?>
