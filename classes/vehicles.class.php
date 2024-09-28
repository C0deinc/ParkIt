<?php

require_once 'database.php';

Class Vehicle{
    //attributes

    public $id;
    public $account_ID;
    public $vehicletype;
    public $platenumber;
    public $model;
    public $engine;
    public $transmission;
    public $exterior;
    public $bodystyle;
    public $seating;
    public $interior;


    protected $db;

    function __construct()
    {
        $this->db = new Database();
    }

    //Methods

    function add(){
        $sql = "INSERT INTO vehicle (account_ID, vehicletype, platenumber, model, engine, transmission, exterior, bodystyle, seating, interior) VALUES 
        (:account_ID, :vehicletype, :platenumber, :model, :engine, :transmission, :exterior, :bodystyle, :seating, :interior);";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':account_ID', $this->account_ID);
        $query->bindParam(':vehicletype', $this->vehicletype);
        $query->bindParam(':platenumber', $this->platenumber);
        $query->bindParam(':model', $this->model);
        $query->bindParam(':engine', $this->engine);
        $query->bindParam(':transmission', $this->transmission);
        $query->bindParam(':exterior', $this->exterior);
        $query->bindParam(':bodystyle', $this->bodystyle);
        $query->bindParam(':seating', $this->seating);
        $query->bindParam(':interior', $this->interior);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function edit(){
        $sql = "UPDATE vehicle SET vehicletype:vehicletype, platenumber:platenumber, model:model, engine:engine, transmission:transmission, exterior:exterior, bodystyle:bodystyle, seating:seating, interior:interior WHERE id = :id;";

        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':vehicletype', $this->vehicletype);
        $query->bindParam(':platenumber', $this->platenumber);
        $query->bindParam(':model', $this->model);
        $query->bindParam(':engine', $this->engine);
        $query->bindParam(':transmission', $this->transmission);
        $query->bindParam(':exterior', $this->exterior);
        $query->bindParam(':bodystyle', $this->bodystyle);
        $query->bindParam(':seating', $this->seating);
        $query->bindParam(':interior', $this->interior);
        $query->bindParam(':id', $this->id);
        
        if($query->execute()){
            return true;
        }
        else{
            return false;
        }	
    }

    function fetch($record_id){
        $sql = "SELECT * FROM vehicle WHERE id = :id;";
        $query=$this->db->connect()->prepare($sql);
        $query->bindParam(':id', $record_id);
        if($query->execute()){
            $data = $query->fetch();
        }
        return $data;
    }

    function show(){
        $sql = "SELECT * FROM vehicle ORDER BY id ASC;";
        $query=$this->db->connect()->prepare($sql);
        $data = null;
        if($query->execute()){
            $data = $query->fetchAll();
        }
        return $data;
    }
}

?>