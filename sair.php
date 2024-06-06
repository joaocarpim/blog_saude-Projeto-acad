<?php
    session_start();
    unset($_SEESSION['email']);
    unset($_SEESSION['senha']);
    header("Location: ./login/index.php");
?>