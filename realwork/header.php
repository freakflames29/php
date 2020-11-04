<?php
session_start();
require_once "database.php";
// require "increg.php";
// $bol=false;
?>
<!DOCTYPE html>
<?php
if (isset($_SESSION["sid"])) {
    echo '<html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <title>Login in my website</title>
                        <link rel="stylesheet" href="style.css">
                    </head>
                    
                    <body>
                        <header>
                            <nav>
                                <ul>
                    
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="logout.php">Logout</a></li>
                                    
                                </ul>
                            </nav>
                    
                        </header>';
} else {

    echo '<html lang="en">

                    <head>
                        <meta charset="UTF-8">
                        <title>Login in my website</title>
                        <link rel="stylesheet" href="style.css">
                    </head>
                    
                    <body>
                        <header>
                            <nav>
                                <ul>
                    
                                    <li><a href="index.php">Home</a></li>
                                    <li><a href="log.php">Login</a></li>
                                    <li><a href="register.php">Register</a></li>
                                </ul>
                            </nav>
                    
                        </header>';
}


?>