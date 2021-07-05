<?php
session_start();
session_unset();
session_destroy();
setcookie('emailcoockie','',time()-86400*7);
setcookie('passcoockie','',time()-86400*7);
header('Location:login-page.php');
?>