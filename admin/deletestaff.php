<?php
include 'connect.php';
if(isset($_GET['id'])){
    $del_id = $_GET['id'];
    $delete = mysqli_query($con,"DELETE FROM staff WHERE id = $del_id");
    echo "<script>alert('Delete Record');window.location.href='staff.php'</script>";
}
?>