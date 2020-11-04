<?php

if (isset($_POST['submit'])) {
    // connecting to database
    require "database.php";
    // grabbing user input
    $username = $_POST['username'];
    $password = $_POST['password'];

    // preparing sql to check username exists or not
    $sql = "SELECT * FROM users WHERE username=?";
    $stmt = mysqli_stmt_init($con);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location:log.php?SQLERROR");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        if ($row = mysqli_fetch_assoc($result)) {
            $pascheck = password_verify($password, $row['password']);
            if ($pascheck == false) {
                header("Location:log.php?PasswordNotMatching");
                exit();
            } elseif ($pascheck == true) {
                session_start();
                $_SESSION['SessionID'] = $row['id'];
                $_SESSION['SessionUsername'] = $row['username'];
                header("Location:index.php?SuccesfullyLoggedin");
                exit();
            } else {
                header("Location:log.php?PasswordNotMatching");
                exit();
            }
        } else {
            header("Location:log.php?NoUser");
            exit();
        }
    }
} else {
    header("Location:log.php?AccessForbiden");
    exit();
}
