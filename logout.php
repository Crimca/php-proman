<?php
session_start();

unset($_session['authenticated_user']);

header('Location: login.php');
exit;
?>