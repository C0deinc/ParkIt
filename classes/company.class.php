<?php

require_once 'database.php';

    Class Company{
        //attributes

        public $id;
        public $companyname;
        public $barangay;
        public $city;
        public $province;
        public $zipcode;
        public $contactnumber;
        public $email;
        public $contactpersonname;
        public $contactpersonposition;
        public $password;
        public $confirmpassword;


        protected $db;

        function __construct()
        {
            $this->db = new Database();
        }

        //Methods

        function add(){
            $sql = "INSERT INTO account (companyname, barangay, city, province, zipcode, contactnumber, email, contactpersonname, contactpersonposition, password, confirmpassword) VALUES 
            (:companyname, :barangay, :city, :province, :zipcode, :contactnumber, :email, :contactpersonname, :contactpersonposition, :password, :confirmpassword);";

            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':companyname', $this->companyname);
            $query->bindParam(':barangay', $this->barangay);
            $query->bindParam(':city', $this->city);
            $query->bindParam(':province', $this->province);
            $query->bindParam(':zipcode', $this->zipcode);
            $query->bindParam(':contactnumber', $this->contactnumber);
            $query->bindParam(':email', $this->email);
            $query->bindParam(':contactpersonname', $this->contactpersonname);
            $query->bindParam(':contactpersonposition', $this->contactpersonposition);
            // Hash the password securely using password_hash
            $hashedPassword = password_hash($this->password, PASSWORD_DEFAULT);
            $query->bindParam(':password', $hashedPassword);
            // Hash the password securely using password_hash
            $hashedConfirmPassword = password_hash($this->confirmpassword, PASSWORD_DEFAULT);
            $query->bindParam(':confirmpassword', $hashedConfirmPassword);
            
            if($query->execute()){
                return true;
            }
            else{
                return false;
            }	
        }

        function is_email_exist(){
            $sql = "SELECT * FROM account WHERE email = :email;";
            $query=$this->db->connect()->prepare($sql);
            $query->bindParam(':email', $this->username);
            if($query->execute()){
                if($query->rowCount()>0){
                    return true;
                }
            }
            return false;
        }
    }

?>