<?php

require_once("../Database/connection.php");
class BaseModel{
    protected $conn;
    public function __construct() {
        $this->conn = (new DatabaseConnection())->getPdo();
    }
}
