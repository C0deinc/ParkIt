
<?php
if(isset($_POST['submit']))

$email =  $_POST['email'];
$email = filter_var($email, FILTER_SANITIZE_STRING);
$password = md5($_POST['password']);



?>