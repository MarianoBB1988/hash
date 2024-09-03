<?php
$hash= $_POST['password'];
$hashedPassword = password_hash($hash, PASSWORD_BCRYPT);
echo $hashedPassword;
?>