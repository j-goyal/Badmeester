<?php
        session_start();

        session_unset();
        session_destroy();

        header("location: /capstone/index.php?logged=true");


        exit;

?>