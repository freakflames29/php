<?php
require_once "header.php";
?>
<div>
    <?php
    if (isset($_SESSION['sid'])) {
        echo "<h1>You are logged in </h1>";
    } else {
        echo "<h1>You are <span id='not' style='color: red'>NOT</span> logged in</h1>";
    }

    ?>
</div>
<?php
require_once "footer.php";
?>