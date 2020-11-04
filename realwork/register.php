<?php
require_once "header.php";
?>
<?php
if (isset($_SESSION['sid'])) {
    header("Location:index.php?NotAccessable");
    exit();
} else {

    echo '<div>
    <h1>Register</h1>
    <p>Already have a account?<a href="log.php">Login</a></p>
    <form action="increg.php" method="post">
        <input type="text" placeholder="Username" name="username" required>
        <input type="password" placeholder="Password" id="fps" name="password" required>
        <input type="password" placeholder="Confirm Password" id="secps" name="confirm" required>
      
        <button type="submit" id="reg" name="submit">Register</button>
    </form>
    </div>';
}

?>

<?php
//  require "increg.php";
require_once "footer.php";
?>
