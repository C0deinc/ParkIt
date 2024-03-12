<?php

$con = mysqli_connect('localhost','root','','library');


// Check connection
if (!$con) {
    die(mysqli_error("Error"+$con));
}
  
?>