<?php
include "env.php";


class db{
    public $connnection;
    public $query;
    public $sql;

    public function __construct()
    {
        $this->connnection = mysqli_connect(SERVER,USER,PASS,DBNAME);
    }

    public function select($table,$column){
        $this->sql = "SELECT $column FROM `$table` ";
        return $this;
    }

    public function where($column,$compair,$value){
        $this->sql .= " WHERE `$column` $compair '$value'";
        return $this;
    }

    public function andWhere($column,$compair,$value){
        $this->sql .= " AND  `$column` $compair '$value'";
        return $this;
    }

    public function orWhere($column,$compair,$value){
        $this->sql .= " OR  `$column` $compair '$value'";
        return $this;
    }

    public function getAll(){
        // echo $this->sql;die;
        $this->query =  mysqli_query($this->connnection,$this->sql);
        while($row = mysqli_fetch_assoc($this->query)){
            $data[] = $row;
        }
        return $data;
    }

    public function getRow(){
        $this->query =  mysqli_query($this->connnection,$this->sql);
        $row = mysqli_fetch_assoc($this->query);
        return $row;
    }

    public function insert($table,$data){
        $columns = "";
        $values = "";
        foreach($data as $key => $value){
            $columns .= " `$key` ,";
            $values .= " '$value' ,";
        }
        $columns = rtrim($columns,",");
        $values = rtrim($values,",");

        $this->sql = "INSERT INTO `$table` ($columns) VALUES ($values)";
        return $this;
    }


    public function excu(){
        $this->query = mysqli_query($this->connnection,$this->sql);
        if(mysqli_affected_rows($this->connnection) > 0){
            return true;
        }else{
            return false;
        }
    }
}