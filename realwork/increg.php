<?php
$bol = false;
if (isset($_POST['submit'])) {
    // connecting to database
    require "database.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirmps = $_POST['confirm'];
    if (empty($username) || empty($password) || empty($confirmps)) {
        header("Location:register.php?error=field_is_empty");
        exit();
    } elseif (!preg_match("/^[a-zA-Z0-9]*/", $username)) {
        header("Location:register.php?error=invalidUsername.$username");
        exit();
    } elseif ($password !== $confirmps) {
        header("Location:register.php?error=passwordnotmatching");
        // $bol=true;
        exit();
    } else {
        $sql = "SELECT username FROM users WHERE username=?";
        $stmt = mysqli_stmt_init($con);
        if (!mysqli_stmt_prepare($stmt, $sql)) {

            header("Location:register.php?error=sqlerror");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "s", $username);
            mysqli_stmt_execute($stmt); //to execute the statement
            mysqli_stmt_store_result($stmt);
            $rowcount = mysqli_stmt_num_rows($stmt);
            if ($rowcount > 0) {

                header("Location:register.php?error=usernameExists");
                exit();
            } else {
                $sql = "INSERT INTO users(username,password) VALUES(?,?)";
                $stmt = mysqli_stmt_init($con);
                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    header("Location:register.php?error=SQLERROR");
                    exit();
                } else {
                    $hashpass = password_hash($password, PASSWORD_DEFAULT);
                    mysqli_stmt_bind_param($stmt, "ss", $username, $hashpass);
                    mysqli_stmt_execute($stmt); //to execute the statement
                    //                    mysqli_stmt_store_result($stmt); to fetch information from db
                    header("Location:register.php?success=registered");
                    exit();
                }
            }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($con);
} else {
    header("Location:register.php");
}
