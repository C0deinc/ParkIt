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
        if(isset($POST['gender']) && !empty($POST['gender'])){
            return true; // At least one radio button is selected
        } else {
            return false; // No radio button is selected
        }
    }

    function validate_contact($contact){
        // Remove any non-numeric characters from the input
        $clean_contact = preg_replace("/[^0-9]/", "", $contact);
        
        // Validate if the cleaned input contains only digits and has a specific length requirement
        if(strlen($clean_contact) >= 10 && strlen($clean_contact) <= 15 && ctype_digit($clean_contact)){
            return true; // Valid contact number
        } else {
            return false; // Invalid contact number
        }
    }

    function validate_email($email){
        // Check if the 'email' key exists in the $_POST array
        if (isset($email)) {
            $email = trim($email); // Trim whitespace
            // Check if the email is not empty
            if (empty($email)) {
                return 'Email is required';
            } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                // Check if the email has a valid format
                return 'Email is invalid format';
            } else {
                return 'success';
            }
        } else {
            return 'Email is required'; // 'email' key doesn't exist in $_POST
        }
    } 
    
    function validate_password($password) {
        $password = htmlentities($password);
        
        if (strlen(trim($password)) < 1) {
            return "Password cannot be empty";
        } elseif (strlen($password) < 8) {
            return "Password must be at least 8 characters long";
        } else {
            return "success"; // Indicates successful validation
        }
    }    

    function validate_cpw($password, $cpassword){
        $pw = htmlentities($password);
        $cpw = htmlentities($cpassword);
        if(strcmp($pw, $cpw) == 0){
            return true;
        }else{
            return false;
        }
    }


?>