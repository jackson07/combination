<?php

session_start();
unset($_SESSION['usuario']);
session_destroy();


echo "<script type='text/javascript'>"
        ."location.href='../../index.html';"
        ."</script>";