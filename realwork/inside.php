<?php
if (isset($_POST['submit']))
{
    require "database.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
//    preparing sql statement
    $sql="SELECT * FROM users WHERE username=?";
    $stmt=mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt,$sql))
    {
        header("location:log.php?SQLERROR");
        exit();
    }
    else
    {
        mysqli_stmt_bind_param($stmt,"s",$username);
        mysqli_stmt_execute($stmt);
        $res=mysqli_stmt_get_result($stmt);
        if ($row=mysqli_fetch_assoc($res))
        {
//            checking password
            $passcheck=password_verify($password,$row['password']);
            if ($passcheck==false)
            {
                header("location:log.php?passwordNOTmatching");
                exit();
            }
            elseif ($passcheck==true)
            {
                    session_start();
                    $_SESSION['sid']=$row['id'];
                    $_SESSION['uname']=$row['username'];
                    header('location:index.php');
                    exit();
            }
            else
            {
                header("location:log.php?passwordNOTmatching");
                exit();
            }
        }
        else
        {
            header("location:log.php?nouser");
            exit();

        }
    }
}

else
{
    header("location:log.php");
    exit();
}