<?php

    require_once ('config.php');

    $username = $_SESSION['username'];
    session_destroy();

    echo "{$username}，再见了您呐！";
    echo '<script>setTimeout("location.href=\'login.php\'",2000);</script>';

?>


