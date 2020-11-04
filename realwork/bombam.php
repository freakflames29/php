<?php
require_once "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Database connection</title>
</head>
<body>
<?php
//require "database.php";
$sql="SELECT * FROM users";
$result=mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
if ($rows>0)
{
    while ($res=mysqli_fetch_assoc($result))
    {
        echo $res["username"]."<br>";
    }
}
else
{
    echo "no data found";
}
?>
</body>
</html>