<?php

    if(!function_exists("protect")) {

        function protect() {

            if(!isset($_SESSION))
                session_start();

            if(!isset($_SESSION['email']) || !is_numeric($_SESSION['email'])){
                header("Location: ../editor/protecao.php");
            }
        }
    }

?>