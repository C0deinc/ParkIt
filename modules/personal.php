<?php

include_once 'database.php';

$firstname = $_POST["firstname"];
$middlename = $_POST["middlename"];
$lastname = $_POST["lastname"];
$birthday = $_POST["birthday"];
$sex = $_POST["sex"];
$barangay = $_POST["barangay"];
$city = $_POST["city"];
$province = $_POST["province"];
$zipcode = $_POST["zipcode"];
$contactnumber = $_POST["contactnumber"];
$email = $_POST["email"];
$username = $_POST["username"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirmpassword"]; 

$sql = "INSERT INTO account(firstname, middlename, lastname, birthday, sex, barangay, city, province, zipcode, contactnumber, email, username, password, confirmpassword) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$db->process_db($sql, [$firstname, $middlename, $lastname, $birthday, $sex, $barangay, $city, $province, $zipcode, $contactnumber, $email, $username, $password, $confirmpassword], false);


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