<?php
session_start();
?>
<?php
if (isset($_SESSION['id'])) {
    echo '<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>
    <div id="ce" align="center">

       <h1>Welcome ';
    }
else
{
    header("location:login.php");
}
?>
<?php echo $_SESSION['user'];
echo '</h1>
        <p><a href="logout.php">Logout</a></p>

    </div>

</body>
</html>';
?>