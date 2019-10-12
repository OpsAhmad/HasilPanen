<?php 

session_start();
session_unset();
session_destroy();

setcookie('id','');
setcookie('username','');

header("Location: wellcome.php");
exit;


?>