<?php

include_once 'db.php';

$name = $_POST["spaceName"];
$location = $_POST["location"];
$width = $_POST["width"];
$length = $_POST["length"]; 

$payment_method = $_POST["paymentMethod"];
$description = $_POST["description"];

$fileName = $_FILES['spaceImage']['name'];
$fileTmpName = $_FILES['spaceImage']['tmp_name'];
$fileExt = explode('.', $fileName);
$fileActualExt = strtolower(end($fileExt));
$allowed = array('jpg', 'jpeg', 'png', 'gif');

if (in_array($fileActualExt, $allowed)) {
    $fileNameNew = $fileName;
    $filesDestination = '../assets/images/' . $fileNameNew;

    move_uploaded_file($fileTmpName, $filesDestination);
    $image = "$fileNameNew";
} else {
    echo "Invalid File";
    exit;
}

$sql = "INSERT INTO tbl_space(name, location, width, length, paymentMethod, description, image) VALUES(?, ?, ?, ?, ?, ?, ?)";
$db->process_db($sql, [$name, $location, $width, $length, $payment_method, $description, $fileNameNew], false);

$id = $db->insert_id();


if(isset($_POST["rates"])){
  $rate_type = $_POST["rates"];
  $rate_amount = $_POST["rateAmount"];
  $rate_time = $_POST["timeAllowance"];

  $index = 0;
  foreach($rate_type as $type){
    $db->process_db("INSERT INTO tbl_rates(space_id, type, amount, time_allowance) VALUES(?, ?, ?, ?)", 
    [$id, $type, $rate_amount[$index], isset($rate_time[$index]) ? $rate_time[$index] : null], false, );
    $index++;
  }
}

if (isset($_POST["spaces"])) {
  $spaces = $_POST["spaces"];

  foreach($spaces as $space){
    switch($space){
      case "A":
        $db->process_db("INSERT INTO tbl_spaces_available(space_id, type, count) VALUES(?, ?, ?)", [$id, $space, $_POST["a_totalSpace"]], false);
        break;
      case "A1":
        $db->process_db("INSERT INTO tbl_spaces_available(space_id, type, count) VALUES(?, ?, ?)", [$id, $space, $_POST["a1_totalSpace"]], false);
        break;
      case "B":
        $db->process_db("INSERT INTO tbl_spaces_available(space_id, type, count) VALUES(?, ?, ?)", [$id, $space, $_POST["b_totalSpace"]], false);
        break;
      case "B1":
        $db->process_db("INSERT INTO tbl_spaces_available(space_id, type, count) VALUES(?, ?, ?)", [$id, $space, $_POST["b1_totalSpace"]], false);
        break;
      case "C":
        $db->process_db("INSERT INTO tbl_spaces_available(space_id, type, count) VALUES(?, ?, ?)", [$id, $space, $_POST["c_totalSpace"]], false);
        break;
      case "C1":
        $db->process_db("INSERT INTO tbl_spaces_available(space_id, type, count) VALUES(?, ?, ?)", [$id, $space, $_POST["c1_totalSpace"]], false);
        break;
      case "D":
        $db->process_db("INSERT INTO tbl_spaces_available(space_id, type, count) VALUES(?, ?, ?)", [$id, $space, $_POST["d_totalSpace"]], false);
        break;
      case "D1":
        $db->process_db("INSERT INTO tbl_spaces_available(space_id, type, count) VALUES(?, ?, ?)", [$id, $space, $_POST["d1_totalSpace"]], false);
        break;
      case "E":
        $db->process_db("INSERT INTO tbl_spaces_available(space_id, type, count) VALUES(?, ?, ?)", [$id, $space, $_POST["e_totalSpace"]], false);
        break;
    }
  }
}

header("Location: ../privatespace.php?action=success");

