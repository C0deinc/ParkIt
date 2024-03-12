<?php
     
    function validate_field($field){
        $field = htmlentities($field);
        if(strlen(trim($field))<1){
            return false;
        }else{
            return true;
        }
    }

    function validate_radio($POST){
        if(isset($POST['sex']) && !empty($POST['sex'])){
            return true; // At least one radio button is selected
        } else {
            return false; // No radio button is selected
        }
    }

    function validate_radio1($POST){
        if(isset($POST['accountverification']) && !empty($POST['accountverification'])){
            return true; // At least one radio button is selected
        } else {
            return false; // No radio button is selected
        }
    }

    function validate_contact($contactnumber){
        // Remove any non-numeric characters from the input
        $clean_contact = preg_replace("/[^0-9]/", "", $contactnumber);
        
        // Validate if the cleaned input contains only digits and has a specific length requirement
        if(strlen($clean_contact) >= 10 && strlen($clean_contact) <= 15 && ctype_digit($clean_contact)){
            return true; // Valid contact number
        } else {
            return false; // Invalid contact number
        }
    }

    function validate_email($email){
        // Basic validation using filter_var
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }   

    function validate_password($password) {
        $password = htmlentities($password);
        
        if (strlen(trim($password)) < 1) {
            return "Password cannot be empty.";
        } elseif (strlen($password) < 8) {
            return "Password must be at least 8 characters long.";
        } else {
            return "success"; // Indicates successful validation
        }
    }    

    function validate_cpw($password, $confirmpassword){
        $pw = htmlentities($password);
        $cpw = htmlentities($confirmpassword);
        if(strcmp($pw, $cpw) == 0){
            return true;
        }else{
            return false;
        }
    }

?>