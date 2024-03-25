<?php

include_once 'database.php';

$companyname = $_POST["companyname"];
$barangay = $_POST["barangay"];
$city = $_POST["city"];
$province = $_POST["province"];
$zipcode = $_POST["zipcode"];
$contactnumber = $_POST["contactnumber"];
$email = $_POST["email"];
$contactpersonname = $_POST["contactpersonname"];
$contactpersonposition = $_POST["contactpersonposition"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"]; 

$sql = "INSERT INTO account(companyname, barangay, city, province, zipcode, contactnumber, email, contactpersonname, contactpersonposition, password, confirmpassword) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$db->process_db($sql, [$companyname, $barangay, $city, $province, $zipcode, $contactnumber, $email, $contactpersonname, $contactpersonposition, $password, $confirmpassword], false);


$id = $db->insert_id();

if(isset($_POST["vehicletype"])){
    $vehicletype = $_POST["vehicletype"];
    $platenumber = $_POST["platenumber"];
    $model = $_POST["model"];
    $color = $_POST["color"];
    


    // Insert data into the database
    $index = 0;
    foreach($vehicletype as $type){
        
        $db->process_db("INSERT INTO vehicle(account_id, vehicletype, platenumber, model, color) VALUES(?, ?, ?, ?, ?)", 
            [$id, $vehicletype[$index], $platenumber[$index], $model[$index], $color[$index]]);
        $index++;
    }
}

// Decode the base64-encoded image data
$imageData = str_replace('data:image/png;base64,', '', $imageData);
$imageData = str_replace(' ', '+', $imageData);
$imageData = base64_decode($imageData);

// Prepare SQL statement
$sql = "UPDATE account set idverification=$imageData WHERE id = $id;";

header("Location: ../accountverification.php?action=success");
?>