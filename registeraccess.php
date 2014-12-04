<?php

session_start();
$v1 = $_SESSION['lastname'];
echo 'Hello' . ' ' . $v1 . ' ' . 'You have successfully made your registration';
?>
