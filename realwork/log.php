<?php
require_once "header.php";
?>
<?php
if (isset($_SESSION['sid'])) {
    header("Location:index.php?NotAccessable");
    exit();
} else {
    echo '<div>
    <h1>Login</h1>
    <p>Do not  have a account?<a href="register.php">Register here</a></p>
    <form action="inside.php" method="post">
        <input type="text" placeholder="Username" name="username" required>
        <input type="password" placeholder="Password" name="password" required>
        <button type="submit" name="submit">Login</button>
    </form>
</div>';
}

?>

<?php
require_once "footer.php";
?>