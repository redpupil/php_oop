<?php
    session_start();

    echo 'Welcome '.$_SESSION['username']. '. You are '.$_SESSION['age'];

?>