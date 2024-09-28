<?php
require_once 'database.php';

class Verification {

    public $id;
    public $phonenumber;
    public $email;

    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    function show(){
        $sql = "SELECT email OR phonenumber FROM account WHERE id=:id;";
        $query=$this->db->connect()->prepare($sql);
        $data = null;
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
  
}

?>
